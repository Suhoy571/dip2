<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 20.06.2018
 * Time: 19:47
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
class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/main.js'
    ];

    public $jsOptions = [
        'position' => View::POS_END,
    ];
}
