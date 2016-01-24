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

?>