<?php

echo "LOADED " . __FILE__ . "\n";

// Report all PHP errors
error_reporting( E_ALL );

// Display errors to the screen
ini_set( 'display_errors', 1 );

// Display PHP startup sequence errors
ini_set( 'display_startup_errors', 1 );

class WP_Class {
}

require_once __DIR__ . '/load.php';