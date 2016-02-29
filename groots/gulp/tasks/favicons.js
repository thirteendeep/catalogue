var gulp        = require('gulp'),
    realFavicon = require('gulp-real-favicon'),
    fs          = require('fs');

gulp.task('favicons:update', function(done) {
	var currentVersion = JSON.parse(fs.readFileSync(favicons.data)).version;
	realFavicon.checkForUpdates(currentVersion, function(err) {
		if (err) {
			throw err;
		}
	});
});

gulp.task('favicons', function(done) {
    realFavicon.generateFavicon({
        masterPicture: favicons.picture,
        dest: favicons.dest,
        iconsPath: '/',
        design: favicons.design,
        settings: {
			scalingAlgorithm: 'Mitchell',
			errorOnImageTooSmall: true
		},
        markupFile: favicons.data
    });
});
