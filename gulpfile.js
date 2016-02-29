'use strict';

require('es6-promise').Promise; // add compatibility for older node versions

var gulp = require('gulp'),
    gnotify = require('gulp-notify');


// ==================================================
// Configurations
// ==================================================

var cfg = './groots/gulp/'

require(cfg + 'configs/core');


// ==================================================
// Individual Tasks
// ==================================================

if (images.enabled) require(cfg + 'tasks/images');
// gulp images (copy and optimize images, call webp if enabled)
// gulp images:webp (creates webp images)

if (styles.enabled) require(cfg + 'tasks/styles');
// gulp styles (sass + autoprefixer)
// gulp styles:build (sass + autoprefixer + compress css)

if (scripts.enabled) require(cfg + 'tasks/scripts');
// gulp scripts (concat and lint js)
// gulp scripts:build (concat and compress js + strip console and debugger statements)

if (bower.enabled) require(cfg + 'tasks/bower');
// gulp bower (concat and compress bower components)

if (fonts.enabled) require(cfg + 'tasks/fonts');
// gulp fonts:google (download google fonts and generate stylesheet)

if (favicons.enabled) require(cfg + 'tasks/favicons');
// gulp favicons (generate favicons)
// gulp favicons:update (check for update for favicons generator)

if (general.gui) require(cfg + 'tasks/gui');
// gulp gui (copy gui folder in dist)

if (general.clean) require(cfg + 'tasks/clean');
// gulp clean (delete map files)


// ==================================================
// Bundle Tasks
// ==================================================

gulp.task('initial', tasks.initial);
// gulp initial (sass + autoprefixer + optimize images + concat js + concat and compress libs)

gulp.task('default', tasks.default, function() {
    if (notify.enabled && !hasError) {
        gulp.src('.').pipe(gnotify({
            sound: notify.sound,
            "icon": './node_modules/gulp-notify/assets/gulp.png',
            message: notify.msgDev
        }));
    }
});
// gulp (sass + autoprefixer + optimize images + concat js)

gulp.task('build', tasks.build);
// gulp build (sass + autoprefixer + optimtize images + concat js + compress css and js + strip console and debugger statements)

gulp.task('watch', function() {
    if (images.enabled) gulp.watch(paths.src.images + '**/*.{'+ images.extensions +'}', ['images', function() {
        if (notify.enabled) {
            gulp.src('.').pipe(gnotify({
                sound: notify.sound,
                message: notify.msgImg
            }));
        }
    }]);
    if (styles.enabled) gulp.watch([paths.src.styles + '**/*.scss', '!' + paths.src.styles + 'trunk/gui/**/*.scss' ], ['styles', function() {
        if (notify.enabled && !hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notify.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: notify.msgSass
            }));
        }
    }]);
    if (scripts.enabled) gulp.watch(paths.src.scripts + '**/*.js', ['scripts', function() {
        if (notify.enabled && !hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notify.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: notify.msgJs
            }));
        }
    }]);
    if (general.gui) gulp.watch(paths.src.gui + '**/*.{html,php}', ['gui', function() {
        if (notify.enabled && !hasError) gulp.src('').pipe(gnotify({ message: notify.msgGui }));
    }]);
    if (general.gui) gulp.watch(paths.src.styles + 'trunk/gui/**/*.scss', ['gui:styles', function() {
        if (notify.enabled && !hasError) gulp.src('').pipe(gnotify({ message: notify.msgGuiSass }));
    }]);
});
// gulp watch (watch img css and js files and run img css or js task)

require(cfg + 'tasks/livereload');
// gulp live (watch files and enable livereload)
