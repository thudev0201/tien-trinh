<?php
/*
Plugin Name: Reading Progress Bar 2
Description: A simple reading progress bar plugin for WordPress.
Version: 1.0
Author: Võ Trường Quang Tình
*/

// Enqueue the necessary scripts and styles
function reading_progress_bar_enqueue_scripts() {
    wp_enqueue_style('reading-progress-bar-style', plugin_dir_url(__FILE__) . 'css/reading-progress-bar.css');
    wp_enqueue_script('reading-progress-bar-script', plugin_dir_url(__FILE__) . 'js/reading-progress-bar.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'reading_progress_bar_enqueue_scripts');

// Add the progress bar to the top of the page
function reading_progress_bar_add_bar() {
    echo '<div id="reading-progress-bar"></div>';
}
add_action('wp_body_open', 'reading_progress_bar_add_bar');
?>