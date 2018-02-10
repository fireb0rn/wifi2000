const gulp = require('gulp');
const babel = require('gulp-babel');
const eslint = require('gulp-eslint');
const sass = require('gulp-sass');

gulp.task('main', function() {
    gulp.src(["public/es6/**/*.js"])
        .pipe(eslint())
        .pipe(eslint.format());

    gulp.src("public/es6/**/*.js")
        .pipe(babel())
        .pipe(gulp.dest("public/dist"));
});

gulp.task('sass', function() {
    gulp.src(['public/sass/**/*.sass', 'public/sass/**/*.scss'])
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch(['public/sass/**/*.sass', 'public/sass/**/*.scss'], ['sass']);
});

gulp.task('default', ['main', 'watch']);