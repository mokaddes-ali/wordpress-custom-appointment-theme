<?php
/**
 * Enqueue Style
 * 
 * @package doctorappointment
 */
function doctorappointment_enqueue_style() {

    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/assets/tailwindcss/output.css',
        array(),
        filemtime( get_template_directory() . '/assets/tailwindcss/output.css' )
    );

}
add_action( 'wp_enqueue_scripts', 'doctorappointment_enqueue_style' );
