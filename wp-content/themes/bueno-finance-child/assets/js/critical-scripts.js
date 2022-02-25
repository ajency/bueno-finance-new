/* toggle navigation menu */
/* $('<div class="hamburger"><div class="line"></div><div class="line"></div><div class="line"></div></div>').insertAfter("header .title-area");

$(".hamburger").click(function(){
	$(".genesis-responsive-menu").toggleClass("open-nav");
	$(".hamburger").toggleClass("close-icon");
});
$(".nav-primary .menu-item").click(function(){
	$(".genesis-responsive-menu").toggleClass("open-nav");
    $(".genesis-responsive-menu").css("display","block !important");
	$(".hamburger").toggleClass("close-icon");
    $(".custom-logo-link").click(); 
}); */