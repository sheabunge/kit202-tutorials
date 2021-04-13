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
						<a class="nav-link" href="participant_list.php">Participants</a>
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

<?php include 'partials/registration.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="validate.js"></script>

</body>
</html>
