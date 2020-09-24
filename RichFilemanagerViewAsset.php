<?php
namespace triawarman\richFilemanager;

use yii\web\AssetBundle;

/**
 * Description of RichFilemanagerAsset
 *
 * @author Triawarman <3awarman@gmail.com>
 */
class RichFilemanagerViewAsset extends AssetBundle{
    public $sourcePath = '@vendor/triawarman/yii2-richfilemanager';
    public $publishOptions = [
        //'forceCopy' => YII_DEBUG,
    ];
    public $css = [
        'styles/reset.css',
        //'styles/filemanager.css',
         YII_ENV_DEV ? 'styles/filemanager.css' : 'styles/filemanager.min.css',
        'scripts/jquery.contextmenu/dist/jquery.contextMenu.min.css',
        //INFO: called from filemanager.js
        //'scripts/custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
        'scripts/alertify.js/dist/css/alertify.css',
    ];
    public $js = [
        //'scripts/jquery-1.11.3.min.js',
        'scripts/jquery-ui/jquery-ui.min.js',
        'scripts/jquery-browser.js',
        'scripts/knockout-3.4.0.js',
        'scripts/jquery-mousewheel/jquery.mousewheel.min.js',
        'scripts/jquery.splitter/dist/jquery-splitter.js',
        'scripts/jquery.contextmenu/dist/jquery.contextMenu.min.js',
        'scripts/alertify.js/dist/js/alertify.js',
        'scripts/zeroclipboard/dist/ZeroClipboard.js',
        'scripts/jquery.fileDownload/jquery.fileDownload.min.js',        
        'scripts/javascript-templates/js/tmpl.min.js',
        'scripts/toast/lib/toast.min.js',
        'scripts/purl/purl.min.js',
        //TODO: Change this when in production mode
        //'scripts/filemanager.min.js',
        //'scripts/filemanager.js',
        YII_ENV_DEV ? 'scripts/filemanager.js' : 'scripts/filemanager.min.js'
        //'config/filemanager.init.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];
}
