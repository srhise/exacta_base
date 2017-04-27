<?php 
/* Template Name: Homepage */
get_header();
?>

<h1>Posts</h1>

<!-- include posts.html template file  -->
<?php require_once( get_stylesheet_directory() . '/vue/views/posts.html' ); ?>

<?php
get_footer();
?>