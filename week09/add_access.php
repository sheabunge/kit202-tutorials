<?php

/**
 * This is a helper file, used only to augment the participant table and add the 'access' column.
 *
 * It is not part of the website, and the same task can alternatively be done manually through phpMyAdmin.
 */

require_once 'base.php';

global $mysqli;

// add the new database table column.
$mysqli->query( 'ALTER TABLE participant ADD (access ENUM("organiser", "participant") NOT NULL DEFAULT "participant")' );

// set user 1 as an organiser.
$mysqli->query( 'UPDATE participant SET access = "organiser" WHERE id = 1' );
