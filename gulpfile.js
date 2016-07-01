const gulp = require('gulp')
const less = require('gulp-less')
const sourcemaps = require('gulp-sourcemaps')

gulp.task('less:dev', function () {
  gulp.src('less/main.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('build/css'))
})

gulp.task('less:prod', function () {
  gulp.src('less/main.less')
    .pipe(less())
    .pipe(gulp.dest('build/css'))
})

gulp.task('bundle', function () {
  gulp.src(['style.css', 'screenshot.png', '*.php']).pipe(gulp.dest('build'))
  gulp.src('img/*.{svg,png,jpg,gif}').pipe(gulp.dest('build/img'))
  gulp.src('inc/*.php').pipe(gulp.dest('build/inc'))
  gulp.src('template-parts/*.php').pipe(gulp.dest('build/template-parts'))
})

gulp.task('build:dev', ['less:dev', 'bundle'])
gulp.task('build:prod', ['less:prod', 'bundle'])

gulp.task('watch', function () {
  gulp.watch([
    'style.css',
    'screenshot.png',
    '*.php',
    'img/*',
    'less/*',
    'inc/**/*',
    'template-parts/**/*'
  ], ['build:dev'])
})

gulp.task('default', ['build:dev'])
