<?php
use frontend\assets\AboutAsset;
use frontend\assets\ImageAsset;
use yii\helpers\Url;

$asset = AboutAsset::register ( $this );
$imageSource = ImageAsset::register ($this);

$this->title = "Image | 图片";
$name = null;
$identify = null;
if(isset($_GET['data'])){
	$image = $_GET['data'];
	if($image == md5('Mandarin')){
		$identify = '普通话水平测试等级证书 | Mandarin certificate';
		$name = 'Mandarin.jpg';
	}elseif($image == md5('cet6')){
		$identify = '大学英语6级成绩单 | CET-6 certificate';
		$name = 'cet6.jpg';
	}elseif($image == md5('teacher')){
		$identify = '先进教师证书 | Advanced Teaching Prize certificate';
		$name = 'teacher.jpg';
	}elseif($image == md5('work')){
		$identify = '教师工作证明 | Proof of employment';
		$name = 'work.jpg';
	}
}

?>
<div style="margin-left: 50px; margin-right: 50px; margin-top: 65px;">
    <?php 
    
    if(is_null($name)){
    	echo '<div class="alert alert-danger"><strong>invalid visit.</strong></div>';
    }else{
    	echo '<div class="alert alert-success">
		<h3>图片  | Photo</h3>
		<strong>名称 | Name</strong> <small style="margin-left: 10px;">'.$identify.'</small> <br> <strong>版权 | Copyright</strong> <small
			style="margin-left: 10px;">© shibingyan.com</small>
	</div>
		
		<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">扫描件 | Scanning copy</div>
	</div>
	<div class="portlet-body">
		<div class="row thumbnails">
			<div class="col-md-3">
				<div class="meet-our-team"
					style="height: 400px; text-aligin: center; background-size: contain; background-repeat: no-repeat; background-image: url(\''.$imageSource->baseUrl.'/certificates/'.$name.'\');">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption">下载 | Download</div>
	</div>
	<div class="portlet-body">
		<div class="row thumbnails">
			<div class="col-md-3">
				<div class="meet-our-team">
					<p>
						<a href="'.$imageSource->baseUrl.'/certificates/'.$name.'" download>'.$name.'</a> <br>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>';
    }
    
    ?>
	
</div>
