<!-------------------------Inserting the signup values of the user to the database ----------------------------->

<?php
session_start();
include 'config.php';

		$_SESSION['uname']="-1"; //dummy assignment
		$_SESSION['email_id']="-1";//dummy assignment

			$signupusername=$_POST['name'];
			$emailid=$_POST['email'];

			$signuppassword=$_POST['pass'];
			$_SESSION['uname']=$signupusername;
			$_SESSION['email_id']=$emailid;
			



$conn=mysqli_connect($servername,$username,$password) or die(mysqli_error($conn));
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));


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
$sql="INSERT into signup VALUES ('$emailid','$signupusername','$signuppassword')";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if($result==true)
			{
				echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully Signed up!!');
                window.location.href='home.php';
                </script>");

			}
?>
