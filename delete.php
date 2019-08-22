
<!DOCTYPE html>
<html>
<head>
	<title>User Status</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">	
 	</script>
 	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
 	<link rel="stylesheet" src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	
</head>
<body class="bg-primary">
	
	<center>
	<section style="width: 350px; align-items: center; text-align: center;">
		<h2>Enter ID OR User Name</h2>
		<form class="form" name="delete-form" action="" method="POST" class="delete">
			<div class="form-group">
				<input type="text" name="id" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="delete" value="Delete" class="form-control" id="delete" 
				 style="background-color: #eb0915; color: white; font-size: 15px; font-weight: bold;">
			</div>
			
		</form>
	</section>
	</center>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("form[name='delete-form']").validate({
			rules:{
				id:{
					required:true,
					
				}
				
			},
			messages:{
					id:{
					required:"This field is required",
	
				}

			}
		});
	});
</script>

<script type="text/javascript">
	$.ajax({
		type: 'post',
		url: 'class.php'
		});




</script>