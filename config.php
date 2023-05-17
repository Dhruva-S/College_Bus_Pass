<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_pass";

  $con = mysqli_connect($servername,$username,$password,$dbname);
  //check
  if($con){
      echo "";
  }
  else{
      die("Connection-Error: ".mysqli_connect_error());
  }
?>
