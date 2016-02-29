(function($) {
    "use strict"; // Start of use strict

    $('<div class="overlay" />').appendTo('.nav-handler').on('click', function() {
        $('body').removeClass("has-nav-open");
    });

    $(".nav__icon").on('click', function(event){
        event.preventDefault();
        $('.nav-handler').toggleClass("has-nav-open");
    });

})(jQuery); // End of use strict
