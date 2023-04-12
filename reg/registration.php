<?php
include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>STUD-INFO.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container"  style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin: auto; width: 30%; padding: 10px; margin-top: 20px;">
			
			<div class="row">
				<div class="col-sm"><br>
				<header style="font-size: 30px; text-align: center;"> 
                <!-- <img src="images/logo.png" alt="logo" width="50px" height="60px"> -->
                <b>Register Student Account</b>
                </header><br>
					<p style="font-size: 15px;">&nbsp;&nbsp;Sign up for account</p>
					<hr class="mb-4">

  <div class="row">
    <div class="col">
    <label for="fname"><b>First Name</b></label>
	<input class="form-control" id="fname" type="text" name="fname" required>
    </div>
	
    <div class="col">
    <label for="lname"><b>Last Name</b></label>
	<input class="form-control" id="lname"  type="text" name="lname" required>
    </div>
	<div class="col">
    <label for="sex"><b>Sex</b></label>
    	<select id="sex" type="sex" class="form-control" name="sex" required>
    	<option selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    </div>
  </div>
<br>
  
  <div class="row">
  <div class="col">
  	<label for="email"><b>Email Address</b></label>
	<input class="form-control" id="email" type="email" name="email" required>
    </div>
    <div class="col">
    <label for="password"><b>Password</b></label>
	<input class="form-control" id="password" type="password" name="password" required>
    </div>
</div>
<br>
	<input class="btn btn-success btn-sm" style="padding: 2px 43%;" type="submit" id="register" name="create" value="Sign Up">
	<hr class="mb-3"><a href="../login.php"><p style="text-align: center;"> Sign in here! </a>
</div>
</div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var fname 	= $('#fname').val();
			var lname	= $('#lname').val();
			var sex 		= $('#sex').val();
			var email = $('#email').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {fname: fname,lname: lname,sex: sex,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>

