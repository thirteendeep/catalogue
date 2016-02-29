// var gulp           = require('gulp'),
//     changed        = require('gulp-changed'),
//     googleWebFonts = require('gulp-google-webfonts');

var gulp         = require( 'gulp' ),
    autoprefixer = require('autoprefixer'),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-google-webfonts': 'googleWebFonts'
        }
    });


gulp.task('fonts:google', function () {
    return gulp.src(paths.src.fonts + 'google.list')
        .pipe(plugins.googleWebFonts(fonts.googleOpts))
        .pipe(gulp.dest(paths.public.fonts));
});

gulp.task('fonts:awesome', function () {
   return gulp.src(paths.src.base + 'vendor/components-font-awesome/fonts/fontawesome-webfont.*')
       .pipe(gulp.dest(paths.public.fonts));
});

gulp.task('fonts', function () {
    return gulp.src(paths.src.fonts + '**/*.{eot,woff,ttf,woff2}')
        .pipe(plugins.changed(paths.public.fonts))
        .pipe(gulp.dest(paths.public.fonts));
});
