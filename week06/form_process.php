<?php

// make an array of fields to check
$fields = [ 'name', 'email', 'phone', 'message' ];

// create empty arrays for storing the field values and error messages
$values = array_fill_keys( $fields, '' );
$errors = array_fill_keys( $fields, '' );

// only validate the form if it's been submitted
if ( ! isset( $_REQUEST['form_submit'] ) ) {
	return;
}

// loop through each of the fields
foreach ( $fields as $field ) {

	// if this is a required field and it's not set, then display an error
	if ( 'message' !== $field && empty( $_REQUEST[ $field ] ) ) {
		$errors[ $field ] = 'This field is required.';
		continue;
	}

	// clean up input value and store it in the $values array
	$value = stripslashes( trim( $_REQUEST[ $field ] ) );
	$value = htmlspecialchars( $value );
	$values[ $field ] = $value;

	// perform extra validation on certain fields
	switch ( $field ) {
		case 'name':
			// use regex to ensure that the name does not contain strange characters
			if ( ! preg_match( '/^[\w\s-.]*$/', $value ) ) {
				$errors[ $field ] = 'Only letters and white space are allowed.';
			}
			break;

		case 'email':
			// use the built-in filter_var() function to ensure the email address is in the correct format
			if ( ! filter_var( $value, FILTER_VALIDATE_EMAIL ) ) {
				$errors[ $field ] = 'Please provide a valid email address.';
			}
			break;

		case 'phone':
			// remove extra characters from the string
			$test_value = str_replace( ' ', '', $value );
			$test_value = str_replace( '-', '', $test_value );
			$test_value = str_replace( '(', '', $test_value );
			$test_value = str_replace( ')', '', $test_value );
			$test_value = rtrim( $test_value, '+' );

			// check that the resulting value is a number ten digits long
			if ( ! is_numeric( $test_value ) || 10 !== strlen( $test_value ) ) {
				$errors[ $field ] = 'Please provide a valid phone number.';
			}
			break;
	}
}

