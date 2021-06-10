<!-------------------------validating login credentials  ----------------------------->

<?php
session_start();
include "config.php";

	$_SESSION['email_id']="-1";
	$_SESSION['uname']="-1";

		
		
			$emailid=$_POST['email'];
			$_SESSION['email_id']=$emailid;
			$userEnteredPass=$_POST['password'];
			
			



$conn=mysqli_connect($servername,$username,$password) or die(mysqli_error($conn));
//name of the database created is demo
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));


$sql="SELECT * FROM signup WHERE email_id='$emailid'";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
 
		if($result==true)
			{

				$rowcount=mysqli_num_rows($result);

				if($rowcount==1)
				{
					$rows=mysqli_fetch_assoc($result);
					$uname=$rows['username'];
					$_SESSION['uname']=$uname;
					$dbPass=$rows['password'];

					if(password_verify( $userEnteredPass,$dbPass)){	 //checking if the user entered password matches the password in database
						echo ("<script LANGUAGE='JavaScript'>				
		                window.alert('Successfully Logged in!!');
		                window.location.href='home.php';
		                </script>");
						}

					else {											//Wrong password
					echo ("<script LANGUAGE='JavaScript'>
		                window.alert('Incorrect password!!');
		                window.location.href='index.php#loginfocus';
		                </script>");
					}
				}

				else {												//wrong username
					echo ("<script LANGUAGE='JavaScript'>
		                window.alert('Invalid email id !!');
		                window.location.href='index.php#loginfocus';
		                </script>");
				}

				
			}
?>
