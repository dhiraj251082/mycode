<?php

function hook_script_functon(){
 
  
    wp_register_script( 
        'login_main', plugins_url( '/assets/js/scripts.js', __FILE__ ),
         ['jquery'], '1.1', 
         true 
    );
    wp_register_script( 
        'load_catagory', plugins_url( '/assets/js/load_catagory.js', __FILE__ ),
         ['jquery'], '1.1', 
         true 
    );
    wp_register_script( 
        'load_details', plugins_url( '/assets/js/load_details.js', __FILE__ ),
         ['jquery'], '1.1', 
         true 
    );
    wp_register_script(
        'bootstrap-multiselect',
        plugins_url('/assets/js/bootstrap-multiselect.js', __FILE__),
        array('jquery'),
        '1.1',
        true
    );
    wp_register_script(
        'js_validate',
        plugins_url('/assets/js/jquery.validate.min.js', __FILE__),
        array('jquery'),
        '1.1',
        true
    );
    wp_register_script(
        'myinsertjsnew',
        plugins_url('/assets/js/myinsert.js', __FILE__),
        array('jquery'),
        '1.1',
        true
    );
    wp_register_style(
        'mycss',
    plugins_url('/assets/css/mycss.css', __FILE__));
  
    wp_register_script(
        'bootbox',
        plugins_url('/assets/js/bootbox.min.js', __FILE__),
        array('jquery'),
        '1.1',
        true
    );
    wp_enqueue_script('jquery');

    wp_localize_script( 'login_main', 'login_main_object', [
        'ajax_url'      =>  admin_url( 'admin-ajax.php' ),
        'home_url'      =>  home_url( '/' ),
        'test_page'     => site_url('http://localhost/wp/testpage-2/'),
      
    ]); 
    wp_enqueue_script('bootstrap-multiselect');
  
    wp_enqueue_script('login_main');
   
    
    //wp_enqueue_script( 'login_main' );
    wp_enqueue_script('login_register');
    wp_enqueue_script('load_catagory');
    wp_enqueue_script('load_industry');  
    wp_enqueue_style('mycss');
    wp_enqueue_script('myinsertjsnew');
    wp_enqueue_script('js_validate');
   // wp_enqueue_script('load_details');
  
    wp_enqueue_script('bootbox');
}   
?>
