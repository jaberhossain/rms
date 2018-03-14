<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	
		
		<div class=" col-lg-8 col-lg-offset-2">
		<center> <b><h1> Register here </h1></b>
		</center>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<form action="<?php echo base_url('index.php/welcome/register_done'); ?>"" method="post">
			<div class="form-group">
			Full Name <br>
			<input type="text" class="form-control" name="fname" id="fname"
			placeholder="Enter Full Name. . . ."> 
			</div>
			<br>
			<div class="form-group">
			Username <br> 
			<input type="text" class="form-control" name="uname" id="uname"
			placeholder="Enter Username. . .">
			</div>
			<br>
			<div class="form-group">
			Age <br> 
			<input type="text" class="form-control" name="age" id="age"
			placeholder="Enter Age. . ."> 
			</div>
			<br>
			<div class="form-group">
			Mobile <br> 
			<input type="text" class="form-control" name="mobile" id="mobile"
			placeholder="Enter Mobile NUmber. . ."> 
			</div>
			<br>
			<div class="form-group">
			Password <br> 
			<input type="password" class="form-control" name="pass" id="pass"
			placeholder="Enter New Password. . ."> 
			</div>
			<br>
			<div class="form-group">
			Email <br> 
			<input type="text" class="form-control" name="email" id="email"
			placeholder="Enter Email. . ."> 
			</div>
			<br>
			<div class="form-group">
			Confirm Password <br>
			<input type="password" class="form-control" name="cpass" id="cpass"
			placeholder="confirm Password. . .">
			</div>
			<br>
			<div>
			<center><button class="btn btn-primary">Register </button> &nbsp &nbsp 
			<a href=<?php echo base_url('index.php/welcome/login'); ?>>Back</a>
			</center>
			</div>
		</form>
		</div>
	
</body>
</html>