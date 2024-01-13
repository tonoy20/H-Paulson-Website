<?php 

function add_Main_Nav()
{
   register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');

if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
       'page_title'    => 'Header footer Settings',
       'menu_title'    => 'header footer',
       'menu_slug'     => 'header-footer-settings',
       'capability'    => 'edit_posts',
       'redirect'      => false
   ));

}


?> 