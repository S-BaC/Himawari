let app_data = [];

app_by_date.forEach(data => {
  app_data.push({ date: (data['date_time']).substr(5, 5), count: data['total'] })
});

console.log(app_data);

const xScale = d3
  .scaleBand()
  .domain(app_data.map((dataPoint) => dataPoint.date))
  .rangeRound([0, 500])
  .padding(0.3);
const yScale = d3.scaleLinear().domain([0, 8]).range([200, 0]);

const container = d3.select('#barChartApp');

const bars = container
  .selectAll('g')
  .data(app_data)
  .enter()
  .append('g')

bars.append("rect")
.attr('width', xScale.bandwidth())
.attr('height', (data) => 200 - yScale(data.count))
.attr('x', data => xScale(data.date))
.attr('y', data => yScale(data.count))
.attr('fill', '#D57538');

bars.append("text")
.attr('x', data => xScale(data.date))
.attr('y', 215)
.style('font-size', 13)
// .attr('transform', data => 'rotate(270,' + (xScale(data.date)-38) + ',290)')
.text(function(d) {return d.date;});






d3.selectAll('text')
  .attr('font-size', 15)
  .attr('fill', '#000')
//   setTimeout(() => {
//     bars.data(DUMMY_DATA.slice(0, 2)).exit().remove();
//   }, 2000);