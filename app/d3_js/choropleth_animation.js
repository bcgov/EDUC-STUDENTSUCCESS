//margin
let margin = {
    top: 50,
    bottom: 50,
    left: 100,
    right: 100
}

let ani_width = 600 - margin.left - margin.right;
let ani_height = 400 - margin.top - margin.bottom;

//format int val
let format = d3.format(",.0f");

//the data object here is used to load different year's data
let data = {};

//define the projection expressions
let projection1 = d3.geoAlbers()
    .rotate([122, 0, 0])
    .scale(1800)
    .translate([ani_width * 0.97, ani_height * 2.28]);

let projection_LM = d3.geoAlbers()
    .rotate([122, 0, 0])
    .scale(6500)
    .translate([ani_width * 0.2, ani_height * 5.15]);

let projection_SVI = d3.geoAlbers()
    .rotate([122, 0, 0])
    .scale(6000)
    .translate([ani_width * 0.5, ani_height * 4.26]);


//Define path generators
let ani_path = d3.geoPath()
    .projection(projection1);

let ani_path_lm = d3.geoPath()
    .projection(projection_LM);

let ani_path_svi = d3.geoPath()
    .projection(projection_SVI);

//Create SVG element for map
let svg_map = d3.select("#animationMap")
    .append("svg")
    .attr("preserveAspectRatio", "xMinYMin meet")  // This forces uniform scaling for both the x and y, aligning the midpoint of the SVG object with the midpoint of the container element.
    .attr("viewBox", "0 0 600 400") //defines the aspect ratio, the inner scaling of object lengths and coordinates
    .attr('class', 'svg-content');


//chart groups
let mapGroup = svg_map.append('g')
    .attr('class', 'mainMap');

let mapGroup_lm = svg_map.append('g')
    .attr('class', 'lmMap');

let mapGroup_svi = svg_map.append('g')
    .attr('class', 'sviMap');

//initialize html animation_tooltip
let animation_tooltip = d3.select("#aniContainer")
    .append("div")
    .attr("id", "ani_tt")
    .style("z-index", "10")
    .style("position", "absolute")
    .style("visibility", "hidden");


//Continuouscolor scale
let colorIn = d3.scaleLinear().range(["#b2ebf2", "#67a9cf"]);
let colorOut = d3.scaleLinear().range(["#ff8f00", "#ffecb3"]);

//legend
let legend = function (g) {
    const w = 120;
    const h = 12;

    g.append("image")
        .attr("width", w)
        .attr("height", h)
        .attr("preserveAspectRatio", "none")
        //image link
        .attr("xlink:href", "../assets/img/choropleth_legend2.png");

    g.append("text")
        .attr("class", "caption")
        .attr("y", -6)
        .attr("fill", "#000")
        .attr("text-anchor", "start")
        .attr("font-weight", "bold")
        .text("Net Migration (FTE)");

    let ticks = ["Inflow", "Outflow"];

    let xscale = d3.scalePoint()
        .domain(ticks)
        .range([0, w]);

    let axis = d3.axisBottom()
        .scale(xscale)
        .ticks(2)
        .tickSize(18);

    g.call(axis)
        .select('.domain').remove(); // removes the overhead line of the axis
    g.selectAll(".tick line").attr('stroke', '#494949');
    g.selectAll(".tick text").attr('fill', '#494949');
}

let legendGroup = svg_map.append('g')
    .attr('class', 'legend')
    .attr('transform', 'translate(460, 40)')
    .call(legend);

//transition animation 
let trans = d3.transition()
    .duration(200);

//update migration map 
function update(year) {
    //d3.csv() in queue, here csv_data is same as the data in d3.csv(xxx,function (data) {})
    let csv_data = data[year];

    //as vancouver is a outlier, +100 helps differentiate differences
    let minMove = d3.min(csv_data, function (d) { return d.total_move_in - d.total_move_out }) + 200;
    let maxMove = d3.max(csv_data, function (d) { return d.total_move_in - d.total_move_out });

    colorIn.domain([0, maxMove]);
    colorOut.domain([minMove, 0]);
    

    d3.json("../assets/geo_json/sd_geo_grouped.json", function (json) {
        loadJson(csv_data, json, mapGroup, ani_path, 'dist-main');
    });

    d3.json("../assets/geo_json/lower_mainland_chilliwack.json", function (json) {
        loadJson(csv_data, json, mapGroup_lm, ani_path_lm, 'dist-lm');
    });

    d3.json("../assets/geo_json/southern_vancouver_island.json", function (json) {
        loadJson(csv_data, json, mapGroup_svi, ani_path_svi, 'dist-svi');
    });

}



