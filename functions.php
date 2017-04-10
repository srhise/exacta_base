<?php

require_once('bones.php'); // if you remove this, bones will break

/************* THUMBNAIL SIZE OPTIONS *************/

/* NOTE: Only use thumbnails if you need to, to stop digital waste */

//add_image_size( '300x300', 300, 300, true );

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas

function bones_register_sidebars() {

    register_sidebar(array(

    	'id' => 'sidebar1',

    	'name' => __('Default Sidebar', 'bonestheme'),

    	'description' => __('The first (primary) sidebar.', 'bonestheme'),

    	'before_widget' => '<div id="%1$s" class="widget %2$s">',

    	'after_widget' => '</div>',

    	'before_title' => '<h3 class="widgettitle">',

    	'after_title' => '</h3>',

    ));  

} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

function bones_wpsearch($form) {

    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >

    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>

    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','bonestheme').'" />

    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />

    </form>';

    return $form;

} // don't remove this bracket!

//* Add Vue to Project
require_once( get_stylesheet_directory() . '/vue/bootstrap.php' );