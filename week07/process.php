<?php

require_once 'base.php';

if ( ! isset( $_REQUEST['action'] ) ) {
	return;
}

switch ( $_REQUEST['action'] ) {

	case 'fetch':
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
		$id = intval( $_POST['id'] );
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
