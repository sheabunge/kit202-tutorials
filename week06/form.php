<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php require_once 'form-process.php'; ?>

<div class="container">
	<h1>Contact</h1>
	<p>Contact us today, and get reply within 24 hours!</p>

	<form method="post" action="">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" class="form-control<?= $errors['name'] ? ' is-invalid' : '' ?>"
			       placeholder="Your Name"
			       value="<?= htmlspecialchars( $values['name'], ENT_QUOTES ); ?>">
			<div class="invalid-feedback"><?= htmlspecialchars( $errors['name'] ); ?></div>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control<?= $errors['email'] ? ' is-invalid' : '' ?>"
			       placeholder="someone@example.com"
			       value="<?= htmlspecialchars( $values['email'], ENT_QUOTES ); ?>">
			<div class="invalid-feedback"><?= htmlspecialchars( $errors['email'] ); ?></div>
		</div>

		<div class="form-group">
			<label for="phone">Mobile Phone</label>
			<input type="tel" id="phone" name="phone" class="form-control<?= $errors['phone'] ? ' is-invalid' : '' ?>"
			       placeholder="0400 000 000"
			       value="<?= htmlspecialchars( $values['phone'], ENT_QUOTES ); ?>">
			<div class="invalid-feedback"><?= htmlspecialchars( $errors['phone'] ); ?></div>
		</div>

		<div class="form-group">
			<label for="message">Message</label>
			<textarea id="message" name="message" class="form-control<?= $errors['message'] ? ' is-invalid' : '' ?>"
			          placeholder="Write your message here"><?= htmlspecialchars( $errors['message'] ); ?></textarea>
			<div class="invalid-feedback"><?= htmlspecialchars( $errors['message'] ); ?></div>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="form_submit" value="Submit">
		</div>
	</form>

	<?php
	// display a message if the form is submitted and there were no input errors
	if ( isset( $_REQUEST['form_submit'] ) && ! array_filter( $errors ) ) { ?>
		<p class="alert alert-success" role="alert">Message sent, thank you for contacting us!</p>
	<?php } ?>
</div>

</body>
</html>
