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
        //'css/site.css',
         'bootstrap.min.css',
         'font-awesome.css',
         'magnific-popup.css',
         'owl.carousel.css',
         'responsive.css',
         'style.css',
    ];
    public $js = [
    'bootstrap.min.js',
    'jquery.counterup.min.js',
    'jquery.fitvids.js',
    'jquery.isotope.min.js',
    'jquery.magnific-popup.min.js',
    'jquery.min.js',
    'jquery.parallax.js',
    'masonry.pkgd.min.js',
    'owl.carousel.min.js',
    'scripts.js',
    'smoothscroll.js',
    'waypoints.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
