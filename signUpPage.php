<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/signUpPage.css">
	<link rel="icon" href="images/logoSmall.PNG">
</head>
<body>
	<div class="container-fluid" id="top">
		<div class="row">
			<a href="index.php">click here to go back to homepage</a>
			<div class="col-md-12">
				<img src="images/registertoday.png">
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="registration.php" method="post">
					<div class = "form-group col-xs-4">
						<label>Full Name</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class = "form-group col-xs-4">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Sign Up</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>