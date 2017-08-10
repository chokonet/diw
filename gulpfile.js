var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');

gulp.task('sass', function () {
  return gulp.src('application/assets/sass/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(gulp.dest('public/css'));
});

gulp.task('default', [ 'sass' ]);
