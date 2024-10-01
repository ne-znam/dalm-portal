const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const cssnano = require('gulp-cssnano');
const plumber = require('gulp-plumber');
const rename = require('gulp-rename');
const sassLint = require('gulp-sass-lint');
const debug = require('gulp-debug');

const source_path = './assets-dev/scss';

// CSS LINT
gulp.task('lint-css', function (done2) {
    gulp.src(`${source_path}/style.scss`)
      .pipe(sassLint({
        rules: {
          'class-name-format': 0,
          'property-sort-order': 0,
          'no-color-literals': 0,
          'no-transition-all': 0,
          'no-important': 0,
          'nesting-depth': 0,
          'no-css-comments': 1,
        }
      }))
      .pipe(sassLint.format());
    done2();
});

// CSS TASK
gulp.task("sass", function(done) {
    gulp.src(`${source_path}/style.scss`)
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(postcss([ autoprefixer() ]))
    .pipe(cssnano())
    .pipe(sourcemaps.write({includeContent: false}))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(debug())
    .pipe(rename('style.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css'));
    done();
});

gulp.task('watch', function() {
    gulp.watch('./assets-dev/css/**/*.scss', gulp.series('sass'));
});

gulp.task('start', gulp.series('sass', 'watch'));

gulp.task('default', gulp.series('start'));
