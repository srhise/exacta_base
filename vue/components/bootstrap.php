<?php

// This is where we bring in all of the components we want to use

/*
  Posts Component
*/
$crafted_posts_ver  = date("ymd-Gis", filemtime( get_stylesheet_directory() . '/vue/components/posts.js' ));
wp_enqueue_script( 'crafted-posts', get_stylesheet_directory_uri() . '/vue/components/posts.js', array(), $crafted_posts_ver, true );