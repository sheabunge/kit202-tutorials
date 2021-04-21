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

<?php

include 'partials/header.php';

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

					<td><?= esc_html( $row['lastname'] . ', ' . $row['firstname'] ); ?></td>

					<td><?= isset( $races[ $row['race'] ] ) ? $races[ $row['race'] ] : '–'; ?></td>

					<td><a href="mailto:<?= esc_attr( $row['email'] ); ?>"><?= esc_html( $row['email'] ); ?></a></td>

					<td><?= isset( $age_groups[ $row['age_group'] ] ) ? $age_groups[ $row['age_group'] ] : '–'; ?></td>

					<td>
						<a href="#" class="btn btn-dark" data-toggle="modal" data-target="#user-edit-modal"
						   data-id="<?= intval( $row['id'] ); ?>">Edit</a>

						<a href="process.php?action=delete&id=<?= intval( $row['id'] ); ?>" class="btn btn-danger"
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
include 'partials/footer.php';

?>

<script>
	$(document).on('show.bs.modal', '#user-edit-modal', e => {
		console.log($(e.relatedTarget).data('id'));

		$.ajax({
			url: 'process.php',
			method: 'POST',
			data: {
				action: 'edit',
				id: $(e.relatedTarget).data('id')
			},
			dataType: 'json',
			success: data => {
				console.log(data);

				$('#edit-id').val(data.id);
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
