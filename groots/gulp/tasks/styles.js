// var gulp         = require('gulp'),
//     sass         = require('gulp-sass'),
//     postcss      = require('gulp-postcss'),
//     autoprefixer = require('autoprefixer'),
//     flexibility  = require('postcss-flexibility'),
//     minifyCss    = require('gulp-minify-css'),
//     sourcemaps   = require('gulp-sourcemaps'),
//     uglify       = require('gulp-uglify'),
//     gutil        = require('gulp-util'),
//     gnotify      = require('gulp-notify'),
//     rename       = require("gulp-rename");

var gulp         = require( 'gulp' ),
    autoprefixer = require('autoprefixer'),
    cssnano      = require('cssnano'),
    flexibility = require('postcss-flexibility'),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-strip-debug': 'stripDebug',
            'gulp-notify': 'gnotify',
            'gulp-util': 'gutil'
        }
    });

gulp.task('styles', function() {
    hasError = false; // pass boolean to bundle task
    return gulp.src(paths.src.styles + 'main.scss')
        .pipe(general.maps ? plugins.sourcemaps.init() : plugins.gutil.noop())
        .pipe(plugins.sass.sync().on('error', plugins.sass.logError))
        .on('error', notify.enabled ?
            plugins.gnotify.onError({
                sound: notify.mute ? false : notify.soundEr,
                message: function(file) {
                    var filePath = '';
                    hasError = true;
                    if ( file.file.split("/").pop() == 'stdin' ) {
                        filePath = 'main.scss';
                    } else {
                        filePath = file.file.split("/").pop();
                    }
                    return filePath + ' ' + notify.msgSassEr;
                }
            }): function() { plugins.gutil.noop(); })
        .pipe(plugins.postcss([autoprefixer({
            browsers: styles.autoprefixer
        })]))
        .pipe(plugins.postcss([flexibility]))
        .pipe(plugins.rename(general.project + '.css'))
        .pipe(general.maps ? plugins.sourcemaps.write('./') : plugins.gutil.noop())
        .pipe(gulp.dest(paths.public.styles));
});

gulp.task('styles:build', function() {
    hasError = false; // pass boolean to bundke task
    return gulp.src(paths.src.styles + 'mian.scss')
        .pipe(plugins.sass.sync().on('error', plugins.sass.logError))
        .on('error', function() {
            hasError = true;
        })
        .pipe(plugins.postcss([
            autoprefixer({
                browsers: styles.autoprefixer
            })
        ]))
        .pipe(plugins.postcss([flexibility]))
        .pipe(styles.minify ? plugins.postcss([
            cssnano()
        ]) : plugins.gutil.noop())
        .pipe(plugins.rename(general.project + '.css'))
        .pipe(gulp.dest(paths.public.styles));
});
