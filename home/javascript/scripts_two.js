$(document).ready(() => {
    $(".screen_light").on("click", () => {
        $(".screen_light").toggleClass("fa-toggle-off fa-toggle-on");
        if ($(".screen_light").hasClass('fa-toggle-on')) {
            $("body").css({"background": "black","color": "white" });
            $(".header").css({ "background": "black", "color": "white" });
            $(".inner_header_two").css({ });
        } else {
            $("body").css({"background": "white","color": "black"}); 
            $(".header").css({"background": "white","color": "black"});
        }
    });

 

});