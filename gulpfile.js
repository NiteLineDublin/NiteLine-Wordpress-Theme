var gulp = require('gulp')
var less = require('gulp-less')
var webpack = require('webpack-stream')

gulp.task('less', function () {
  gulp.src('src/less/main.less')
    .pipe(less())
    .pipe(gulp.dest('css'))
})

gulp.task('js', function () {
  gulp.src('src/js/main.js')
    .pipe(webpack({
      output: {
        filename: 'main.js'
      }
    }))
    .pipe(gulp.dest('js'))
})

gulp.task('watch-less', function () {
  gulp.watch('src/less/*.less', ['less'])
})

gulp.task('watch-js', function () {
  gulp.watch('src/js/*.js', ['js'])
})

gulp.task('default', ['watch-less', 'watch-js'])
