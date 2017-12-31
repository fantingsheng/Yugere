// 引入 gulp及组件
var gulp = require('gulp'),  //gulp基础库
    minifycss = require('gulp-minify-css'),   //css压缩
    concat = require('gulp-concat'),   //合并文件
    uglify = require('gulp-uglify'),   //js压缩
    rename = require('gulp-rename'),   //文件重命名
    jshint = require('gulp-jshint'),   //js检查
    notify = require('gulp-notify');   //提示
    clean = require('gulp-clean');
    myDate = getNowFormatDate();  

function getNowFormatDate() {
    var date = new Date();
    var seperator1 = "";
    var seperator2 = "";
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + "" + date.getHours() + seperator2 + date.getMinutes();
    return currentdate;
}

gulp.task('default',function(){
    gulp.start('minifycss','minifyjs','scripts-concat','styles-concat','minifymyntcss');
});
 
//css处理
gulp.task('minifycss',function(){
   return gulp.src('/Users/fantingsheng/static-file/css/slightech.css')      //设置css
       .pipe(concat('slightech'+myDate+'.css'))      //合并css文件到"order_query"
       .pipe(gulp.dest('dist/css'))           //设置输出路径
       .pipe(clean())
       .pipe(rename({suffix:'.min'}))         //修改文件名
       .pipe(minifycss())                    //压缩文件
       .pipe(gulp.dest('dist/css'))            //输出文件目录
       .pipe(notify({message:'css task ok'}));   //提示成功
});

//css处理
gulp.task('minifymyntcss',function(){
   return gulp.src('/Users/fantingsheng/static-file/css/slightech-mgps.css')      //设置css
       .pipe(concat('slightech-mgps'+myDate+'.css'))      //合并css文件到"order_query"
       .pipe(gulp.dest('dist/css'))           //设置输出路径
       .pipe(clean())
       .pipe(rename({suffix:'.min'}))         //修改文件名
       .pipe(minifycss())                    //压缩文件
       .pipe(gulp.dest('dist/css'))            //输出文件目录
       .pipe(notify({message:'css task ok'}));   //提示成功
});

//JS处理
gulp.task('minifyjs',function(){
   return gulp.src([
      '/Users/fantingsheng/static-file/js/slightech.js',
    ])  //选择合并的JS
       .pipe(concat('slightech'+myDate+'.js'))   //合并js
       .pipe(gulp.dest('dist/js'))         //输出
       .pipe(clean())
       .pipe(rename({suffix:'.min'}))     //重命名
       .pipe(uglify())                    //压缩
       .pipe(gulp.dest('dist/js'))            //输出 
       .pipe(notify({message:"js task ok"}));    //提示
});

//合并js文件
gulp.task('scripts-concat',function(){
  gulp.src([
    '/Users/fantingsheng/static-file/js/bootstrap-carousel.min.js', 
    '/Users/fantingsheng/static-file/js/bootstrap-transition.min.js',
    '/Users/fantingsheng/static-file/js/bootstrap-collapse.min.js',
    '/Users/fantingsheng/static-file/js/bootstrap-dropdown.min.js',
    '/Users/fantingsheng/static-file/js/bootstrap-modal.min.js',
    '/Users/fantingsheng/static-file/js/bootstrap-tab.min.js',
    '/Users/fantingsheng/static-file/js/bootstrap-scrollspy.min.js',
    '/Users/fantingsheng/static-file/js/jquery.form.min.js',
    '/Users/fantingsheng/static-file/js/jquery.swipebox.min.js',
    '/Users/fantingsheng/static-file/js/scrollReveal.min.js',
    '/Users/fantingsheng/static-file/js/jquery.lazyload.js',
    '/Users/fantingsheng/static-file/js/fastclick.min.js'
  ])
    .pipe(concat('slightech-base.min.js'))
    .pipe(clean())
    .pipe(gulp.dest('js/'))
    .pipe(notify({message:'concat task ok'}));   //提示成功
}); 

//合并css文件
gulp.task('styles-concat',function(){
  gulp.src([
    '/Users/fantingsheng/static-file/css/bootstrap.min.css', 
    '/Users/fantingsheng/static-file/css/bootstrap-responsive.min.css',
    '/Users/fantingsheng/static-file/css/swipebox.min.css'
  ])
    .pipe(concat('slightech-base.min.css'))
    .pipe(clean())
    .pipe(gulp.dest('css/'))
    .pipe(notify({message:'concat task ok'}));   //提示成功
}); 