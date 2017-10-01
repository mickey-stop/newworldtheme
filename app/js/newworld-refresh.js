(function($){
    var customAdress=$("#custom-address").val();
    console.log("ucitana je refresh skripta");
    console.log(customAdress);
    document.getElementById("save").onclick=function(){
        setTimeout(function(){
            console.log("kliknuto");
            window.location.href=customAdress;
        },2000);        
    }        
})(jQuery);