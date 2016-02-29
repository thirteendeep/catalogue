// var gulp         = require('gulp'),
//     bowerFiles   = require('main-bower-files'),
//     concat       = require('gulp-concat'),
//     uglify       = require('gulp-uglify'),
//     gutil        = require('gulp-util');

var gulp    = require( 'gulp' ),
    bowerFiles   = require('main-bower-files'),
    bowerAsk   = require('gulp-prompt'),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-util': 'gutil'
        }
    });

gulp.task('bower', function() {
    return gulp.src(bower.auto ? bowerFiles('**/*.js', { includeDev: true }) : bower.included)
        .pipe(plugins.concat('vendor.js'))
        .pipe(bower.uglify ? plugins.uglify() : plugins.gutil.noop())
        .pipe(gulp.dest(paths.public.scripts));
});
