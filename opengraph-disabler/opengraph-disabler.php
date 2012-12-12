<?php
/*
Plugin Name: Jetpack OpenGraph Disabler
Plugin URI: https://github.com/dottorblaster/wp-jetpack-opengraph-disabler
Description: A little plugin file to disable Jetpack's OpenGraph integration
Version: 1.0
Author: Alessio Biancalana
Author URI: http://dottorblaster.it
License: GPL2
*/

add_filter( 'jetpack_enable_open_graph', '__return_false' );

?>