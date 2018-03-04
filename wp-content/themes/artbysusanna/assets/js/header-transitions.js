$(function() {
    var header = $('#header-main');
    $(document).on('scroll', function() {
        header.toggleClass('at-top', $(window).scrollTop() === 0);
    });
});
