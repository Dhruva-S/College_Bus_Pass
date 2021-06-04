<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<script src="https://use.fontawesome.com/9b35969c63.js"></script>
    <title>Student Dashboard</title>
	<style>
	@import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  text-decoration: none;
}

html {
  font-family: "Montserrat", sans-serif;
}
body{
background: linear-gradient(to left, #33ccff -28%, #9966ff 100%);
}

.body-container {
  height: 100vh;
  width: 100%;
background: linear-gradient(to left, #33ccff -28%, #9966ff 100%);
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

nav {
  width: 100%;
  height: 14vh;
  /* border: 2px solid; */
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
  border-bottom: 2px solid #000;
  /* background: #fff; */
}

#nmamit {
  position: absolute;
  left: 0;
  margin-left: 8px;
  background: #fff;
  height: 10vh;
  flex-shrink: 2;
}

.flash-card {
  width: 100%;
  height: 86%;
  /* background-color: grey; */
  display: flex;
  flex-direction: row;
  /* flex-wrap: wrap; */
  justify-content: center;
  align-items: center;
}

.card {
  height: 400px;
  width: 400px;
  /* background-color: #d2d8d7; */
  background-color: #fff;
  margin: 10px 10px;
  border: 1px solid #8161c2;
  border-radius: 12px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  transition: all 0.2s ease-in;
}

.card-img {
  width: 45%;
  height: 40%;
  border: 2px solid #e1f1ff;
  margin: 0 0 20px;
  padding: 0 0 10px;
}

.header-text {
  color: #888;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 0 0 40px;
  /* border: 2px solid red; */
  font-size: 22px;
  padding: 0 0 10px;
  border-bottom: 2px solid #e1f1ff;
}

.card-text {
  margin: 30px 0 0;
  color: #6338b8;
  font-weight: 600;
  letter-spacing: 1px;
  font-size: 18px;
  padding: 0 0 10px;
  /* border: 2px solid red; */
}

.card:hover {
  height: 410px;
  width: 410px;
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
    <a href="adminlogin.php"><i class="fa fa-fw fa-sign-out"></i> Sign Out</a> 
 
</div>
<br>
<center><h1 style="color:red;">WELCOME ADMIN</h1></center>
    <div class="body-container">
     
            
      <div class="flash-card">
        <a href="studentdetails.php">
          <div class="card">
            <p class="header-text">CHECK STUDENT DETAILS</p>
            <img class="card-img" src="photos/checkstudent.png" alt="pass" />
            <p class="card-text">Click here to check student details</p>
          </div>
        </a>
        <a href="iframemain.html">
          <div class="card">
            <p class="header-text">ANALYSIS</p>
            <img class="card-img" src="photos/graph.png" alt="status" />
            <p class="card-text">Click here to get quick analysis</p>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>
