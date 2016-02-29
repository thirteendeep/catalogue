/*!
 * jQuery InlinerSVG plugin
 * Author: Globalia
 * Licensed under the WTFPL license
 *
 * Replace all SVG images with the class .svg in inline SVG
 */

;(function ($, win, doc) {
    "use strict";

    var pluginName = 'inliner';

    $.Inliner = function (element, options, key) {

        var plugin = this;
        var defaults = {

        };

        plugin.element = element;
        plugin.$element = $(element);
        plugin.defaults = defaults;
        plugin.options = options;
        plugin.metadata = plugin.$element.data(pluginName);
        plugin.name = key;

        this.id = this.$element.prop('id');
        this.class = this.$element.prop('class');
        this.src = this.$element.prop('src');

        plugin.init = function () {
            var instance = this;
            $.get(this.src, function (data) {
                // Get the SVG tag, ignore the rest
                var $svg = $(data).find('svg');
                // Add replaced image's ID to the new SVG
                if (typeof instance.id !== 'undefined') {
                    $svg = $svg.prop('id', instance.id);
                }
                // Add replaced image's classes to the new SVG
                if (typeof instance.class !== 'undefined') {
                    $svg = $svg.prop('class', instance.class + ' replaced-svg');
                }
                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');
                // Replace image with new SVG
                instance.$element.replaceWith($svg);
            }, 'xml');
        };

        plugin.callFunction = function (options, val) {
            if(typeof plugin[options] === 'function') {
                return plugin[options](val);
            }
        };

        plugin.init();
    };

    $.fn[pluginName] = function (options, val) {
        var l = this.length;
        return this.each(function (index) {
            var key = pluginName + (l > 1 ? '-' + (++index) : '');
            if(!$.data('Inliner', key)) {
                if(typeof options !== 'undefined' && typeof options !== 'object')
                    return;
                var plugin = new $.Inliner(this, options, key);
                $.data('Inliner',plugin);
            } else {
                return $.data('Inliner').callFunction(options, val);
            }
        });
    };

    $(doc).on('ready domloaded ajaxloaded', function () {
        $(doc).find('img.svg').inliner();
    });

}(jQuery, window, document));
