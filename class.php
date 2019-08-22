<?php
include ('connection.php');
	function insert(){
		if (isset($_POST['register']) && !empty($_FILES["picture"]["name"])) {
			$name=$_POST['name'];
			$uname=$_POST['uname'];
			$mail=$_POST['mail'];
			$pass=md5($_POST['pass']);
			$cdate=date("Y/m/d");
			$user="user";
			$flname=$_FILES["picture"]['name'];
			$tmp_name = $_FILES["picture"]['tmp_name'];
			$targetDir = "./images/";
			$targetFilePath = $targetDir . $flname;
			move_uploaded_file($_FILES['picture']['tmp_name'], $targetFilePath);
			$qry="INSERT INTO tbl_userregistration(Name,UserName,Email,Password, Profile, reg_Date,User_Type) VALUES ('$name','$uname','$mail','$pass','$flname','$cdate','$user')";
			$run = mysqli_query($conn,$qry);
			if ($run) {
				echo "<script>location.replace('thanx.html')</script>";
			}
			else{
				echo "Error";
			}
		}

			}



			function delete(){
			// 	$server="localhost";
			// 		$username="root";
			// 		$password="";
			// 		$database="newdb";
			// 		$conn=mysqli_connect($server,$username,$password,$database);
			// 		if($conn->connect_error)
			// {
			// 		die("Connection Error : . $conn->connect_error");
 		// 	}
 		// 	else{
 		// 		echo "connected";
 		// 		exit();
 		// 	}

			if(isset($_POST['delete'])){
				$id=$_POST['id'];
				echo $id;
				exit();
				$sql="SELECT uID, UserName, Password,User_Type FROM tbl_userregistration WHERE uID='$id' OR UserName='$id'";
				$run=mysqli_query($conn,$sql);
				if ($run->num_rows>0) {

				$rows=$run->fetch_assoc();
				
				$update="DELETE FROM tbl_userregistration WHERE uID='$id' OR UserName='$id'";
				$runup=mysqli_query($conn,$update);
				echo "<script>alert('User Deleted')</script>";
		}
	else	{
		echo "<script>alert('User not Found')</script>";
			}
	}


			}
		

			
?>