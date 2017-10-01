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


//added for refreshing after save
echo "<input id='custom-address' type='hidden' value='http://localhost:8080".esc_url( remove_query_arg( 'changeset_uuid' ))."'>";

function newworld_refresh(){
    wp_enqueue_script(
		'refresh-js',
		get_template_directory_uri().'/app/js/newworld-refresh.js',
		array('jquery', 'customize-preview'),
		false,                                                                
		true						 
    );
}
add_action('customize_controls_enqueue_scripts', 'newworld_refresh');