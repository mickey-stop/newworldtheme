<?php
    function check_title_text($value){
        $length=24;
        if(strlen($value)>$length){
            return new WP_Error( 'invalid_value', __( 'Title must have maximum '.$length.' characters.' ) );
        }
        return wp_filter_nohtml_kses($value);
    }
    function check_slide_text($value){
        $length=100;
        if(strlen($value)>$length){
            return new WP_Error( 'invalid_value', __( 'Text must have maximum '.$length.' characters.' ) );
        }
        return wp_filter_nohtml_kses($value);
    }
    function check_button_text($value){
        $length=10;
        if(strlen($value)>$length){
            return new WP_Error( 'invalid_value', __( 'Button label must have maximum '.$length.' characters.' ) );
        }
        return wp_filter_nohtml_kses($value);
    }
    function check_url($value){
        $length=200;
        if(strlen($value)>$length){
            return new WP_Error( 'invalid_value', __( 'Url must have maximum '.$length.' characters.' ) );
        }
        return esc_url_raw($value);
    }

    function check_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        //'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        /*'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'*/
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}
?>

