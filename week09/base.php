<?php
/**
 * Base file which initialises global variables, session information,
 * and contains helper functions.
 */

global $mysqli;

// initialise a connection to the database.
$mysqli = new mysqli( 'localhost', 'username', 'password', 'kit202_tutorial06' );

// start the session.
session_start();

// set default values if they are empty.
if ( ! isset( $_SESSION['session_id'] ) ) {
	$_SESSION['session_id'] = $_SESSION['session_email'] = $_SESSION['session_access'] = '';
}

/**
 * Escape HTML in text so that it is safe for output.
 *
 * @param string $output
 *
 * @return string
 */
function esc_html( $output ) {
	return htmlspecialchars( $output );
}

/**
 * Escape HTML in text so that it is safe for output as an attribute value.
 *
 * @param string $output
 *
 * @return string
 */
function esc_attr( $output ) {
	return htmlspecialchars( $output, ENT_QUOTES );
}

/**
 * Determine whether the current user is logged in.
 *
 * @return bool
 */
function is_logged_in() {
	return ! empty( $_SESSION['session_id'] );
}

/**
 * Determine whether the current user has organiser access.
 *
 * @return bool
 */
function is_organiser() {
	return 'organiser' === $_SESSION['session_access'];
}
