<?php 
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('todo-main-css', get_theme_file_uri() . '/assets/styles/main.css');
})
?>