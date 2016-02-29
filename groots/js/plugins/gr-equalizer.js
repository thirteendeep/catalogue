/*!
 * jQuery Equalizer plugin
 * Author: Globalia
 * Contributor : Sebastien Dumont
 * Licensed under the WTFPL license
 */

;(function ($, win, doc) {
    "use strict";

    var pluginName = 'equalizer';

    $.Equalizer = function (element, options, key) {

        var plugin = this;
        var defaults = {
            watch: 640,         // starting breakpoint to equalize (>=)
            square: false,      // squaring ?
            target: '>*'        // by default, the Equalizer will equalize all the direct childs
        };

        plugin.$items = {};     // grab all items to equalize
        plugin.dims = [];       // create empty array to store values
        plugin.tallest = 0;     // create variable to store the tallest slide
        plugin.element = element;
        plugin.$element = $(element);
        plugin.defaults = defaults;
        plugin.options = options;
        plugin.metadata = plugin.$element.data(pluginName);
        plugin.name = key;

        plugin.init = function () {
            plugin.tallest = 0;
            plugin.dims = [];
            plugin.config = $.extend({}, plugin.defaults, plugin.options, plugin.metadata);
            plugin.$items = plugin.$element.find(plugin.config.target);
            plugin.equalize();
            return plugin;
        };

        plugin.equalize = function () {
            var instance = this;
            instance.tallest = 0;
            instance.dims = [];
            instance.$items.each(function () { //add heights to array
                $(this).css('min-height', 0);
                instance.dims.push($(this).outerHeight(false));
                if (instance.config.square) {
                    $(this).css('min-width', 0);
                    instance.dims.push($(this).outerWidth());
                }
            });
            instance.tallest = Math.max.apply(null, instance.dims); //cache largest value
            instance.$items.each(function () {
                instance.tallest = (win.innerWidth < instance.config.watch ? 0 : instance.tallest);
                $(this).css('min-height', instance.tallest + 'px');
                if (instance.config.square) {
                    $(this).css('min-width', instance.tallest + 'px');
                }
            });
        };

        plugin.callFunction = function (call, options) {
            if(typeof plugin[call] === 'function') {
                return plugin[call](options);
            }
        };

        plugin.init();
    };

    $.fn[pluginName] = function (call, options) {
        return this.each(function(){
            if(undefined === $(this).data('Equalizer')) {
                if(typeof options !== 'undefined' && typeof options !== 'object')
                    return;
                var plugin = new $.Equalizer(this, options);
                $(this).data('Equalizer',plugin);
            } else {
                return $(this).data('Equalizer').callFunction(call,options);
            }
        });
    };

    $(doc).on('ready domloaded ajaxloaded', function () {
        $(doc).find('[data-equalizer]').equalizer();
    });

    $(win).on('resize orientationchange', function () {
        $(doc).find('[data-equalizer]').equalizer('equalize');
    });

}(jQuery, window, document));
