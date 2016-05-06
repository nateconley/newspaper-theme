'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function(){
	return gulp.src('./dev/styles.sass')
		.pipe(sass())
		.pipe(gulp.dest('./css'));
});

gulp.task('watch', ['sass'], function(){
	gulp.watch('dev/*.sass', ['sass']);
});

gulp.task('default', ['watch'], function(){
	console.log("gulp is running");
});