$(document).ready(function(){
    var currentHref = location.href.toLowerCase();
    $(".navigation_bar li a").each(function() {
        if (location.pathname.toLowerCase() == this.pathname.toLowerCase()) {
            $("li.selected").removeClass("selected");
            $(this).parent().addClass("selected");
            return false; // break out of .each loop
        }
    });
})
