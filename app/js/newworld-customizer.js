(function($){
    console.log("Učitan je newworld customizer");
        wp.customize('blogname',function( value ) {
            value.bind(function(newval) {
                $('#blog-title').html(newval);
            });
        });
         wp.customize('textsection_select',function( value ) {
            value.bind(function(newval) {
                if(newval=="red"){
                    $('.selected-color').hide();
                }
                else{
                    $('.selected-color').show();
                }
            });
        });
})(jQuery);
    