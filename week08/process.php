<?php

require_once 'base.php';

if ( ! isset( $_REQUEST['action'] ) ) {
	return;
}

switch ( $_REQUEST['action'] ) {

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

	case 'edit':
		$id = intval( $_REQUEST['id'] );

		$query = $mysqli->prepare( 'SELECT * FROM participant WHERE id = ?' );
		$query->bind_param( 'd', $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error fetching participant: ' . $query->error );
		}

		$result = $query->get_result();
		$row = $result->fetch_array();

		echo json_encode( $row );
		die;

	case 'update':
		$id = intval( $_REQUEST['id'] );
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$race = $_POST['race'];
		$email = $_POST['email'];

		$age = $_POST['age'];

		$query = $mysqli->prepare(
			'UPDATE participant SET firstname = ?, lastname = ?, gender = ?, race = ?, email = ?, age_group = ? WHERE id = ?'
		);

		$query->bind_param( 'ssssssi', $first_name, $last_name, $gender, $race, $email, $age, $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error updating participant: ' . $query->error );
		}

		header( 'Location: participant_list.php?result=updated' );
		die;

	case 'delete':
		$id = intval( $_REQUEST['id'] );

		$query = $mysqli->prepare( 'DELETE FROM participant WHERE id=?' );
		$query->bind_param( 'd', $id );

		if ( ! $query->execute() ) {
			trigger_error( 'Error deleting participant: ' . $query->error );
		}

		header( 'Location: participant_list.php?result=deleted' );
		die;
}
