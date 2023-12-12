

function changeNavBackground() {
    if ($(window).scrollTop() > 0) {
        $(".nav-bar").addClass("bg-change");
    } else {
        $(".nav-bar").removeClass("bg-change");
    }
}

$(window).scroll(function() {
    changeNavBackground();
});

$(document).ready(function () {
    changeNavBackground();
});