<?php
function learning_json_function()
{
  wp_register_script(
    'learing_json',
    plugins_url('js/practice.js', __FILE__),
    array('jquery'),
    '1.1',
    true
  );
  wp_register_script(
    'learing_json2',
    plugins_url('js/practice2.js', __FILE__),
    array('jquery'),
    '1.1',
    true
  );
  wp_register_script(
    'learing_json3',
    plugins_url('js/insert.js', __FILE__),
    array('jquery'),
    '1.1',
    true
  );
    wp_register_script(
        'bootbox',
        plugins_url('js/bootbox.min.js', __FILE__),
        array('jquery'),
        '1.1',
        true
    );

  wp_localize_script(
    'learing_json',
    'ajax_object_learning',
    array('ajaxurl' => admin_url('admin-ajax.php'),
    'home_url'      =>  home_url( '/' ))
  );
  wp_enqueue_script('jquery');
  wp_enqueue_script('learing_json');
  wp_enqueue_script('learing_json2');
  wp_enqueue_script('learing_json3');


 
    wp_enqueue_script('bootbox');

  // wp_enqueue_script('learing_json2');
   //wp_enqueue_script('learing_json_admin');
  // wp_dequeue_script('country_state_city_js_new');
 // wp_deregister_script('learning_json_myadmin');
 // wp_enqueue_script('learing_json_myadmin');
 /*wp_dequeue_script('learing_json');
  wp_deregister_script('learing_json');
 wp_dequeue_script('learing_json2');
  wp_deregister_script('learing_json2');*/
}
