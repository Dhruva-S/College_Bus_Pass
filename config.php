<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_booking";

  $con = mysqli_connect($servername,$username,$password,$dbname);
  //check
  if($con){
      echo "";
  }
  else{
      die("Connection-Error: ".mysqli_connect_error());
  }
?>