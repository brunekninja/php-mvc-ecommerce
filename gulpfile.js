// generated on 2017-03-20 using generator-webpublic 2.3.2
const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const browserSync = require('browser-sync').create();
const del = require('del');
const runSequence = require('run-sequence');
const php = require('gulp-connect-php');
const browserify = require('gulp-browserify');

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

var dev = true;

gulp.task('styles', () => {
  return gulp.src('public/styles/*.scss')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 10,
      includePaths: ['.']
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe($.sourcemaps.write())
    .pipe($.if(dev==false, $.cssnano()))
    .pipe($.if(dev, gulp.dest('tmp/styles'), gulp.dest('dist/styles')))
    .pipe($.if(dev, reload({stream: true})));
});

gulp.task('scripts', () => {
  return gulp.src('public/scripts/main.js')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe(browserify({
      insertGlobals : true,
      debug : true
    }))
    .pipe($.babel())
    .pipe($.sourcemaps.write('.'))
    .pipe($.if(dev, gulp.dest('tmp/scripts'), gulp.dest('dist/scripts')))
    .pipe($.if(dev, reload({stream: true})));
});

gulp.task('scripts:vendor', () => {
  return gulp.src('public/scripts/vendor/**/*')
    .pipe($.if(dev, gulp.dest('tmp/scripts/vendor'), gulp.dest('dist/scripts/vendor')));
});

function lint(files, options) {
  return gulp.src(files)
    .pipe($.eslint({ fix: true }))
    .pipe(reload({stream: true, once: true}))
    .pipe($.eslint.format())
    .pipe($.if(!browserSync.active, $.eslint.failAfterError()));
}

gulp.task('lint', () => {
  return lint('public/scripts/**/*.js')
    .pipe(gulp.dest('public/scripts'));
});

gulp.task('images', () => {
  return gulp.src('public/images/**/*')
    .pipe($.cache($.imagemin()))
    .pipe($.if(dev, gulp.dest('tmp/images'), gulp.dest('dist/images')));
});

gulp.task('fonts', () => {
  return gulp.src(require('main-bower-files', 'public/')('**/*.{eot,svg,ttf,woff,woff2}', function (err) {})
    .concat('public/fonts/**/*'))
    .pipe($.if(dev, gulp.dest('tmp/fonts'), gulp.dest('dist/fonts')));
});

gulp.task('extras', () => {
  return gulp.src([
    'public/*',
    '!public/*.html'
  ], {
    dot: true
  }).pipe(gulp.dest('dist'));
});

gulp.task('clean', del.bind(null, ['tmp']));
gulp.task('clean:all', del.bind(null, ['tmp', 'dist']));

gulp.task('serve', () => {
  proxy = '127.0.0.1:8011';

  runSequence(['clean'], ['styles', 'scripts', 'scripts:vendor', 'fonts', 'images', 'php'], () => {
    browserSync.init({
      notify: false,
      port: 9000,
      open: true,
      proxy: proxy
    });

    gulp.watch([
      'public/images/**/*',
      'app/**/*.php',
      'index.php'
    ]).on('change', reload);

    gulp.watch('public/styles/**/*.scss', ['styles']);
    gulp.watch('public/scripts/**/*.js', ['scripts']);
    gulp.watch('public/fonts/**/*', ['fonts']);
    gulp.watch('public/images/**/*', ['images']);
  });
});

gulp.task('serve:dist', ['default'], () => {
  browserSync.init({
    notify: false,
    port: 9000,
    server: {
      baseDir: ['dist']
    }
  });
});

gulp.task('build', () => {
  dev = false;
  runSequence(['clean:all'], ['styles', 'scripts', 'scripts:vendor', 'fonts', 'images']);
});

gulp.task('default', () => {
  return new Promise(resolve => {
    dev = false;
    runSequence(['clean'], 'build', resolve);
  });
});

gulp.task('php', function() {
    var phpPath = 'php';

    php.server({
      base: '.',
      port: 8011,
      keepalive: true,
      stdio: 'ignore',
      bin: phpPath
    });
});
