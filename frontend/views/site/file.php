<?php 

use frontend\assets\FileAsset;

$asset = FileAsset::register($this);
$controller->redirect($asset->baseUrl."/video.mov");
?>