<?php

require_once 'base.php';

global $mysqli;

// only continue if an action has been sent to this page.
if ( ! isset( $_REQUEST['action'] ) ) {
	return;
}

// perform a different task based on the desired action.
switch ( $_REQUEST['action'] ) {

	case 'register':
		// add a new user to the database table.

		if ( empty( $_POST['email'] ) || empty( $_POST['password'] ) ) {
			trigger_error( 'Cannot add a participant without an email and password' );
			exit;
		}

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = isset( $_POST['gender'] ) ? $_POST['gender'] : '';
		$race = $_POST['race'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$password = $_POST['password'];

		// prepare the SQL query, safely including the provided data.
		$sql = 'INSERT INTO participant (firstname, lastname, gender, race, email, password, age_group) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$query = $mysqli->prepare( $sql );

		$query->bind_param( 'sssssss', $first_name, $last_name, $gender, $race, $email, $password, $age );

		if ( ! $query->execute() ) {
			trigger_error( 'Error adding participant: ' . $query->error );
		}

		header( 'Location: index.php?result=registered' );
		die;

	case 'login':
		$user = trim( $_REQUEST['login_email'] );
		$pass = trim( $_REQUEST['login_password'] );

		$query = $mysqli->prepare( 'SELECT * FROM participant WHERE email = ?' );
		$query->bind_param( 's', $user );

		if ( ! $query->execute() ) {
			trigger_error( 'Error fetching participant: ' . $query->error );
		}

		$row = $query->get_result()->fetch_array( MYSQLI_ASSOC );

		if ( $row && $user === $row['email'] && $pass === $row['password'] ) {
			$_SESSION['session_id'] = $row['id'];
			$_SESSION['session_user'] = $row['firstname'];
			$_SESSION['session_email'] = $row['email'];
			$_SESSION['session_access'] = $row['access'];

			echo json_encode( [ 'success' => true ] );
		} else {
			echo json_encode( [ 'success' => false ] );
		}

		die;

	case 'fetch':
		// fetch a user's details from the database.
		$id = intval( $_REQUEST['id'] );

		// prepare the query safely, without including the ID in the query itself.
		$query = $mysqli->prepare( 'SELECT * FROM participant WHERE id = ?' );
		$query->bind_param( 'd', $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error fetching participant: ' . $query->error );
		}

		// fetch the resulting row and send to the browser as JSON.
		$result = $query->get_result();
		$row = $result->fetch_array();

		echo json_encode( $row );
		die;

	case 'update':
		// update a user's details in the database.
		$id = intval( $_POST['id'] );
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$race = $_POST['race'];
		$email = $_POST['email'];
		$age = $_POST['age'];

		// prepare the SQL query, safely including the sent data.
		$query = $mysqli->prepare(
			'UPDATE participant SET firstname = ?, lastname = ?, gender = ?, race = ?, email = ?, age_group = ? WHERE id = ?'
		);

		$query->bind_param( 'ssssssi', $first_name, $last_name, $gender, $race, $email, $age, $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error updating participant: ' . $query->error );
		}

		// redirect back to the participant list with a status message.
		header( 'Location: participant_list.php?result=updated' );
		die;

	case 'delete':
		// delete a user from the database table.
		$id = intval( $_REQUEST['id'] );

		// prepare the SQL query, safely including the ID data.
		$query = $mysqli->prepare( 'DELETE FROM participant WHERE id=?' );
		$query->bind_param( 'd', $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error deleting participant: ' . $query->error );
		}

		// redirect back to the participant list with a status message.
		header( 'Location: participant_list.php?result=deleted' );
		die;
}
