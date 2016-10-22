// Gulp Utilities
const gulp = require('gulp');
const util = require('gulp-util');
const plumber = require('gulp-plumber');
const del = require('del');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const rename = require('gulp-rename');
const zip = require('gulp-zip');
const runSeq = require('run-sequence');

const path = require('path');

// Transforms
const pug = require('gulp-pug');
const pugPhp = require('gulp-jade-php');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const babelify = require('babelify');
const imagemin = require('gulp-imagemin');

// Bundling
const browserify = require('browserify');

const PATHS = {
    sass: 'src/styles',
    templates: 'src/templates',
    js: 'src/scripts',
    functions: 'src/functions',
    images: 'src/images',
    dist: 'dist'
}

gulp.task('clean', () => {
    return del(['dist/**']);
});

gulp.task('templates', () => {
    return gulp.src(path.join(PATHS.templates, '*.php'))
        .pipe(gulp.dest(PATHS.dist));
});

gulp.task('sass', () => {
    return gulp.src(path.join(PATHS.sass, '*.scss'))
            .pipe(plumber())
            .pipe(sass())
            .pipe(autoprefixer())
        .pipe(gulp.dest(PATHS.dist));
});

gulp.task('images', () => {
    return gulp.src(path.join(PATHS.images, '*'))
            .pipe(plumber())
            .pipe(imagemin())
        .pipe(gulp.dest(path.join(PATHS.dist, 'images')));
});

gulp.task('bundle', () => {
    return browserify({ entries: PATHS.js })
        .transform(babelify, { presets: ['es2015'] })
        .bundle()
        .pipe(source('bundle.js'))
        .pipe(gulp.dest(path.join(PATHS.dist, 'js')));
});

gulp.task('functions', () => {
    return gulp.src(path.join(PATHS.functions, '*.php'))
        .pipe(gulp.dest(PATHS.dist));
});

gulp.task('zip', () => {
    return gulp.src('dist/**')
        .pipe(zip('fullmetal-theme.zip'))
        .pipe(gulp.dest('./'));
});

gulp.task('build', ['clean', 'templates', 'sass', 'bundle', 'functions', 'images', 'zip']);
gulp.task('build', () => {
    runSeq(
        'clean',
        ['templates', 'sass', 'bundle', 'functions', 'images'],
        'zip'
    );
});

gulp.task('watch', ['build'], () => {
    gulp.watch(path.join(PATHS.sass, '**', '*.scss'), () => runSeq('sass', 'zip'));
    gulp.watch(path.join(PATHS.templates, '**', '*.php'), () => runSeq('templates', 'zip'));
    gulp.watch(path.join(PATHS.js, '**', '*.js'), () => runSeq('bundle', 'zip'));
    gulp.watch(path.join(PATHS.functions, '**', '*.php'), () => runSeq('functions', 'zip'));
    gulp.watch(path.join(PATHS.images, '**'), () => runSeq('images', 'zip'));
});