<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );
    public $css = [
        'template/assets/css/site.css',
        'template/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css',
        'template/assets/plugins/bootstrap/css/bootstrap.min.css',
        'template/assets/plugins/font-awesome/css/font-awesome.min.css',
        'template/assets/css/animate.min.css',
        'template/assets/css/style.min.css',
        'template/assets/css/style-responsive.min.css',
        'template/assets/css/theme/default.css',
        'template/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css',
        'template/assets/plugins/bootstrap-datepicker/css/datepicker.css',
        'template/assets/plugins/bootstrap-datepicker/css/datepicker3.css',
        'template/assets/plugins/gritter/css/jquery.gritter.css',
        'template/assets/plugins/pace/pace.min.js',
        'template/assets/plugins/DataTables/css/data-table.css',
        'template/assets/plugins/flag-icon/css/flag-icon.css',
        'template/assets/plugins/jstree/dist/themes/default/style.min.css',
        'template/assets/plugins/gritter-1.7.4/css/jquery.gritter.html',
        'template/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css',
        'template/assets/plugins/jquery-tag-it/css/jquery.tagit.css',
        'template/assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
        'template/assets/plugins/jquery.countdown/jquery.countdown.css',
        'template/assets/css/invoice-print.min.css',
        'template/assets/plugins/bootstrap3-editable/css/bootstrap-editable.css',
        'template/assets/plugins/bootstrap3-editable/inputs-ext/address/address.css',
        'template/assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/lib/typeahead.css',
        'template/assets/plugins/bootstrap-datepicker/css/datepicker.css',
        'template/assets/plugins/bootstrap-datepicker/css/datepicker3.css',
        'template/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css',
        'template/assets/plugins/select2/select2.html',
        'template/assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
        'template/assets/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css',
        'template/assets/plugins/jquery-file-upload/css/jquery.fileupload.css',
        'template/assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css',
        'template/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css',
        'template/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css',
        'template/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        'template/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
        'template/assets/plugins/password-indicator/css/password-indicator.css',
        'template/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css',
        'template/assets/plugins/bootstrap-select/bootstrap-select.min.css',
        'template/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css',
        'template/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'template/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        'template/assets/plugins/switchery/switchery.min.css',
        'template/assets/plugins/powerange/powerange.min.css',
        'template/assets/plugins/parsley/src/parsley.css',
        'template/assets/plugins/bootstrap-wizard/css/bwizard.min.css',
        'template/assets/plugins/isotope/isotope.css',
        'template/assets/plugins/lightbox/css/lightbox.css',
        'template/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css',
        'template/assets/plugins/ionicons/css/ionicons.min.css',
        'template/assets/plugins/simple-line-icons/simple-line-icons.css',
    ];
    public $js = [
        'assets/plugins/pace/pace.min.js',
        'template/assets/plugins/jquery/jquery-1.9.1.min.js',
        'template/assets/plugins/jquery/jquery-migrate-1.1.0.min.js',
        'template/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js',
        'template/assets/plugins/bootstrap/js/bootstrap.min.js',
        'template/assets/plugins/slimscroll/jquery.slimscroll.min.js',
        'template/assets/plugins/jquery-cookie/jquery.cookie.js',
        'template/assets/js/apps.min.js',
        'template/assets/plugins/gritter/js/jquery.gritter.js',
        'template/assets/js/ui-modal-notification.demo.min.js',
        'template/assets/plugins/DataTables/js/jquery.dataTables.js',
        'template/assets/plugins/DataTables/js/dataTables.responsive.js',
        'template/assets/js/table-manage-responsive.demo.min.js',
        'template/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'template/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js',
        'template/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
        'template/assets/plugins/masked-input/masked-input.min.js',
        'template/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
        'template/assets/plugins/password-indicator/js/password-indicator.js',
        'template/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js',
        'template/assets/plugins/bootstrap-select/bootstrap-select.min.js',
        'template/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'template/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js',
        'template/assets/plugins/jquery-tag-it/js/tag-it.min.js',
        'template/assets/plugins/bootstrap-daterangepicker/moment.js',
        'template/assets/plugins/bootstrap-daterangepicker/daterangepicker.js',
        'template/assets/plugins/select2/dist/js/select2.min.js',
        'template/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'template/assets/js/form-plugins.demo.min.js',
        'template/assets/plugins/flot/jquery.flot.min.js',
        'template/assets/plugins/flot/jquery.flot.time.min.js',
        'template/assets/plugins/flot/jquery.flot.resize.min.js',
        'template/assets/plugins/flot/jquery.flot.pie.min.js',
        'template/assets/plugins/sparkline/jquery.sparkline.js',
        'template/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js',
        'template/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js',
        'template/assets/js/dashboard.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
