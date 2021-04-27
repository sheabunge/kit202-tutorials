<?php
// database connection
global $mysqli;
$mysqli = new mysqli( 'localhost', 'username', 'password', 'kit202_tutorials' );

function esc_html( $output ) {
	return htmlspecialchars( $output );
}

function esc_attr( $output ) {
	return htmlspecialchars( $output, ENT_QUOTES );
}
