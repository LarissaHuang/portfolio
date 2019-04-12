///// Plugin Includes /////
var gulp = require('gulp');
var uglify = require('gulp-uglifyes');
var plumber = require('gulp-plumber');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');


///// Compile/Validate JS /////
gulp.task('js', function () {
    return gulp.src(['./js/src/*.js'])
        .pipe(plumber())
        .pipe(jshint())
        .pipe(jshint.reporter('default', { verbose: true }))
        .pipe(concat('scripts.min.js'))
        .pipe(uglify({
            mangle: false,
        }))
        .pipe(gulp.dest('./js/dist/'));
});


///// Compile Home Page /////
gulp.task('home', function () {
    return gulp.src('./scss/styles.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('styles.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});

///// Compile About Page /////
// gulp.task('about', function () {
//     return gulp.src('./scss/about.scss')
//         .pipe(plumber())
//         .pipe(sourcemaps.init())
//         .pipe(sass())
//         .pipe(sass({ outputStyle: 'compressed' }))
//         .pipe(autoprefixer('last 2 versions'))
//         .pipe(concat('about.css'))
//         .pipe(sourcemaps.write('.'))
//         .pipe(gulp.dest('./css/'))
//         .pipe(browserSync.stream())
// });


///// Compile IY Page /////
gulp.task('infinite-yoga', function () {
    return gulp.src('./scss/infinite-yoga.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('infinite-yoga.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});


///// Compile shutter thunder Page /////
gulp.task('shutter', function () {
    return gulp.src('./scss/shutter-thunder.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('shutter-thunder.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});

///// Compile Tag Heuer Page /////
gulp.task('tag', function () {
    return gulp.src('./scss/tag-heuer-interactive.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('tag-heuer-interactive.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});


///// Compile To Do Page /////
gulp.task('todo', function () {
    return gulp.src('./scss/todo.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('todo.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});

///// Compile Pets Page /////
// gulp.task('pets', function () {
//     return gulp.src('./scss/pets.scss')
//         .pipe(plumber())
//         .pipe(sourcemaps.init())
//         .pipe(sass())
//         .pipe(sass({ outputStyle: 'compressed' }))
//         .pipe(autoprefixer('last 2 versions'))
//         .pipe(concat('pets.css'))
//         .pipe(sourcemaps.write('.'))
//         .pipe(gulp.dest('./css/'))
//         .pipe(browserSync.stream())
// });

///// Compile Guusto Page /////
gulp.task('guusto', function () {
    return gulp.src('./scss/guusto.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('guusto.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});

///// Compile contact Page /////
gulp.task('contact', function () {
    return gulp.src('./scss/contact-form.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(concat('contact-form.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream())
});



///// Browser Sync /////
gulp.task('browser-sync', function () {
    browserSync.init({
        proxy: "http://portfolio-2.localhost",
    });
    gulp.watch('./scss/*.scss', ['home', 'infinite-yoga', 'shutter', 'tag', 'todo', 'guusto', 'contact']);
    gulp.watch('./js/src/*.js', ['js']).on('change', browserSync.reload);
});

//////////////////////////////
// Default Task
//////////////////////////////
gulp.task('default', ['browser-sync']);
