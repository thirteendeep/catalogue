// var gulp       = require('gulp'),
//     livereload = require('gulp-livereload'),
//     gnotify     = require('gulp-notify');

var gulp    = require( 'gulp' ),
    plugins = require( 'gulp-load-plugins' )({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/,
        rename: {
            'gulp-notify': 'gnotify'
        }
    });

gulp.task('live', ['watch'], function() {
    gulp.watch(live.watched, function(file) {
        var filename = file.path.split("/").pop();

        plugins.livereload.changed(filename);

        if (notify.enabled) {
            gulp.src('.').pipe(plugins.gnotify({
                sound: notify.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: filename + ' reloaded'
            }));
        }
    });

    plugins.livereload.listen();
});
