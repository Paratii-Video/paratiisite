var gulp, gutil, concat, uglify, sass, sourceMaps, minifyCSS, autoprefixer, gulpSequence, plumber, mergequery;

var autoPrefixBrowserList = ['last 2 version', 'safari 5', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'];

gulp           = require('gulp');
gutil          = require('gulp-util');
concat         = require('gulp-concat');
uglify         = require('gulp-uglify');
sass           = require('gulp-sass');
sourceMaps     = require('gulp-sourcemaps');
minifyCSS      = require('gulp-minify-css');
autoprefixer   = require('gulp-autoprefixer');
gulpSequence   = require('gulp-sequence').use(gulp);
plumber        = require('gulp-plumber');
mergequery     = require('gulp-merge-media-queries');

var app_scripts = [
    'src/data/**/*.json',
    'src/scripts/vendors/**/*.js',
    'src/scripts/src/**/*.js',
];

//

gulp.task('scripts', function () {
    return gulp.src(app_scripts)
      .pipe(plumber())
      .pipe(concat('index.js'))
      .on('error', gutil.log)
      .pipe(gulp.dest('src/scripts'))
});

gulp.task('styles', function () {
    return gulp.src('src/styles/main.scss')
                .pipe(plumber({
                  errorHandler: function (err) {
                    console.log(err);
                    this.emit('end');
                  }
                }))
                .pipe(sourceMaps.init())
                .pipe(sass({
                      errLogToConsole: true,
                      includePaths: [
                          'src/styles/'
                      ]
                }))
                .pipe(autoprefixer({
                   browsers: autoPrefixBrowserList,
                   cascade:  true
                }))
                .on('error', gutil.log)
                .pipe(concat('index.css'))
                .pipe(mergequery({log: true}))
                .pipe(sourceMaps.write())
                .pipe(gulp.dest('src/styles'))
    });

// Images

gulp.task('images', function () {
    gulp.src(['src/images/**/*', '!src/images/README'])
        .pipe(plumber())
        .pipe(gulp.dest('public/images'));
});

// Scripts

gulp.task('scripts-deploy', function () {
    return gulp.src(app_scripts)
     .pipe(plumber())
     .pipe(concat('index.js'))
     .pipe(uglify())
     .pipe(gulp.dest('public/scripts'));
});

// Styles

gulp.task('styles-deploy', function () {
  return gulp.src('src/styles/main.scss')
            .pipe(plumber({
              errorHandler: function (err) {
                console.log(err);
                this.emit('end');
              }
            }))
            .pipe(sourceMaps.init())
            .pipe(sass({
                  errLogToConsole: true,
                  includePaths: [
                      'src/styles/'
                  ]
            }))
            .pipe(autoprefixer({
               browsers: autoPrefixBrowserList,
               cascade:  true
            }))
            .on('error', gutil.log)
            .pipe(concat('index.css'))
            .pipe(mergequery({log: true}))
            .pipe(minifyCSS())
            .pipe(gulp.dest('public/styles'))
});

gulp.task('app-deploy', function () {
    gulp.src([
          'src/index.html'
        ])
        .pipe(plumber())
        .pipe(gulp.dest('public'));
});

//

gulp.task('default', function () {
    gulpSequence(['scripts', 'styles']);

    gulp.watch('src/scripts/**', ['scripts']);
    gulp.watch('src/data/**', ['scripts']);
    gulp.watch('src/styles/**', ['styles']);
});

gulp.task('deploy', gulpSequence(['styles-deploy', 'scripts-deploy', 'images', 'app-deploy']));
 