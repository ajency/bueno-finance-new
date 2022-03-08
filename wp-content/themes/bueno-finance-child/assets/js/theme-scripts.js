$(document).ready(function(){
    $('.hero-slider-js').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        speed: 1000,
        cssEase: 'ease-in-out',
        touchThreshold: 100
    });
});

/* circle background size */
$(window).on("load resize",function(e){
    $targetColumn = $(".why-bueno-section .left-side");
    $columnWidth = $targetColumn.innerWidth();
    $containerMargin = (($(".site-container").innerWidth()) - ($(".why-bueno-section .alignwide").innerWidth()))/2;
    $(".why-bueno-section .gb-container-image-wrap .gb-container-image").css("width", $columnWidth + $containerMargin);
});

/* our partners logo slider */
$ourPartnersLogoSlider = $(".our-partners-section .logo-slider .gb-container-content");
$ourPartnersTestimonialSlider = $(".our-partners-section .testimonial-slider .gb-container-content");
$(function () {
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
$ourPartnersTestimonialSlider.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    speed: 1000,
    cssEase: 'ease-in-out',
    responsive: [
        {
            breakpoint: 769,
            settings: {
                dots: false,
            }
        }
    ]
});
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
    $('.our-customer-slider-js').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        speed: 1000,
        cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots: false
                }
            }
        ]
    });
});
/* our lending partners & our backing logo slider */
$lendingPartnersSlider = $(".lending-partners-section .logo-slider .gb-container-content");
$(function() {
    $lendingPartnersSlider.slick({
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
                    speed: 5000,
                    autoplaySpeed: 0,
                    autoplay: true,
                }
            }
        ]
    });
});

/* Icons */
$svgUrl = (templateUrl+"-child/assets/img/symbol-defs.svg");
$(".footer-widgets .simple-social-icons ul li a svg use").css("display","none");

$(".footer-widgets .simple-social-icons ul li.ssi-email a svg title").after("<svg width='20' height='14' viewBox='0 0 20 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M0.520309 0.144495C0.0763056 0.439395 0.0297138 0.561798 0.00543079 1.49736C-0.0198393 2.46875 0.0352415 2.71677 0.338285 2.99561C0.491156 3.13626 1.88384 3.76838 5.1275 5.1694C8.7862 6.74973 9.76035 7.14629 9.99725 7.15169C10.2511 7.15753 10.9465 6.87419 14.8645 5.1687C17.3787 4.07432 19.5193 3.11044 19.6215 3.02676C19.9566 2.75235 20 2.59077 20 1.61822C20 0.795945 19.9882 0.708284 19.8504 0.508752C19.7681 0.389559 19.6008 0.226312 19.4787 0.146037L19.2566 0H9.99725H0.737869L0.520309 0.144495ZM0.00957664 9.13885C0.0272131 13.2959 0.0291214 13.3507 0.16508 13.5297C0.240824 13.6294 0.400671 13.776 0.520309 13.8555L0.737869 14H9.99725H19.2566L19.4742 13.8555C19.5938 13.776 19.7537 13.6294 19.8294 13.5297C19.9654 13.3507 19.9673 13.2958 19.9849 9.14669C19.9947 6.83572 19.9802 4.94495 19.9526 4.94495C19.9249 4.94495 17.8736 5.82432 15.394 6.89911C10.4574 9.03893 10.3738 9.06802 9.56022 8.92975C9.23059 8.87375 8.02908 8.38093 4.67402 6.92576C2.22696 5.86439 0.172385 4.98105 0.108288 4.96268C-0.00253195 4.93089 -0.0074017 5.13614 0.00957664 9.13885Z' fill='white'/></svg>");

