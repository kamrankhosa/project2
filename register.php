<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">	
 	</script>
 	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
 	<link rel="stylesheet" src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
	body{
		
	}
	section{
		width: 400px;
	}
</style>
</head>
<body class="bg-primary">
	<center>
	<h2>Registeration Form</h2>
	
	<section id="register" style="width: 350px;">
		<div id="success" style="color: green; background-color: white;"></div>
		<div id="error" style="display: none; color: red; background-color: white;"></div>
		<form class="form" method="POST" action="" name="reg_form" id="reg_form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="uname">UserName</label>
				<input type="text" name="uname" class="form-control"id="uname">
				
			</div>
			<div class="form-group">
				<label for="mail">Email</label>
				<input type="Email" name="mail" class="form-control"id="mail">
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="Password" name="pass" class="form-control" id="pass">
			</div>
			<div class="form-group">
				<label for="cpass">Confirm Password</label>
				<input type="Password" name="cpass" class="form-control"id="cpass">
			</div>
			
			<div class="form-group">
				<input type="submit" name="register" value="Register" 
				 class="form-control" id="submit"  onclick="return register_form();" 
				  style="background-color: green; color: white; font-size: 15px; font-weight: bold;">
			</div>
			<div class="form-group">
				<input type="Reset" name="reset" class="form-control" style="background-color: red; color: white; font-size: 15px; font-weight: bold;">
			</div>
		</form>
	</section>
	</center>
</body>
</html>


<script>
      function register_form() {
        $('#reg_form').on('submit', function(e){
  
			e.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'validation.php',
            data: $('form').serialize(),
            success: function (response) {
           $('html, body').animate({scrollTop:0}, 'slow');
              if((response.search('done') != -1))
              {
              	$('#succes').show();
              	$('#succes').html('Registered Successfully......');
              }	
              else
              {	
	              $('#error').show();
	              $('#error').html(response);
              }
            }
          });

        });
       
}

</script>











<!-- <script type="text/javascript">
		$(document).ready(function(){
		$("form[name='reg_form']").validate({
			rules:{
				name:{
					required:true,
					minlength:3
				},
				uname:{
					required:true,
					minlength:3
				},
				mail:{
					required:true,
					email:true
				},
				pass:{
					required:true,
					minlength:4
			},
			cpass:{
				equalTo:'#pass'
			},
			picture:{
				required:true,
				file:true
				
			}
		},
		messages:{
			uname:{
					required:"This field is required",
					minlength:"A Name must be 3 characters long."
				},
					uname:{
					required:"This field is required",
					minlength:"A UserName must be 3 characters long."
				},
				mail:{
					required:"Plese enter your email address",
					email:"Please enter a valid email."
				},
				pass:{
					required:"Please enter your password",
					minlength:"Please enter a 4 character password."
				},
				cpass:{
					equalTo:"Password does not match.."
				},
				picture:{
					required:"Please select a profile picture first"
				
				}
			}
});
	});


		
</script> -->




