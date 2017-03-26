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
  return gulp.src('assets/styles/*.scss')
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
  return gulp.src('assets/scripts/main.js')
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
  return gulp.src('assets/scripts/vendor/**/*')
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
  return lint('assets/scripts/**/*.js')
    .pipe(gulp.dest('scripts'));
});

gulp.task('images', () => {
  return gulp.src('assets/images/**/*')
    .pipe($.cache($.imagemin()))
    .pipe($.if(dev, gulp.dest('tmp/images'), gulp.dest('dist/images')));
});

gulp.task('fonts', () => {
  return gulp.src(require('main-bower-files', '/assets')('**/*.{eot,svg,ttf,woff,woff2}', function (err) {})
    .concat('assets/fonts/**/*'))
    .pipe($.if(dev, gulp.dest('tmp/fonts'), gulp.dest('dist/fonts')));
});

gulp.task('clean', del.bind(null, ['tmp']));
gulp.task('clean:all', del.bind(null, ['tmp', 'dist']));

gulp.task('serve', () => {
  runSequence(['clean'], ['styles', 'scripts', 'scripts:vendor', 'fonts', 'images', 'php'], () => {
    browserSync.init({
      notify: false,
      port: 9000,
      open: true,
      proxy: 'shopphie.dev'
    });

    gulp.watch([
      'assets/images/**/*',
      '../app/**/*.php',
      '**/*.php'
    ]).on('change', reload);

    gulp.watch('assets/styles/**/*.scss', ['styles']);
    gulp.watch('assets/scripts/**/*.js', ['scripts']);
    gulp.watch('assets/fonts/**/*', ['fonts']);
    gulp.watch('assets/images/**/*', ['images']);
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
      port: 8012,
      keepalive: true,
      stdio: 'ignore',
      bin: phpPath
    });
});
