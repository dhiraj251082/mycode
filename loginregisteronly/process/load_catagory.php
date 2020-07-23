<?php
function load_catagory(){
    global $wpdb;
    $acatagory = $wpdb->get_results( $wpdb->prepare("select * from wp_catagory"));
    if ( $acatagory) {
        ?>
        <select name="catagory" class="catagory" id="catagory">
            <?php
            foreach ($acatagory as $catagory) {
                ?>
                 <option value="">Select Activity</option>
				<option value="<?php echo $catagory->catagory_id; ?>"><?php echo $catagory->catagory_name; ?>
			</option>
                <?php
            }
            ?>
        </select>
        <?php
    }
   wp_die();
}
?>