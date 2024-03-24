<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

// cette fonction permet de décharger manuellement les fonts google du thème parent (ashe)
function deregister_parent_google_fonts() {
    // Désenregistrer les feuilles de style pour toute la session
    wp_deregister_style( 'ashe-playfair-font');
    wp_deregister_style( 'ashe-opensans-font');
    wp_deregister_style( 'ashe-kalam-font');
}

add_action('wp_enqueue_scripts', 'deregister_parent_google_fonts', 100);
