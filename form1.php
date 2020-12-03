<!DOCTYPE html>
<html>
<head>
<title>Database</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
	  font-family: Arial, Helvetica, sans-serif;
}	
#form{
	height: 450px;
	width: 500px;
    background:white;
	letter-spacing: 1.5px;
	border: 10px solid crimson;
	text-align: center;
	justify-contet: center;
	margin: auto;
	padding: 10px;
	margin-top: 50px;
	box-shadow: 0px 0px 10px 0px #000000;
}

h2{
	color: crimson;
}
h3{
	color: tomato;	
	margin:auto;
}
#button{
	height:40px;
	width:200px;
	border-radius:15px;
	font-weight: bold;
	background:whitesmoke;
}	
#button:hover{
	background: crimson;
}	
</style>
</head>
<body>
<form method="post" action="insert.php">
<div id="form">

<h2>TERM CALCULATION</h2>
    <h3><label>Please Enter Details of the Student:</label></h3>
	<b><label>Name:</label><br></b>
	<input type="text" name="name" required><br><br>
	
	<b><label>Roll No:</label><br></b>
	<input type="text" name="roll" required><br><br>
	
	<b><label>Enter the marks of Experiment:</label><br></b>
	<input type="text" name="experiment" required><br><br>
	

	<b><label>Enter the marks of Mini project:</label><br></b>
	<input type="text" name="project" required><br><br>
	
	<b><label>Enter the marks of Attendance:</label><br></b>
	<input type="text" name="attendance" required><br><br>
	
	<input id="button" type="submit" value="Submit">
</div>
</form>
</body>
</html>