<?php


 
function exim_loaddetails_function(){
  

//Step working fine if to see user is logged in
?>

                <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/bootstrap-multiselect.css" />
		<script src="/assets/js/jquery-1.11.1.min.js"></script>
		<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/js/bootbox.min.js"></script>
	
      <script src="/assets/js/bootstrap-multiselect.js"></script> -->
      <link rel="stylesheet" href="/assets/css/form-elements.css">
		<link rel="stylesheet" href="/assets/css/style.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<link rel="stylesheet" href="/assets/css/bootstrap-multiselect.css" />
<script src="/assets/js/bootstrap-multiselect.js"></script>

<?php
  
global $current_user;
global $wpdb;
//$myactivity=$wpdb->get_var("select activity_status from wp_customer");
$thiscatagory=99;
$sql = 'call getcountry()';
//$result = $wpdb->get_results("select id,location_name from wp_geo_locations where location_type='country'");
$result = $wpdb->get_results($sql);


$venture_sql = 'call get_venture()';
//$result = $wpdb->get_results("select id,location_name from wp_geo_locations where location_type='country'");
$venture_result = $wpdb->get_results($venture_sql);

wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 //echo 'Username: ' . $current_user->user_login . "\n"; 
 ?>
 <h1>
   <?php
 echo 'WelCome: ' . $current_user->display_name . "\n"; ?>
 </h1>
 <?php
 //echo 'You have chosen activity: ' . $current_user->activity_status . "\n";
 echo 'Your Userid' . $current_user->ID .  "\n";
 
 //$myactivity=$wpdb->get_var("select activity_status from wp_customer where customer_id=1258");
 } 
 $bussiness=0;

   // $myactivity=$wpdb->get_var("select activity_status from wp_customer where customer_id=%d", $current_user->ID );
   $myactivity_status=$wpdb->get_results($wpdb->prepare("select activity_status from wp_customer  where customer_id=%d",$current_user->ID)); 
$getcatagory='call get_catagory('.$current_user->ID.')';
//$mycatagory=$wpdb->get_results($wpdb->prepare("select distinct(catagoryid) as mynewcatagory from wp_productref  where customerid=%d",$current_user->ID));

$mycatagory=$wpdb->get_results($getcatagory);
$myproduct=$wpdb->get_results("select * from wp_product");

     foreach($mycatagory as $catagory)
     {
       echo 'my catagory wtith procedure= ' . $catagory->mynewcatagory . "\n";
      $thiscatagory=$catagory->mynewcatagory;
       
     }
     echo 'ths variable catagory with outside loop= ' . $thiscatagory . "\n";
     
    foreach ($myactivity_status as $activity)

  {
   $bussiness= $activity->activity_status;

  }
  
  if ($bussiness==1)
{
    if($thiscatagory==4 || $thiscatagory==5 )
    {
    include 'serviceprovidertemplate.php';
    
    }
    if($thiscatagory==6)
    {
    
   
    include 'manufacturetemplate.php';
    }
    if($thiscatagory==7 || $thiscatagory==8  )
    {
      include 'importexporttemplate.php';
      
      //include 'formtemplate.php';
    
    }
    if($thiscatagory>=9 &&  $thiscatagory<=13 )
   {
     include 'misctemplate.php';
     
   }
  }
  if($bussiness==0)
  {
  ?>
  <h1>
  <?php echo "Please Register to Access the Page"; ?>
  </h1>

<?php

  }

  
 
// working fine for getting the temlate

//also worrking to find the hidden filled in template
/*$formHTML               = str_replace( 
  'NONCE_FIELD_PH', 
  wp_nonce_field( 'login_auth', '_wpnonce', true, false ),
  $formHTML
);

  return $formHTML;//also working;  */

  


}



