let gulp = require('gulp'),
    sass = require('gulp-sass'),
    minify = require('gulp-minify'),
    uglify = require('gulp-uglify'),
    bless = require('gulp-bless'),
    themePath = 'wp-content/themes/artbysusanna';

function exceptionLog(error) {
    console.log(error.toString());
    this.emit('end');
};

gulp.task('styles', function () {
    return gulp.src(themePath + '/assets/css/style.scss')
        .pipe(sass({
            style: 'expanded',
            includePaths: ['node_modules/foundation-sites/scss', 'node_modules/ionicons/dist/scss', 'node_modules/motion-ui', 'node_modules/ionicons/dist/scss']
        }))
        .pipe(bless())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(themePath))
});

gulp.task('scripts', function () {
    return gulp.src(themePath + '/assets/js/scripts.js')
        .pipe(minify())
        .pipe(uglify())
        .pipe(gulp.dest(themePath));
});

gulp.task('default', function () {
    gulp.start('styles', 'scripts')
});
