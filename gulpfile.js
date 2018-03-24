let gulp = require('gulp'),
    sass = require('gulp-sass'),
    bless = require('gulp-bless'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    themePath = 'wp-content/themes/artbysusanna';

function exceptionLog(error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('styles', function () {
    return gulp
        .src(themePath + '/assets/scss/style.scss')
        .pipe(
            sass({
                style: 'expanded',
                includePaths: [
                    'node_modules/foundation-sites/scss',
                    'node_modules/ionicons/dist/scss',
                    'node_modules/motion-ui',
                    'node_modules/ionicons/dist/scss',
                    'node_modules/swiper/dist/css'
                ]
            })
        )
        .pipe(
            autoprefixer({
                browsers: ['last 2 versions', 'ie >= 10', 'ios >= 9'],
                remove: false,
                cascade: false
            })
        )
        .pipe(bless())
        .pipe(
            cssnano({
                zindex: false,
                autoprefixer: false,
                calc: false,
                colormin: false,
                convertValues: false,
                discardComments: true,
                discardDuplicates: false,
                discardEmpty: false,
                discardOverridden: false,
                discardUnused: false,
                mergeIdents: false,
                mergeLonghand: false,
                mergeRules: false,
                minifyFontValues: false,
                minifyGradients: false,
                minifyParams: false,
                minifySelectors: false,
                normalizeCharset: false,
                normalizeDisplayValues: false,
                normalizePositions: false,
                normalizeRepeatStyle: false,
                normalizeString: false,
                normalizeTimingFunctions: false,
                normalizeUnicode: false,
                normalizeUrl: false,
                normalizeWhitespace: false,
                orderedValues: false,
                reduceIdents: false,
                reduceInitial: false,
                reduceTransforms: false,
                svgo: false,
                uniqueSelectors: false
            })
        )
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(themePath));
});

gulp.task('scripts', function () {
    return gulp
        .src([
            'node_modules/jquery/dist/jquery.js',
            'node_modules/foundation-sites/dist/js/foundation.js',
            'node_modules/swiper/dist/js/swiper.js',
            themePath + '/assets/js/*.js'
        ])
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(themePath));
});

gulp.task('default', function () {
    gulp.start('styles', 'scripts');
});

gulp.task('watch', function () {
    gulp.watch(themePath + '/assets/scss/**/*.scss');
    gulp.watch(themePath + '/assets/js/*.js');
})
