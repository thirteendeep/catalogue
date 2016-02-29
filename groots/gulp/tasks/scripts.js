// var gulp       = require('gulp'),
//     concat     = require('gulp-concat'),
//     stripDebug = require('gulp-strip-debug'),
//     uglify     = require('gulp-uglify'),
//     eslint     = require('gulp-eslint'),
//     sourcemaps = require('gulp-sourcemaps'),
//     babel      = require('gulp-babel'),
//     gutil      = require('gulp-util'),
//     gnotify    = require('gulp-notify');

var gulp    = require( 'gulp' ),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-strip-debug': 'stripDebug',
            'gulp-notify': 'gnotify',
            'gulp-util': 'gutil'
        }
    });

gulp.task('scripts:lint', function() {
    msg = '';
    hasError = false;

    return gulp.src(scripts.plugins)
        .pipe(plugins.eslint({
            extends: 'eslint:recommended',
            rules: scripts.lint.rules,
            quiet: scripts.lint.quiet,
            globals: {
                'document': false,
                'window': false,
                'jQuery': false,
                '$': true
            }
        }))
        .pipe(plugins.eslint.format())
        .pipe(plugins.eslint.results(function(results) {
            var filesCount = 0,
                errorCount = 0;

            results.forEach(function(res, i) {
                if ( res.errorCount > 0 ||  res.warningCount > 0 ) filesCount ++;
            });

            if (filesCount > 1) {
                msg = filesCount + ' files (';

                results.forEach(function(res, i) {
                    if (res.errorCount > 0 ||  res.warningCount > 0) {
                        errorCount += res.errorCount;
                        if (errorCount > res.errorCount) msg += ', ';
                        msg += res.filePath.split('/').pop();
                    }
                });

                msg += ') ';
            } else if (filesCount == 1) {
                results.forEach(function(res, i) {
                    if (res.errorCount > 0 ||  res.warningCount > 0) msg = res.filePath.split('/').pop() + ' ';
                });
            }

            if (results.errorCount > 0) {
                msg += notify.msgJsEr + ' ' + results.errorCount + ' error';
                if ( results.errorCount > 1 ) msg += 's';

                if (results.warningCount > 0) {
                    msg += ' and ' + results.warningCount + ' warning';
                    if ( results.warningCount > 1 ) msg += 's';
                }
            } else if (results.warningCount > 0) {
                msg += notify.msgJsEr + ' ' + results.warningCount + ' warning';
                if ( results.warningCount > 1 ) msg += 's';
            }
        }))
        .pipe(notify.enabled ? plugins.gnotify({
            "title": "Error running Gulp",
            sound: notify.mute ? false : notify.soundEr,
            "icon": './node_modules/gulp-notify/assets/gulp-error.png',
            onLast: true,
            message: function(file) {
                // this function will be executed only on last file that's why we have to construct our message in another function (see above)
                return msg;
            }
        }) : plugins.gutil.noop())
        .pipe(plugins.eslint.failAfterError());
});

gulp.task('scripts', scripts.lint.enabled ? ['scripts:lint'] : '', function() {
    return gulp.src(scripts.plugins)
        .pipe(general.maps ? plugins.sourcemaps.init() : plugins.gutil.noop())
        .pipe(scripts.babel ? plugins.babel({
            presets: ['es2015']
        }) : plugins.gutil.noop())
        .pipe(plugins.concat(general.project + '.js'))
        .pipe(general.maps ? plugins.sourcemaps.write('./') : plugins.gutil.noop())
        .pipe(gulp.dest(paths.public.scripts));
});

gulp.task('scripts:build', function() {
    return gulp.src(scripts.plugins)
        .pipe(scripts.babel ? plugins.babel({
            presets: ['es2015']
        }) : plugins.gutil.noop())
        .pipe(plugins.concat(general.project + '.js'))
        .pipe(general.clean ? plugins.stripDebug() : plugins.gutil.noop())
        .pipe(scripts.uglify ? plugins.uglify() : plugins.gutil.noop())
        .pipe(gulp.dest(paths.public.scripts));
});
