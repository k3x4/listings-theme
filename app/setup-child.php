<?php

namespace App;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=greek', false, null );
}, 100);