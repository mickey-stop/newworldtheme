$(document).ready(function() {
    var $this = this;
    $this.checkSuperfish = function() {
        if ($(window).width() >= 768) {
            $('ul.nav').addClass('sf-menu');
            $('.sf-menu').superfish({
                animation: { height: 'show' },
                delay: 500,
                hoverClass: 'open',
                speed: 'fast', 
            });
        }
        else {
            $('ul.nav').removeClass('sf-menu');
            $('ul.nav li').unbind();
            $('ul.nav li ul').removeAttr('style');
            $('.sf-menu').superfish({
                animation: { height: 'show' },
                delay: 500,
                speed: 'fast', 
            });
        }
    }

    $(window).on("resize", function() {
        $this.checkSuperfish();
    });

    $this.checkSuperfish();

    //otvaranje podmenija omogućavanje
    var closedMenuItem=$(".depth_0").find(".menu-item-has-children");
    $(closedMenuItem).click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass("open");
    });
});