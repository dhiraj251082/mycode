<?php
function load_industry(){
    global $wpdb;
    //echo "heello";
   $aindustry = $wpdb->get_results( $wpdb->prepare("select * from wp_industry"));
    if ( $aindustry) {
        ?>
        <select name="industry2" class="industry2" multiple id="industry2">
            <?php
            foreach ($aindustry as $industry) {
                ?>
				<option value="<?php echo $industry->industry_id; ?>"><?php echo $industry->industry_name; ?>
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