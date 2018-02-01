var gulp,
    gutil,
    concat,
    uglify,
    sass,
    sourceMaps,
    minifyCSS,
    autoprefixer,
    gulpSequence,
    plumber,
    mergequery,
    shell
;

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
shell          = require('gulp-shell');

var autoPrefixBrowserList = ['last 2 version', 'safari 5', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'];

var src_scripts = [
  'src/site/data/**/*.json',
  'src/site/scripts/vendors/**/*.js',
  'src/site/scripts/src/**/*.js',
];

var public_dest = 'public/';

// Tasks

gulp.task('scripts', function () {
  return gulp.src(src_scripts)
    .pipe(plumber())
    .pipe(concat('index.js'))
    .on('error', gutil.log)
    .pipe(gulp.dest(public_dest + 'scripts'))
});

gulp.task('styles', function () {
  return gulp.src('src/site/styles/main.scss')
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
          'styles/'
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
    .pipe(gulp.dest(public_dest + 'styles'))
});

// Deploy

gulp.task('deploy-scripts', function () {
    return gulp.src(src_scripts)
     .pipe(plumber())
     .pipe(concat('index.js'))
     .pipe(uglify())
     .pipe(gulp.dest(public_dest + 'scripts'))
});

gulp.task('deploy-styles', function () {
  return gulp.src('src/site/styles/main.scss')
    .pipe(plumber({
      errorHandler: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(sass({
          errLogToConsole: true,
          includePaths: [
              'styles/'
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
    .pipe(gulp.dest(public_dest + 'styles'))
});

gulp.task('clean', function () {
  return shell.task([
    'rm -rf public/scripts',
    'rm -rf public/styles',
  ]);
});

gulp.task('scaffold', function () {
  return shell.task([
      'mkdir public/scripts',
      'mkdir public/styles'
    ]
  );
});

// Run

gulp.task('default', function () {
    gulp.start('clean', 'scaffold', ['scripts', 'styles']);

    gulp.watch('src/site/scripts/**', ['scripts']);
    gulp.watch('src/site/data/**', ['scripts']);
    gulp.watch('src/site/styles/**', ['styles']);
});

gulp.task('deploy', gulpSequence('clean', 'scaffold', ['deploy-styles', 'deploy-scripts']));
 