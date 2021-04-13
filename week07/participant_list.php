<?php require 'base.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Run for Kids: Participant List</title>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.php">Run for Kids</a>
		<button class="navbar-toggler" type="button"
		        data-toggle="collapse" data-target="#expandme">
			<span class="fas fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="expandme">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#registration">Registration</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="donation.php">Donation</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="participant_list.php">Participants</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<?php

$result = $mysqli->query( 'SELECT * FROM participant' );

$races = [
	'5k'   => 'Fun Run 5k',
	'half' => 'Half Marathon',
	'full' => 'Full Marathon',
];

$age_groups = [
	'kids'    => 'Kids (<18)',
	'ya'      => 'Young Adults (18–30)',
	'adults'  => 'Adults (30–50)',
	'seniors' => 'Seniors (50+)',
];

?>
<main role="main" class="container">

	<?php if ( isset( $_GET['result'] ) ) { ?>
		<div class="alert alert-success" role="alert">
			<?php if ( 'deleted' === $_GET['result'] ) { ?>
				Participant <strong>deleted</strong> successfully.
			<?php } elseif ( 'updated' === $_GET['result'] ) { ?>
				Participant <strong>updated</strong> successfully.
			<?php } ?>
		</div>
	<?php } ?>

	<div class="table-responsive">

		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Race</th>
				<th>Email</th>
				<th>Age Group</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php while ( $row = $result->fetch_array() ) { ?>
				<tr>
					<td><?= intval( $row['id'] ); ?></td>

					<td><?= esc_html( $row['firstname'] . ', ' . $row['lastname'] ); ?></td>

					<td><?= isset( $races[ $row['race'] ] ) ? $races[ $row['race'] ] : '–'; ?></td>

					<td><a href="mailto:<?= esc_attr( $row['email'] ); ?>"><?= esc_html( $row['email'] ); ?></a></td>

					<td><?= isset( $age_groups[ $row['age_group'] ] ) ? $age_groups[ $row['age_group'] ] : '–'; ?></td>

					<td>
						<a href="#" class="btn btn-dark" data-toggle="modal" data-target="#user-edit-modal"
						   data-id="<?= intval( $row['id'] ); ?>">Edit</a>

						<a href="process.php?delete=<?= intval( $row['id'] ); ?>" class="btn btn-danger"
						   onclick="return confirm('Are you sure you want to delete this participant?');">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

	<button class="btn btn-primary float-right" data-toggle="modal" data-target="#registration">Add</button>
</main>

<?php

include 'partials/edit.php';
include 'partials/registration.php';

?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="validate.js"></script>

<script>
	$(document).on('show.bs.modal', '#user-edit-modal', e => {
		console.log($(e.relatedTarget).data('id'));

		$.ajax({
			url: 'process.php',
			method: 'POST',
			data: {
				edit: $(e.relatedTarget).data('id')
			},
			dataType: 'json',
			success: data => {
				console.log(data);

				$('#update-user-id').val(data.id);
				$('#edit-first-name').val(data.firstname);
				$('#edit-last-name').val(data.lastname);
				$('#edit-gender-' + data.gender).prop('checked', true);
				$('#edit-race').val(data.race);
				$('#edit-email').val(data.email);
				$('#edit-age').val(data.age_group);

				$('#edit_user_modal').modal('show');
			}
		});
	});
</script>

</body>
</html>
