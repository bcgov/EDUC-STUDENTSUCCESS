//line_margin 
let line_margin = { top: 50, right: 50, bottom: 50, left: 50 };

//height and width
let line_height = 400 - line_margin.top - line_margin.bottom;
let line_width = 600 - line_margin.left - line_margin.right;

let formatC = d3.format(",.0f");
// let formatPercent = d3.format(".0%");

//parseDate is used to covert string into year format from the csv file 
let parseDate = d3.timeParse('%Y');

//scales
let line_xScale = d3.scalePoint().range([0, line_width]).padding(0.5);;


//x1, usedto create the group (grouped bars) elements
// 0.1 is the padding added to offset the band from the edge of the interval
let bar_xScale1 = d3.scaleBand()
    .rangeRound([0, line_width])
    .padding(.2)
    .paddingInner(.2);

//x2, create the smaller elements inside the group
// domain and range will be set later
let bar_xScale2 = d3.scaleBand()
    .padding(0.1);

let line_yScale = d3.scaleLinear()
    .range([line_height, 0]);

let bar_yScale = d3.scaleLinear()
    .range([line_height, 0]);

//color scale
let color_scale = d3.scaleOrdinal()
    .range(['#fde6ba', '#96c0e6', '#ef8a62', '#d8beda']);

let bar_xAxis = d3.axisBottom()
    .scale(bar_xScale1);

let line_yAxis = d3.axisRight()
    .scale(line_yScale);

let bar_yAxis = d3.axisLeft()
    .scale(bar_yScale);


//lines
let growthLine = d3.line()
    .x(function (d) {
        return line_xScale(d.SCHOOL_YEAR);
    })
    .y(function (d) {
        return line_yScale(d.FORECAST_ENROLMENT);
    })
    .curve(d3.curveMonotoneX); //smooth the line


//distirct controls
let targetDistrict = 'SD05';
let defaultPageLoad = true;

//range slider domain
let minYr, maxYr;
//preset year range when start
let yr1 = 2014;
let yr2 = 2019;

//canvas
let line_svg = d3.select('#lineContainer').append('svg')
    .attr("preserveAspectRatio", "xMinYMin meet")  // This forces uniform scaling for both the x and y, aligning the midpoint of the SVG object with the midpoint of the container element.
    .attr("viewBox", "0 0 600 400") //defines the aspect ratio, the inner scaling of object lengths and coordinates
    .attr('class', 'svg-content');

let line_chartGroup = line_svg.append('g')
    .attr('class', 'chartGroup')
    .attr('transform', 'translate(' + line_margin.left + ',' + line_margin.top + ')');


//initialize html tooltip
let tooltip_line = d3.select("#lineContainer")
    .append("div")
    .attr("id", "line_tt")
    .style("z-index", "10")
    .style("position", "absolute")
    .style("visibility", "hidden");



