<?php
    function newworld_slider_section_customize($wp_customize){
        //settings
        $wp_customize->add_setting('slider_slide1', array(
            'default'=>''
        ));
        $wp_customize->add_setting('slider_slide2', array(
            'default'=>''
        ));
        $wp_customize->add_setting('slider_slide3', array(
            'default'=>''
        ));
        //section
        $wp_customize->add_section('slider_section', array(
            'title'=>'Slider section',
            'priority'=>30
        ));
        //controls
        $wp_customize->add_control( 
	        new WP_Customize_Upload_Control( 
	        $wp_customize, 
	        'slider_slide1', 
	        array(
		        'label'      => 'Slide 1 - Upload or choose image from media library',
		        'section'    => 'slider_section',
		        'settings'   => 'slider_slide1'
	        ) ) 
        );
        $wp_customize->add_control( 
	        new WP_Customize_Upload_Control( 
	        $wp_customize, 
	        'slider_slide2', 
	        array(
		        'label'      => 'Slide 2 - Upload or choose image from media library',
		        'section'    => 'slider_section',
		        'settings'   => 'slider_slide2'
	        ) ) 
        );
        $wp_customize->add_control( 
	        new WP_Customize_Upload_Control( 
	        $wp_customize, 
	        'slider_slide3', 
	        array(
		        'label'      => 'Slide 3 - Upload or choose image from media library',
		        'section'    => 'slider_section',
		        'settings'   => 'slider_slide3'
	        ) ) 
        );
    }
?>