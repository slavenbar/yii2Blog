<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "assets/front/css/bootstrap.min.css",
        "assets/front/css/font-awesome.min.css",
        "assets/front/css/animate.min.css",
        "assets/front/css/owl.carousel.css",
        "passets/front/css/owl.theme.css",
        "assets/front/css/owl.transitions.css",
        "assets/front/css/style.css",
        "assets/front/css/responsive.css",
    ];
    public $js = [
//        "public/js/jquery-1.11.3.min.js",
        "assets/front/js/bootstrap.min.js",
        "assets/front/js/owl.carousel.min.js",
        "assets/front/js/jquery.stickit.min.js",
        "assets/front/js/menu.js",
        "assets/front/js/scripts.js",
    ];
    public $depends = [
       //'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset',

    ];
}
