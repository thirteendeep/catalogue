// ==================================================
// User-Specific Configs
// ==================================================

// Feel free to change these configs
// Duplicate options.default.js and rename it options.js if you want to change these configs, this file will be ignored by git

notify = {
    enabled    : true,
    mute       : false,
    sound      : 'Ping',
    soundEr    : 'Frog',
    msgDev     : 'Dev tasks completed',
    msgImg     : 'Images optimized',
    msgSass    : 'SASS files compiled',
    msgJs      : 'JS files concatened',
    msgGui     : 'GUI files generated',
    msgGuiSass : 'GUI SASS files generated',
    msgSassEr  : 'failed SASS compilation', // will output : file + 'your message'
    msgJsEr    : 'failed JS linting with'
};

// Notify sounds on OSX
// --------------------
// Notify sounds can be one of these: Basso, Blow, Bottle, Frog, Funk, Glass, Hero, Morse, Ping, Pop, Purr, Sosumi, Submarine, Tink
// You can add your custom sound, just drop your sound in ~/Library/Sounds folder then use the file name as string in config above (sounds have to be aiff files http://www.online-convert.com/)

live = {
    watched : [
                   paths.public.base + '**/*.{html,php}',
                   paths.public.styles + '**/*.css',
                   paths.public.scripts + '**/*.js'
              ]
} // livereload when these files changes

scripts.lint.enabled = true;
scripts.lint.quiet   = false; // only report errors
