$(window).on("load resize",function(e){
    $targetColumn = $(".why-bueno-section .left-side");
    $columnWidth = $targetColumn.innerWidth();
    $containerMargin = (($(".site-container").innerWidth()) - ($(".why-bueno-section .alignwide").innerWidth()))/2;
    $(".why-bueno-section .gb-container-image-wrap .gb-container-image").css("width", $columnWidth + $containerMargin);
});