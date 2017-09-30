<?php

    function newworld_slider_section_customize($wp_customize){
        //SETTINGS
        
        function create_settings($slide, $wp_custom){
            $wp_custom->add_setting('slider_slide'.$slide.'_image', array(
                'default'=>'',
                'sanitize_callback'=>'check_image'
            ));
            $wp_custom->add_setting('slider_slide'.$slide.'_title', array(
                'default'=>'',
                'sanitize_callback'=>'check_title_text'
            ));
            $wp_custom->add_setting('slider_slide'.$slide.'_text', array(
                'default'=>'',
                'sanitize_callback'=>'check_slide_text'
            ));
            $wp_custom->add_setting('slider_slide'.$slide.'_button_text', array(
                'default'=>'Link',
                'sanitize_callback'=>'check_button_text'
            ));
            $wp_custom->add_setting('slider_slide'.$slide.'_button_link', array(
                'default'=>'',
                'sanitize_callback'=>'check_url'
            ));
        }
        
        function create_sections($slide, $wp_custom){
            $wp_custom->add_section('slider'.$slide.'_section',array(
                'title'=>'Slide '.$slide,
                'panel'=>'newworld_slider_panel'
            ));
        }

        function create_controls($slide, $wp_custom){
            //Slide title
            $wp_custom->add_control(
                new WP_Customize_Control(
                    $wp_custom,
                    'slider_slide'.$slide.'_title',
                    array(
                        'label'          => 'Enter slide title',
                        'section'        => 'slider'.$slide.'_section',
                        'settings'       => 'slider_slide'.$slide.'_title',
                        'type'           => 'text',
                    )
                )
            );
            //Slide text box
            $wp_custom->add_control(
                new WP_Customize_Control(
                    $wp_custom,
                    'slider_slide'.$slide.'_text',
                    array(
                        'label'          => 'Enter slide text',
                        'section'        => 'slider'.$slide.'_section',
                        'settings'       => 'slider_slide'.$slide.'_text',
                        'type'           => 'textarea',
                    )
                )
            );
            //Slide button text
            $wp_custom->add_control(
                new WP_Customize_Control(
                    $wp_custom,
                    'slider_slide'.$slide.'_button_text',
                    array(
                        'label'          => 'Enter button text',
                        'section'        => 'slider'.$slide.'_section',
                        'settings'       => 'slider_slide'.$slide.'_button_text',
                        'type'           => 'text',
                    )
                )
            );
            //Slide button link
            $wp_custom->add_control(
                new WP_Customize_Control(
                    $wp_custom,
                    'slider_slide'.$slide.'_button_link',
                    array(
                        'label'          => 'Enter link',
                        'section'        => 'slider'.$slide.'_section',
                        'settings'       => 'slider_slide'.$slide.'_button_link',
                        'type'           => 'text',
                    )
                )
            );
            //Image uploader
            $wp_custom->add_control( 
                new WP_Customize_Image_Control( 
                    $wp_custom, 
                    'slider_slide'.$slide.'_image', 
                    array(
                        'label'      => 'Upload or choose image',
                        'description'=> "Recommended size of picture is 1366x768px",
                        'section'    => 'slider'.$slide.'_section',
                        'settings'   => 'slider_slide'.$slide.'_image'
                    ) 
                ) 
            );
        }
        for($slide=1;$slide<5;$slide++){
            create_settings($slide, $wp_customize);
            create_sections($slide, $wp_customize);
            create_controls($slide, $wp_customize);
        }


        //OLD VERSION OF CREATION SETTINGS, SECTIONS AND COTROLS FOR EACH SLIDE SEPARATELY WITHOUT LOOP

        //SETTINGS

        //Slide 1
        /*$wp_customize->add_setting('slider_slide1_image', array(
            'default'=>'',
            'sanitize_callback'=>'check_image'
        ));
        $wp_customize->add_setting('slider_slide1_title', array(
            'default'=>'',
            'sanitize_callback'=>'check_title_text'
        ));
        $wp_customize->add_setting('slider_slide1_text', array(
            'default'=>'',
            'sanitize_callback'=>'check_slide_text'
        ));
        $wp_customize->add_setting('slider_slide1_button_text', array(
            'default'=>'Link',
            'sanitize_callback'=>'check_button_text'
        ));
        $wp_customize->add_setting('slider_slide1_button_link', array(
            'default'=>'',
            'sanitize_callback'=>'check_url'
        ));

        //Slide 2
        $wp_customize->add_setting('slider_slide2_image', array(
            'default'=>'',
        ));
        $wp_customize->add_setting('slider_slide2_title', array(
            'default'=>'',
            'sanitize_callback'=>'check_title_text'
        ));
        $wp_customize->add_setting('slider_slide2_text', array(
            'default'=>'',
            'sanitize_callback'=>'check_slide_text'
        ));
        $wp_customize->add_setting('slider_slide2_button_text', array(
            'default'=>'Link',
            'sanitize_callback'=>'check_button_text'
        ));
        $wp_customize->add_setting('slider_slide2_button_link', array(
            'default'=>'',
            'sanitize_callback'=>'check_url'
        ));

        //Slide 3
        $wp_customize->add_setting('slider_slide3_image', array(
            'default'=>''
        ));
        $wp_customize->add_setting('slider_slide3_title', array(
            'default'=>'',
            'sanitize_callback'=>'check_title_text'
        ));
        $wp_customize->add_setting('slider_slide3_text', array(
            'default'=>'',
            'sanitize_callback'=>'check_slide_text'
        ));
        $wp_customize->add_setting('slider_slide3_button_text', array(
            'default'=>'Link',
            'sanitize_callback'=>'check_button_text'
        ));
        $wp_customize->add_setting('slider_slide3_button_link', array(
            'default'=>'',
            'sanitize_callback'=>'check_url'
        ));

        //Slide 4
        $wp_customize->add_setting('slider_slide4_image', array(
            'default'=>''
        ));
        $wp_customize->add_setting('slider_slide4_title', array(
            'default'=>'',
            'sanitize_callback'=>'check_title_text'
        ));
        $wp_customize->add_setting('slider_slide4_text', array(
            'default'=>'',
            'sanitize_callback'=>'check_slide_text'
        ));
        $wp_customize->add_setting('slider_slide4_button_text', array(
            'default'=>'Link',
            'sanitize_callback'=>'check_button_text'
        ));
        $wp_customize->add_setting('slider_slide4_button_link', array(
            'default'=>'',
            'sanitize_callback'=>'check_url'
        ));

        //SECTIONS
        
        //Section 1
        $wp_customize->add_section('slider1_section', array(
            'title'=>'Slide 1',
            'panel'=>'newworld_slider_panel',
            'priority'=>10
        ));
        //Section 2
        $wp_customize->add_section('slider2_section', array(
            'title'=>'Slide 2 ',
            'panel'=>'newworld_slider_panel',
            'priority'=>20
        ));
        //Section 3
        $wp_customize->add_section('slider3_section', array(
            'title'=>'Slide 3',
            'panel'=>'newworld_slider_panel',
            'priority'=>30
        ));
        //Section 4
        $wp_customize->add_section('slider4_section', array(
            'title'=>'Slide 4',
            'panel'=>'newworld_slider_panel',
            'priority'=>40
        ));

        //CONTROLS

        //Controls Slide 1
        
        //Slide title
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide1_title',
                array(
                    'label'          => 'Enter slide title',
                    'section'        => 'slider1_section',
                    'settings'       => 'slider_slide1_title',
                    'type'           => 'text',
                )
            )
        );
        //Slide text box
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide1_text',
                array(
                    'label'          => 'Enter slide text',
                    'section'        => 'slider1_section',
                    'settings'       => 'slider_slide1_text',
                    'type'           => 'textarea',
                )
            )
        );
        //Slide button text
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide1_button_text',
                array(
                    'label'          => 'Enter button text',
                    'section'        => 'slider1_section',
                    'settings'       => 'slider_slide1_button_text',
                    'type'           => 'text',
                )
            )
        );
        //Slide button link
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide1_button_link',
                array(
                    'label'          => 'Enter link',
                    'section'        => 'slider1_section',
                    'settings'       => 'slider_slide1_button_link',
                    'type'           => 'text',
                )
            )
        );
        //Image uploader
        $wp_customize->add_control( 
	        new WP_Customize_Image_Control( 
	            $wp_customize, 
	            'slider_slide1_image', 
	            array(
		            'label'      => 'Upload or choose image',
                    'description'=> "Recommended size of picture is 1366x768px",
		            'section'    => 'slider1_section',
		            'settings'   => 'slider_slide1_image'
	            ) 
            ) 
        );

        //Controls Slide 2
        
        //Slide title
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide2_title',
                array(
                    'label'          => 'Enter slide title',
                    'section'        => 'slider2_section',
                    'settings'       => 'slider_slide2_title',
                    'type'           => 'text',
                )
            )
        );
        //Slide text box
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide2_text',
                array(
                    'label'          => 'Enter slide text',
                    'section'        => 'slider2_section',
                    'settings'       => 'slider_slide2_text',
                    'type'           => 'textarea',
                )
            )
        );
        //Slide button text
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide2_button_text',
                array(
                    'label'          => 'Enter button text',
                    'section'        => 'slider2_section',
                    'settings'       => 'slider_slide2_button_text',
                    'type'           => 'text',
                )
            )
        );
        //Slide button link
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide2_button_link',
                array(
                    'label'          => 'Enter link',
                    'section'        => 'slider2_section',
                    'settings'       => 'slider_slide2_button_link',
                    'type'           => 'text',
                )
            )
        );
        //Image uploader
        $wp_customize->add_control( 
	        new WP_Customize_Image_Control( 
	            $wp_customize, 
	            'slider_slide2_image', 
	            array(
		            'label'      => 'Upload or choose image',
                    'description'=> "Recommended size of picture is 1366x768px",
		            'section'    => 'slider2_section',
		            'settings'   => 'slider_slide2_image'
	            ) 
            ) 
        );

        //Controls Slide 3
        
        //Slide title
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide3_title',
                array(
                    'label'          => 'Enter slide title',
                    'section'        => 'slider3_section',
                    'settings'       => 'slider_slide3_title',
                    'type'           => 'text',
                )
            )
        );
        //Slide text box
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide3_text',
                array(
                    'label'          => 'Enter slide text',
                    'section'        => 'slider3_section',
                    'settings'       => 'slider_slide3_text',
                    'type'           => 'textarea',
                )
            )
        );
        //Slide button text
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide3_button_text',
                array(
                    'label'          => 'Enter button text',
                    'section'        => 'slider3_section',
                    'settings'       => 'slider_slide3_button_text',
                    'type'           => 'text',
                )
            )
        );
        //Slide button link
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide3_button_link',
                array(
                    'label'          => 'Enter link',
                    'section'        => 'slider3_section',
                    'settings'       => 'slider_slide3_button_link',
                    'type'           => 'text',
                )
            )
        );
        //Image uploader
        $wp_customize->add_control( 
	        new WP_Customize_Image_Control( 
	            $wp_customize, 
	            'slider_slide3_image', 
	            array(
		            'label'      => 'Upload or choose image',
                    'description'=> "Recommended size of picture is 1366x768px",
		            'section'    => 'slider3_section',
		            'settings'   => 'slider_slide3_image'
	            ) 
            ) 
        );

        //Controls Slide 4
        
        //Slide title
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide4_title',
                array(
                    'label'          => 'Enter slide title',
                    'section'        => 'slider4_section',
                    'settings'       => 'slider_slide4_title',
                    'type'           => 'text',
                )
            )
        );
        //Slide text box
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide4_text',
                array(
                    'label'          => 'Enter slide text',
                    'section'        => 'slider4_section',
                    'settings'       => 'slider_slide4_text',
                    'type'           => 'textarea',
                )
            )
        );
        //Slide button text
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide4_button_text',
                array(
                    'label'          => 'Enter button text',
                    'section'        => 'slider4_section',
                    'settings'       => 'slider_slide4_button_text',
                    'type'           => 'text',
                )
            )
        );
        //Slide button link
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'slider_slide4_button_link',
                array(
                    'label'          => 'Enter link',
                    'section'        => 'slider4_section',
                    'settings'       => 'slider_slide4_button_link',
                    'type'           => 'text',
                )
            )
        );
        //Image uploader
        $wp_customize->add_control( 
	        new WP_Customize_Image_Control( 
	            $wp_customize, 
	            'slider_slide4_image', 
	            array(
		            'label'      => 'Upload or choose image',
                    'description'=> "Recommended size of picture is 1366x768px",
		            'section'    => 'slider4_section',
		            'settings'   => 'slider_slide4_image'
	            ) 
            ) 
        );*/
        //End of controls

    }
?>