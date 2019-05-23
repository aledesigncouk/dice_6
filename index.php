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

        // var data = createData();

       /*  var data2 = [{
                "x": 0,
                "y": -54
            },
            {
                "x": 1,
                "y": 85
            },
            {
                "x": 2,
                "y": 18
            },
            {
                "x": 3,
                "y": 59
            },
            {
                "x": 4,
                "y": 63
            },
            {
                "x": 5,
                "y": -55
            },
            {
                "x": 6,
                "y": -67
            },
            {
                "x": 7,
                "y": -62
            },
            {
                "x": 8,
                "y": -7
            },
            {
                "x": 9,
                "y": 97
            },
            {
                "x": 10,
                "y": 71
            },
            {
                "x": 11,
                "y": 37
            },
            {
                "x": 12,
                "y": 72
            },
            {
                "x": 13,
                "y": -48
            },
            {
                "x": 14,
                "y": -29
            },
            {
                "x": 15,
                "y": -80
            },
            {
                "x": 16,
                "y": 86
            },
            {
                "x": 17,
                "y": 73
            },
            {
                "x": 18,
                "y": 76
            },
            {
                "x": 19,
                "y": -76
            },
            {
                "x": 20,
                "y": -11
            },
            {
                "x": 21,
                "y": 99
            },
            {
                "x": 22,
                "y": -40
            },
            {
                "x": 23,
                "y": 17
            },
            {
                "x": 24,
                "y": 64
            },
            {
                "x": 25,
                "y": -55
            },
            {
                "x": 26,
                "y": -99
            },
            {
                "x": 27,
                "y": 19
            },
            {
                "x": 28,
                "y": -76
            },
            {
                "x": 29,
                "y": 92
            },
            {
                "x": 30,
                "y": -37
            },
            {
                "x": 31,
                "y": 81
            },
            {
                "x": 32,
                "y": -46
            },
            {
                "x": 33,
                "y": -59
            },
            {
                "x": 34,
                "y": -7
            },
            {
                "x": 35,
                "y": 24
            },
            {
                "x": 36,
                "y": -89
            },
            {
                "x": 37,
                "y": -56
            },
            {
                "x": 38,
                "y": -70
            },
            {
                "x": 39,
                "y": 22
            },
            {
                "x": 40,
                "y": -92
            },
            {
                "x": 41,
                "y": 19
            },
            {
                "x": 42,
                "y": -97
            },
            {
                "x": 43,
                "y": -44
            },
            {
                "x": 44,
                "y": 16
            },
            {
                "x": 45,
                "y": 26
            },
            {
                "x": 46,
                "y": -23
            },
            {
                "x": 47,
                "y": -4
            },
            {
                "x": 48,
                "y": -75
            },
            {
                "x": 49,
                "y": 39
            },
            {
                "x": 50,
                "y": -42
            },
            {
                "x": 51,
                "y": 87
            },
            {
                "x": 52,
                "y": 15
            },
            {
                "x": 53,
                "y": 48
            },
            {
                "x": 54,
                "y": 10
            },
            {
                "x": 55,
                "y": -97
            },
            {
                "x": 56,
                "y": 79
            },
            {
                "x": 57,
                "y": 45
            },
            {
                "x": 58,
                "y": -30
            },
            {
                "x": 59,
                "y": -70
            },
            {
                "x": 60,
                "y": 20
            },
            {
                "x": 61,
                "y": -88
            },
            {
                "x": 62,
                "y": -10
            },
            {
                "x": 63,
                "y": -72
            },
            {
                "x": 64,
                "y": -92
            },
            {
                "x": 65,
                "y": 72
            },
            {
                "x": 66,
                "y": 77
            },
            {
                "x": 67,
                "y": -90
            },
            {
                "x": 68,
                "y": 67
            },
            {
                "x": 69,
                "y": -17
            },
            {
                "x": 70,
                "y": 6
            },
            {
                "x": 71,
                "y": -89
            },
            {
                "x": 72,
                "y": 28
            },
            {
                "x": 73,
                "y": 27
            },
            {
                "x": 74,
                "y": -98
            },
            {
                "x": 75,
                "y": 38
            },
            {
                "x": 76,
                "y": -75
            },
            {
                "x": 77,
                "y": 60
            },
            {
                "x": 78,
                "y": 8
            },
            {
                "x": 79,
                "y": -9
            },
            {
                "x": 80,
                "y": -30
            },
            {
                "x": 81,
                "y": 75
            },
            {
                "x": 82,
                "y": -30
            },
            {
                "x": 83,
                "y": -22
            },
            {
                "x": 84,
                "y": -13
            },
            {
                "x": 85,
                "y": -23
            },
            {
                "x": 86,
                "y": -98
            },
            {
                "x": 87,
                "y": 24
            },
            {
                "x": 88,
                "y": -49
            },
            {
                "x": 89,
                "y": -73
            },
            {
                "x": 90,
                "y": -56
            },
            {
                "x": 91,
                "y": 8
            },
            {
                "x": 92,
                "y": -100
            },
            {
                "x": 93,
                "y": -7
            },
            {
                "x": 94,
                "y": -38
            },
            {
                "x": 95,
                "y": -71
            },
            {
                "x": 96,
                "y": -27
            },
            {
                "x": 97,
                "y": -51
            },
            {
                "x": 98,
                "y": -83
            },
            {
                "x": 99,
                "y": -47
            }
        ]; */

        // console.log(data2);

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