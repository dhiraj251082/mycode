<?php

function exim_loginregister_function(){
//Step working fine if to see user is logged in
  if(is_user_logged_in(  )){
  return '';
}

$formHTML               = file_get_contents( 'templatelogin.php', true );
// working fine for getting the temlate

$formHTML               = str_replace( 
  'NONCE_FIELD_PH', 
  wp_nonce_field( 'login_auth', '_wpnonce', true, false ),
  $formHTML
);
$formHTML               = str_replace(
  'SHOW_REG_FORM',
  ( !get_option('users_can_register') ? 'style="display:none;"' : ''),
  $formHTML
);//also worrking to find the hidden filled in template


  return $formHTML;//also working
}