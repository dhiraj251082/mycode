<?php
function exim_insertingdetails(){

    global $current_user;
    global $wpdb; 
  
//$myactivity=$wpdb->get_var("select activity_status from wp_customer");
$thiscatagory=99;
//
//$result = $wpdb->get_results("select id,location_name from wp_geo_locations where location_type='country'");
$product=$_POST['product'];
$service_country=$_POST['service_country'];
$interested_country=$_POST['interested_country'];
$product_name=$_POST['product_name'];
$service_country_name=$_POST['service_country_name'];
$interested_country_name=$_POST['interested_country_name'];
$other_product=$_POST['other_product'];
$other_service_country=$_POST['other_service_country'];
$other_interested_country=$_POST['other_interested_country'];
$iec_code=$_POST['iec_code'];
$venture_id=$_POST['venture_id'];
$venture_name=$_POST['venture_name'];
echo $other_product;
echo "my product";
echo $product;
$output                 =   [ 'status' => 1 ];


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
}

//$mycatagory=$wpdb->get_results($wpdb->prepare("select distinct(catagoryid) as mynewcatagory from wp_productref  where customerid=%d",$current_user->ID));
$getcatagory='call get_catagory('.$current_user->ID.')';
$mycatagory=$wpdb->get_results($getcatagory);
foreach($mycatagory as $catagory)
{
  echo 'my catagory wtith procedure= ' . $catagory->mynewcatagory . "\n";
 $thiscatagory=$catagory->mynewcatagory;

}
if($product==8000)
{
    $product=$wpdb->get_var('call insert_other_product("'.$other_product.'")');
    $product_name=$other_product;
   //$product=$wpdb->get_var('call insert_other_product("'.$other_product.'")');
 echo $product;
 
}
if($interested_country==8000)
{
 
  $interested_country=$wpdb->get_var('call insert_other_country("'.$other_interested_country.'")');
  $interested_country_name=$other_interested_country;
  echo "interested_country";
  echo $interested_country;
}
if($service_country==8000)
{

$service_country=$wpdb->get_var('call insert_other_country("'.$other_service_country.'")');
$service_country_name=$other_service_country;
}


  if($thiscatagory==5 || $thiscatagory==4 )
{
  $venture_name=$venture_id;
  $venture_id=$wpdb->get_var('call insert_venture("'.$venture_id.'")');


  
  }  
  

    
      

 
 
/*
echo "product";
echo $product;
echo  "              ";
echo 'service_country';  
echo $service_country;
echo  "             ";
echo 'interested_country';  
echo $interested_country;
$date = date('y-m-d');
$time=date("h:i:sa");
echo $date;
echo  "             ";
echo $venture_id;*/





    //$myactivity=$wpdb->get_var("select activity_status from wp_customer");
    
    

        $catagory_result=$wpdb->insert("wp_productref2", array(
            "product_id" => $product,
            "service_country"  => $service_country,
            "interested_country" =>$interested_country,
            "product_name" => $product_name,
            "service_country_name"  => $service_country_name,
            "interested_country_name" =>$interested_country_name,
            "customer_id"    =>$current_user->ID,
            "catagory_id"   =>$thiscatagory,
           
           "venture"          =>$venture_id,
           "venture_name"          =>$venture_name,
           
        ));
        if(is_wp_error($catagory_result))
        {
         $output['status']       = 4;
         wp_send_json($output);
        }
        $update_iec=$wpdb->get_var('call update_exim("'.$iec_code.'",'.$current_user->ID.')');
        echo  $update_iec;

        
       if(is_wp_error($update_iec))
       {
        $output['status']       = 3;
        wp_send_json($output);
       }
     
        $output['status']       = 2;
        wp_send_json($output);
       
        wp_die();
}
?>