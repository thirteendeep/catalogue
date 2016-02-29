var grootsAside = (function () {
    "use strict"; // Start of use strict

    //Globals
    var $menu = $('[js-gr-menu]'),
        $aside = $('[js-gr-aside]'),
        $overlay = $('[js-gr-overlay]');

    function _toggleClass() {
        $aside.toggleClass('is-open');
        $overlay.toggleClass('is-visible');
    }

    $menu.on('click', function(event) {
        event.preventDefault();
        _toggleClass();
    });

    $overlay.on('click', function(event) {
        event.preventDefault();
        _toggleClass();
    });

    $(document).keyup(function(event) {
        if (event.keyCode == 27) {
            _toggleClass();
        }
    });

})();
