<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}
h1{
  text-align: center;
  padding: 16px;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 50px;
  max-width: 330px;
  height: 450px;
  padding: 30px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 15px 0 25px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #26A7DB;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

#main{
  width: 100%;
  height: 100vh;
  background-image: url(first.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
}
nav{
  width: 100%;
  height: 80px;
  background-color: black;
  line-height: 80px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.8s all;
}
nav ul li:hover{
  background-color: #78BEDA;
}

nav ul{
  float: right;
  margin-right: 30px;
}
nav ul li a{
  text-decoration: none;
  color: white;
  padding: 80px;
}
</style>
</head>
<body>
<div id="main">
  <nav>
    <img src="log.png" width="120" height="80">
    <ul>
      <li><a href="#home"><i class="fa fa-fw fa-home"></i>HOME</a></li>
      <li><a href="#about"><i class="fa fa-fw fa-file-text-o"></i>ABOUT US</a></li>
      <li><a href="#contact"><i class="fa fa-fw fa-envelope"></i>CONTACT</a></li>    
    </ul>
  </nav>
  <div class="bg-img">
    <form class="container" method="post" action="drop.php">
      <h1>Login</h1>
      <hr>
      <br>
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="btn">Login</button>

      <p><br>Not Registered Yet?<a href="#">   Register Here</p>
    </form>
  </div>
</div>
</body>
</html>

