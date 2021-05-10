<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://use.fontawesome.com/9b35969c63.js"></script>

    <link rel="stylesheet" href="app.css" />
    <title>Bus Pass Management System</title>
	<style>
body{
		margin:0;
		
	}


p.form-text {
  font-weight: bold;
  font-size: 30px;
  margin: 8px;
  line-height: 30px;
}

p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 10px 0 10px;
}



button {
  border-radius: 20px;
  border: 1px solid black;
  background: #8186c2;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
  margin: 10px 0;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #fff;
}

.adminlogin {
  height: 100vh;
  width: 100%;
  font-family: "Montserrat", sans-serif;
  background: linear-gradient(to right, #8161c2, #2ebf91) no-repeat 0 0 / cover;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.admin-container {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  width: 400px;
  max-width: 100%;
  min-height: 500px;
}

.admin-container form {
  background: #fff;
  display: flex;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.admin-container input {
  background: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

#adminicon {
  width: 150px;
  height: 150px;
}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  scroll-behavior: smooth;
}


.header{
	
	padding:20px;
	background-color:#ffff1a;
}
.nittelogo{
	
	height:60px;
	width:400px;
}
.navbars {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbars a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbars a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbars a {
    float: none;
    display: block;
  }
}
	
	</style>
  </head>

  <body>
	<div class="header">
	<img src="photos/nittelogo.png" alt="logo" class="nittelogo"/>
	</div>
	
<div class="navbars">
    <a class="active" href="####"><i class="fa fa-fw fa-user"></i> Admin</a> 
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
 
</div>
<!-- BELOW IS ADMIN LOGIN -->

    <div class="adminlogin" id="adminlogin">
      <div class="admin-container">
        <form action="adminlogin.php" method="post" id="admin1">
          <p class="form-text">Admin login</p>
          <div class="admin-icon">
            <img id="adminicon" src="photos/adminicon.png" alt="admin" />
          </div>
          <input type="text" name="aname" placeholder="Username" />
          <input type="password" name="apassword" placeholder="Password" />
          <button type="submit" name="submit" form="admin1">Log In</button>
        </form>
      </div>
    </div>

    <script src="main.js"></script>
	</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","bus_booking");
if(!$con)
{
	echo "failed to connect to database";
}
if(isset($_POST['submit']))
{
	$name=$_POST['aname'];
	$pass=$_POST['apassword'];
	$sql="select * from admin where username='$name' and password='$pass'";
	$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
	{
echo "<script>alert('signed in successfully');
	window.location.href='adminportal.php';
	</script>";
}
else
{
     echo "<script>alert('error login')</script>";
     echo "<script>window.open('adminlogin.php','_self')</script>";
}
}
mysqli_close($con);


?>