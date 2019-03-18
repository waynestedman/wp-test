<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/styles.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    // Montserrat and Raleway fonts from Google
   wp_enqueue_style( 'wp-exp-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Raleway:300,400,600' );
}
// Custom Function to Include
function my_favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );
?>
