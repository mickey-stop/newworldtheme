<?php  
    function newworld_customize_register($wp_customize){
        //function created in inc/customizer/slider-section.php
        //created slider section
        newworld_slider_section_customize($wp_customize);

        //created text controls (experimental)
        newworld_textcontrols_section_customize($wp_customize);

        //change transport of blogname
        $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

        //create panel
        $wp_customize->add_panel('newworld_slider_panel', array(
	        'title' => 'Slider',
	        'description' => '<p>Choose at least 2 image in order to slider be activated</p>',
	        'priority'=>30
        ));


        //ispisuje objekat wp_customize
        /*echo '<pre>';
        var_dump($wp_customize);
        echo '</pre>';*/
    }
?>