const gulp = require('gulp')
const less = require('gulp-less')

gulp.task('less', function () {
  gulp.src('src/less/main.less')
    .pipe(less())
    .pipe(gulp.dest('css'))
})

gulp.task('watch-less', function () {
  gulp.watch('src/less/*.less', ['less'])
})

gulp.task('watch-js', function () {
  gulp.watch('src/js/*.js', ['js'])
})

gulp.task('bundle', function () {
  gulp.src(['style.css', 'screenshot.png', '*.php']).pipe(gulp.dest('build'))
  gulp.src('img/*.{svg,png,jpg,gif}').pipe(gulp.dest('build/img'))
  gulp.src('css/*.css').pipe(gulp.dest('build/css'))
  gulp.src('inc/*.php').pipe(gulp.dest('build/inc'))
  gulp.src('template-parts/*.php').pipe(gulp.dest('build/template-parts'))
})

gulp.task('build', ['less', 'bundle'])

gulp.task('default', ['watch-less'])
