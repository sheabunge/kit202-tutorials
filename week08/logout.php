<?php

require_once 'base.php';

// destroy the saved session
session_destroy();

// redirect to the main page
header( 'Location: index.php' );
