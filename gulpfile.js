const gulp = require('gulp')
const less = require('gulp-less')

gulp.task('less', function () {
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

gulp.task('build', ['less', 'bundle'])

gulp.task('watch', function () {
  gulp.watch([
    'style.css',
    'screenshot.png',
    '*.php',
    'img/*',
    'src/**/*',
    'inc/**/*',
    'template-parts/**/*'
  ], ['build'])
})

gulp.task('default', ['build'])
