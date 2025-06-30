$(document).ready(function () {
    let lastScrollTop = 0;
    let navbar = $("header");

    $(".scrollbarMain").on("scroll", function () {  
        let currentScroll = $(this).scrollTop(); 

        if (currentScroll > lastScrollTop) {
            navbar.stop().animate({ top: "-100px" }, 400);
        } else {
            navbar.stop().animate({ top: "0" }, 400);
        }

        lastScrollTop = currentScroll;
    });
});