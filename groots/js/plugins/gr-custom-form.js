/*
* Tranform select menu into ul
*/

$('.gr-select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        var $styledOptions = $(this).next('ul.select-options'),
            $styledOptionsHeight = 0;

        $('div.select-styled.is-active').not(this).each(function(){
            $(this).removeClass('is-active');
            $styledOptions.removeClass('is-active');
        });

        $listItems.each(function(){
            $styledOptionsHeight += $(this).outerHeight();
        });

        var $spaceToExpand = $(window).outerHeight() - ( $(this).offset().top - $(document).scrollTop() ) - $(this).outerHeight();

        if ( $spaceToExpand < $styledOptionsHeight ) {
            $(this).parent().toggleClass('is-inverted');
        } else {
            $(this).parent().removeClass('is-inverted');
        }

        $(this).toggleClass('is-active');
        $styledOptions.toggleClass('is-active');
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('is-active');
        $this.val($(this).attr('rel'));
        $list.removeClass('is-active');
        $this.eq($(this).index()).prop('selected',true);
        $this.trigger('change');
    });

    $(document).click(function() {
        $styledSelect.removeClass('is-active');
        $list.removeClass('is-active');
    });

});

/*
* Custom Upload File
*/

$('.file-upload--btn').each( function () {
    var $this = $(this);
    $('input[type=file]', $this).on('change', function () {
        if($('input[type=file]', $this).val()!=='') {
            $('label', $this).addClass('is-ready');
        }
    });
});

$('.file-upload--input').each( function () {
    var $this = $(this);
    $('input[type=file]', $this).on('change', function () {
        if($('input[type=file]', $this).val()!=='') {
            $('label', $this).html($('input[type=file]', $this).val()).addClass('is-ready');
        }
    });
});


/*
* Parsley
*/

$("[data-parsley-validate]").length && $("[data-parsley-validate]").parsley({
    trigger:      'change',
    errorClass: "parsley-error",
    classHandler: function (el) {
        return el.$element.closest('.form-item, .form-item--inline');
    },
    errorsContainer: function(pEle) {
        var $err = pEle.$element.closest('.form-item').append();
        return $err;
    }
});
