 <?php


/// menu suoport

add_theme_support('menus');
/// register menus
register_nav_menus(

    array(
       'top-menu' => __('Top Menu', 'theme'),

       )
    );