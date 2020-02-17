const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   /*.sass('resources/sass/app.scss', 'public/css');*/

   /*mix.styles([
         'resources/PersianAdminLTE/dist/css/bootstrap-rtl.min.css',
         'resources/PersianAdminLTE/dist/css/custom-style.css',
       'resources/PersianAdminLTE/dist/css/adminlte.css',
      'resources/PersianAdminLTE/dist/css/persian-datepicker.css',
      'resources/PersianAdminLTE/plugins/font-awesome/css/font-awesome.css',
      'resources/PersianAdminLTE/plugins/iCheck/flat/blue.css',
      'resources/PersianAdminLTE/plugins/morris/morris.css',
      'resources/PersianAdminLTE/plugins/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
      'resources/PersianAdminLTE/plugins/plugins/datepicker/datepicker3.css',
      'resources/PersianAdminLTE/plugins/plugins/daterangepicker/daterangepicke-bs3.css',
      'resources/PersianAdminLTE/plugins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
      'resources/sass/app.scss'
   
   ],'public/css/all.css')
 mix.scripts([

    'resources/PersianAdminLTE/plugins/jquery/jquery-3.4.1.js',
    //'resources/PersianAdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
    //'resources/PersianAdminLTE/plugins/morris/morris.min.js',
    'resources/PersianAdminLTE/plugins/sparkline/jquery.sparkline.min.js',
    //'resources/PersianAdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'resources/PersianAdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    //'resources/PersianAdminLTE/plugins/knob/jquery.knob.js',
    'resources/PersianAdminLTE/plugins/daterangepicker/daterangepicker.js',
    'resources/PersianAdminLTE/plugins/datepicker/bootstrap-datepicker.js',
    'resources/PersianAdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'resources/PersianAdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
    'resources/PersianAdminLTE /plugins/fastclick/fastclick.js',
    'resources/PersianAdminLTE/dist/js/adminlte.js',
    'resources/PersianAdminLTE/dist/js/pages/dashboard.js',
    'resources/PersianAdminLTE/dist/js/demo.js'
    
   
    

    
    

 ],'public/js/all.js');  */



 mix.styles(['resources/backend/css/dropzone.css'],'public/admin/dist/css/dropzone.css')
    .scripts(['resources/backend/js/dropzone.min.js','resources/backend/js/dropzone-amd-module.min.js'],'public/admin/dist/js/dropezone.min.js') ;
 

