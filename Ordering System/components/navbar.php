<style>
  .navbar {
  position: sticky;
  top: 0; 
  width: 100%;
  z-index: 1000; 
  background-color: rgba(0, 0, 0, 1);
  color: black; 
  text-align: center; 
}

.navbar ul {
  list-style-type: none;
  padding: 0;
}

.navbar ul li {
  display: inline-block; /* Change display to inline-block */
  margin-right: 20px; /* Adjust spacing between list items */
}

.navbar ul li a {
  text-decoration: none;
  color: white; /* Set the color of all links to white */
  transition: color 0.3s ease; /* Add transition effect to color change */
}

.navbar ul li a:hover {
  color: gray; /* Change color on hover */
}
.navbar img {
  width: 50px; /* Adjust the width of the logo */
  margin-right: 10px; /* Adjust spacing between the logo and list items */
  vertical-align: middle; /* Align the logo vertically with list items */
}



</style>
<nav class="navbar">
  <div class="container-fluid">
  <img src="images/orgnic logo.png" alt="Organic Logo">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact US</a></li>
    </ul>
  </div>
</nav>