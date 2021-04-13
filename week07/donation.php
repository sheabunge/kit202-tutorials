<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Running Marathon</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Run for Kids</a>
			<button class="navbar-toggler" type="button"
			        data-toggle="collapse" data-target="#expandme">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="expandme">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html">Registration</a>
					</li>
					<li class="nav-item active">
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

<main class="donation">
	<div class="panel">
		<div class="pricing-plan">
			<img src="icons/sole_running.png" alt="" class="running-img">
			<h2 class="running-header">Personal</h2>
			<ul class="running-features">
				<li class="running-features-item">Sole Running</li>
				<li class="running-features-item">You are running soley</li>
			</ul>
			<span class="running-donation"> $10</span>
			<a href="#/" class="donate-button">Donate</a>
		</div>

		<div class="pricing-plan">
			<img src="icons/pair_running.png" alt="" class="running-img">
			<h2 class="running-header">Pair</h2>
			<ul class="running-features">
				<li class="running-features-item">Pair Running</li>
				<li class="running-features-item">You are running with a partner</li>
			</ul>
			<span class="running-donation"> $20</span>
			<a href="#/" class="donate-button">Donate</a>
		</div>

		<div class="pricing-plan">
			<img src="icons/group_running.png" alt="" class="running-img">
			<h2 class="running-header">Group</h2>
			<ul class="running-features">
				<li class="running-features-item">Group running</li>
				<li class="running-features-item">You are running with a group</li>
			</ul>
			<span class="running-donation"> $100</span>
			<a href="#/" class="donate-button">Donate</a>
		</div>
	</div>
</main>
</body>
</html>
