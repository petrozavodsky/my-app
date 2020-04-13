<?php
/*
 * Plugin Name: MyDapp
 * Author: Petrozavodsky
 */
namespace vasia\petia;

if(file_exists(plugin_dir_path(__FILE__)."vendor/autoload.php")) {
	require_once(plugin_dir_path(__FILE__) . "vendor/autoload.php");
}



function abc(){
	var_dump(function_exists('register_extended_taxonomy') );
}


abc();