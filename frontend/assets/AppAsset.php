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
        'css/test.css',
    ];
    public $js = [
        'js/googleTranslateElementInit.js',
        '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
	
	public $jsOptions = array(
		'position' => \yii\web\View::POS_HEAD
	);
}
