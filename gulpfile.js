const gulp = require('gulp');
const phpspec = require('gulp-phpspec');
const notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('spec/**/*.php')
        .pipe(phpspec('', { 'verbose': 'v', notify: true, clear: true }))
        .on('error', notify.onError({
            title: "Crap",
            message: "Your tests failed.",
            icon: __dirname + '/fail.png'
        }))
        .pipe(notify({
            title: "Success",
            icon: __dirname + '/success.png',
            message: "All tests have returned green!"
        }));
});

gulp.task('watch', function() {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);