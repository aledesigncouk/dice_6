<!DOCTYPE html>
<meta charset="utf-8">

<head>
    <title>Line with scales</title>
</head>

<style>
    #chart {
        height: 400px;
        width: 800px;
        margin: 0 auto;
        background: rgb(0, 0, 125, 0.3);
        padding: 30px;
    }

    svg {
        overflow: visible;
    }

    circle {
        stroke: none;
        fill: #fff;
    }

    .line {
        stroke: steelblue;
        stroke-width: 1;
        fill: none;
    }
</style>

<body>

    <div id="container">
        <div id="chart">

        </div>
    </div>

    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script>
        var width = 800,
            height = 400;

        var trows = 100;

        var data = dataGenerator();
        
        console.log(data);

        var svg = d3.select("#chart")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

        // X axis start from 0 to n flips
        var xMax = d3.max([d3.max(data, function(d) {
            return d.x;
        })]);

        // Y axis start from lowest toss value to highest 
        var yMax = d3.max([d3.max(data, function(d) {
            return d.y;
        })]);
        var yMin = d3.min([d3.min(data, function(d) {
            return d.y;
        })]);

        var xscale = d3.scaleLinear()
            .domain([0, xMax])
            .range([0, width]);

        var yscale = d3.scaleLinear()
            .domain([yMax, yMin])
            .range([0, height]);

        var x_axis = d3.axisBottom()
            .scale(xscale);

        var y_axis = d3.axisLeft()
            .scale(yscale);

        svg.append("g")
            .attr("transform", "translate(0, 0)")
            .call(y_axis);

        // X axes need to stick to 0 Y axis point
        svg.append("g")
            .attr("transform", "translate(0, " + yscale(0) + ")") // set the xAxis to Y 0 dinamically
            .call(x_axis);

        // import data
        svg.selectAll("circle")
            .attr("class", "points")
            .data(data)
            .enter().append("circle")
            .attr("cx", function(d) {
                return xscale(d.x);
            })
            .attr("cy", function(d) {
                return yscale(d.y);
            })
            .attr("r", 1);

        var line = d3.line()
            .x(function(d) {
                return xscale(d.x);
            })
            .y(function(d) {
                return yscale(d.y);
            });

        // Add the valueline path.
        svg.append("path")
            .datum(data)
            .attr("class", "line")
            .attr("d", line);

        // data generator

        function dataGenerator() {
            var graph = [];
            var i = 0;
            var y = 0;

            while (i < 1000) {
                if (Math.random() < 0.5) {
                    var point = new Object();
                    point.x = i;
                    point.y = y += 1;
                    graph.push(point);
                } else {
                    var point = new Object();
                    point.x = i;
                    point.y = y -= 1;
                    graph.push(point);
                }
                i++;
            }
            return graph;
        }
    </script>
</body>

</html>