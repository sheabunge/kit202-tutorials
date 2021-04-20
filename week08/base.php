<?php
// database connection
$mysqli = new mysqli( 'localhost', 'username', 'password', 'kit202_tutorial06' );

// start the session
session_start();

// set default values if they are empty.
if ( ! isset( $_SESSION['session_id'] ) ) {
	$_SESSION['session_id'] = $_SESSION['session_email'] = $_SESSION['session_access'] = '';
}

function esc_html( $output ) {
	return htmlspecialchars( $output );
}

function esc_attr( $output ) {
	return htmlspecialchars( $output, ENT_QUOTES );
}

function is_logged_in() {
	return ! empty( $_SESSION['session_id'] );
}
