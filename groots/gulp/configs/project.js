// ==================================================
// Project Configs
// ==================================================

// These are the main configs for current project


// Path Variables ===================================

paths = {
    src  : {
        base: './groots/'
    },
    public: {
        base: './public/',
    }
}


// Tasks ============================================

general = {
    project      :  'groots',
    gui          :  true,
    maps         :  true,
    favicons     :  true,
    clean        :  true // only with build bundle task, clean map files and strip console and debugger statements in js files
};

images = {
    enabled      :  true,
    extensions   :  'gif,jpg,png,svg',
    optimize     :  true,
    optimizeOpts :  {
                        progressive: true,
                        interlaced: true,
                        multipass: true,
                    },
    webp         :  true,
    webpOpts     :  {}
};

styles = {
  enabled        :  true,
  autoprefixer   :  ['last 2 versions'],
  minify         :  true // only with build bundle task
};

scripts = {
    enabled      :  true,
    plugins      :  [
                        paths.src.base + 'js/plugins/gr-custom-form.js',
                        paths.src.base + 'js/plugins/gr-equalizer.js',
                        paths.src.base + 'js/plugins/gr-inline-svg.js',
                        paths.src.base + 'js/plugins/gr-nav.js',
                        paths.src.base + 'js/plugins/gr-snippets.js',
                        paths.src.base + 'js/plugins/gr-tabs.js',
                        paths.src.base + 'js/plugins/gr-aside.js',
                        paths.src.base + 'js/plugins/filters.js'
                    ],
    lint         :  {
                        enabled :   true,
                        rules   :   {
                                        'indent' : 1,
                                        'no-undef' : 1,
                                        'no-unused-vars' : 1,
                                        'no-extra-semi' : 0,
                                        'no-console' : 0
                                    }
                    },
    babel        :  false,
    uglify       :  true // only with build bundle task
};

bower = {
    enabled      :  true,
    auto         :  true, // false to select manually bower components via included array
    included     :  [],
    uglify       :  true
};

fonts = {
    enabled      :  true,
    awesome      :  true,
    google       :  true,
    googleOpts   :  {
                        fontsDir: '../fonts/', // (Note: the path is relative to gulp.dest)
                        cssDir: '../../../' + paths.src.base + 'scss/fonts/', // (Note: the path is relative to gulp.dest)
                        cssFilename: '_googlefonts.scss'
                    }
};

favicons = {
    enabled      :  true,
    picture      :  paths.src.base + 'favicons/favicon.png',
    data         :  paths.src.base + 'favicons/favicon.json',
    dest         :  paths.public.base + '/dist/favicons/',
    design       :  {
                        ios: {
                            pictureAspect: 'backgroundAndMargin',
                            backgroundColor: '#ffffff',
                            margin: '14%'
                        },
                        desktopBrowser: {},
                        windows: {
                            pictureAspect: 'whiteSilhouette',
                            backgroundColor: '#da532c',
                            onConflict: 'override'
                        },
                        androidChrome: {
                            pictureAspect: 'noChange',
                            themeColor: '#ffffff',
                            manifest: {
                                name: 'Monapp',
                                display: 'browser',
                                orientation: 'notSet',
                                onConflict: 'override'
                            }
                        },
                        safariPinnedTab: {
                            pictureAspect: 'silhouette',
                            themeColor: '#5bbad5'
                        }
                    }
};
