<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* * *********** ACTIVE SIDEBARS ******************* */

// Sidebars & Widgetizes Areas
if (!function_exists('bones_register_sidebars')) {

    function bones_register_sidebars() {
        register_sidebar(array(
            'id' => 'sidebar1',
            'name' => 'Main Sidebar',
            'description' => 'Used on every page BUT the homepage page template.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle text-center">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'id' => 'sidebar2',
            'name' => 'Homepage Sidebar',
            'description' => 'Used only on the homepage page template.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'id' => 'footer1',
            'name' => 'Footer 1',
            'before_widget' => '<div id="%1$s" class="widget span4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'id' => 'footer2',
            'name' => 'Footer 2',
            'before_widget' => '<div id="%1$s" class="widget span4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'id' => 'footer3',
            'name' => 'Footer 3',
            'before_widget' => '<div id="%1$s" class="widget span4 %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',
        ));


        /*
          to add more sidebars or widgetized areas, just copy
          and edit the above sidebar code. In order to call
          your new sidebar just use the following code:

          Just change the name to whatever your new
          sidebar's id is, for example:

          To call the sidebar in your template, you can just copy
          the sidebar.php file and rename it to your sidebar's name.
          So using the above example, it would be:
          sidebar-sidebar2.php

         */
    }

} // don't remove this bracket!

/* * *********** GENERAL ******************* */

// Add a class to the tables so they are styled correctly
function add_classes() {
    $output = '<script type="text/javascript">';
    $output += 'jQuery( "table" ).addClass( "table" );';
    $output += '</script>';
    echo $output;
}

add_action('wp_footer', 'add_classes');

// Add the carousel image size
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'homepage-carousel', 1200, 480, true ); //(cropped)
}

?>