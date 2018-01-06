<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css', 
        'AdminLTE/css/bootstrap.min.css',
        'AdminLTE/css/font-awesome.min.css',
        'AdminLTE/css/ionicons.min.css',
        'AdminLTE/css/AdminLTE.css',
        'css/frontend-custom.css'
    ];
    public $js = [
        'AdminLTE/js/bootstrap.min.js',
        'AdminLTE/js/AdminLTE/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
