<?php
add_action('wp_enqueue_scripts', 'cookingsite_scripts');

function cookingsite_scripts(): void
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/boostrap/dist/js/bootstrap.bundle.js', array('jquery'), null, true);
}

show_admin_bar(false);