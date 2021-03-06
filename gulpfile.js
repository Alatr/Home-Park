var syntax        			= 'sass'; // Syntax: sass or scss;
			
var gulp          						= require('gulp'),
		gutil         						= require('gulp-util' ),
		sass          						= require('gulp-sass'),
		browserSync   						= require('browser-sync'),
		concat        						= require('gulp-concat'),
		uglify        						= require('gulp-uglify'),
		cleancss      						= require('gulp-clean-css'),
		rename        						= require('gulp-rename'),
		autoprefixer  						= require('gulp-autoprefixer'),
		notify        						= require('gulp-notify'),
		sourcemaps 	  						= require('gulp-sourcemaps'),
		imagemin 	  							= require('gulp-imagemin'),
		cache        							= require('gulp-cache'),
		imageminPngquant 					= require('imagemin-pngquant'),
		imageminJpegRecompress  	= require('imagemin-jpeg-recompress'),
		rsync        							= require('gulp-rsync'),
		gcmq 											= require('gulp-group-css-media-queries');

gulp.task('browser-sync', function() {
	browserSync({
		proxy: 'home',
		notify: false,
		// open: false,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
	})
});
// Компиляция Sass
gulp.task('styles', function() {
	return gulp.src('src/'+syntax+'/**/*.'+syntax+'')
	
	.pipe ( sourcemaps . init ( ) )
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	//.pipe(gcmq())
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe ( sourcemaps . write ('.'))

	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.stream())
});

// Сжатие картинок
gulp.task('compress', function(){
    return gulp.src('src/img/**/*')
        .pipe(cache(imagemin([
              imagemin.gifsicle({interlaced: true}),
              imagemin.jpegtran({progressive: true}),
              imageminJpegRecompress({
                loops: 5,
                min: 65,
                max: 70,
                quality:'medium'
              }),
              imagemin.svgo(),
              imagemin.optipng({optimizationLevel: 5}),
              imageminPngquant({quality: '55-60', speed: 5})
            ],{
              verbose: true
        })))
        .pipe(gulp.dest('dist/img'));
});
// Очистка кэша
gulp.task('clear', function () {
    return cache.clearAll();
})

// Конкатенация Js
gulp.task('js', function() {
	return gulp.src([
		'src/libs/jquery/dist/jquery.min.js',
		'src/libs/slick-carousel/slick/slick.min.js',
		'src/libs/magnific-popup/dist/jquery.magnific-popup.min.js',
		'src/libs/ion.rangeSlider/js/ion.rangeSlider.min.js',
		'src/libs/velocity/velocity.min.js',
		'src/libs/masked-input/masked-input.min.js',
		'src/libs/wow/dist/wow.min.js',
		'src/libs/datetimepicker/datetimepicker.js',
		'src/libs/datetimepicker/php-date-formatter.min.js',
		'src/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	// .pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.reload({ stream: true }))
});

// Деплой на FTP
gulp.task('rsync', function() {
	return gulp.src('app/**')
	.pipe(rsync({
		root: 'app/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});
// Отслеживание файлов
gulp.task('watch', ['styles', 'js', 'browser-sync', 'compress'], function() {
	gulp.watch('src/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch('src/img/*', ['compress']);
	gulp.watch(['libs/**/*.js', 'src/js/common.js'], ['js']);
	gulp.watch('dist/*.html', browserSync.reload);
	gulp.watch('dist/*.php', browserSync.reload)
});

gulp.task('default', ['watch']);
