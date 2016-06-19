<?php

namespace frontend\assets;

use yii;
use yii\web\AssetBundle;

class ImageAsset extends AssetBundle {
	public $sourcePath = '@frontend/plugin/images/';
	public $baseUrl = '@webroot';
	public $css = [ 
	];
	public $js = [ 
	];
	public $depends = [ 
	];
	public $jsOptions = [ 
			'position' => \yii\web\View::POS_HEAD 
	];
}