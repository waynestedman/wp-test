var postcss = require('gulp-postcss'),
	gulp = require('gulp'),
  sourcemaps = require('gulp-sourcemaps'),
  sass = require('gulp-sass'),
  // gutil = require('gulp-util'),
  livereload = require('gulp-livereload'),
  gulpif = require('gulp-if'),
  autoprefixer = require('autoprefixer');

var env,
  jsSources,
	sassSources,
	htmlSources,
	outputDir,
	sassStyle;

env = process.env.NODE_ENV || 'development';

if (env==='development') {
	outputDir = './src/';
	sassStyle = 'expanded';
} else {
	outputDir = '';
	sassStyle = 'compressed';
}

jsSources = ['./src/js/*.js'];
sassSources = ['./src/sass/styles.scss'];
htmlSources = ['*.html'];

gulp.task('sass', function() {
	gulp.src('./src/sass/styles.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('./src/css'));
});

gulp.task('prefix', function () {
	gulp.src('./src/css/styles.css')
	.pipe(sourcemaps.init({ loadMaps: true }))
	.pipe(postcss([ autoprefixer({browsers: 'last 3 versions', cascade: false}) ]))
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('./dest/css'))
	.pipe(livereload());
});

gulp.task('js', function() {
	gulp.src(jsSources)
	.pipe(livereload());
});

gulp.task('html', function() {
	gulp.src(htmlSources)
	.pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./src/sass/**/*.scss', ['sass']);
  gulp.watch(('./src/css/styles.css'), ['prefix']);
  gulp.watch(jsSources, ['js']);
  gulp.watch(htmlSources, ['html']);
});

gulp.task('default', ['html', 'sass', 'js', 'prefix', 'watch']);
