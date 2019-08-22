<?php
include('connection.php');
$countError=1;
$error_msg = '';
  
if (isset($_POST)) 
{
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];

		 	if($_POST['name']=='')
		 	{
		 		$error_msg .='Please enter name<br>';
		 		$countError = 2;
		 	}
		 		if($_POST['uname']=='')
		 	{

		 		$error_msg .='Please enter User Name<br>';
		 		$countError = 2;
		 	}
		 	else {
		 		$qry="SELECT * FROM tbl_userregistration WHERE UserName='$uname'";
		 		$run=mysqli_query($conn,$qry);
			 		if($run->num_rows>0)
			 		{
			 			$error_msg .='UserName already taken.......<br>';
			 			$countError = 2;
			 		}
		 	}

		 	if($_POST['mail']=='')
		 	{

		 		$error_msg .='Please enter email address<br>';
		 		$countError = 2;
		 	}
		 		else {
		 		$qry="SELECT * FROM tbl_userregistration WHERE Email='$mail'";
		 		$run=mysqli_query($conn,$qry);
			 		if($run->num_rows>0)
			 		{
			 			$error_msg .='Email already in Use.......<br>';
			 			$countError = 2;
			 		}
		 	}

		 		if($_POST['pass']=='')
		 	{

		 		$error_msg .='Please enter Password<br>';
		 		$countError = 2;
		 	}
		 		if($_POST['cpass']=='')
		 	{

		 		$error_msg .='Please fill confirm password field.<br>';
		 		$countError = 2;
		 	}

			if($countError==1)
			{
					 $qry="INSERT INTO tbl_userregistration(Name,UserName,Email,Password) VALUES ('$name','$uname','$mail','$pass')";
				$run = mysqli_query($conn,$qry);
				
			}
			
			else
			{
				echo  $error_msg;
			}


}
?>




