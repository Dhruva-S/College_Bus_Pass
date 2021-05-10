<!-------------------------validating login credentials  ----------------------------->

<?php
session_start();
		
	$_SESSION['email_id']="-1";
	$_SESSION['username']="-1";

		
		
			$emailid=$_POST['email'];
			$_SESSION['email_id']=$emailid;
			$password=$_POST['password'];
			
			



$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));

$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));


$sql="SELECT username FROM signup WHERE email_id='$emailid' AND password='$password' ";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
 
		if($result==true)
			{

				$rowcount=mysqli_num_rows($result);

				if($rowcount==1)
				{
					$rows=mysqli_fetch_assoc($result);
					$uname=$rows['username'];
					$_SESSION['username']=$uname;



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
