<!-------------------------Inserting the singup values of the user to the database ----------------------------->

<?php
session_start();
		$_SESSION['username']="-1"; //dummy assignment
		$_SESSION['email_id']="-1";//dummy assignment

			$username=$_POST['name'];
			$emailid=$_POST['email'];

			$password=$_POST['pass'];
			$_SESSION['username']=$username;
			$_SESSION['email_id']=$emailid;
			



$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
//name of the database created is demo
$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));


$sql1="SELECT * FROM signup WHERE email_id='$emailid' ";
$result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
if($result1==true)
			{

				$rowcount=mysqli_num_rows($result1);

				if($rowcount!=0)
				{
				echo ("<script LANGUAGE='JavaScript'>
                window.alert('This account already exists!');
                window.location.href='index.php#loginfocus';
                </script>");
				}

			}



//inserting data nto the table
$sql="INSERT into signup VALUES ('$emailid','$username','$password')";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if($result==true)
			{
				echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully Signed up!!');
                window.location.href='home.php';
                </script>");

			}
?>
