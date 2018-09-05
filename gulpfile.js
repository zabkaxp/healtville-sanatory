const gulp =require('gulp');

const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concat = require('gulp-concat');



	gulp.task('sass', function(){
	  gulp.src('healthville-sanatory/sass/**/*.scss') 
	      .pipe(sass().on('error', sass.logError))
	      .pipe(gulp.dest('dist/css'));
	});

	gulp.task('scripts', function(){
	  gulp.src('healthville-sanatory/js/*.js')
	      .pipe(concat('main.js'))
	      .pipe(uglify())
	      .pipe(gulp.dest('dist/js'));
	});
	

gulp.task('imageMin', function(){
	gulp.src('healthville-sanatory/img/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/images'));
}
);
	gulp.task('default', ['imageMin', 'sass', 'scripts']);
	
	gulp.task('watch', function(){
	  gulp.watch('healthville-sanatory/js/*.js', ['scripts']);
	  gulp.watch('healthville-sanatory/img/*', ['imageMin']);
	  gulp.watch('healthville-sanatory/sass/**/*.scss', ['sass']);
	});