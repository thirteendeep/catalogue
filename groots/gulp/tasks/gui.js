var gulp = require('gulp'),
	autoprefixer = require('autoprefixer'),
    fs          = require('fs');
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-strip-debug': 'stripDebug',
            'gulp-notify': 'gnotify',
            'gulp-util': 'gutil'
        }
    });

gulp.task('gui', ['gui:styles','gui:htaccess'], function () {
    return gulp.src(paths.src.gui + '**/*.{eot,woff,ttf,woff2,html,php}')
        .pipe(gulp.dest(paths.public.gui));
});

gulp.task('gui:htaccess', function() {
    fs.stat(paths.public.base + '.htaccess', function(err, stat) {
        //Checking if file exist before applying redirection
        if(err == null) {
            console.log('.htaccess exists');
        } else {
             return gulp.src(paths.src.base + '.htaccess')
            .pipe(gulp.dest(paths.public.base));
        }
    });
});


gulp.task('gui:styles', function() {
    hasError = false; // pass boolean to bundle task
    return gulp.src(paths.src.styles + 'trunk/gui.scss')
        .pipe(plugins.sass.sync().on('error', plugins.sass.logError))
        .on('error', notify.enabled ?
            plugins.gnotify.onError({
                sound: notify.mute ? false : "Frog",
                message: function(file) {
                    hasError = true;
                    return file.file.split("/").pop() + ' ' + notify.msgSassEr;
                }
            }): function() { plugins.gutil.noop(); })
        .pipe(plugins.postcss([autoprefixer({
            browsers: styles.autoprefixer
        })]))
        .pipe(gulp.dest(paths.public.styles));
});
