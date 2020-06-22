<?php
/*  Plugin Name: LoginRegister
*    Description: A login and Register Plugin
*    Author: Dhiraj Singh
*    Version:1.0
*/

//include

include('include/shortcode/loginregfunction.php');
include('includelogin.php');
include('process/exim_user_login.php');
include('process/exim_user_register.php');


//shortcode
add_shortcode('exim_loginregister','exim_loginregister_function');

add_action('wp_enqueue_scripts', 'hook_script_functon', 100);

add_action( 'wp_ajax_nopriv_exim_user_login', 'exim_user_login' );
add_action( 'wp_ajax_nopriv_exim_user_register', 'exim_user_register' );


?>