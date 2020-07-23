<?php
function exim_user_register(){
  global $wpdb;
  global $current_user;

  $output                 =   [ 'statusnew' => 1 ];
wp_get_current_user();
  
  $catagory = $_POST['new_bussiness'];

  $industry_array= $_POST['new_industry'];
 
    
    /*$nonce                  =   isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';
  
    if( !wp_verify_nonce( $nonce, 'login_auth' ) ){
    
      wp_send_json($output);
    }
   */

    
      $name                   =   sanitize_text_field( $_POST['name'] );
      $username               =   sanitize_text_field( $_POST['username'] );
      $email                  =   sanitize_email( $_POST['email'] );
      $pass                   =   sanitize_text_field( $_POST['pass'] );
      $confirm_pass           =   sanitize_text_field( $_POST['confirm_pass'] );
      $activity =sanitize_text_field($_POST['new_bussiness']);
 
  $industry= sanitize_text_field($_POST['new_industry']);
   //echo "Email\r\n";    
//echo $email;
//echo "\r\n";
//echo "UserName\r\n";
//echo $username;
//echo "\r\n";
//echo "Catagory\r\n";
//echo $activity;
//echo "\r\n";
//echo "Industry\r\n";
//echo $industry;

    
      if( username_exists($username) || email_exists($email)){
        $output['statusnew'] = 3;
    
        $myjson=json_encode($output);
       echo $myjson;
       wp_die();
      }
      
    
      $user_id                =   wp_insert_user([
        'user_login'          =>  $username,
        'user_pass'           =>  $pass,
        'user_email'          =>  $email,
        'user_nicename'       =>  $name
      ]);
    
      if(is_wp_error($user_id) ){
        $output['statusnew'] = 5;
      
        echo $myjson;
        wp_die();
      }
    
      //wp_new_user_notification( $user_id, null, 'user' );
   
    
      $user                   =   get_user_by( 'id', $user_id );
      wp_set_current_user( $user_id, $user->user_login );
      wp_set_auth_cookie( $user_id );
      do_action( 'wp_login', $user->user_login, $user ); 

    //  echo 'Username: ' . $current_user->user_login . "\n"; 
     // echo 'userid: ' .$current_user->ID. "\n";
    //  $customeruserid=$current_user->ID;
    //  echo "new suer id";
    //  echo $customeruserid;

     $insert_user =$wpdb->insert("wp_customer", array(
     "customer_id" => $current_user->ID,
        "fname" => $_POST['name'],
          "email" => $_POST['email'],
          "company_name"=> $_POST['newcompany_name'],
          "owner_name"=> $_POST['newowner_name'],          
          "website"=> $_POST['newwebsite'],
          "activity_status" => '1' ,

  ));
  if(is_wp_error($insert_user)){
     
    $output['statusnew']       = 5;
   
    $myjson=json_encode($output);
    $myjson=json_encode($output);
    echo $myjson;
    wp_die();
   
}
     
  
          //echo "\r\n";
    //echo $maxcustomerid;
   
   /* foreach ($industry as $value) {

      $catagory=$wpdb->insert("wp_productref", array(
        
          "catagory_id"  => $activity,
          "customer_id" =>$maxcustomerid,
      ));
  }*/
  foreach($industry_array as $industry){
 $return_catagory=$wpdb->get_var('call insert_productref('.$catagory.','.$industry.')');
        
  }

  if(is_wp_error($return_catagory)){
     
      $output['statusnew']       = 5;
   
      $myjson=json_encode($output);
      echo $myjson;
      wp_die();
     
}
$output['statusnew']       = 2;
//wp_send_json($output);
//wp_die();
//$output['status']       = 2;
$myjson=json_encode($output);
echo $myjson;
wp_die();


}
?>