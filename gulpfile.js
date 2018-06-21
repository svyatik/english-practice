'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

// I use gulp wait because with my text editor (VS CODE)
//   SASS compile files before they are totally saved.
var wait = require('gulp-wait2');
var server = require('gulp-server-livereload');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss', {verbose: true})
    .pipe(wait(200))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist'));
});

// Watch task
gulp.task('default', function() {
    gulp.src('')
        .pipe(wait(300))
        .pipe(server({
            livereload: true,
            open: true
        }));
  gulp.watch('./sass/**/*.scss', ['sass']);
});
