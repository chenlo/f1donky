$(document).ready(function() {
    $('.navbar-toggle').click(function() {
        if ($(this).hasClass('collapsed')) {
            $(this).removeClass('collapsed');
        } else {
            $(this).addClass('collapsed');
        }
    });
    if ($('div').hasClass('actual')) {
        $('html, body').animate({
		    scrollTop: $('.actual:visible:first').offset().top-400
		}, 1000);
    }
});