function updateGraph(yr1, yr2) {

d3.csv('../assets/raw_data/predictors.csv', function (error, data) {
    if (error) {
        throw error;
    }

    let districtData = data.filter(function (d) { return (d.ABBREV == targetDistrict)&&(+d.SCHOOL_YEAR>=yr1 && +d.SCHOOL_YEAR<=yr2) });

    console.log(districtData);

    //array used to populate dropdown menu
    let sd_arr = [];

    //range array
    let range_arr = [];

    //get the array of keys (drivers)
    let driverNames = d3.keys(data[0]).filter(function (key) {
        if (key !== 'ABBREV' && key !== 'DISTRICT' && key !== 'SCHOOL_YEAR' && key !== 'FORECAST_ENROLMENT') {
            return key
        }
    });

    console.log(driverNames);

    //for each js object, generate a new key called drivers
    // value is an array of js objects each has driver name and value

    //because grouped bar chart
    //data must be grouped by year, inside data grouped by drivers 

    districtData.forEach(function (d) {
        d.FORECAST_ENROLMENT = parseInt(d.FORECAST_ENROLMENT);
        d.drivers = driverNames.map(function (name) {
            return {
                name: name,
                value: +d[name]
            };
        });
    });

    //push unique values into dropdown array
    for (let i = 0; i < data.length; i++) {
        //get both school district numbers and names
        let sd_num = data[i].ABBREV;
        let sd_name = data[i].DISTRICT;
        let option = sd_num + '-' + sd_name;
        //covert school year string to num
        let year = +data[i].SCHOOL_YEAR;
        //check if it's already exist
        if (sd_arr.indexOf(option) === -1) {
            sd_arr.push(option);
        }

        //check if it's already exist
        if (range_arr.indexOf(year) === -1) {
            range_arr.push(year);
        }
    }

    console.log(sd_arr);

    //starting year, min val of the array
    minYr = Math.min(...range_arr);
    //ending year
    maxYr = Math.max(...range_arr);


    //populate dropdown menu
    for (let i = 0; i < sd_arr.length; i++) {
        let opt = sd_arr[i];
        d3.select('#predictors-distDropdown .list')
            .append('div')
            .text(opt)
            //take the sd number (first 4 letters) as value
            .attr('data-value', opt.substring(0, 4));
    };


    //set aixs
    line_xScale.domain(districtData.map(function (d) { return d.SCHOOL_YEAR; }));
    bar_xScale1.domain(districtData.map(function (d) { return d.SCHOOL_YEAR; }));
    // set x2 axis within the bar group
    bar_xScale2.domain(driverNames).rangeRound([0, bar_xScale1.bandwidth()]);
    line_yScale.domain([0, d3.max(districtData, function (d) { return d.FORECAST_ENROLMENT; })]);

    // get min and max from multi columns (drivers)
    //first find out lowest/highest population amount throught the years then finds out largest number of drivers of that year
    bar_yScale.domain([d3.min(districtData, function (d) {
        return d3.min(d.drivers, function (d) {
            return d.value;
        });
    }), d3.max(districtData, function (d) {
        return d3.max(d.drivers, function (d) {
            return d.value;
        });
    })]);
    //     .range([line_height - bar_yScale_neg(d3.min(districtData, function (d) {
    //         return d3.min(d.drivers, function (d) {
    //             return d.value;
    //         })
    //     })), 0]);

    //line y axis
    line_chartGroup.append('g')
        .attr('class', 'yAxis')
        .attr('transform', "translate( " + line_width + ", 0 )")
        .call(line_yAxis)
        .append("text")
        .attr("transform", "rotate(-90)")
        .attr('fill', '#4c4c4c')
        .attr("y", -6)
        .attr("dy", ".9em")
        .style("text-anchor", "end")
        .text("Toatal FTE in the year");

    //bar y axis
    line_chartGroup.append('g')
        .attr('class', 'yAxis2')
        .call(bar_yAxis)
        .append("text")
        .attr("transform", "rotate(-90)")
        .attr('fill', '#4c4c4c')
        .attr("y", 6)
        .attr("dy", ".1em")
        .style("text-anchor", "end")
        .text("Driver Impact");

    //bar x axis
    line_chartGroup.append('g')
        .attr('transform', 'translate(0,' + line_height + ')')
        .attr('class', 'xAxis')
        .call(bar_xAxis);

    //zero line

    let zero = [
        { 'x': 0, 'y': 0 },
        { 'x': line_width, 'y': 0 }
    ];

    var xScale = d3.scaleLinear()
        .domain([0, line_width]) // input
        .range([0, line_width]);

    let zero_line = d3.line()
        .x(function (d) { return xScale(d['x']); })
        .y(function (d) { return bar_yScale(d['y']); });

    line_chartGroup.append('path')
        .datum(zero)
        .attr('id', 'zero-line')
        .attr('d', zero_line);

    //year group
    let yrGroup = line_chartGroup.selectAll('.year')
        .data(districtData)
        .enter()
        .append('g')
        .attr('class', 'year')
        .attr('transform', function (d) {
            return 'translate(' + bar_xScale1(d.SCHOOL_YEAR) + ',0)';
        });



    //draw grouped bars
    yrGroup.selectAll('.bar')
        .data(function (d) { return d.drivers; })
        .enter().append('rect')
        .attr('class', 'bar')
        .attr('x', function (d) { return bar_xScale2(d.name); })
        .attr('width', function (d) { return bar_xScale2.bandwidth(); })
        .attr('y', function (d) { return bar_yScale(Math.max(0, d.value)); })
        .attr('height', function (d) { return Math.abs(bar_yScale(d.value) - bar_yScale(0)); })
        .style('fill', function (d) { return color_scale(d.name); });

    //bar labels
    // let labels = line_chartGroup.selectAll(".label")
    //     .data(districtData)
    //     .enter()
    //     .append("text")
    //     .attr("class", "label")
    //     .attr("x", (function (d) { return bar_xScale(d.Year) + bar_xScale.bandwidth() / 2; }))
    //     .attr("y", function (d) { return line_height - bar_yScale(d.NetMigration) + 1; })
    //     .attr("dy", ".75em")
    //     .text(function (d) { return d.NetMigration; });

    //draw line graph
    let linegraph = line_chartGroup.append('path')
        .datum(districtData)
        .attr('class', 'line')
        .attr('d', growthLine);


    let dots = line_chartGroup.selectAll(".dot")
        .data(districtData)
        .enter().append("circle") // Uses the enter().append() method
        .attr("class", "dot") // Assign a class for styling
        .attr("cx", function (d) { return line_xScale(d.SCHOOL_YEAR); })
        .attr("cy", function (d) { return line_yScale(d.FORECAST_ENROLMENT) })
        .attr("r", 5)
        .on("mouseenter", function (d) {
            //toolOver is the event handler
            console.log(d);
            return line_toolOver(d, this);
        })
        .on("mousemove", function (d) {
            //gets mouse coordinates on screen
            let offsetTarget = $(this).parent().parent().parent().parent();
            console.log(offsetTarget);
            let offset = offsetTarget.offset();

            let mx = (event.pageX - offset.left);
            let my = (event.pageY - offset.top);

            return line_toolMove(mx, my, d);
        })
        .on("mouseleave", function (d) {
            return line_toolOut(d, this);
        });

    //dropdown select district
    $('#predictors-distDropdown').on('click', function (et) {
        $(this).toggleClass('active');
        $('#yearDropdown').removeClass('active');

        //or add on click when appending the divs
        d3.selectAll('#predictors-distDropdown .list div')
            .on('click', function () {
                $('#predictors-distDropdown span').text($(this).text());
                $('#predictors-distDropdown').attr('attr', 'dropDown');

                //remove all element with .selected class
                //  d3.selectAll('.selectedDist')
                //      .classed('selectedDist', false);
                //add selected class to button being clicked
                //  d3.select(this)
                //      .classed('selectedDist', true);

                //reset target district 
                targetDistrict = d3.select(this).attr('data-value');

                let districtData = data.filter(function (d) { return d.ABBREV == targetDistrict});
                let distName = $(this).text();

                let driverNames = d3.keys(data[0]).filter(function (key) {
                    if (key !== 'ABBREV' && key !== 'DISTRICT' && key !== 'SCHOOL_YEAR' && key !== 'FORECAST_ENROLMENT' && key !== 'drivers') {
                        return key
                    }
                });

                //for each js object, generate a new key called drivers
                // value is an array of js objects each has driver name and value

                //because grouped bar chart
                //data must be grouped by year, inside data grouped by drivers 

                districtData.forEach(function (d) {
                    d.FORECAST_ENROLMENT = parseInt(d.FORECAST_ENROLMENT);
                    d.drivers = driverNames.map(function (name) {
                        return {
                            name: name,
                            value: +d[name]
                        };
                    });
                });


                d3.select('#distName').text(distName);
                //replace space with dash and covert to lower case '/ /g' is a regex (regular expression). The flag g means global. It causes all matches to be replaced.
                let sdLink = distName.substring(5, distName.length).replace(/ - /g,' ').replace(/ /g, '-').toLocaleLowerCase();
                //set dynamic href for each sd
                d3.select('a.reportBtn').attr('href','https://www2.gov.bc.ca/gov/content/education-training/k-12/administration/program-management/reporting-on-k-12/district-reports/'+sdLink);

                //set aixs
                line_xScale.domain(districtData.map(function (d) { return d.SCHOOL_YEAR; }));
                bar_xScale1.domain(districtData.map(function (d) { return d.SCHOOL_YEAR; }));
                // set x2 axis within the bar group
                bar_xScale2.domain(driverNames).rangeRound([0, bar_xScale1.bandwidth()]);
                line_yScale.domain([0, d3.max(districtData, function (d) { return d.FORECAST_ENROLMENT; })]);

                // get min and max from multi columns (drivers)
                //first find out lowest/highest population amount throught the years then finds out largest number of drivers of that year
                bar_yScale.domain([d3.min(districtData, function (d) {
                    return d3.min(d.drivers, function (d) {
                        return d.value;
                    });
                }), d3.max(districtData, function (d) {
                    return d3.max(d.drivers, function (d) {
                        return d.value;
                    });
                })]);

                yrGroup.data(districtData);
                yrGroup.selectAll('.bar')
                    .data(function (d) { return d.drivers; })
                    .transition()
                    .duration(1500)
                    .attr('y', function (d) { return bar_yScale(Math.max(0, d.value)); })
                    .attr('height', function (d) { return Math.abs(bar_yScale(d.value) - bar_yScale(0)); });

                linegraph.datum(districtData)
                    .transition()
                    .duration(1500)
                    .attr('d', growthLine);


                dots.data(districtData)
                    .transition()
                    .duration(1500)
                    .attr("cx", function (d) { return line_xScale(d.SCHOOL_YEAR); })
                    .attr("cy", function (d) { return line_yScale(d.FORECAST_ENROLMENT) });

                zero_line.y(function (d) { return bar_yScale(d['y']); });
                d3.select('#zero-line')
                    .transition()
                    .duration(1600)
                    .attr('d', zero_line);

                line_chartGroup.select('.yAxis')
                    .transition()
                    .duration(1600)
                    .call(line_yAxis);

                line_chartGroup.select('.yAxis2')
                    .transition()
                    .duration(1600)
                    .call(bar_yAxis);
            });
    });

    //legends
    let legends = ['Demographics', 'Migration', 'Retention', 'Independent']
    let svgContainer = d3.select('#lineContainer .svg-content');
    var legend = svgContainer.selectAll(".legend")
        .data(legends)
        .enter().append("svg")
        .append('g')
        .attr("class", "legend")
        .attr("transform", function (d, i) { return "translate(" + i * 100 + ", 0)"; })
        .style("opacity", "0");

    legend.append("rect")
        .attr("x", line_width - 300)
        .attr("width", 18)
        .attr("height", 18)
        .style("fill", function (d) { return color_scale(d); });

    legend.append("text")
        .attr("x", line_width - 280)
        .attr("y", 9)
        .attr("dy", ".3em")
        .style("text-anchor", "start")
        .text(function (d) { return d; });

    // legend.transition().duration(500).delay(function (d, i) { return 1300 + 100 * i; }).style("opacity", "1");
    legend.style("opacity", "1");

    });
}

