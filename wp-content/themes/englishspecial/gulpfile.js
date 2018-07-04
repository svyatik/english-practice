'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

// I use wait() because with my text editor (VS CODE)
//   SASS compile files before they are saved.
var wait = require('gulp-wait2');
var server = require('gulp-server-livereload');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss', {verbose: true})
    .pipe(wait(100))
    .pipe(sass().on('error', sass.logError))
    .pipe(rename('style.css'))
    .pipe(gulp.dest('./'));
});

// Watch task
gulp.task('default', function() {
  gulp.watch('./sass/**/*.scss', ['sass']);
});
