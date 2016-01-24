<?php

// trick to close ACF metaboxes by default
add_action('acf/input/admin_head', 'my_acf_input_admin_head');
function my_acf_input_admin_head() {
    ?><script type="text/javascript">
        jQuery(function(){
            jQuery('.acf_postbox').addClass('closed');
        });
    </script><?php
}

// repeater field loop
if( have_rows('repeater_field_name') ):
 	// loop through the rows of data
    while ( have_rows('repeater_field_name') ) : the_row();
        // display a sub field value
        the_sub_field('sub_field_name');
    endwhile;
else :
    // no rows found
endif;

// add row to repeater field
$field_key = "repeater_field";
$post_id = "post_id";
$value = get_field($field_key, $post_id);
$value[] = array("repeater_field_value" => 'value');
update_field($field_key, $value, $post_id);

?>