//load json and draw map
function loadJson(csv_data, json, map, path, pathClass) {
    console.log('json updated');
    for (var i = 0; i < csv_data.length; i++) {
        var dataDistrict = csv_data[i].District; //district names in csv data

        var tempObj = {}; //crate a temp object

        //for...in statement iterates over all non-Symbol, enumerable properties (columns) of an object(each row)
        for (var propt in csv_data[i]) {
            var valz = parseFloat(csv_data[i][propt]); //parseFloat() parses a string and returns a floating point number
            tempObj[propt] = valz;
        }
        //Find the corresponding district inside the GeoJSON
        for (var j = 0; j < json.features.length; j++) {

            var jsonDistrict = json.features[j].properties.SDNAME; //district names in json file

            if (dataDistrict == jsonDistrict) {

                matched = true; //match flag
                //create new properties and add vals in json
                json.features[j].properties.district = dataDistrict;
                json.features[j].id = dataDistrict;
                json.features[j].abbrev = csv_data[i].Abbrev;
                json.features[j].ind = i;

                //loop all propt in this temp object
                for (var propt in tempObj) {
                    //check if it's a number
                    if (!isNaN(tempObj[propt])) {
                        //add properties&vals to json
                        json.features[j].properties[propt] = tempObj[propt];
                    }

                }
                break;
            }
        }
    }

    //Bind data and create one path per GeoJSON feature
    let districtShape = map.selectAll("." + pathClass)
        .data(json.features);

    let newDistrictShape = districtShape
        .enter()
        .append("path")
        .attr("class", pathClass)
        //add id(district name) to each path (district shape on map)
        .attr("id", function (d) {
            return d.properties.district;
        })
        .attr("d", path) //path here is the geo path generator
        //uses .style to fill path color
        .attr("stroke-width", 0.5);

    // update district shape by merge()
    newDistrictShape.merge(districtShape)
        .transition(trans)
        .style("fill", function (d) {
            /*fill the color based on -/+ net changes*/
            let diff = d.properties.total_move_in - d.properties.total_move_out;
            if (diff > 0) {
                return colorIn(diff);
            } else {
                if(isNaN(diff)) {return '#e6e6e6';} // for lower mainland and southern vancouver island
                return colorOut(diff);
            }
        });

    newDistrictShape.on("mouseenter", function (d) {
        //toolOver is the event handler
        return ani_toolOver(d, this);
    })
        .on("mousemove", function (d) {
            //gets mouse coordinates on screen
            var m = d3.mouse(this);
            mx = m[0];
            my = m[1];

            return ani_toolMove(mx, my, d);
        })
        .on("mouseleave", function (d) {
            return ani_toolOut(d, this);
        });
}

// queue to load the multiple datasets
d3.queue()
    .defer(d3.csv, '../assets/raw_data/sd_going_2018.csv')
    .defer(d3.csv, '../assets/raw_data/sd_going_2017.csv')
    .defer(d3.csv, '../assets/raw_data/sd_going_2016.csv')
    .defer(d3.csv, '../assets/raw_data/sd_going_2015.csv')
    .defer(d3.csv, '../assets/raw_data/sd_going_2014.csv')
    .defer(d3.csv, '../assets/raw_data/sd_going_2013.csv')
    .await(function (error, d2018, d2017, d2016, d2015, d2014, d2013) {
        data['2013'] = d2013;
        data['2014'] = d2014;
        data['2015'] = d2015;
        data['2016'] = d2016;
        data['2017'] = d2017;
        data['2018'] = d2018;
        update(2013);
    });


function ani_toolOver(v, thepath) {
    d3.select(thepath)
        //in v4+ use the "long forms"
        .attr("fill-opacity", "0.5")
        .attr("cursor", "pointer");
    return animation_tooltip.style("visibility", "visible");
};

function ani_toolOut(m, thepath) {
    d3.select(thepath)
        .attr("fill-opacity", "1")
        .attr("cursor", "pointer");
    return animation_tooltip.style("visibility", "hidden");
};


