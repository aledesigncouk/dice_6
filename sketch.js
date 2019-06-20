const tsn = 100; // number of the trows
const sgm = 20; // lenght of the single segment

var data = dataGenerator(tsn, sgm);

function dataGenerator(n, unit) {
    const graph = []; // main array
    let i = 0;
    let y = 0;
    let x = 0;
    let z = 0;

    while (i < n) {
        var point = new Object();

        switch (Math.floor(Math.random() * 6)) {
            case 0: // 1 x++
                point.x = x += unit;
                point.y = y;
                point.z = z;
                graph.push(point);
                break;
            case 1: // 2 y++
                point.x = x;
                point.y = y += unit;
                point.z = z;
                graph.push(point);
                break;
            case 2: // 3 z++
                point.x = x;
                point.y = y;
                point.z = z += unit;
                graph.push(point);
                break;
            case 3: // 4 z--
                point.x = x;
                point.y = y;
                point.z = z -= unit;
                graph.push(point);
                break;
            case 4: // 5 y--
                point.x = x;
                point.y = y -= unit;
                point.z = z;
                graph.push(point);
                break;
            case 5: // 6 x--
                point.x = x -= unit;
                point.y = y;
                point.z = z;
                graph.push(point);
                break;
        }
        i++;
    }
    return graph;
}

console.log(data);

// get minimum and maximum  values !! RETURN THE FULL INDEXED OBJECT NOT ONLY THE COORDINATE VALUE !!
// data.getMin(x, y or z)
Array.prototype.getMin = function (coor) {
    return data.reduce(function (prev, curr) {
        return prev[coor] < curr[coor] ? prev : curr;
    });
}
// data.getMax(x, y or z)
Array.prototype.getMax = function (coor) {
    return data.reduce(function (prev, curr) { // data. or this.
        return prev[coor] > curr[coor] ? prev : curr;
    });
}
// check alternative way, maybe find the abs value in one shot.
function getAbs(a, b){
    return Math.max(Math.abs(a),Math.abs(b));
}

let xMax = data.getMax('x').x;
let xMin = data.getMin('x').x;
let yMax = data.getMax('y').y;
let yMin = data.getMin('y').y;
let zMax = data.getMax('z').z;
let zMin = data.getMin('z').z;

// get absolute maximun values / distance from the origin

let xAbs = getAbs(xMax, xMin);
let yAbs = getAbs(yMax, yMin);
let zAbs = getAbs(zMax, zMin);

let dMax = Math.max(xAbs, yAbs, zAbs); 





// enable text fonts for WEBGL environment // **********************************
function preload() {
    font = loadFont("https://cdnjs.cloudflare.com/ajax/libs/topcoat/0.8.0/font/SourceCodePro-Bold.otf");
}

function setup() {
    createCanvas(windowWidth, windowHeight, WEBGL);
    background(0);
    frameRate(60);
}

function draw() {
    var j = 0; //polyline index
    var x1 = 0;
    var y1 = 0;
    var z1 = 0;
    var rotx = (mouseY / 640) * -2 * PI + PI;
    var roty = (mouseX / 480) * 2 * PI - PI;

    background(0);


    // rotate drawing coordinates according to user input variables
    if (mouseIsPressed) {
        rotateX(rotx);
        rotateY(roty);
    }

    // box
    strokeWeight(1);
    stroke(255, 0, 0);
    noFill();
    box(sgm * 10);
    strokeWeight(0.1);
    fill(225, 255, 0, 20);
    sphere(dMax);


    // axes

    strokeWeight(1);
    stroke(255, 255, 0);
    line(0, -20 * sgm, 0, 0, 20 * sgm, 0); // Y axis
    stroke(0, 255, 0);
    line(-20 * sgm, 0, 0, 20 * sgm, 0, 0); // X axis
    stroke(0, 0, 255);
    line(0, 0, -20 * sgm, 0, 0, 20 * sgm); // Z axis
    
    /*
    // text
    fill(255);
    textFont(font, 30);
    textAlign(CENTER, CENTER);
    text('y s', 0, -100);
    text('x', 10, 10);
    //colorMode(HSB);
    */

    // origin
    strokeWeight(1);
    stroke(255);
    point(0, 0, 0);

    

    // polyline loop
    strokeWeight(1);
    
    while (j < data.length) {
        line(x1, y1, z1, data[j].x, data[j].y, data[j].z);
        x1 = data[j].x;
        y1 = data[j].y;
        z1 = data[j].z;
        j++;
    }
}