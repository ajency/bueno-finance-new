/* circle background size */
$(window).on("load resize",function(e){
    $targetColumn = $(".why-bueno-section .left-side");
    $columnWidth = $targetColumn.innerWidth();
    $containerMargin = (($(".site-container").innerWidth()) - ($(".why-bueno-section .alignwide").innerWidth()))/2;
    $(".why-bueno-section .gb-container-image-wrap .gb-container-image").css("width", $columnWidth + $containerMargin);
});

/* our partners logo slider */
$ourPartnersLogoSlider = $(".our-partners-section .logo-slider .gb-container-content");
$(function() {
    $ourPartnersLogoSlider.slick({
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        centerMode: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        buttons: false,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    cssEase: 'ease',
                    centerMode: true,
                    arrows: false,
                    dots: false,
                    speed: 300,
                    infinite: true,
                    autoplaySpeed: 900,
                    autoplay: true,
                    centerPadding: '22px',
                }
            }
        ]
    });
});