$(".footer-widgets .simple-social-icons ul li.ssi-linkedin a svg title").after("<svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M2.22594e-07 1.50382C2.22594e-07 1.10498 0.158438 0.722481 0.440458 0.44046C0.722479 0.158439 1.10498 2.0048e-06 1.50382 2.0048e-06H16.4945C16.6922 -0.00032081 16.888 0.0383444 17.0707 0.113784C17.2533 0.189223 17.4194 0.299955 17.5592 0.439641C17.699 0.579326 17.81 0.745221 17.8856 0.927828C17.9612 1.11044 18.0001 1.30617 18 1.50382V16.4945C18.0002 16.6922 17.9614 16.888 17.8859 17.0707C17.8104 17.2534 17.6996 17.4194 17.5598 17.5593C17.4201 17.6991 17.2541 17.81 17.0715 17.8856C16.8888 17.9612 16.6931 18.0001 16.4954 18H1.50382C1.30627 18 1.11065 17.9611 0.928143 17.8855C0.745638 17.8098 0.579822 17.699 0.440169 17.5593C0.300516 17.4195 0.189762 17.2536 0.114237 17.0711C0.0387109 16.8886 -0.00010726 16.6929 2.22594e-07 16.4954V1.50382ZM7.12473 6.86291H9.56209V8.08691C9.91391 7.38327 10.8139 6.75 12.1664 6.75C14.7592 6.75 15.3736 8.15155 15.3736 10.7231V15.4865H12.7497V11.3089C12.7497 9.84437 12.3979 9.018 11.5045 9.018C10.2649 9.018 9.74945 9.909 9.74945 11.3089V15.4865H7.12473V6.86291ZM2.62473 15.3745H5.24945V6.75H2.62473V15.3736V15.3745ZM5.625 3.93709C5.62995 4.16182 5.58996 4.38528 5.50738 4.59435C5.4248 4.80342 5.30129 4.99389 5.1441 5.15457C4.98691 5.31526 4.79921 5.44293 4.59201 5.5301C4.38481 5.61726 4.16229 5.66216 3.9375 5.66216C3.71271 5.66216 3.49019 5.61726 3.28299 5.5301C3.07579 5.44293 2.88809 5.31526 2.7309 5.15457C2.57371 4.99389 2.4502 4.80342 2.36762 4.59435C2.28504 4.38528 2.24505 4.16182 2.25 3.93709C2.25971 3.49597 2.44177 3.07619 2.75718 2.76765C3.07259 2.45911 3.49627 2.28634 3.9375 2.28634C4.37873 2.28634 4.80241 2.45911 5.11782 2.76765C5.43323 3.07619 5.61529 3.49597 5.625 3.93709Z' fill='white'/></svg>");

$(".footer-widgets .simple-social-icons ul li.ssi-phone a svg title").after("<svg width='19' height='19' viewBox='0 0 19 19' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M8.07001 0.13223C7.57333 0.472299 7.42556 0.98329 7.70439 1.39622C7.97393 1.79557 8.16869 1.87561 8.96962 1.91623C11.0254 2.02051 12.8995 2.83259 14.4131 4.27493C15.1783 5.00413 15.7383 5.75269 16.1731 6.62749C16.742 7.77184 17.0191 8.80556 17.0805 10.0122C17.1104 10.6004 17.1417 10.7675 17.252 10.931C17.6882 11.577 18.4114 11.5658 18.8692 10.9058C19.013 10.6987 19.0177 10.6573 18.9799 9.92789C18.7043 4.59895 14.387 0.293062 9.04536 0.0195092C8.32264 -0.0175569 8.28175 -0.0127968 8.07001 0.13223ZM2.66365 3.01101C1.65644 3.2864 0.807373 3.99275 0.312481 4.96707L0.0292681 5.52458L0.00402441 6.33216C-0.0366708 7.6362 0.227276 8.69728 0.978166 10.2485C2.28181 12.9415 4.84847 15.658 7.91575 17.5912C8.68775 18.0777 9.85977 18.5863 10.7709 18.8302C11.3126 18.9751 11.5339 19.0003 12.2652 19C13.0448 18.9997 13.1591 18.9846 13.5103 18.8361C15.0735 18.1749 16.0804 16.8572 16.0804 15.4727C16.0804 15.1344 16.0404 14.8718 15.9536 14.6403C15.8302 14.3111 15.4962 13.9213 15.2141 13.7774C14.9701 13.6528 11.4908 12.8157 11.2232 12.8171C10.8235 12.8193 10.4803 13.0119 9.91394 13.552L9.39712 14.0448L9.03486 13.8691C7.41952 13.0854 5.81142 11.4757 4.96515 9.79537L4.77058 9.40897L5.33828 8.84491C5.65049 8.53474 5.96333 8.15913 6.0334 8.01023C6.25786 7.5337 6.21297 7.26834 5.59497 5.41941C5.08806 3.90294 5.00419 3.70079 4.79105 3.48296C4.31645 2.99781 3.43062 2.80124 2.66365 3.01101ZM8.07001 3.94051C7.57346 4.2802 7.42556 4.79138 7.70439 5.20438C7.96057 5.58386 8.18058 5.68383 8.84684 5.72356C11.1753 5.86217 13.1092 7.79558 13.2634 10.1389C13.3069 10.7998 13.4088 11.0212 13.7863 11.2751C14.2 11.5534 14.7121 11.4058 15.0525 10.9101C15.195 10.7026 15.2017 10.6519 15.1659 10.0548C15.0354 7.87929 13.7897 5.85005 11.9075 4.7474C10.98 4.20398 9.94154 3.88504 8.90426 3.82487C8.33173 3.79168 8.27634 3.79936 8.07001 3.94051Z' fill='white'/></svg>");

