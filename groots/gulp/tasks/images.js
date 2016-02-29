// var gulp         = require('gulp'),
//     imagemin     = require('gulp-imagemin'),
//     imageminWebp = require('imagemin-webp'),
//     changed      = require('gulp-changed'),
//     gutil        = require('gulp-util');

var gulp    = require( 'gulp' ),
    imageminWebp = require('imagemin-webp'),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-util': 'gutil'
        }
    });

gulp.task('images:webp', function () {
    return gulp.src(paths.src.images + '**/*.{'+ images.extensions +'}')
        .pipe(plugins.changed(paths.public.images))
        .pipe(imageminWebp(images.webpOpts)())
        .pipe(gulp.dest(paths.public.images));
});

gulp.task('images', images.webp ? ['images:webp'] : '', function () {
    return gulp.src(paths.src.images + '**/*.{'+ images.extensions +'}')
        .pipe(plugins.changed(paths.public.images))
        .pipe(images.optimize ? plugins.imagemin(images.optimizeOpts) : plugins.gutil.noop())
        .pipe(gulp.dest(paths.public.images));
});
