<?php

// Set up app div
add_action('crafted_before', function () {
  echo '<div id="app"> <!-- Close #app -->';
});

// Close app div
add_action('wp_footer', function () {
  echo '</div> <!-- Close #app -->';
});

// Enqueue Vue, Styles, Axios
add_action( 'wp_enqueue_scripts', 'vue_enqueue_scripts_styles' );

function vue_enqueue_scripts_styles () {
  wp_enqueue_style( 'vue', get_stylesheet_directory_uri() . '/vue/style.css' );
  wp_enqueue_script( 'axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js', array(), '0.15.3', true );
  wp_enqueue_script( 'vue', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js', array('axios'), '2.1.10', true );
  wp_enqueue_script( 'vue-app', get_stylesheet_directory_uri() . '/vue/app.js', array('axios'), '2.1.10', true );
}



