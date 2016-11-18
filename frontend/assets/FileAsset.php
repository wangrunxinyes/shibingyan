<?php

namespace frontend\assets;

use yii;
use yii\web\AssetBundle;

class FileAsset extends AssetBundle {
	public $sourcePath = '@frontend/plugin/include/file';
	public $baseUrl = '@webroot';
	public $css = [
			"reset.css"
	];
	public $js = [ 
	];
	public $depends = [ 
	];
	public $jsOptions = [ 
			'position' => \yii\web\View::POS_HEAD 
	];
}