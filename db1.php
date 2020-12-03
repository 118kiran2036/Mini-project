<?php

$connection=mysqli_connect('localhost','root','','august');
//host,username,password,database name)
if(!$connection){
	echo "DB connection error";
}

?>