var gulp = require('gulp');

gulp.task('copy-assets', function () {
    gulp
        .src('./node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js')
        .pipe(gulp.dest('./public/js/'));
    
    gulp
        .src('./node_modules/bootstrap-sass/assets/fonts/bootstrap/*')
        .pipe(gulp.dest('./public/fonts/bootstrap'));

    gulp
        .src('./node_modules/angular/angular.min.js')
        .pipe(gulp.dest('./public/js/'));

    gulp
        .src('./node_modules/angular/angular.min.js.map')
        .pipe(gulp.dest('./public/js/'));

    gulp
        .src('./node_modules/angular-ui-bootstrap/ui-bootstrap.min.js')
        .pipe(gulp.dest('./public/js/'));

    gulp
        .src('./node_modules/angular-route/angular-route.min.js')
        .pipe(gulp.dest('./public/js/'));

    gulp
        .src('./node_modules/angular-route/angular-route.min.js.map')
        .pipe(gulp.dest('./public/js/'));
});

gulp.task('compile', function () {
    var gp_concat = require('gulp-concat');
    var gp_rename = require('gulp-rename');
    var gp_uglify = require('gulp-uglify');
    var gp_sourcemaps = require('gulp-sourcemaps');
    
    // Copy Partials over to public
    gulp
        .src('./resources/assets/app/partials/*')
        .pipe(gulp.dest('./public/partials'));

    return gulp.src(['./resources/assets/app/app.js', './resources/assets/app/**/*.js'])
        .pipe(gp_sourcemaps.init())
        .pipe(gp_concat('app.js'))
        .pipe(gulp.dest('./public/js/'))
        .pipe(gp_rename('app.min.js'))
        .pipe(gp_uglify())
        .pipe(gp_sourcemaps.write('./'))
        .pipe(gulp.dest('./public/js/'));
});
