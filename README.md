# 3D Path Visualization of a Dice Roll Simulation:
![dice-6](https://github.com/user-attachments/assets/596c8915-f71f-4a4f-a533-dad6660ce034)

### Project Description
This project simulates a random walk in 3D space, inspired by the behavior of a 6-faced die. The simulation randomly chooses one of six possible directions (positive or negative x, y, or z axes) in each step, and tracks the path of the movement over a series of steps. The path is visualized in an interactive 3D environment using p5.js, a powerful JavaScript library for creative coding and 3D graphics.

The simulation represents the random walk as a sequence of points that are plotted in a 3D coordinate system. Each step of the random walk is determined by the outcome of a simulated 6-sided die roll, with the possible moves being:

- **Positive x** (increasing the x coordinate)
- **Negative x** (decreasing the x coordinate)
- **Positive y** (increasing the y coordinate)
- **Negative y** (decreasing the y coordinate)
- **Positive z** (increasing the z coordinate)
- **Negative z** (decreasing the z coordinate)

The outcome of each roll determines the movement of the "walker," with the current position updated accordingly. As a result, the path of the walk is a random sequence of movements that form a continuous trajectory across a 3D space.

#### Key Features:
**Random Walk Simulation:** The movement follows a random process similar to rolling a 6-sided die, where each roll randomly dictates the direction of movement along the x, y, or z axes.
**Data Generation:** The code generates a series of random steps, with each step resulting in a change of coordinates (x, y, z) based on one of the six directions.
**3D Path Visualization: **Using p5.js, the project visualizes the random walk in a 3D space. The path is rendered as a polyline that connects the generated points, offering a clear representation of the trajectory.
**Interactive 3D Visualization: **The p5.js WEBGL renderer allows the user to rotate and interact with the 3D visualization. The user can adjust the view by moving the mouse to inspect the path from different angles.
**Bounding Box & Spheres:** A red bounding box is drawn around the path, and a yellow sphere representing the maximum distance from the origin is rendered, providing a visual cue about the extent of the path.
**Dynamic Axes: **The X, Y, and Z axes are drawn in different colors to serve as reference lines, aiding the user in understanding the spatial relationships of the trajectory.

#### Technologies Used:
**p5.js:** A JavaScript library for creative coding that simplifies the creation of graphics and interactive visualizations, used here to render the 3D scene.
**JavaScript:** The programming language used to implement the simulation logic and generate the random walk.
**HTML/CSS:** Basic web technologies used to structure and style the page.
**WEBGL:** A web graphics library that allows for rendering 3D content within a browser using the p5.js WEBGL renderer.

####Project Structure:

**Data Generation:** The dataGenerator function simulates the random movement, generating a series of steps along the x, y, or z axes and tracking the corresponding coordinates.

**Visualization:** The generated data is used to render the random walk as a 3D polyline, with each point in the path being connected by a line to form the trajectory.

**Axes and Scaling:** The X, Y, and Z axes are dynamically scaled based on the maximum values generated during the random walk, ensuring the entire path is clearly visible within the 3D scene.

**Bounding Box & Sphere:** A red box is drawn around the path, and a yellow sphere is rendered to visualize the maximum distance from the origin, based on the farthest point reached during the walk.

**Objective:** This project aims to demonstrate how to visualize a random walk in 3D space using p5.js while simulating the behavior of a 6-sided die. It helps in understanding random processes and how they can be visualized in an interactive 3D environment.

#### Potential Use Cases:
**Educational Tool:** Teaching the concept of random processes, random walks, and 3D data visualization in mathematics, physics, or computer science.
**Simulation Visualization: **Providing insights into the behavior of random systems in 3D space, and how randomness can be represented in a graphical format.
**Data Science & Probability:** Analyzing how random data behaves in 3D space and visualizing uncertainty or stochastic processes in a way that's easy to interpret.

#### How to Run:
Download or clone the repository.
Open the HTML file in a modern web browser.
The 3D visualization will automatically load and display the simulation of the random walk.

**Future Improvements:**
- Customizable Parameters: Add user controls (e.g., input fields or sliders) to change the number of steps in the random walk, segment length, or the size of the sphere.
- Path Coloring: Implement color gradients along the path to visually distinguish different phases of the walk or represent other data points like velocity or direction.
- Save or Export Path: Allow the user to export or save the generated path as a 3D model or 2D projection.
- Enhanced Interactivity: Add keyboard controls to modify the view or reset the simulation, allowing more flexibility in exploring the random walk.
