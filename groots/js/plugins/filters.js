(function($) {
    "use strict"; // Start of use strict

    //Globals
    var $cardNavigation = $('.filters[type=filter]'),
    $cardNavigationAll = $('.filters[type=filter] [rel^="all"]');

    console.log($cardNavigationAll);

    $cardNavigation.find('a:not([rel^="all"])').click(function(e) {
        e.preventDefault();

        $(this).toggleClass("active");

        $cardNavigation.find('[rel*="all"]').removeClass("active");

        var activeElement = $cardNavigation.find('[class*="active"]').length;

        if (activeElement === 0) {
            $cardNavigationAll.addClass("active");
        }
    });

    $cardNavigationAll.click(function(e) {
        e.preventDefault();
        $(this).addClass("active");
        $cardNavigation.find('a:not([rel^="all"])').removeClass("active");
    });


})(jQuery); // End of use strict
