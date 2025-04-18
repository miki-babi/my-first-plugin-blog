<?php
/**
 * Plugin Name: My First Plugin
 * Description: A simple WordPress plugin that adds a custom post type and a shortcode.
 * Version: 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


//make a shortcode that displays html form 
function my_first_plugin_shortcode() {
    ob_start();
    ?>
    <form id="my-form" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode( 'html_form', 'my_first_plugin_shortcode' );