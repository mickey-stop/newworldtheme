<?php 

    function newworld_general_options_customize($wp_customize){
        
        $wp_customize->add_setting('slider_numbers', array(
                'default'=> 4,
                'sanitize_callback'=>'check_number'
        ));

        $wp_customize->add_section('general_section',array(
                'title'=>'General',
                'priority'=>15
        ));

        $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'slider_numbers',
                    array(
                        'label'          => 'Enter number of slides',
                        'description'    => '(minimum 2, maximum 8)',
                        'section'        => 'general_section',
                        'settings'       => 'slider_numbers',
                        'type'           => 'text',
                    )
                )
        );
    }
    /*Doesnt work*/
    /*$GLOBALS['current_slide_number']=intval(get_theme_mod('slider_numbers'));

    function compare_slide_number(){
        $changed_slide_number=intval(get_theme_mod('slider_numbers'));
        //if($GLOBALS['current_slide_number']!=$changed_slide_number){
            newworld_refresh();
        //}
    }
    function newworld_refresh(){
        wp_enqueue_script(
            'newworld-refresh-js',
            get_template_directory_uri().'/app/js/newworld-refresh.js',
            array('jquery'),
            false,                                                                
            true						 
        );
    }
    add_action('customize_save_after', 'newworld_refresh');*/
    ?>