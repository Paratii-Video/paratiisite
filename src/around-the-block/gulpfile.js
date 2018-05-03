var gulp           = require('gulp');
var gutil          = require('gulp-util');
var concat         = require('gulp-concat');
var uglify         = require('gulp-uglify');
var sass           = require('gulp-sass');
var sourceMaps     = require('gulp-sourcemaps');
var minifyCSS      = require('gulp-minify-css');
var autoprefixer   = require('gulp-autoprefixer');
var gulpSequence   = require('gulp-sequence').use(gulp);
var shell          = require('gulp-shell');
var plumber        = require('gulp-plumber');
var mergequery     = require('gulp-merge-media-queries');
var php2html       = require("gulp-php2html");

var buildDir = '../../around-the-block';
var autoPrefixBrowserList = [
  'last 2 version',
  'safari 5',
  'ie 9',
  'opera 12.1',
  'ios 6',
  'android 4'
];

var app_scripts = [
  'app/scripts/vendors/**/*.js',
  'app/scripts/app/cube.js',
  'app/scripts/app/typewrite.js',
  'app/scripts/app/globals.js',
  'app/scripts/app/player.js',
  'app/scripts/app/navigation.js',
  'app/scripts/app/teasers.js',
  'app/scripts/app/chapters.js',
  'app/scripts/app/interviews.js',
  'app/scripts/app/discover.js',
  'app/scripts/app/forms.js',
  'app/scripts/app/main.js'
];

var deploySequence = [
  'images-deploy',
  'scripts-deploy',
  'styles-deploy',
  'php2html',
  'html-deploy'
]

//

gulp.task('scripts', function () {
  return gulp.src(app_scripts)
    .pipe(plumber())
    .pipe(concat('app.js'))
    .on('error', gutil.log)
    .pipe(gulp.dest('app/scripts'))
});

gulp.task('styles', function () {
  return gulp.src('app/styles/scss/main.scss')
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
              'app/styles/scss/'
          ]
    }))
    .pipe(autoprefixer({
       browsers: autoPrefixBrowserList,
       cascade:  true
    }))
    .on('error', gutil.log)
    .pipe(concat('styles.css'))
    .pipe(mergequery({log: true}))
    .pipe(sourceMaps.write())
    .pipe(gulp.dest('app/styles'))
  }
);

// Deploy

gulp.task('html-deploy', function () {
    gulp.src([
          'app/google8e851fa4bc40c39a.html'
        ])
        .pipe(plumber())
        .pipe(gulp.dest(buildDir));

    gulp.src(['app/styles/*.css', '!app/styles/styles.css'])
        .pipe(plumber())
        .pipe(gulp.dest(buildDir + '/styles'));

    gulp.src(['app/scripts/*.js', '!app/scripts/app.js'])
        .pipe(plumber())
        .pipe(gulp.dest(buildDir + '/scripts'));
  }
);

gulp.task('php2html', function (tmp) {
    gulp.src("./app/*.php")
      .pipe(php2html())
      .pipe(gulp.dest(buildDir));
  }
);

gulp.task('styles-deploy', function () {
  return gulp.src('app/styles/scss/main.scss')
    .pipe(plumber())
    .pipe(sass({
          includePaths: [
              'app/styles/scss',
          ]
    }))
    .pipe(autoprefixer({
      browsers: autoPrefixBrowserList,
      cascade:  true
    }))
    .pipe(concat('styles.css'))
    .pipe(minifyCSS())
    .pipe(gulp.dest(buildDir + '/styles'));
  }
);

gulp.task('scripts-deploy', function () {
    return gulp.src(app_scripts)
     .pipe(plumber())
     .pipe(concat('app.js'))
     .pipe(uglify())
     .pipe(gulp.dest(buildDir + '/scripts'));
  }
);

gulp.task('images-deploy', function () {
    gulp.src(['app/images/**/*'])
        .pipe(plumber())
        .pipe(gulp.dest(buildDir + '/images'));
  }
);

//

gulp.task('default', function () {
    gulp.start('scripts', 'styles');

    gulp.watch('app/scripts/app/**', ['scripts']);
    gulp.watch('app/styles/scss/**', ['styles']);
  }
);

gulp.task('deploy', gulpSequence(deploySequence));
 