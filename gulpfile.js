const { watch, parallel, series, src, dest } = require('gulp'),
    browserSync = require('browser-sync').create(),
    mode        = require('gulp-mode')();
    gulpClean   = require('gulp-clean'),
    sass        = require('gulp-sass')(require('sass')),
    autoprefixer = require('autoprefixer'),
    postcss     = require('gulp-postcss'),
    sourcemaps  = require('gulp-sourcemaps'),
    rename      = require('gulp-rename'),
    cleanCss    = require('gulp-clean-css'),
    plumber     = require("gulp-plumber"),
    uglify      = require('gulp-uglify'),
    webpack     = require('webpack-stream');

// Detect env.
const prod = process.env.NODE_ENV === 'production';

// Define asset paths.
const paths = {
    'dist': 'dist/**/*',
    'html': {
        'watch': '**/*.php'
    },
    'css': {
        'base': 'assets/scss/',
        'src': 'assets/scss/app.scss',
        'dest': 'dist/css/',
        'watch': 'assets/scss/**/*.scss',
    },
    'js': {
        'base': 'assets/js/',
        'src': 'assets/js/**/*.js',
        'dest': 'dist/js/',
        'watch': 'assets/js/**/*.js',
    },
}

function css() {
    return src(paths.css.src)
        .pipe(plumber())
        .pipe(mode.development(sourcemaps.init()))
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(postcss([autoprefixer()]))
        .pipe(cleanCss())
        .pipe(mode.development(sourcemaps.write()))
        .pipe(rename({'suffix': '.min'}))
        .pipe(dest(paths.css.dest));
}

function js() {
    return src(paths.js.src)
        .pipe(plumber())
        .pipe(webpack({
            mode: prod ? 'production' : 'development',
            devtool: prod ? false : 'eval',
            output: {
                filename: 'app.js',
            },
            module: {
                rules: [{
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                }]
            }
        }))
        .pipe(uglify())
        .pipe(rename({
            'suffix': '.min',
        }))
        .pipe(dest(paths.js.dest))
}

function watchFiles() {
    watch(paths.html.watch, browserSyncReload);
    watch(paths.js.watch, series(js, browserSyncReload));
    watch(paths.css.watch, series(css, browserSyncReload));
}

function clean() {
    return src(paths.dist, { read: false }).pipe(gulpClean());
}

function serve() {
    browserSync.init({
        open: true,
        proxy: 'http://gulpbootstrapwpboilerplate.local' // Change this
    });
}

function browserSyncReload(done) {
    browserSync.reload();
    done();
}

exports.css = css;
exports.js = js;
exports.clean = clean;
exports.build = series(clean, css, js);
exports.default = parallel(css, js, watchFiles, serve);