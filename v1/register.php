<!DOCTYPE html>
<html>
<head>
	<title>Register Check API</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		form{

			margin: 3% auto;
			width: 50%;
			background: #373f9a;
			padding: 5% 2%;
			color: #fff;
			border-radius: 5px;
		}

	</style>

</head>
<body>

	<div class="container">

		<form action="signup.php" method="POST">

			<div class="form-group">
		    	
		    	<label for="fullname">Full Name:</label>
		    	
		    	<input type="text" class="form-control" id="fullname" name="fullname">
		  	
		  	</div>
		
			<div class="form-group">
		    	
		    	<label for="email">Email address:</label>
		    	
		    	<input type="email" class="form-control" id="email" name="email">
		  	
		  	</div>

			<div class="form-group">
		    	
		    	<label for="phone">Phone Number:</label>
		    	
		    	<input type="text" class="form-control" id="phone" name="phone">
		  	
		  	</div>
		  	
		  	<div class="form-group">
		    	
		    	<label for="pwd">Password:</label>
		    	
		    	<input type="password" class="form-control" id="pwd" name="password">
		  	
		  	</div>

		  	<div class="form-group">
		    	
		    	<label for="pwd">Repeat Password:</label>
		    	
		    	<input type="password" class="form-control" id="pwd" name="repeat-password">
		  	
		  	</div>
		  	
		  	<div class="checkbox">
		    	
		    	<label><input type="checkbox"> Remember me</label>
		  	</div>
		  	
		  	<button type="submit" class="btn btn-primary">Submit</button>
		
		</form>

	</div>

</body>
</html>