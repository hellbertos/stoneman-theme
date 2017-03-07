// GulpFiles

var gulp     = require('gulp');
var uglify   = require('gulp-uglify');
var cleanCss = require('gulp-clean-css');
var concat   = require('gulp-concat');

gulp.task('min_n_copy_css', function() {
	var d = new Date();
	var timeStamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	console.log("Running min_n_copy_css at "+ timeStamp);

	return gulp.src('dev/*.css')
	.pipe(cleanCss() )
	.pipe(concat('main.css'))
	.pipe(gulp.dest('wp-content/themes/stoneman/css'))

});

gulp.task('default', ['min_n_copy_css']);