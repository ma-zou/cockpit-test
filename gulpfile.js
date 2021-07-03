const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync');

sass.compiler = require('sass');

const paths = {
    styles: {
        input: 'assets/styles/sass/styles.sass',
        src: 'assets/styles/sass/**/*.sass',
        dest: 'assets/styles/'
    },
    scripts: {
        src: 'src/scripts/typescript/**/*.ts',
        dest: 'assets/scripts/'
    }
}

function styles() {
    return gulp.src(paths.styles.input)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        })
        .on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

function scripts() {

}

function bs() {
    connect.server({ base: './' }, () => {
        browserSync({
            base: './',
            keepAlive: true,
            ghostMode: {
                clicks: true,
                forms: false,
                scroll: false
            },
            notify: false,
            open: false,
            port: 3000,
            proxy: '127.0.0.1:8000',
            reloadOnRestart: false,
            ui: {
                weinre: {
                    boundHost: 'all'
                }
            }
        });
    });
}

function watch() {
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.styles.src, styles);
    gulp.watch("**/*.php").on('change', browserSync.reload);
    gulp.watch("**/*.js").on('change', browserSync.reload);
}

const serve = gulp.series(gulp.parallel((styles, scripts)));

// const serve_dev = gulp.series(gulp.parallel(styles, scripts), gulp.parallel(watch, bs))
const serve_dev = gulp.parallel(styles, gulp.parallel(watch, bs));


exports.styles = styles;
exports.watch = watch;
exports.default = serve_dev;