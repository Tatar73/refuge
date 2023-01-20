<?php
if (!is_admin()) {
     wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', $deps = array(), 1, 'all');
     wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/quantityselector.js', $deps = array(), 1, 'all');

}

function debug($vars)
{
     echo '<pre>';
     var_dump($vars);
     echo '</pre>';
     die;
}

add_filter('wpcf7_autop_or_not', '__return_false');


add_filter('wpcf7_form_elements', function ($content) {
     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

     return $content;
});

add_action('after_setup_theme', function () {
     load_theme_textdomain('refuge', get_template_directory());
});


function custom_register_nav_menu()
{
     register_nav_menus(
          array(
               'primary_menu' => 'Menu principal',
          ));
}
add_action('after_setup_theme', 'custom_register_nav_menu', 0);