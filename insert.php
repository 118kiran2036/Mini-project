<?php

//database connection

require('db1.php');

//pass value
$name=$_POST['name'];
$roll=$_POST['roll'];
$experiment=$_POST['experiment'];
$project=$_POST['project'];
$attendance=$_POST['attendance'];
$to=$experiment+$project+$attendance;
    $avg=$to/3;

$ins="INSERT INTO mini(name,roll,experiment,project,attendance,total,average)
      VALUES('$name','$roll','$experiment','$project','$attendance','$to','$avg')";

$status=mysqli_query($connection,$ins);

if($status){
    echo "<script>alert('Success');
	
	window.location='form1.php';
    </script>";
 }
 else{
	echo "<script>alert('Fail');
	window.location='form1.php';
	</script>";
}	
?>