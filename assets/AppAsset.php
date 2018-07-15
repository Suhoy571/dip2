<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800',
        'css/etalage.css',
        "css/form.css",
    ];
    public $js = [
        //'js/jquery.js',
        'js/jquery.wmuSlider.js',
        'js/jquery.etalage.min.js',
        'js/jquery.flexisel.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
