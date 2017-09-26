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

