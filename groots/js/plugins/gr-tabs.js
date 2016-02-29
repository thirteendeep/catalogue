 /*!
 * jQuery Tab-Accordion plugin
 * Author: Globalia
 * Contributor : Sebastien Dumont
 * Licensed under the WTFPL license
 */

;(function ($, win, doc) {
    "use strict";

    var pluginName = 'accTabs';

    $.AccTabs = function (element, options, key) {

        var plugin = this;
        var defaults = {
            collapse : false
        };

        plugin.element = element;
        plugin.$element = $(element);
        plugin.defaults = defaults;
        plugin.options = options;
        plugin.metadata = plugin.$element.data(pluginName);
        plugin.name = key;

        plugin.init = function () {

            plugin.config = $.extend({}, plugin.defaults, plugin.options, plugin.metadata);
            var accordionTabs;

            plugin.$element.addClass('accordion-tabs');
            plugin.$element.children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();

            plugin.$element.on('click', 'li > a', function(event) {
                if (!$(this).hasClass('is-active')) {
                    event.preventDefault();
                    accordionTabs = $(this).closest('.accordion-tabs');
                    accordionTabs.find('.is-open').removeClass('is-open');

                    $(this).next().toggleClass('is-open');
                    accordionTabs.find('.is-active').removeClass('is-active');
                    $(this).addClass('is-active');
                } else {
                    event.preventDefault();
                    if(plugin.config.collapse){
                        accordionTabs = $(this).closest('.accordion-tabs');
                        accordionTabs.find('.is-open').removeClass('is-open');
                        accordionTabs.find('.is-active').removeClass('is-active');
                    }
                }
            });
            return plugin;
        };

        plugin.init();
    };

    $.fn[pluginName] = function (options, val) {
        var l = this.length;
        return this.each(function (index) {
            var key = pluginName + (l > 1 ? '-' + (++index) : '');
            if(!$.data('AccTabs', key)) {
                if(typeof options !== 'undefined' && typeof options !== 'object')
                    return;
                var plugin = new $.AccTabs(this, options, key);
                $.data('AccTabs',plugin);
            } else {
                return $.data('AccTabs').callFunction(options, val);
            }
        });
    };

    $(doc).on('ready domloaded ajaxloaded', function () {
        $('.js-tabs').accTabs({
            collapse: false          //  Enable toggle on active tab
        });
    });

    $(win).on('resize orientationchange', function () {

    });

}(jQuery, window, document));
