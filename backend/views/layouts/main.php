<?php

/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
<meta charset="<?=Yii::$app->charset?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<div class="wrap">
    <?php
				
				$domain = yii::$app->homeUrl;
				$result = explode ( 'backend', Yii::$app->request->absoluteUrl );
				if (isset ( $result [1] )) {
					$domain = $result [0];
				} else {
					$result = explode ( 'backend', Yii::$app->request->absoluteUrl );
					if (isset ( $result [1] )) {
						$domain = $result [0];
					}
				}
				
				NavBar::begin ( [ 
						'brandLabel' => 'Shibingyan.com',
						'brandUrl' => $domain,
						'options' => [ 
								'class' => 'navbar-inverse navbar-fixed-top' 
						] 
				] );
				$menuItems = [ 
						[ 
								'label' => 'Home',
								'url' => [ 
										'/site/index' 
								] 
						],
						[ 
								'label' => 'Control Pannel',
								'url' => [ 
										'/admin/default/index' 
								] 
						] 
				];
				if (Yii::$app->user->isGuest) {
					$menuItems [] = [ 
							'label' => 'Login',
							'url' => [ 
									'/site/login' 
							] 
					];
				} else {
					$menuItems [] = '<li>' . Html::beginForm ( [ 
							'/site/logout' 
					], 'post' ) . Html::submitButton ( 'Logout (' . Yii::$app->user->identity->username . ')', [ 
							'class' => 'btn btn-link' 
					] ) . Html::endForm () . '</li>';
				}
				echo Nav::widget ( [ 
						'options' => [ 
								'class' => 'navbar-nav navbar-right' 
						],
						'items' => $menuItems 
				] );
				NavBar::end ();
				?>

    <div class="container">
        <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?=Alert::widget()?>
        <?=$content?>
    </div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; Shibingyan.com <?=date('Y')?></p>

			<p class="pull-right"></p>
		</div>
	</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
