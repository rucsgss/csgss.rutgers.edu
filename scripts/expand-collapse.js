$(document).ready(function() {
    $(".content").hide();
    $(".heading").click(function() {
        $(this).parent().next(".content").slideToggle(100);
        var arrow = $(this).prev("div.arrow");
        if (arrow.hasClass("expanded")) {
            arrow.removeClass("expanded");
        } else {
            arrow.addClass("expanded");
        }
    });
});