function line_toolOver(v, thepath) {
    d3.select(thepath)
        //in v4+ use the "long forms"
        .attr("style", "fill:#FCBA19")
        .attr("cursor", "pointer");
    return tooltip_line.style("visibility", "visible");
};

function line_toolOut(m, thepath) {
    d3.select(thepath)
        .attr("style", "fill:#002663")
        .attr("cursor", "pointer");
    return tooltip_line.style("visibility", "hidden");
}


function line_toolMove(mx, my, data) {
    //create the tooltip, style it and inject info
    if (+data.SCHOOL_YEAR > 2018) {
        return tooltip_line.style("top", my + 40 + "px")
            .style("left", mx - 10 + "px")
            .html("Forecast Enrolment: <b>" + Math.round(data.FORECAST_ENROLMENT));
    } else {
        return tooltip_line.style("top", my + - 20 + "px")
            .style("left", mx - 10 + "px")
            .html("Total Enrolment: <b>" + Math.round(data.FORECAST_ENROLMENT));
    }
}


//range slider(brush)
function setupSlider(v1,v2,updateGraph) {
    let sliderVals = [v1,v2];
    let width = 320,
        height = 50;
    let svg = d3.select('#predictors-brush').append('svg')
                .attr('width', width+30)
                .attr('height', height);

    let xScale = d3.scaleLinear()
                   .domain([minYr,maxYr])
                   .range([0,width]);
    
    console.log(minYr, maxYr);

    let xMin = xScale(minYr),
        xMax = xScale(maxYr);

    let rangeSlider = svg.append('g')
                   .attr('class', 'slider')
                   .attr('transform','translate(5,20)');

    console.log(sliderVals[0]);
    rangeSlider.append('line')
               .attr('class','track')
               .attr('x1', 10+xScale.range()[0])
               .attr('x2', 10+xScale.range()[1]);

    let selectRange = rangeSlider.append('line')
                                .attr('class', 'sel-range')
                                .attr('x1', 10+xScale(sliderVals[0]))
                                .attr('x2', 10+xScale(sliderVals[1]));

    rangeSlider.insert('g', '.track-overlay')
               .attr('class', 'ticks')
               .attr('transform', 'translate(10,24)')
               .selectAll('text')
               .data(xScale.ticks(10))
               .enter().append('text')
               .attr('x', xScale)
               .attr('text-anchor', 'middle')
               .text(function(d) {return d;})

    let handle = rangeSlider.selectAll('rect')
                            .data([0,1])
                            .enter()
                            .append('rect', '.track-overlay')
                            .attr('class', 'handle')
                            .attr('y', -8)
                            .attr('x', function(d) {return xScale(sliderVals[d]);})
                            .attr('rx', 3)
                            .attr('height', 20)
                            .attr('width',16)
                            .call(
                                d3.drag()
                                  .on('start', startDrag)
                                  .on('drag', drag)
                                  .on('end', endDrag)
                            );
    
    function startDrag(d) {
        d3.select(this).raise().classed('active', true);
    }

    function drag(d) {
        let x1 = d3.event.xScale;
        if(x1>xMax){
            x1=xMax
          }else if(x1<xMin){
            x1=xMin
          }
        d3.select(this).attr('x',x1);

        let x2 = xScale(sliderVals[d==0?1:0]);
        selectRange.attr('x1', 10+x1)
                   .attr('x2', 10+x2);

    }

    function endDrag(d) {
        let endVal = Math.round(xScale.invert(d3.event.x))
        let elem = d3.select(this)
        sliderVals[d] = endVal;
        let v1 = Math.min(sliderVals[0], sliderVals[1]);
        let v2 = Math.max(sliderVals[0], sliderVals[1]);
        elem.classed('active', false)
            .attr('x',xScale(endVal));
        
        selectRange.attr('x1', 10+xScale(v1))
                   .attr('x2', 10+xScale(v2));
        
        updateGraph(v1,v2);
    }
}

//render graph set up slider
setupSlider(yr1,yr2,updateGraph);
updateGraph(yr1,yr2);