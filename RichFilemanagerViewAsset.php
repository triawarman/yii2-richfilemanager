<?php
namespace triawarman\richFilemanager;

use yii\web\AssetBundle;

/**
 * Description of RichFilemanagerAsset
 *
 * @author Triawarman <i.triawarman@gmail.com>
 */
class RichFilemanagerViewAsset extends AssetBundle{
    public $sourcePath = '@vendor/triawarman/yii2-richfilemanager';
    public $publishOptions = [
        //'forceCopy' => YII_DEBUG,
    ];
    public $css = [
        'styles/reset.css',
        'styles/filemanager.css',
        'scripts/jquery.contextmenu/dist/jquery.contextMenu.min.css',
        'scripts/custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
        'scripts/alertify.js/dist/css/alertify.css',
    ];
    public $js = [
        //'scripts/jquery-1.11.3.min.js',
        //'scripts/jquery-ui.min.js',
        'scripts/jquery-browser.js',
        'scripts/knockout-3.4.0.js',
        'scripts/jquery.splitter/dist/jquery-splitter.js',
        'scripts/jquery.contextmenu/dist/jquery.contextMenu.min.js',
        'scripts/alertify.js/dist/js/alertify.js',
        'scripts/javascript-templates/js/tmpl.min.js',
        //'assets/scripts/filemanager.min.js',
        'scripts/filemanager.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];
}
