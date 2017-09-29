<?php
    function newworld_textcontrols_section_customize($wp_customize){
        //settings
        $wp_customize->add_setting('textsection_input_text', array(
            'default'=>'',
            'sanitize_callback' => function($value){
                $length=strlen($value);
                if($length>5){
                    return new WP_Error( 'invalid_value', __( 'Your name must have below 6 characters.' ) );
                }
                return $value;
            }
        ));
        $wp_customize->add_setting('textsection_select', array(
            'default'=>'',
            'transport'=> 'postMessage'
        ));
        /*$wp_customize->add_setting('slider_slide2', array(
            'default'=>''
        ));
        $wp_customize->add_setting('slider_slide3', array(
            'default'=>''
        ));*/
        //section
        $wp_customize->add_section('textcontrols_section', array(
            'title'=>'Text controls section',
            'priority'=>35
        ));
        //controls
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'textsection_input_text',
                array(
                    'label'          => 'Enter your name',
                    'description'    => 'Your name must have below 20 characters',
                    'section'        => 'textcontrols_section',
                    'settings'       => 'textsection_input_text',
                    'type'           => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'textsection_select',
            array(
                'label'          => 'Choose color',
                'section'        => 'textcontrols_section',
                'settings'       => 'textsection_select',
                'type'           => 'select',
                'choices'        => array(
                    'blue'   => __( 'Blue' ),
                    'red'  => __( 'Red' ),
                    'green' => __( 'Green')
                )
            )
        )
    );
    
        /*$wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'your_setting_id',
        array(
            'label'          => __( 'Dark or light theme version?', 'theme_name' ),
            'section'        => 'your_section_id',
            'settings'       => 'your_setting_id',
            'type'           => 'radio',
            'choices'        => array(
                'dark'   => __( 'Dark' ),
                'light'  => __( 'Light' )
            )
        )
    )
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
    }*/
    }
?>