<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Run for Kids</title>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Run for Kids</a>
			<button class="navbar-toggler" type="button"
			        data-toggle="collapse" data-target="#expandme">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="expandme">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#registration">Registration</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="donation.php">Donation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<div class="container">
	<div class="row">
		<figure class="figure">
			<img src="img/london_marathon.jpg" alt="London Marathon" class="img-fluid">
		</figure>
	</div>
	<div class="row">
		<div class="col">
			<p>Run marathon for children living in poverty. Children living in poverty face barriers to accessing an
				education. Increasing access to education can improve the overall health and longevity of a society and
				growing economies. Yet in many developing countries, children’s access to education can be limited by
				numerous factors. Therefore, we run to raise the fund for kids who need a support for their
				education.</p>
		</div>
		<div class="col">
			<figure class="figure">
				<img src="img/marathon.jpg" alt="Marathon" class="img-fluid rounded">
			</figure>
		</div>
		<div class="col">
			<figure class="figure">
				<img src="img/running.jpg" alt="People running" class="img-fluid rounded">
			</figure>
		</div>
	</div>
</div>

<div class="modal fade" id="registration">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Marathon Registration</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="registration-form">
					<div class="form-group row has-validation">
						<label for="first-name" class="col-sm-4 col-form-label">First Name</label>
						<div class="col-sm-8">
							<input type="text" id="first-name" name="first_name" class="form-control">
							<div class="invalid-feedback">Please enter your first name</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label for="last-name" class="col-sm-4 col-form-label">Last Name</label>
						<div class="col-sm-8">
							<input type="text" id="last-name" name="last_name" class="form-control">
							<div class="invalid-feedback">Please enter your last name</div>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Gender</label>
						<div class="col-sm-8">
							<div class="col-form-label">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-female" value="female">
									<label class="form-check-label" for="gender-female">Female</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-male" value="male">
									<label class="form-check-label" for="gender-male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-other" value="other">
									<label class="form-check-label" for="gender-other">Other</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="race">Race</label>
						<div class="col-sm-8">
							<select name="race" id="race" class="form-control">
								<option value="">Select your race</option>
								<option value="fun-run-5k">Fun Run 5k</option>
								<option value="half-marathon">Half Marathon</option>
								<option value="full-marathon">Full Marathon</option>
							</select>
							<div class="invalid-feedback">Please select the race you want to participate in</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="email">Email</label>
						<div class="col-sm-8">
							<input type="email" id="email" name="email" class="form-control">
							<div class="invalid-feedback">Please enter your email</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="password">Password</label>
						<div class="col-sm-8">
							<input type="password" id="password" name="password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please enter a password</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="confirm-password">Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" id="confirm-password" name="confirm_password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please ensure that both passwords match</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="age">Age</label>
						<div class="col-sm-8">
							<select name="age" id="age" class="form-control">
								<option value="">Select your age group</option>
								<option value="under-18">Under 18</option>
								<option value="18-30">18–30</option>
								<option value="30-50">30–50</option>
								<option value="50-plus">50+</option>
							</select>
							<div class="invalid-feedback">Please select your age group</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<div class="col-sm-12">
							<div class="form-check text-center">
								<input type="checkbox" class="form-check-input" name="toc" id="toc">
								<label for="toc" class="form-check-label">I agree to the terms and conditions.</label>
								<div class="invalid-feedback">Please agree to the terms and conditions</div>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary float-right">Submit</button>
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="validate.js"></script>

</body>
</html>
