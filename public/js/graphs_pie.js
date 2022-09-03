let names = {
  "Departments": ['Neuro.', 'Dermato.', 'Gen.', 'Cardio.', 'Ortho.'],
  "Roles": ['Office Staff', 'Intern', 'Specialist', 'Nurse', 'Fellow']
}

let data = {
  "Departments" : {},
  "Roles": {}
}

emp_by_dept.forEach(ele => {
  data["Departments"][ele['department_id']] = ele['total']
})

emp_by_role.forEach(ele => {
  data["Roles"][ele['role_id']] = ele['total']
})


// set the dimensions and margins of the graph
let width = 250
    height = 250
    margin = 5

// The radius of the pieplot is half the width or half the height (smallest one). I subtract a bit of margin.
let radius = Math.min(width, height) / 2 - margin

// append the svg object to the div called 'my_dataviz'
let svg = d3.select("#pieChartEmp")
    .append("svg")
    .attr("width", width)
    .attr("height", height)
    .append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");


// set the color scale
let color = d3.scaleOrdinal()
  .domain(["a", "b", "c", "d", "e", "f"])
  .range(d3.schemeDark2);

// A function that create / update the plot for a given variable:
function update(data, title) {

  let arr = names[title];
  d3.select('g').html("");


  // Compute the position of each group on the pie:
  let pie = d3.pie()
    .value(function(d) {return d.value; })
    .sort(function(a, b) {return d3.ascending(a.key, b.key);} ) // This make sure that group order remains the same in the pie chart
  let data_ready = pie(d3.entries(data))

  // map to data
  let paths = svg.selectAll("path")
    .data(data_ready)

  // Build the pie chart: Basically, each part of the pie is a path that we build using the arc function.
  let arc = d3.arc()
  .innerRadius(0)
  .outerRadius(radius);

  paths
    .enter()
    .append('path')
    .merge(paths)
    .transition()
    .duration(1000)
    .attr('d', arc)
    .attr('fill', function(d){ return(color(d.data.key)) })
    .attr("stroke", "white")
    .style("stroke-width", "2px")
    .style("opacity", 1)
    .style("overflow", "hidden")

  paths
    .enter()
    .append('text')
    .text(function(d){return arr[d.data.key-1]})
    .attr('x', d => arc.centroid(d)[0] - 30)
    .attr('y', d => arc.centroid(d)[1])
  .style("font-size", 15)
  .style("fill", "white")


  // remove the group that is not present anymore
  paths
    .exit()
    .remove()
  

}

// Initialize the plot with the first dataset
update(data["Roles"], "Roles")