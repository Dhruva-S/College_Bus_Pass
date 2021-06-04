<!-------------------------validating login credentials  ----------------------------->

<?php
session_start();
include "config.php";

	$_SESSION['email_id']="-1";
	$_SESSION['uname']="-1";

		
		
			$emailid=$_POST['email'];
			$_SESSION['email_id']=$emailid;
			$loginpassword=$_POST['password'];
			
			



$conn=mysqli_connect($servername,$username,$password) or die(mysqli_error($conn));
//name of the database created is demo
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));


$sql="SELECT username FROM signup WHERE email_id='$emailid' AND password='$loginpassword' ";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
 
		if($result==true)
			{

				$rowcount=mysqli_num_rows($result);

				if($rowcount==1)
				{
					$rows=mysqli_fetch_assoc($result);
					$uname=$rows['username'];
					$_SESSION['uname']=$uname;



						echo ("<script LANGUAGE='JavaScript'>
		                window.alert('Successfully Logged in!!');
		                window.location.href='home.php';
		                </script>");
				}

				else 
				{
					echo ("<script LANGUAGE='JavaScript'>
		                window.alert('Invalid credentials!!');
		                window.location.href='index.php#loginfocus';
		                </script>");
				}

				
			}
?>
