<?php  
    require get_template_directory() . '/inc/theme-support.php';
    require get_template_directory() . '/inc/walker.php';
    include get_template_directory() . '/inc/theme-customizer.php';
    include get_template_directory() . '/inc/customizer/general-options.php';
    include get_template_directory() . '/inc/customizer/slider-section.php';
    include get_template_directory() . '/inc/customizer/text-controls-section.php';
    require get_template_directory() . '/inc/customizer/sanitization.php';



    //require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

    //added function for extended customizer in file theme-customizer.php
    add_action('customize_register', 'newworld_customize_register');

                
?>