/*import ChangeOnScroll from 'modules/ChangeOnScroll';   //da je u istom folderu kao i app.js bio bi from './ChangeOnScroll'

var scrolled=new ChangeOnScroll();

var saberi=(a,b)=>a+b;
console.log(saberi(5,10));*/

//supefish activation deactivation
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
});