<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6" >
				<h2>Login Form</h2>
				<form action="validation.php" method="post" >
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">
						
					</div>
						<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				
			</div>
			<div class="col-lg-6" >
				<h2>Signin Form</h2>
				<form action="registration.php " method="post" >
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">
						
					</div>
						<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Signin</button>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>