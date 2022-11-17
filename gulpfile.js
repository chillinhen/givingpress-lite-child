var gulp = require('gulp');
// var sass = require('gulp-sass');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', () => {
  return gulp.src(['sass/custom-style.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass()) // Using gulp-sass
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('css'))
  });

  gulp.task('watch', () => {
    gulp.watch('sass/**/*.scss', gulp.series('sass')); 
});

gulp.task('minify', () => {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('css'));
});
