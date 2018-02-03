$(function() {
    $(document)
        .foundation();
    (function initNavMenu() {
        var headerNav = $('#header-nav'),
            menuButton = headerNav.find('.menu-toggle');

        menuButton.on('click', function() {
            if (Foundation.MediaQuery.atLeast('large')) {
                headerNav.removeClass('menu-open')
            } else {
                headerNav.toggleClass('menu-open');
            }
        })

        if (Foundation.MediaQuery.atLeast('large')) {
            headerNav.removeClass('menu-open')
        }
    })();
});
