(function($) {
    "use strict"; // Start of use strict

    $('[js-scroll-to]').on('click', function(event) {
        var $anchor = $(this);
        event.preventDefault();
        $(document.body).stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 400);
    });

    $('img').on('error', function () {
        var brokenPath = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCQzRCMkM3REIwOUYxMUU1QTg2REJEMDQ2RDRCMjRGRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCQzRCMkM3RUIwOUYxMUU1QTg2REJEMDQ2RDRCMjRGRCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkJDNEIyQzdCQjA5RjExRTVBODZEQkQwNDZENEIyNEZEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJDNEIyQzdDQjA5RjExRTVBODZEQkQwNDZENEIyNEZEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+7+01nAAAA+hJREFUeNrsm1tIVEEYx8+utpWpXVAo0aTIlyh6sPAhUrpHm9BTUUmai1kEEZEYQUhBUD10fSgzu2m3B8GKsii6oGVFEFE9rEFEEJTSRa1w11b7D/wPDMezq7BHGXbngx9nO2eYM9//fPPNNyO5+vv7jXg2txHnpgXQAmgBtABaAC2AFkALoAWIV0t0opPu7u6kjo6OyQ6OKwC+RGqQkpJipKenR/8msRmKlpqaGq/H4wmAfgcIgU5QBIxwlJeXOzJ2RyIgFAolBINBD35WA38UU0tsTXeALFAHXLwOMLxPnSngcrnMn+fBiyi7Ww9+gJ/gEu8NEMHtdiuZBMc50McY0AEKwTOKsDGeVgExDcaC32AleAouguJ4WgbNY6pOsAq0gAugJB7rgF+cDi3MMZtiXQCRUUM2IuSD2+CckyIkKijAP5ABiiwfqBfcBQUUQawSjbEoQA+YE279lywvVgUQ2T45QnJMZyT0xeoU8A/yfIKUK5RLgqEIzxaAE0N45x7gi/B8tHK7QamfcKE7F9wC4/kFS8KEcCU4IOWCyzZtPJarEgL4uVSdBG3gg/RsHrgPusAVsJXhW2wRQTh/EDSANFDPdvXyLpgFkcEyWY3tcHV1tRnif8BnkCM5L5arb2AW7+1jMquT5nEl7zXwXipo5b0iyfmHvFfm8/kcGbuTAsgifAQbuKtrB7MtupsinAEVkvNyWE+SRNgM7ki/DVUFkEUQg/1q47xVBDvnTZvIUDfblZkPnBLAqVVATn7N3MC8BMvAWynf5EjtqsBhcAOsE2ccvJ9Bxw1OH9HXE7Ad1FjygTJJcAUrswr++xGYz7LWtNNgLbe4zdLcly2LzrZTvC5Oo0WWhCmmgTiD3K9KHSAc3WUZkOz8Ka7tiazi8m36yOJqMY1i3mQyNCzOr+HRW5JKhZBZAO21+SrC+S3gEMgF321EMJ2fARYzgRawdkiV2okIui7VCcpMAXM5e08R+ljQHKfzR8FutlkCHlCEheCT5HwhlzqDp0JnGQlesBxc4wqTCRJU3AtsY0KrYvLKpfM7pTZt/MpChHuMiKl0vklqV8urEOE5mMlrKXijqgB9/OLJDONjFudNE5XiUvAYTGdibLJpJ4vwmu3EO0apeiBiDqyUpzdXI7RtY6afwikQzmoZJa+4LGaouBmyWnAQ5017RwazRpsD07g5FB1W0wJoAbQAWgAtgBZAC+CY9YzAmP+qXAnmcZMyXJElqsA0JytCRwTo7e01d2ZHRip0A4GAWxkBvF5va2Zm5mrDoT9XDSUSsrOz/U505NL/Z0ivAloALYAWQAugBdACaAG0AFqAuLT/AgwAdO+VdWrDkWcAAAAASUVORK5CYII=";
        var src = $(this).prop('src');
        if(src.indexOf(brokenPath, src.length - brokenPath.length) === -1){
            $(this).prop('src', brokenPath);
        }
    });

    $('iframe').each(function(){
        $(this).wrap('<div class="iframe-wrapper"></div>');
    });

    $('[data-js-hamburger]').click(function(event) {
        var $header_nav = $('[data-js-menu]'),
        $hamburger = $('.hamburger');        $(this).toggleClass('is-active');
        $hamburger.toggleClass('is-active');
        setTimeout(function() {
            $header_nav.toggleClass('is-active');
        }, 200);
    });


    $('.js-dropdown-toggle').click(function(event) {
        event.preventDefault();
        $(this).next('.dropdown-menu').toggleClass('is-open');
    });



})(jQuery); // End of use strict