$(".footer-widgets .simple-social-icons ul li.ssi-twitter a svg title").after("<svg width='22' height='17' viewBox='0 0 22 17' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M22 2.01651C21.191 2.35727 20.3219 2.58752 19.4082 2.69159C20.3509 2.15539 21.0562 1.31147 21.3925 0.317296C20.5068 0.81738 19.5374 1.16939 18.5265 1.35801C17.8467 0.668066 16.9462 0.210762 15.965 0.057094C14.9837 -0.0965741 13.9766 0.0619913 13.0999 0.508172C12.2231 0.954353 11.5259 1.66319 11.1164 2.52462C10.7069 3.38606 10.6081 4.35189 10.8353 5.27219C9.04057 5.18653 7.28485 4.74313 5.68208 3.97075C4.07931 3.19837 2.66531 2.11428 1.53184 0.78884C1.14428 1.42432 0.921431 2.16111 0.921431 2.94578C0.920998 3.65217 1.104 4.34774 1.45421 4.97078C1.80442 5.59382 2.311 6.12505 2.92901 6.51736C2.21228 6.49568 1.51137 6.31159 0.884612 5.98042V6.03568C0.88454 7.02642 1.24508 7.98667 1.90505 8.7535C2.56502 9.52033 3.48377 10.0465 4.50542 10.2427C3.84054 10.4138 3.14346 10.439 2.46684 10.3164C2.75508 11.1689 3.31656 11.9143 4.07267 12.4484C4.82878 12.9825 5.74166 13.2785 6.68352 13.2949C5.08466 14.4879 3.11008 15.1351 1.07742 15.1322C0.71736 15.1323 0.357601 15.1123 0 15.0724C2.06326 16.3334 4.46505 17.0026 6.918 17C15.2215 17 19.7609 10.4629 19.7609 4.79328C19.7609 4.60908 19.756 4.42304 19.7473 4.23884C20.6302 3.63189 21.3924 2.8803 21.9981 2.01927L22 2.01651Z' fill='white'/></svg>");

$(".footer-widgets .simple-social-icons ul li.ssi-facebook a svg title").after("<svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M17.28 0H0.72C0.32175 0 0 0.32175 0 0.72V17.28C0 17.6783 0.32175 18 0.72 18H17.28C17.6783 18 18 17.6783 18 17.28V0.72C18 0.32175 17.6783 0 17.28 0ZM15.201 5.25375H13.7633C12.636 5.25375 12.4178 5.78925 12.4178 6.57675V8.3115H15.1088L14.7578 11.0273H12.4178V18H9.612V11.0295H7.26525V8.3115H9.612V6.309C9.612 3.98475 11.0318 2.718 13.1063 2.718C14.1008 2.718 14.9535 2.79225 15.2033 2.826V5.25375H15.201Z' fill='white'/></svg>");

/* formidable */

$selectFieldParent = $(".with_frm_style select").closest(".form-field");
$selectFieldParent.addClass("select-border");
$(".select-border").css("border-bottom", "1px solid #4D4D4D");

$captchFieldParent = $(".frm-g-recaptcha").closest(".form-field");
$captchFieldParent.addClass("captcha-container");

/* Opportunities Tabs */
$(document).ready(function(){
    $(".opportunities-section .nav-tabs .nav-item:first-child .nav-link").addClass("active");
    $(".opportunities-section .tab-content .tab-pane:first-child").addClass("show active");
    $(".opportunities-section .tab-content .tab-pane:first-child .collapse").addClass("show");
    $(".opportunities-section .tab-content .tab-pane:not(.active) .card-header a").addClass("collapsed");
    $(".opportunities-section .tab-content .tab-pane:not(.active) .card-header a").attr("aria-expanded","false");
    $(".opportunities-section .tab-content .tab-pane:first-child .collapse .collapse").removeClass("show");

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find("i").addClass("opened");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find("i").removeClass("opened");
    });
    
    // Accordions
    $('.acco-container .collapse').on('show.bs.collapse', function () {
        $(this).prev(".panel-heading").find(".toggler p").text("Show less");
      }).on('hide.bs.collapse', function(){
        $(this).prev(".panel-heading").find(".toggler p").text("Show more");
    });
});

/* Modal */
$(".form-toggler").click(function(){
    $currentPosition = $(this).attr("data-position");
});
$('#careersModal').on('show.bs.modal', function (e) {
    $('.modal .position input[type=text]').val($currentPosition);
    $('.position-description .modalPosition').text($currentPosition);
});
$('#careersModal').on('hide.bs.modal', function (e) {
    document.getElementById("form_careersform").reset();
});

/* FAQ */
$(document).ready(function(){
    $(".faq-section .faqAccordion .card:first-child .card-header a").removeClass("collapsed");
    $(".faq-section .faqAccordion .card:first-child .card-header a").attr("aria-expanded","true");
    $(".faq-section .faqAccordion .card:first-child .collapse").addClass("show");
});

/* header bar template */
$('.page-template-header-bar .default-content li:contains("(i)")').parent().addClass("roman");