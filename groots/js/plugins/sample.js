/*!
 * jQuery PluginSample plugin
 * Author: Globalia
 * Contributor :
 * Licensed under the WTFPL license
 */

;(function ($, win, doc) {
    "use strict";

    var pluginName = 'pluginSample';

    $.PluginSample = function (element, options, key) {

        var plugin = this;
        var defaults = {

        };

        plugin.element = element;
        plugin.$element = $(element);
        plugin.defaults = defaults;
        plugin.options = options;
        plugin.metadata = plugin.$element.data(pluginName);
        plugin.name = key;

        plugin.init = function () {

            plugin.config = $.extend({}, plugin.defaults, plugin.options, plugin.metadata);
            plugin.functionSample();
            return plugin;
        };

        plugin.functionSample = function () {
            var instance = this;

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
            if(!$.data('PluginSample', key)) {
                if(typeof options !== 'undefined' && typeof options !== 'object')
                    return;
                var plugin = new $.PluginSample(this, options, key);
                $.data('PluginSample',plugin);
            } else {
                return $.data('PluginSample').callFunction(options, val);
            }
        });
    };

    $(doc).on('ready domloaded ajaxloaded', function () {
        $(doc).find('[data-pluginSample]').pluginSample();
    });

    $(win).on('resize orientationchange', function () {
        $(doc).find('[data-pluginSample]').pluginSample({}, 'functionSample');
    });

}(jQuery, window, document));
