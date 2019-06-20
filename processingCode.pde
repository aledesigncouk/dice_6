int i;

void setup() {
  size(800, 600, P3D);
  smooth();
  frameRate(60);

  // data generator
  

  while (i<10) {
    switch(int(random(0, 6))) {
    case 0:
      textSize(32);
      text("zero", 10, 30);

      break;
    case 1:
      textSize(32);
      text("one", 10, 30);


      break;
    }
    i++;
  }
}

void draw() {
  //First I find all my rotation angles in radians so that center screen is (0,0)
  float rotx = (mouseY/600.0)*-2*PI+PI;
  float roty = (mouseX/800.0)*2*PI-PI;

  background(0);
  translate(800/2, 600/2, 0); // center drawing start point in screen

  // rotate drawing coordinates according to user input variables
  rotateX(rotx); 
  rotateY(roty);

  // box
  strokeWeight(1);
  stroke(255);
  noFill();
  box(350); 
  
  // axes
  strokeWeight(0.5);
  stroke(255, 0, 0);
  line(0, -300, 0, 0, 300, 0); // Y axis
  stroke(0, 255, 0);
  line(-400, 0, 0, 400, 0, 0); // Y axis
  stroke(255, 255, 0);
  line(0, 0, -300, 0, 0, 300); // Y axis

  // origin
  strokeWeight(4);
  stroke(255);
  point(0, 0, 0);
  
  
  // graph // test OK
  strokeWeight(4);
  line(0,0,0,30,0,0);
  line(30,0,0,30,30,0);
  line(30,30,0,30,30,30);
}
