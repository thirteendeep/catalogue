// ==================================================
// Core Configs
// ==================================================

// These are the core configs, you shouldn't change these configs

var runSequence = require('run-sequence'),
    fs          = require('fs');

require('./project');


// Path Variables ===================================

paths.public.dist    = paths.public.base + 'dist/';

paths.src.styles     = paths.src.base + 'scss/';
paths.public.styles  = paths.public.dist + 'css/';

paths.src.scripts    = paths.src.base + 'js/';
paths.public.scripts = paths.public.dist + 'js/';

paths.src.images     = paths.src.base + 'images/';
paths.public.images  = paths.public.dist + 'images/';

paths.src.fonts      = paths.src.base + 'fonts/';
paths.public.fonts   = paths.public.dist + 'fonts/';

paths.src.gui        = paths.src.base + 'gui/';
paths.public.gui     = paths.public.base + 'gui/';

// Add main to scripts array
scripts.plugins.push(paths.src.scripts + 'main.js');


// Load options =====================================

function existsSync(filePath) {
  try {
    fs.statSync(filePath);
  } catch(err) {
    if (err.code == 'ENOENT') return false;
  }

  return true;
}

if (existsSync(paths.src.base + 'gulp/configs/options.js')) {
    require('./options');
} else {
    require('./options.default.js');
}


// Bundle Tasks ===================================

tasks = [];

// Default (dev) tasks
tasks.default = [];
if (images.enabled) tasks.default.push('images');
if (styles.enabled) tasks.default.push('styles');
if (scripts.enabled) tasks.default.push('scripts');
if (general.gui) tasks.default.push('gui');
if (fonts.enabled) tasks.default.push('fonts');

// Build tasks
tasks.build = [];
if (images.enabled) tasks.build.push('images');
if (styles.enabled) tasks.build.push('styles:build');
if (scripts.enabled) tasks.build.push('scripts:build');
if (fonts.enabled && fonts.awesome) tasks.build.push('fonts:awesome');
if (fonts.enabled) tasks.build.push('fonts');
if (bower.enabled) tasks.build.push('bower');
if (general.maps) tasks.build.push('clean');
if (existsSync(paths.src.base + 'favicons/favicon.png') && general.favicons) tasks.build.push('favicons');

// Initial tasks
tasks.temp = [];
tasks.temp.push('default');
if (bower.enabled) tasks.temp.push('bower');
if (fonts.enabled && fonts.awesome) tasks.temp.push('fonts:awesome');

if (fonts.enabled && fonts.google) {
    tasks.initial = function() {
        runSequence('fonts:google', tasks.temp)
    };
} else {
    tasks.initial = tasks.temp;
}