function ani_toolMove(mx, my, data) {

    if (mx < 120) {
        mx = 120
    };

    if (my < 40) {
        my = 40
    };

    if(data.id){
    //create the animation_tooltip, style it and inject info
    return animation_tooltip.style("top", my + - 40 + "px")
        .style("left", mx  + "px")
        .html("<div id='tipContainer'><div id='tipLocation'><b>" + data.id +
            "</b></div><div id='tipKey'>Net migration: <b>" + format((data.properties.total_move_in - data.properties.total_move_out)) +
            "</b></div><div class='tipClear'></div> </div>");
    } else {
        return animation_tooltip.style("top", my + - 40 + "px")
        .style("left", mx  + "px")
        .html("<div id='tipContainer'><div id='tipLocation'><b>See side maps for details</b></div><div class='tipClear'></div> </div>");
    }
};


//slider

//Create SVG element for slider
let svg_slider = d3.select("#slider")
    .append("svg")
    .attr("width", ani_width-100)
    .attr("height", 50);

let sliderGroup = svg_slider.append("g")
    .attr('transform', 'translate(25, 20)');;

let moving = false;
let currentValue = 0;
let targetValue = ani_width-margin.left;

let years = [2013, 2018];
let step = 1;
// array useful for step sliders
let yearValues = d3.range(years[0], years[1], step || 1).concat(years[1]);

let yearText = d3.select('#year')
    .html("<span>Year: 2013</span>");

let playButton = d3.select("#play-pause");

//scales
let xScale = d3.scaleLinear()
    .domain(years)
    .range([0, targetValue-50])
    .clamp(true);


//create track
sliderGroup.append("line")
    .attr("class", "track")
    .attr("x1", xScale.range()[0])
    .attr("x2", xScale.range()[1])
    .select(function () { return this.parentNode.appendChild(this.cloneNode(true)); })
    .attr("class", "track-inset")
    .select(function () { return this.parentNode.appendChild(this.cloneNode(true)); })
    .attr("class", "track-overlay")
    .call(d3.drag()
        .on("start.interrupt", function () { sliderGroup.interrupt(); })
        .on("start drag", function () {
            console.log('dragged');
            currentValue = d3.event.x;
            inputYear(currentValue);
        })
    );

//create track overlay
sliderGroup.insert("g", ".track-overlay")
    .attr("class", "ticks")
    .attr("transform", "translate(0," + 18 + ")")
    .selectAll("text")
    .data(xScale.ticks(6))
    .enter()
    .append("text")
    .attr("x", xScale)
    .attr("y", 10)
    .attr("text-anchor", "middle")
    .text(function (d) { return d; });

//slider handle
let handle = sliderGroup.insert("rect", ".track-overlay")
    .attr("class", "handle")
    .attr('rx', 2)
    .attr('ry', 2)
    .attr('x', -5)
    .attr('y', -10)
    .attr("width", 10)
    .attr("height", 20);

// let label = slider.append("text")
//     .attr("class", "label")
//     .attr("text-anchor", "middle")
//     .text(formatDate(startDate))
//     .attr("transform", "translate(0," + (-25) + ")")

function inputYear(val) {
    console.log(val);

    let x = xScale.invert(val);

    let index = null, midPoint, cx, xVal;
    if (step) {
        // if step has a value, compute the midpoint based on range values and reposition the slider based on the mouse position
        for (var i = 0; i < yearValues.length; i++) {
            if (x >= yearValues[i] && x <= yearValues[i + 1]) {
                index = i;
                break;
            }
        }
        midPoint = (yearValues[index] + yearValues[index + 1]) / 2;
        if (x < midPoint) {
            cx = xScale(yearValues[index]);
            xVal = yearValues[index];
        } else {
            cx = xScale(yearValues[index + 1]);
            xVal = yearValues[index + 1];
        }
    } else {
        // if step is null or 0, return the drag value as is
        cx = xScale(x);
        xVal = x.toFixed(3);
    }

    // update position and text of label according to slider scale
    handle.attr("x", cx - 5);
    yearText.html("<span>Year:  " + xVal + "</span>");
    update(xVal);
}

//play animation
playButton.on('click', function () {
    let btn = d3.select(this);
    if (btn.attr('class') == 'pause') {
        moving = false;
        clearInterval(timer);
        btn.attr('class', 'play');
    } else {
        moving = true;
        //starts from where the slider at
        timer = setInterval(play, 60);
        btn.attr('class', 'pause');
    }

});

//loop back
function play() {
    currentValue = currentValue + (targetValue / 100);
    inputYear(currentValue);
    if (currentValue > targetValue) {
        moving = false;
        currentValue = 0;
        clearInterval(timer);
        // reset after looping
        playButton.attr('class', 'play');
        console.log("Slider moving: " + moving);
    }
}