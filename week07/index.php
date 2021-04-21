<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Run for Kids</title>
</head>
<body>

<?php include 'partials/header.php'; ?>

<div class="container">
	<?php if ( isset( $_GET['result'] ) ) { ?>
		<div class="alert alert-success text-center" role="alert">
			<?php if ( 'registered' === $_GET['result'] ) {
				echo 'Registration successful!';
			} ?>
		</div>
	<?php } ?>
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

<?php include 'partials/footer.php'; ?>

</body>
</html>
