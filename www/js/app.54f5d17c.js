(function(e){function t(t){for(var n,i,r=t[0],l=t[1],c=t[2],d=0,h=[];d<r.length;d++)i=r[d],Object.prototype.hasOwnProperty.call(a,i)&&a[i]&&h.push(a[i][0]),a[i]=0;for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(e[n]=l[n]);u&&u(t);while(h.length)h.shift()();return o.push.apply(o,c||[]),s()}function s(){for(var e,t=0;t<o.length;t++){for(var s=o[t],n=!0,r=1;r<s.length;r++){var l=s[r];0!==a[l]&&(n=!1)}n&&(o.splice(t--,1),e=i(i.s=s[0]))}return e}var n={},a={app:0},o=[];function i(t){if(n[t])return n[t].exports;var s=n[t]={i:t,l:!1,exports:{}};return e[t].call(s.exports,s,s.exports,i),s.l=!0,s.exports}i.m=e,i.c=n,i.d=function(e,t,s){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:s})},i.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var s=Object.create(null);if(i.r(s),Object.defineProperty(s,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(s,n,function(t){return e[t]}.bind(null,n));return s},i.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/";var r=window["webpackJsonp"]=window["webpackJsonp"]||[],l=r.push.bind(r);r.push=t,r=r.slice();for(var c=0;c<r.length;c++)t(r[c]);var u=l;o.push([0,"chunk-vendors"]),s()})({0:function(e,t,s){e.exports=s("56d7")},"034f":function(e,t,s){"use strict";s("85ec")},"050b":function(e,t,s){},"429f":function(e,t,s){e.exports=s.p+"img/bcid-logo-rev-en.20eebe74.svg"},"56d7":function(e,t,s){"use strict";s.r(t);var n=s("2b0e"),a=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{attrs:{id:"app"}},[s("Bcheader",{staticClass:"bcheader",staticStyle:{"margin-bottom":"15px"}}),s("div",{staticClass:"container"},[s("transition",{attrs:{name:"fade"}},[s("router-view")],1)],1)],1)},o=[],i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("img",{staticClass:"min-nav d-md-none",attrs:{src:s("429f"),width:"200",height:"44",alt:"B.C. Government Logo"}}),e._m(0),n("nav",{staticClass:"navbar navbar-expand-lg navbar-dark bg-primary-nav burgernav"},[e._m(1),n("div",{staticClass:"navbar-collapse collapse",attrs:{id:"navbarColor01"}},[n("ul",{staticClass:"navbar-nav mr-auto"},[n("li",{staticClass:"nav-item active"}),n("li",{staticClass:"nav-item"},[n("a",{staticClass:"nav-link",attrs:{href:"#"},on:{click:function(t){return e.selectStudent()}}},[e._v("Glossary")])]),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{to:"/glossary"}},[e._v("Glossary")])],1),n("li",{staticClass:"nav-item"},[n("a",{staticClass:"nav-link",attrs:{href:"https://soam-tools.apps.silver.devops.gov.bc.ca/auth/realms/master/protocol/openid-connect/logout?redirect_uri="+e.host}},[e._v("Logout")])])])])]),e._m(2)])},r=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("header",[n("div",{staticClass:"container"},[n("div",{staticClass:"banner"},[n("a",{staticClass:"navbar-brand",attrs:{href:"https://www2.gov.bc.ca"}},[n("img",{staticClass:"img-fluid d-none d-md-block",attrs:{src:s("429f"),width:"181",height:"44",alt:"B.C. Government Logo"}})]),n("h1")])])])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("button",{staticClass:"navbar-toggler collapsed",attrs:{type:"button","data-toggle":"collapse","data-target":"#navbarColor01","aria-controls":"navbarColor01","aria-expanded":"false","aria-label":"Toggle navigation"}},[s("span",{staticClass:"navbar-toggler-icon"})])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("nav",{staticClass:"navigation-main",attrs:{id:"navbar"}},[s("div",{staticClass:"container"},[s("ul",[s("li",[s("a",{staticClass:"nav-link",attrs:{href:"/"}},[e._v("Home")])]),s("li",[s("a",{staticClass:"nav-link",attrs:{href:"/all/school-districts"}},[e._v("School Districts")])]),s("li",[s("a",{staticClass:"nav-link",attrs:{href:"/all/cities"}},[e._v("Cities")])]),s("li",[s("a",{staticClass:"nav-link",attrs:{href:"/reporting"}},[e._v("Research and analysis")])]),s("li",[s("a",{staticClass:"nav-link",attrs:{href:"/glossary"}},[e._v("Glossary")])])])])])}],l={created(){},methods:{}},c=l,u=(s("d5a0"),s("2877")),d=Object(u["a"])(c,i,r,!1,null,"3e3cecc1",null),h=d.exports,p={components:{Bcheader:h}},v=p,m=(s("034f"),Object(u["a"])(v,a,o,!1,null,null,null)),g=m.exports,_=s("8c4f"),f=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"container"},[s("h1",[e._v("Foundation Skills Assessment Reports")]),s("form",{attrs:{action:"",method:"GET"},on:{submit:function(t){return t.preventDefault(),e.search(t)}}},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-6"},[e._m(0),s("select",{directives:[{name:"model",rawName:"v-model",value:e.districtOption,expression:"districtOption"}],staticClass:"form-control",on:{change:function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.districtOption=t.target.multiple?s:s[0]}}},[e._m(1),e._m(2),s("optgroup",{attrs:{label:"Select a public school"}},e._l(e.districtOptionList.data,(function(t){return s("option",{key:t.school_or_district_id,domProps:{value:t.school_or_district_id}},[e._v(e._s(t.school_or_district_name))])})),0)])]),e.districtOption&&"All Schools"!=e.districtOption&&"All Public Schools"!=e.districtOption&&"All External Schools"!=e.districtOption&&"All Independent Schools"!=e.districtOption?s("div",{staticClass:"col-6"},[e._m(3),s("select",{directives:[{name:"model",rawName:"v-model",value:e.schoolOption,expression:"schoolOption"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.schoolOption=t.target.multiple?s:s[0]},e.search]}},e._l(e.sortedSchools,(function(t){return s("option",{key:t.school_or_district_id,domProps:{value:t.school_or_district_id}},[e._v(e._s(t.school_or_district_name))])})),0)]):e._e()]),s("table",{},[s("tbody",[e._m(4),s("tr",[s("td",{staticClass:"p-1",staticStyle:{width:"140px"}},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.year,expression:"year"}],staticClass:"form-control",on:{change:function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.year=t.target.multiple?s:s[0]}}},e._l(e.yearOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1",staticStyle:{width:"75px"}},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.grade,expression:"grade"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.grade=t.target.multiple?s:s[0]},e.search]}},e._l(e.gradeOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1",staticStyle:{width:"150px"}},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.subject,expression:"subject"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.subject=t.target.multiple?s:s[0]},e.search]}},e._l(e.subjectOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1",staticStyle:{width:"100px"}},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.examLanguage,expression:"examLanguage"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.examLanguage=t.target.multiple?s:s[0]},e.search]}},e._l(e.examLanguageOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1"},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.gender,expression:"gender"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.gender=t.target.multiple?s:s[0]},e.search]}},e._l(e.genderOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1"},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.francophone,expression:"francophone"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.francophone=t.target.multiple?s:s[0]},e.search]}},e._l(e.francophoneOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1"},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.frenchImmersion,expression:"frenchImmersion"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.frenchImmersion=t.target.multiple?s:s[0]},e.search]}},e._l(e.frenchImmersionOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1"},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.ell,expression:"ell"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.ell=t.target.multiple?s:s[0]},e.search]}},e._l(e.ellOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)]),s("td",{staticClass:"p-1"},[s("select",{directives:[{name:"model",rawName:"v-model",value:e.indigenous,expression:"indigenous"}],staticClass:"form-control",on:{change:[function(t){var s=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));e.indigenous=t.target.multiple?s:s[0]},e.search]}},e._l(e.indigenousOptions,(function(t){return s("option",{key:t.text,domProps:{value:t.value}},[e._v(" "+e._s(t.text)+" ")])})),0)])]),s("tr",[s("td",{staticClass:"align-text-right"},[s("button",{staticClass:"btn btn-secondary",on:{click:function(t){return e.resetSearch()}}},[e._v("Reset")])])])])])]),s("div",[s("h2",{staticClass:"search-filters border-bottom pt-5"},[e.school?s("span",[e._v(" "+e._s(e.schoolName)+" ")]):e._e()]),s("h4",{staticClass:"header"},[e._v(" Filters: "),e.year?s("span",[e._v(" "+e._s(e.year)+" ")]):e._e(),e.grade?s("span",[e._v(" Grade "+e._s(e.grade)+" ")]):e._e(),e.subject?s("span",[e._v(" "+e._s(e.subject)+" ")]):e._e(),e.examLanguage?s("span",[e._v(" "+e._s(e.examLanguage)+" ")]):e._e(),"all"!=e.gender?s("span",[e._v(" "+e._s(e.gender)+" ")]):e._e(),"Yes"==e.francophone?s("span",[e._v(" Francophone ")]):e._e(),"Yes"==e.frenchImmersion?s("span",[e._v(" French Immersion ")]):e._e(),"Yes"==e.ell?s("span",[e._v(" ELL ")]):e._e(),"Yes"==e.indigenous?s("span",[e._v(" Indigenous ")]):e._e()])]),e.searchMessage?s("div",{staticClass:"search-results-message"},[e._v(" "+e._s(e.searchMessage)+" ")]):e._e(),e.loading?s("div",[s("b-spinner")],1):e._e(),e.loading?e._e():s("div",{attrs:{id:"results"}},[s("div",[s("b-tabs",{attrs:{"content-class":"mt-3"}},[e.aSelectedResponses.length?s("b-tab",{attrs:{title:"A: SELECTED RESPONSE"}},[[s("div",[s("b-table",{attrs:{sortBy:"item",striped:"",hover:"",items:this.aSelectedResponses,fields:e.aSelectedResponsesFields}})],1)]],2):e._e(),e.aSelectedResponses.length?e._e():s("b-tab",{attrs:{title:"A: SELECTED RESPONSE"}},[[s("div",[e._v(" There are no responses for this section. Please view other sections if available, or change your filter parameters. ")])]],2),e.bConstructedResponses.length?s("b-tab",{attrs:{title:"B: CONSTRUCTED RESPONSE"}},[s("b-table",{attrs:{striped:"",hover:"",sortBy:"theme",items:this.bConstructedResponses,fields:e.bConstructedResponsesFields},scopedSlots:e._u([{key:"cell(num_of_score_0)",fn:function(t){var s=t.item;return[e._v(" "+e._s(s.num_of_score_0)+" ("+e._s(s.percent_score_0)+") ")]}},{key:"cell(num_of_score_1)",fn:function(t){var s=t.item;return[e._v(" "+e._s(s.num_of_score_1)+" ("+e._s(s.percent_score_1)+") ")]}},{key:"cell(num_of_score_2)",fn:function(t){var s=t.item;return[e._v(" "+e._s(s.num_of_score_2)+" ("+e._s(s.percent_score_2)+") ")]}},{key:"cell(num_of_score_3)",fn:function(t){var s=t.item;return[e._v(" "+e._s(s.num_of_score_3)+" ("+e._s(s.percent_score_3)+") ")]}},{key:"cell(num_of_score_4)",fn:function(t){var s=t.item;return[e._v(" "+e._s(s.num_of_score_4)+" ("+e._s(s.percent_score_4)+") ")]}}],null,!1,3193511715)})],1):e._e(),e.bConstructedResponses.length?e._e():s("b-tab",{attrs:{title:"B: CONSTRUCTED RESPONSE"}},[s("div",[e._v(" There are no responses for this section. Please view other sections if available, or change your filter parameters. ")])]),e.cCognitiveResponses.length?s("b-tab",{attrs:{title:"C: COGNITIVE LEVELS"}},[s("b-table",{attrs:{striped:"",hover:"","sort-by":"cognitive_level",items:this.cCognitiveResponses,fields:e.fieldsC}})],1):e._e(),e.cCognitiveResponses.length?e._e():s("b-tab",{attrs:{title:"C: COGNITIVE LEVELS"}},[s("div",[e._v(" There are no responses for this section. Please view other sections if available, or change your filter parameters. ")])])],1)],1)])])},b=[function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("span",[s("strong",{staticClass:"p-1"},[e._v("Select a Report")])])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("optgroup",{attrs:{label:"Select a report"}},[s("option",{attrs:{value:"All Public Schools"}},[e._v("All Public Schools")]),s("option",{attrs:{value:"All External Schools"}},[e._v("All External Schools")]),s("option",{attrs:{value:"All Independent Schools"}},[e._v("All Independent Schools")]),s("option",{attrs:{value:"All Schools"}},[e._v("All Schools")])])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("optgroup",{attrs:{label:"Select by independent/external school"}},[s("option",{attrs:{value:"Independent Schools"}},[e._v("Independent Schools")]),s("option",{attrs:{value:"External Schools"}},[e._v("External Schools")])])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("span",[s("strong",{staticClass:"p-1"},[e._v("Select a School")])])},function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("tr",[s("th",{staticClass:"p-1"},[e._v("Year")]),s("th",{staticClass:"p-1"},[e._v("Gr")]),s("th",{staticClass:"p-1"},[e._v("Subject")]),s("th",{staticClass:"p-1"},[e._v("Language")]),s("th",{staticClass:"p-1"},[e._v("Gender")]),s("th",{staticClass:"p-1"},[e._v("Francophone")]),s("th",{staticClass:"p-1"},[e._v("French Immersion")]),s("th",{staticClass:"p-1"},[e._v("English Language Learners (ELL)")]),s("th",{staticClass:"p-1"},[e._v("Indigenous")])])}],y=s("bc3a"),C=s.n(y),S=C.a.create({baseURL:""}),x={getSchoolOptions(e){return S.get("/fsa-school-districtsID/"+e)},getDistrictOptions(){return S.get("/fsa-school-districts-agg")},getASelectedResponse(e,t,s,n,a,o,i,r,l,c){return console.log("/selected-response/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c),S.get("/selected-response/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c)},getBConstructedResponse(e,t,s,n,a,o,i,r,l,c){return console.log("/constructed-response/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c),S.get("/constructed-response/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c)},getCCognitiveResponse(e,t,s,n,a,o,i,r,l,c){return console.log("/cognitive-levels/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c),S.get("/cognitive-levels/"+e+"/"+t+"/"+s+"/"+n+"/"+a+"/"+o+"/"+i+"/"+r+"/"+l+"/"+c)}},k={name:"FSA",watch:{year:function(){"2017-2018"==this.year||"2018-2019"==this.year||"2019-2020"==this.year||"2020-2021"==this.year?(this.subjectOptions=[{text:"Reading",value:"Reading"},{text:"Numeracy",value:"Numeracy"},{text:"Writing",value:"Writing"}],this.subject="Reading"):(this.subjectOptions=[{text:"Literacy",value:"Literacy"},{text:"Numeracy",value:"Numeracy"}],this.subject="Literacy"),this.$nextTick(()=>{this.search()})},districtOption:function(){"All Public Schools"==this.districtOption?(this.schoolOption="All Public Schools",this.search()):"All External Schools"==this.districtOption?(this.schoolOption="All External Schools",this.search()):"All Independent Schools"==this.districtOption?(this.schoolOption="All Independent Schools",this.search()):"All Schools"==this.districtOption?(this.schoolOption="All Schools",this.search()):x.getSchoolOptions(this.districtOption).then(e=>this.schoolList=e)}},data(){return{districtOption:"All Public Schools",districtOptionList:null,schoolOption:"All Public Schools",school:"All Public Schools",schoolList:"",searchMessage:"",aSelectedResponsesFields:[{key:"content",label:"CONTENT",sortable:!0},{key:"item",label:"ITEM #",sortable:!0},{key:"cognitive_level",label:"COGNITIVE LEVEL"},{key:"number_of_respondents",label:"RESPONDENTS",sortable:!0},{key:"degree_of_difficulty",label:"DEGREE OF DIFFICULTY"},{key:"percent_correct",label:"% CORRECT"},{key:"percent_incorrect",label:"% INCORRECT"},{key:"item_descriptor",label:"ITEM DESCRIPTOR"}],aSelectedResponses:{},bConstructedResponsesFields:[{key:"content",label:"CONTENT"},{key:"theme",label:"THEME"},{key:"item",label:"ITEM #"},{key:"writers",label:"WRITERS"},{key:"num_of_score_0",label:"SCORE 0"},{key:"num_of_score_1",label:"SCORE 1"},{key:"num_of_score_2",label:"SCORE 2"},{key:"num_of_score_3",label:"SCORE 3"},{key:"num_of_score_4",label:"SCORE 4"},{key:"description",label:"ITEM DESCRIPTOR"}],bConstructedResponses:{},fieldsC:[{key:"cognitive_level",label:"COGNITIVE LEVEL"},{key:"cognitive_level_description",label:"RECALL"},{key:"number_of_items",label:"NO OF ITEMS"},{key:"number_of_students_responding",label:"NO OF STUDENTS WHO RESPONDED"},{key:"pct_correct",label:"PERCENTAGE OF STUDENTS WITH CORRECT RESPONSES"}],cCognitiveResponses:{},year:"2023-2024",yearOptions:[{text:"2017-2018",value:"2017-2018"},{text:"2018-2019",value:"2018-2019"},{text:"2019-2020",value:"2019-2020"},{text:"2020-2021",value:"2020-2021"},{text:"2021-2022",value:"2021-2022"},{text:"2022-2023",value:"2022-2023"},{text:"2023-2024",value:"2023-2024"}],grade:"04",gradeOptions:[{text:"4",value:"04"},{text:"7",value:"07"}],subject:"Literacy",subjectOptions:[{text:"Literacy",value:"Literacy"},{text:"Numeracy",value:"Numeracy"}],examLanguage:"English",examLanguageOptions:[{text:"EN",value:"English"},{text:"FR",value:"French"}],gender:"all",genderOptions:[{text:"All",value:"all"},{text:"Male",value:"Male"},{text:"Female",value:"Female"}],francophone:"all",francophoneOptions:[{text:"All",value:"all"},{text:"Francophone",value:"Yes"},{text:"Non-Francophone",value:"No"}],frenchImmersion:"all",frenchImmersionOptions:[{text:"All",value:"all"},{text:"French Immersion",value:"Yes"},{text:"Non-French Immersion",value:"No"}],ell:"all",ellOptions:[{text:"All",value:"all"},{text:"ELL",value:"Yes"},{text:"Non-ELL",value:"No"}],indigenous:"all",indigenousOptions:[{text:"All",value:"all"},{text:"Indigenous",value:"Yes"},{text:"Non-indigenous",value:"No"}],loading:!1,search2:""}},created(){this.search(),x.getDistrictOptions().then(e=>this.districtOptionList=e)},computed:{sortedSchools(){return this.schoolList?this.schoolList.data.filter(e=>e.school_or_district_name.toLowerCase().match(this.search2.toLowerCase())).sort((e,t)=>e.school_or_district_name<t.school_or_district_name?-1:e.school_or_district_name>t.school_or_district_name?1:0):[]}},methods:{search:function(){this.searchMessage="",this.aSelectedResponses={},this.bConstructedResponses={},this.cSelectedResponse={},this.loading=!0,this.school=this.schoolOption,this.schoolName="",x.getASelectedResponse(this.school,this.year,this.grade,this.subject,this.examLanguage,this.gender,this.francophone,this.frenchImmersion,this.ell,this.indigenous).then(e=>{e.data.length&&(this.aSelectedResponses=e.data,this.aSelectedResponses[0].school?this.schoolName=this.aSelectedResponses[0].school:this.aSelectedResponses[0].school_or_district&&(this.schoolName=this.aSelectedResponses[0].school_or_district)),this.loading=!1}),x.getBConstructedResponse(this.school,this.year,this.grade,this.subject,this.examLanguage,this.gender,this.francophone,this.frenchImmersion,this.ell,this.indigenous).then(e=>{e.data.length&&(this.bConstructedResponses=e.data,this.bConstructedResponses[0].school?this.schoolName=this.bConstructedResponses[0].school:this.bConstructedResponses[0].school_or_district&&(this.schoolName=this.bConstructedResponses[0].school_or_district),this.loading=!1)}),x.getCCognitiveResponse(this.school,this.year,this.grade,this.subject,this.examLanguage,this.gender,this.francophone,this.frenchImmersion,this.ell,this.indigenous).then(e=>{e.data.length&&(this.cCognitiveResponses=e.data,this.cCognitiveResponses[0].school&&(this.schoolName=this.cCognitiveResponses[0].school_or_district)),this.loading=!1})},resetSearch:function(){this.searchMessage="",this.aSelectedResponses={},this.bConstructedResponses={},this.cSelectedResponse={},this.school="All Public Schools",this.districtOption="All Public Schools",this.school="All Public Schools",this.year="2021-2022",this.grade="04",this.subject="Literacy",this.examLanguage="English",this.gender="all",this.francophone="all",this.frenchImmersion="all",this.ell="all",this.indigenous="all",this.saveSelectionAndReset(),this.schoolName=""},clearSchool:function(){this.school=""},saveSelectionAndReset(e){let t=e;t&&(this.school=t),e="",this.search()}}},w=k,R=(s("7d63"),Object(u["a"])(w,f,b,!1,null,"0821ae5b",null)),O=R.exports,E=function(){var e=this,t=e.$createElement;e._self._c;return e._m(0)},T=[function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"uk-container main-container"},[s("a",{attrs:{name:"content"}}),s("h1",{staticClass:"uk-heading uk-text-center content-heading"},[e._v("Glossary of Terms Used in 2018 and 2019 FSA item level Reports ")]),s("p",{staticClass:"content-description uk-width-2-3@s uk-margin-medium-left uk-margin-medium-right uk-text-left"}),s("div",{staticClass:"edc-contextmenu-wrapper"},[s("nav",{staticClass:"uk-navbar-container edc-contextmenu uk-margin-bottom uk-navbar",attrs:{"uk-navbar":""}},[s("div",{staticClass:"uk-navbar-center"},[s("ul",{staticClass:"uk-navbar-nav"},[s("div",{staticStyle:{display:"none"}})])])])]),s("div",{staticClass:"content"},[s("div",{staticClass:"uk-container uk-margin "},[s("div",{staticClass:"uk-container uk-container-small uk-margin-auto uk-width-2-3@m"},[s("p",[e._v("Data will not display for schools with fewer than 10 respondents; numbers vary depending on responses to individual items.")]),s("h3",[e._v("Constructed Response Reading Grade 4 & 7 Snapshot Rubrics and Scores "),s("a",{attrs:{href:"#footnotes"}},[s("sup",[e._v(" i")])])]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("strong",[e._v("0")]),e._v(". Response does not have enough information to be scored; response contains very inappropriate language; or all work is erased or crossed out.")]),s("li",[s("strong",[e._v("1")]),e._v(". Demonstrates a limited understanding or misreading of the text(s) and or question; possibly a verbatim recall of information.")]),s("li",[s("strong",[e._v("2")]),e._v(". Demonstrates an understanding of the gist of the text(s) and question. The reader is able to support their thinking in a simplistic way; literal interpretation of main ideas and concepts. ")]),s("li",[s("strong",[e._v("3")]),e._v(". Demonstrates a clear understanding of the text(s) and question. The reader is able to support their thinking using mostly accurate details closely linked to the central idea of the question and text(s).")]),s("li",[s("strong",[e._v("4")]),e._v(". Demonstrates an in-depth understanding of the text(s) and question. The reader supports their thinking using accurate text-based information; may be insightful.")])]),s("h3",[e._v("Constructed Response Focused Writing Grade 4 & 7 Snapshot Rubrics and Scores "),s("a",{attrs:{href:"#footnotes"}},[s("sup",[e._v(" i")])])]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("strong",[e._v("0")]),e._v(". Response does not have enough information to be scored; response contains very inappropriate language; or all work is erased or crossed out.")]),s("li",[s("strong",[e._v("1")]),e._v(". Writing is unorganized with few relevant details. Simple language with weak sentence structure; ideas are often disjointed or illogical.")]),s("li",[s("strong",[e._v("2")]),e._v(". Writing has some sense of organization; few relevant details. Generally simple language and little sentence variety; ideas may be unevenly developed or list-like.")]),s("li",[s("strong",[e._v("3")]),e._v(". Writing is organized and developed with relevant supporting details. Shows growing control of written language; some sentence variety.")]),s("li",[s("strong",[e._v("4")]),e._v(". Writing ideas are focused, organized, and elaborated. Language flows smoothly with sentence variety; engages the reader with a sense of originality or individuality.")])]),s("h3",[e._v("Constructed Response Focused Numeracy Grade 4 & 7 Snapshot Rubrics and Scores "),s("a",{attrs:{href:"#footnotes"}},[s("sup",[e._v(" i")])])]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("strong",[e._v("0")]),e._v(". Information is simply recopied from the problem; work is not relevant to the problem; response contains very inappropriate language; or all work is erased or crossed out.")]),s("li",[s("strong",[e._v("1")]),e._v(". Student demonstrates limited ability to view the situation mathematically. Approach or representation is ineffective. Reasoning or evidence is absent.")]),s("li",[s("strong",[e._v("2")]),e._v(". Student demonstrates basic ability to view the situation mathematically. Approach or representation is difficult to follow. Reasoning or evidence is lacking to some degree")]),s("li",[s("strong",[e._v("3")]),e._v(". Student demonstrates proficient ability to view the situation mathematically. Approach or representation is sensible and generally can be followed. Reasoning or evidence contains minor inconsistencies.")]),s("li",[s("strong",[e._v("4")]),e._v(". Student demonstrates advanced ability to view the situation mathematically. Approach or representation is effective and is easily followed. Reasoning and evidence is clear and well presented. ")])]),s("h3",[e._v("Curriculum Themes: Mathematics "),s("a",{attrs:{href:"#footnotes"}},[s("sup",[e._v("ii")])])]),s("p",[e._v("The curriculum themes are found throughout the Mathematics curriculum. These themes are present throughout the Numeracy components of the FSA and consist of the following:")]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[e._v("Number represents and describes quantity")]),s("li",[e._v("Computational fluency requires a strong sense of number.")]),s("li",[e._v("Patterns represent identified regularities and form generalizations.")]),s("li",[e._v("Spatial relationships can be described, measured, and compared.")]),s("li",[e._v("Analyzing data and chance enables us to compare and interpret.")])]),s("h3",[e._v("Reading Content: Text Types")]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[e._v("Information Text and Literacy Text")])]),s("h3",[e._v("Degree of Difficulty")]),s("p",[e._v("The FSA Item Degree of Difficulty (DIFF; Df) estimate is simply the percentage of students who answer an item correctly. In this case, it is also equal to the item mean. An item answered correctly for between 100% and 90% of students (i.e., 1.0 to 0.9) is described as "),s("b",[e._v("Very Easy")]),e._v(". Similarly, an item answered correctly for between 90% and 70% of students is described as "),s("b",[e._v("Moderately Easy")]),e._v("; between 70% and 50% of students is described as "),s("b",[e._v("Moderately Difficult")]),e._v("; between 50% and 30% of students is described as "),s("b",[e._v("Very Difficult")]),e._v("; and, between 30% and 0% of students is described as "),s("b",[e._v("Extremely Difficult")]),e._v(".")]),s("h3",[e._v("Depth of Knowledge (DOK) / Cognitive levels")]),e._v(" Cognitive level categorizes questions according to the complexity of thinking required to successfully complete them. Student responses provide opportunity to evaluate the student’s ability to comprehend and communicate. Students demonstrate understanding at three cognitive levels of Webb's Depths of Knowledge. "),s("h3",[e._v("DOK Reading")]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("h4",[e._v("Level 1 Recall Reading")]),s("p",[e._v("The reader uses simple skills to retrieve or locate information from the text. The responses require only literal understanding of text presented and often consist of verbatim recall from text, or simple understanding of a single word or phrase.")])]),s("li",[s("h4",[e._v("Level 2 Skills and Concepts Reading")]),s("p",[e._v("The reader shows initial comprehension and subsequent processing of text or portions of text. The reader understands important concepts and literal main ideas.")])]),s("li",[s("h4",[e._v("Level 3 Strategic Thinking Reading")]),s("p",[e._v("The reader applies deep knowledge to go beyond the text to explain, generalize, or connect ideas. The reader is able to support their thinking, making references and interpretations from the text or other sources.")])])]),s("h3",[e._v("DOK Writing")]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("h4",[e._v("Level 1 Writing Recall")]),s("p",[e._v("The student writes or recites simple facts and basic ideas.")])]),s("li",[s("h4",[e._v("Level 2 Writing Skills and Concepts")]),s("p",[e._v("The student shows evidence of some mental processing, such as beginning to connect ideas using a simple organizational structure. The student is engaged in first draft writing for a limited number of purposes and audiences. The student is beginning to connect ideas using a simple organizational structure for such things as composing a short, accurate summary.")])]),s("li",[s("h4",[e._v("Level 3 Writing Strategic Thinking")]),s("p",[e._v("The student shows evidence of higher-level mental processing. The student is developing multi-paragraph compositions that may include complex sentence structures or demonstrate some synthesis and analysis. Revisions are made to the writing to improve precision of language used and to produce a logical progression of ideas.")])])]),s("h3",[e._v("DOK Numeracy")]),s("ul",{staticClass:"uk-list uk-list-bullet"},[s("li",[s("h4",[e._v("Level 1 Numeracy Recall")]),s("p",[e._v("The student is able to recall information such as a fact, definition, or term; use a procedure; or apply a formula.")])]),s("li",[s("h4",[e._v("Level 2 Numeracy Skills and Concepts")]),s("p",[e._v("The student is able to demonstrate conceptual understanding through models and explanations, comparing and classifying information, or interpreting data; can make decisions on how to approach a problem.")])]),s("li",[s("h4",[e._v("Level 3 Numeracy Strategic Thinking")]),s("p",[e._v("The student is able to solve a problem and explain thinking by reasoning, planning, and using evidence. ")])])]),s("h3",[e._v("Item level Question format")]),s("p",[e._v("There are two categories of question formats:")]),s("p",[s("b",[e._v("Selected-response")]),e._v(" questions require students to select a response from a set of options, including drop-down menus, drag-and-drop, multiple choice, matching, and sequencing.")]),s("p",[s("b",[e._v("Constructed-response")]),e._v(" questions require students to provide a written response. They include short-answer questions, extended-response questions, writing tasks, and problem-solving tasks.")]),s("br"),s("br"),s("a",{attrs:{name:"footnotes"}}),s("p",{staticClass:"uk-text-small"},[s("sup",[e._v("i")]),e._v(" 2019/20 FSA Scoring Guide, Province of British Columbia, "),s("a",{attrs:{href:"https://www2.gov.bc.ca/assets/gov/education/administration/kindergarten-to-grade-12/assessment/fsa-scoring-guide-en.pdf"}},[e._v("https://www2.gov.bc.ca/assets/gov/education/administration/kindergarten-to-grade-12/assessment/fsa-scoring-guide-en.pdf")])]),s("p",{staticClass:"uk-text-small"},[s("sup",[e._v("ii")]),e._v(" BC’s New Curriculum, Mathematics at "),s("a",{attrs:{href:"https://curriculum.gov.bc.ca/curriculum/mathematics/introduction"}},[e._v("https://curriculum.gov.bc.ca/curriculum/mathematics/introduction")])])])])])])}],L={},N=Object(u["a"])(L,E,T,!1,null,null,null),A=N.exports;n["default"].use(_["a"]);const I=[{path:"/",name:"Home",component:O},{path:"/glossary",name:"Glossary",component:A}],P=new _["a"]({routes:I});var D=P,F=s("5f5b");s("8fde");n["default"].use(F["a"]),n["default"].config.productionTip=!1,new n["default"]({router:D,render:e=>e(g)}).$mount("#app")},"639b":function(e,t,s){},"7d63":function(e,t,s){"use strict";s("639b")},"85ec":function(e,t,s){},d5a0:function(e,t,s){"use strict";s("050b")}});
//# sourceMappingURL=app.54f5d17c.js.map