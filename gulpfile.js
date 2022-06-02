var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('styles', function () {
    return gulp.src('./assets/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./css/'))
});


//Watch task
gulp.task('default', function () {
    console.log('Hello Zell');
    return gulp.watch('./assets/sass/*.scss', gulp.series('styles'));
});