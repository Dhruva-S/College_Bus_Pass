<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://use.fontawesome.com/9b35969c63.js"></script>


    <!------------------- BOOTSTRAP ---------------------------------------->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!----------------------CSS------------------------------->
	<style type="text/css">
		.wrap {
	    width: 100%;
	    overflow:auto;


	  
	}
	.y{
		 display:inline-block;
		 vertical-align: top;
		 width: 700px;

	}

	.tab{
		padding-top: 10px;
	}
		
	</style>
	






    <link rel="stylesheet" href="app.css" />
    <title>Bus Pass Management System</title>

    
	<style>
body{
		margin:0;
		
	}
#tblCustomers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tblCustomers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tblCustomers tr:nth-child(even){background-color: #99ff66;}

#tblCustomers tr:hover {background-color: #ddd;}

#tblCustomers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
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


	.button {
		
  position:relative;
  right: 500px;
  bottom: -600px;
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	</style>
  

  <!------------------NAVBAR---------------------------->
	<div class="header">
	<img src="photos/nittelogo.png" alt="logo" class="nittelogo"/>
	</div>
	
<div class="navbars">
    <a href="studentportal.php"><i class="fa fa-fw fa-arrow-left"></i> BACK</a> 
</div>
	

	</head>

<!------------------------------BODY----------------------------------->
<body >



<div class="row ">
	<div class="col-md-2">
	</div>

	<div class="col-md-8 alert-success" style="padding-top: 10px;">
	<h2 align="center">You already have a bus pass! </h2>
</div>

<div class="col-md-2">
	</div>
</div>
	

	<!-------------------------------- SEAT DISPLAY -------------------------------->

				<div class="y">	
				<?php include('bus_seat.php'); ?> 
				</div>

	
			
				
	<!-----------------------STUDENT DETAILS DISPLAY -------------------------------->


	<?php 

$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));

$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));
$email=$_SESSION['email_id'];



$sql1="SELECT usn,name,email_id,address,starting_location FROM student WHERE email_id='$email' ";

$result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));

    if($result1==true)
      {
        $rows=mysqli_fetch_assoc($result1);
        $name=$rows['name'];
        $usn=$rows['usn'];
        $email_id=$rows['email_id'];
        $address=$rows['address'];
        $starting_location=$rows['starting_location'];
      }

$sql2="SELECT bus_id,seat_no FROM booking_details WHERE email_id='$email' ";


$result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));

    if($result2==true)
      {
        $rows=mysqli_fetch_assoc($result2);
        $bus_id=$rows['bus_id'];
        $seatno=$rows['seat_no'];
      }

	?>

				<div class="y tab">
					
		
		<table id="tblCustomers" class="table table-striped table-hover">
           <th colspan="2" style="background-color:yellow;"><img src="photos/nittelogo.png" width="400px" height="50px">
		   <br><br><center><span style="font-size:30px;padding-top:10px;color:red;">COLLEGE BUS PASS</span></center>
		   </th>
       
		<tr>
		<td><h3  style="text-align:center;">Name:</h3></td>
		<td ><h4 class="text-info"><?php echo $name; ?></h4></td>
		</tr>


		<tr>
		<td><h3  style="text-align:center;">USN:</h3></td>
		<td ><h4 class="text-info"><?php echo $usn; ?></h4></td>
		</tr>

		<tr>
		<td><h3 style="text-align:center;">Email-id:</h3></td>
		<td ><h4 class="text-info"><?php echo $email_id; ?></h4></td>
		</tr>

		<tr>
		<td><h3 style="text-align:center;">Bus ID:</h3></td>
		<td ><h4 class="text-info"><?php echo $bus_id; ?></h4></td>
		</tr>


		<tr>
		<td><h3 style="text-align:center;">Seat Number:</h3></td>
		<td ><h4 class="text-info"><?php echo $seatno; ?></h4></td>
		</tr>


		<tr>
		<td><h3  style="text-align:center;">Starting location:</h3></td>
		<td ><h4 class="text-info"><?php echo $starting_location; ?></h4></td>
		</tr>

		<tr>
		<td><h3  style="text-align:center;">Address:</h3></td>
		<td ><h4 class="text-info"><?php echo $address; ?></h4></td>
		</tr>
	
		
		</table>
		</div>
<input type="button" class="button" id="btnExport" value="Generate Pdf" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("studentbuspass.pdf");
                }
            });
        });
    </script>
		
		


	

</body>
</html>