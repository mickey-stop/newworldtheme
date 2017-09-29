<?php  
/*
    @package newworldtheme

    ----------------------------------
            THEME SUPPORT
    ----------------------------------
*/

/* Activate Nav Menu Option */
function newworld_register_nav_menu() {
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'newworld_register_nav_menu' );


/*Function for enqueueing file for live preview blog register_nav_menu*/
function newworld_customize_preview_init(){
    wp_enqueue_script(
		'customize-preview-js',
		get_template_directory_uri().'/app/js/newworld-customizer.js',
		array('jquery', 'customize-preview'),
		false,                                                                
		true						 
    );
}
//added function for enqueueing live preview changing of blogname in customizer
//function is defined above
add_action('customize_preview_init', 'newworld_customize_preview_init');

