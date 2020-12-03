<html>
<head>
<style>
*{
	margin: 0px;
	padding: 15px;
	font-family: Georgia;
}
body{
    background-image: url(second.jpg);
    background-size: cover;
  	background-repeat: no-repeat;
  	position: relative;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 20px;
  font-size: 20px;
  border: 2px solid black;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  left: 46%;
  right: auto;
  transform: translate(-50%, 0);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 18px 18px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
h2{
	color: red;
}
h2,h1{
	text-align: center;
	padding: 30px;
}
	
</style>
</head>
<body>

<h1>Select your Class</h1>
<h2>Computer Branch</h2>

<div class="dropdown">
  <button class="dropbtn">TE / A</button>
  <div class="dropdown-content">
  <a href="form1.php">Kiran</a>
  <a href="#">Aishwarya</a>
  <a href="#">Nidhi</a>
  <a href="#">Mohit</a>
  <a href="#">Priyank</a>
  <a href="#">Harsh</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">TE / B</button>
    <div class="dropdown-content">
      <a href="#">Vini</a>
      <a href="#">Saniya</a>
      <a href="#">Aditi</a>
      <a href="#">Mihir</a>
      <a href="#">Deep</a>
      <a href="#">Kartik</a>
   </div>
</div>
</body>
</html>

    
