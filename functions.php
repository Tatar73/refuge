<?php
if (!is_admin()) {
     wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', $deps = array(), 1, 'all');
}
?>