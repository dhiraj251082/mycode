<?php
/*  Plugin Name: LoginRegister
*    Description: A login and Register Plugin
*    Author: Dhiraj Singh
*    Version:1.0
*/

//include

include('include/shortcode/loginregfunction.php');
include('includehooks.php');
include('process/exim_user_login.php');
include('process/exim_user_register.php');
include('process/load_catagory.php');
include('process/load_industry.php');
include('include/shortcode/loaddetails.php');
include('process/insertingdetails.php');



//shortcode
add_shortcode('exim_loginregister','exim_loginregister_function');
add_shortcode('exim_loaddetails','exim_loaddetails_function');


add_action('wp_ajax_nopriv_load_catagory','load_catagory');

add_action('wp_enqueue_scripts', 'hook_script_functon');
add_action('wp_ajax_nopriv_load_catagory','load_catagory');
add_action('wp_ajax_nopriv_load_industry','load_industry');
add_action('wp_ajax_exim_loaddetails_function1', 'exim_loaddetails_function');

//add_action('wp_ajax_nopriv_exim_loaddetails_function1', 'exim_loaddetails_function1');

add_action( 'wp_ajax_nopriv_exim_user_login', 'exim_user_login' );
add_action( 'wp_ajax_nopriv_exim_user_register', 'exim_user_register' );
add_action('wp_ajax_exim_insertingdetails', 'exim_insertingdetails');



?>