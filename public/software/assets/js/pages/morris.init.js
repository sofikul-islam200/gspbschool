!function(e){"use strict";var r=function(){};r.prototype.createLineChart=function(e,r,a,t,i,o){Morris.Line({element:e,data:r,xkey:a,ykeys:t,labels:i,resize:!0,gridLineColor:"rgba(108, 120, 151, 0.2)",lineColors:o})},r.prototype.createAreaChart=function(e,r,a,t,i,o,s,n){Morris.Area({element:e,pointSize:0,lineWidth:0,data:t,xkey:i,ykeys:o,labels:s,resize:!0,gridLineColor:"rgba(108, 120, 151, 0.2)",lineColors:n})},r.prototype.createBarChart=function(e,r,a,t,i,o){Morris.Bar({element:e,data:r,xkey:a,ykeys:t,labels:i,gridLineColor:"rgba(108, 120, 151, 0.2)",barColors:o})},r.prototype.createDonutChart=function(e,r,a){Morris.Donut({element:e,data:r,colors:a})},r.prototype.init=function(){this.createLineChart("morris-line-example",[{y:"2009",a:100,b:90},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:100,b:90}],"y",["a","b"],["Series A","Series B"],["#33b86c","#dcdcdc"]);this.createAreaChart("morris-area-example",0,0,[{y:"2009",a:10,b:20},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:90,b:60}],"y",["a","b"],["Series A","Series B"],["#33b86c","#bcbcbc"]);this.createBarChart("morris-bar-example",[{y:"2009",a:100,b:90},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:100,b:90}],"y",["a","b"],["Series A","Series B"],["#33b86c","#dcdcdc"]);this.createDonutChart("morris-donut-example",[{label:"Download Sales",value:12},{label:"In-Store Sales",value:30},{label:"Mail-Order Sales",value:20}],["#dcdcdc","#33b86c","#999999"])},e.MorrisCharts=new r,e.MorrisCharts.Constructor=r}(window.jQuery),function(e){"use strict";window.jQuery.MorrisCharts.init()}();