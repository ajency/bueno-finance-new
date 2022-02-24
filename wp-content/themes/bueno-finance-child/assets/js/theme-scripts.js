$(window).on("load resize",function(e){
    $targetColumn = $(".why-bueno-section .left-side");
    $columnWidth = $targetColumn.innerWidth();
    $containerMargin = (($(".site-container").innerWidth()) - ($(".why-bueno-section .alignwide").innerWidth()))/2;
    $(".why-bueno-section .gb-container-image-wrap .gb-container-image").css("width", $columnWidth + $containerMargin);
});
$(document).ready(function(){
    $('.mobile-slider-js').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        speed: 1000,
        fade: true,
        cssEase: 'ease-in-out',
        touchThreshold: 100
    });
});