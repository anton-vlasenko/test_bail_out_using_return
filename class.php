<?php
echo "LOADED " . __FILE__ . "\n";

if ( class_exists( 'WP_Class' ) ) {
	return;
}
class WP_Class {
}