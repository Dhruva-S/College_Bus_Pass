
<?php 

session_start();

$sessionemail=$_SESSION['email_id'];
?>





<!------------------------------ BUS FORM VALIDATION -------------------------------->

<?php 
//first check if emalid is already present in student table to verify if he has a bus pass
//if he does have a bus pass display that he does else display Successfully Booked Bus Pass 
if(isset($_POST['name']))
{

$email=$_POST['email_id'];



$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));

$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));


$usn=$_POST['usn'];
$sqlusn="SELECT * FROM student WHERE usn='$usn' ";

$resultusn=mysqli_query($conn,$sqlusn) or die(mysqli_error($conn));
 
   
        $rowcount=mysqli_num_rows($resultusn);

        if($rowcount!=0)
        {

         
                    echo ("<script LANGUAGE='JavaScript'>

                    window.alert('Bus pass with this USN already exists!');
                   
                    </script>");

                
        }
        else 
        {

//Emil-id validation.Email-id of every registered bus pass should be unique
$sql="SELECT * FROM student WHERE email_id='$email' ";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
 
    if($result==true)
      {

        $rowcount=mysqli_num_rows($result);

        if($rowcount!=0)
        {

         
                    echo ("<script LANGUAGE='JavaScript'>

                    window.alert('You already have a bus pass!');
                   
                    </script>");

                
        }


        else 
        {
           


      $starting_location=$_POST['starting_location'];
     // echo $starting_location;

        /* Check if buses with specific starting locations are available */
        $sql1="SELECT bus_id
        FROM bus_details
        WHERE total_strength<60 AND bus_id in 
                     (SELECT bus_id 
                     FROM bus_routes
                      where starting_location='$starting_location') 

        LIMIT 1";
        /* End of query */
  

        $result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                $rows=mysqli_fetch_assoc($result1);


                      $bus_id=$rows['bus_id'];
                       

         
            if($result1==true)
              {
                $rowcount1=mysqli_num_rows($result1);

            //if no buses are available with that starting location
            if($rowcount1==0)
              {
                   echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Buses with this starting location is full !');
                   
                    </script>");
              }
              else {
                /*
                $rows=mysqli_fetch_assoc($result1);


                      $bus_id=$rows['bus_id'];*/
                      $usn=$_POST['usn']; 
                      $name=$_POST['name']; 
                       $dob=$_POST['dob'];
                      $year=$_POST['year'];
                      $branch=$_POST['branch'];
                      $address=$_POST['address'];
                      $mobile_no=$_POST['mobile_no'];           
                      $email_id=$_POST['email_id'];
                      $gender=$_POST['gender'];
                      $date=date('Y-m-d');

                      //Condition1
                      if($email_id!=$sessionemail)
                      {
                      	 echo ("<script LANGUAGE='JavaScript'>
                   		 window.alert('Enter a valid Email id !');
                    	
                    	 </script>");
                      }


                      //condition2
                      $sqlcheck="SELECT * FROM signup WHERE email_id='$email_id' ";
                      $resultcheck=mysqli_query($conn,$sqlcheck) or die(mysqli_error($conn));
                       $rows=mysqli_fetch_assoc($resultcheck);
                        $rowcountcheck=mysqli_num_rows($resultcheck);

                        if($rowcountcheck==0)
                        {

	                    echo ("<script LANGUAGE='JavaScript'>
	                    window.alert('Enter a valid Email id !');
	                                    
	                    </script>");

                        }

                        else 
                        {

                      $sql2="SELECT total_strength FROM bus_details WHERE bus_id='$bus_id' ";
                      $result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));

                      //$total;
                      //if($result2==true)
                      //{
                        $rows=mysqli_fetch_assoc($result2);
                        $total=$rows['total_strength']+1;
                        
                      //}


                      $sql3="UPDATE bus_details set total_strength='$total' WHERE bus_id='$bus_id' ";
                       $result3=mysqli_query($conn,$sql3) or die(mysqli_error($conn));
                       

                      $sql4="INSERT INTO student values ('$usn','$name','$dob','$year','$branch','$address','$mobile_no','$starting_location','$email_id',
                      '$gender')";
                       $result4=mysqli_query($conn,$sql4) or die(mysqli_error($conn));



                      $sql5="INSERT INTO booking_details values ('$bus_id','$total','$usn','$date','$email_id','$starting_location') ";
                      $result5=mysqli_query($conn,$sql5) or die(mysqli_error($conn));
                      


          echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Successfully Booked Bus Pass !');
                   window.location.href='studentportal.php';
                    </script>");
      				}
                }
        }
      
}
}
}
}
?>

<!-------------------------End of Bus form validation -------------------------------->











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://use.fontawesome.com/9b35969c63.js"></script>

    <link rel="stylesheet" href="app.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="busform.css"/>
    <title>Bus Pass Management System</title>

    
  <style>
body{
    margin:0;
    
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

  <body style="background: linear-gradient(to right, #8161c2, #2ebf91) ;">
  <div class="header">
  <img src="photos/nittelogo.png" alt="logo" class="nittelogo"/>
  </div>
  
<div class="navbars">
     <a href="studentportal.php"><i class="fa fa-fw fa-arrow-left"></i> BACK</a>
 
</div>


  
   
  
  <!--<body style="background: linear-gradient(to right, #8161c2, #2ebf91) ;">-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="jquery.js"></script>
  <br><br>


<!------------------------------- BUS FORM---------------------------------------------->

<form enctype="form-data/multipart" method="POST" action="busform.php">
 <div class="container" style="max-width:900px;background: linear-gradient(to top, #66ffff 0%, #ff99ff 100%);">
 <h2>BUS PASS APPLICATION FORM</h2>
 <div class="row">
   <div class="col-sm-6">
   <label for="sn">STUDENT NAME</label>
    <input type="text" id="sn" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required />
    </div>
    <div class="col-sm-6">
      <label for="rl">USN</label>
      <input type="text" id="rl" name="usn" maxlength="12" value="<?php if(isset($_POST['usn'])) echo $_POST['usn']; ?>" required />
    </div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="dateofbirth">DATE OF BIRTH</label>
<input type="date" id="dateofbirth" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>" required  />
</div>


<div class="col-sm-6">
<label for="mail">EMAIL ID</label>
<input type="email" id="mail" name="email_id" value="<?php if(isset($_POST['email_id'])) echo $_POST['email_id']; ?>" required />
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label>MOBILE NUMBER</label>
<input type="text" name="mobile_no" maxlength="10" value="<?php if(isset($_POST['mobile_no'])) echo $_POST['mobile_no']; ?>"  required>
</div>
<div class="col-sm-6">
<label>GENDER</label>
 <select id="gen" name="gender" value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>">
         <option value="male">MALE</option>
         <option value="female">FEMALE</option>
         <option value="others">OTHERS</option>
       </select>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label for='y'>YEAR</label>
 <select id="y" name="year" value="<?php if(isset($_POST['year'])) echo $_POST['year']; ?>" required>
         <option  value="first">FIRST YEAR</option>
         <option  value="second">SECOND YEAR</option>
         <option value="third">THIRD YEAR</option>
		 <option value="fourth">FOURTH YEAR</option>
       </select>
</div>
<div class="col-sm-6">
<label for='b'>BRANCH</label>
 <select id="b" name="branch" value="<?php if(isset($_POST['branch'])) echo $_POST['branch']; ?>" required>
         <option value="civil">CIVIL</option>
         <option value="cse">COMPUTER SCIENCE </option>
         <option value="mechanical">MECHANICAL</option>
		 <option value="electrical">ELECTRICAL</option>
		  <option value="electronics">ELECTRONICS AND COMMUNICATION</option>
		   <option value="biotech">BIOTECHNOLOGY</option>
       </select>
</div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <label for="a">ADDRESS</label>
  <input type="text" name="address" id="a" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" required />
  </div>
  </div>
  <!--
  <div class="row">
  <div class="col-sm-6">
  <label for="cty">CITY</label>
  <input type="text" name="city" id="cty" required>
  </div>
  -->
  <div class="col-sm-6">
  <label for="l">PICKUP LOCATION</label>
 <select id="l" name="starting_location" value="<?php if(isset($_POST['starting_location'])) echo $_POST['starting_location']; ?>"  required>
 <option value="" selected><p><u>LOCATION /</u><u> PRICE</u></p></option>
         <option value="Jyothi">JYOTHY / &#8377 20000</option>
         <option value="kottara">KOTTARA /&#8377 18000</option>
         <option value="Padubidri">PADUBIDRI      / MNG1 /&#8377 10000</option>
		 <option value="Bejai">BEJAI / &#8377 20000</option>
		  <option value="Kateel">KATEEL / &#8377 10000</option>
		   <option value="Belman">BELMAN / &#8377 5000</option>
		   <option value="Ladyhill">LADYHILL /  &#8377 20000</option>
		   <option value="Panambur">PANAMBUR / &#8377 18000</option>
		   <option value="Mulky">MULKY /  &#8377 15000</option>
       </select>
  </div>
  </div><br><br>

  <center>
  <input type="submit" value="SUBMIT" name="submit" class="button">
</center> 
 <br>
  </div>
  </form>


</body>
</html>

