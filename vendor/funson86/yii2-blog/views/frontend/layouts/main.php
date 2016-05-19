<?php
// register assets;
use frontend\assets\MenuAsset;
use funson86\blog\assets\AppAsset;
use yii\helpers\Html;
use funson86\blog\widgets\Search;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
use funson86\blog\widgets\TagCloud;
use funson86\blog\widgets\RecentComments;
use funson86\blog\widgets\Links;
use funson86\blog\widgets\SiteStat;

AppAsset::register ( $this );
$menu = MenuAsset::register ( $this );

$this->beginPage ();

use yii\helpers\Url;
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification"
	content="YM3sbTFlXbgiMOgXvoeLgpgsAbegJ4nLgxXbLw3s4xE" />
<meta name="baidu-site-verification" content="bAhhDMyY1G" />
<title><?php echo $this->title; ?></title>
	<?php $this->head();?>
	<link rel='stylesheet'
	href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="top-bar" class="top-bar">
		<div class="bar">
			<button id="navbox-trigger" class="navbox-trigger">
				<i class="fa fa-lg fa-th"></i>
			</button>
			<label class="fudan-title">WRX STU</label> <a id="wrx-dialog-trigger"
				href="#"
				class="fudan-title-right bt-fudan-login <?php
				if (! \Yii::$app->user->isGuest) {
					echo 'login"' . ' data="' . Url::to ( "@web/site/log" );
				} else {
					echo '"' . ' data="' . Url::to ( "@web/site/log" );
				}
				?>"> <i class="fa fa-user fudan-title-icon"></i>
				<?php
				if (! \Yii::$app->user->isGuest) {
					echo '<span class="fudan-top-username login">' . Yii::$app->user->identity->username . " logout";
				} else {
					echo '<span class="fudan-top-username" data="' . Url::to ( "@web/site/login" ) . '">' . "Login";
				}
				?></span>
			</a>
		</div>
		<div class="navbox">
			<div class="navbox-tiles">
				<a href="<?php echo Url::to("@web/wang"); ?>" class="tile">
					<div class="icon">
						<i class="fa fa-bank"></i>
					</div> <span class="title">Home</span>
				</a> <a href="<?php echo Url::to("@web/tour"); ?>" class="tile">
					<div class="icon">
						<i class="fa fa-camera-retro"></i>
					</div> <span class="title">Tour</span>
				</a> <a href="<?php echo Url::to("@web/blog"); ?>" class="tile">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div> <span class="title">Blog</span>
				</a> <a href="<?php echo Url::to("@web/project"); ?>" class="tile">
					<div class="icon">
						<i class="fa fa-lg fa-users"></i>
					</div> <span class="title">Project</span>
				</a> <a href="<?php echo Url::to("@web/wang/resume"); ?>"
					class="tile">
					<div class="icon">
						<i class="fa fa-book"></i>
					</div> <span class="title">Resume</span>
				</a> <a href="<?php echo Url::to("@web/wang/about"); ?>"
					class="tile">
					<div class="icon">
						<i class="fa fa-info"></i>
					</div> <span class="title">About</span>
				</a>
			</div>
		</div>
	</div>
	<?php
	
	$this->beginBody ();
	?>
		
		
	<div class="fudan-main-content">
		<div class="fudan-custom-content">
			<div class="container" id="page" style="margin-top:55px;font-size: 16px;font-weight: normal;">
				<div id="header">
					<div id="logo"><?= Yii::$app->params['blogTitle'] ?></div>
					<div id='search'><?= Search::widget() ?></div>
					<div class="clear"></div>
				</div>
				<!-- header -->

				<div class="clear"></div>

				<div id="mainmenu">
        <?= Nav::widget(['items' => Yii::$app->params['mainMenu']]); ?>
    </div>

    <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->breadcrumbs ) ? $this->breadcrumbs : [ ] ] )?>

    <div class="span-19">
					<div id="content">
            <?php echo $content; ?>
        </div>
					<!-- content -->
				</div>
				<div class="span-5 last">
					<div id="sidebar">

            <?=TagCloud::widget ( [ 'title' => '<i class="icon-st"></i>TAG','maxTags' => 5 ] )?>

            <?=\funson86\blog\widgets\RecentPosts::widget ( [ 'title' => '<i class="icon-st"></i>Recent Blogs','maxPosts' => 5 ] )?>

            <?=SiteStat::widget ( [ 'title' => '<i class="icon-st"></i>Visitors' ] )?>
        </div>
				</div>

			</div>

			<div id="footer" style="display:none;">
    <?= Yii::$app->params['blogFooter']?>
</div>
			<!-- footer -->
		</div>
	<?php $this->endBody();?>
<script>
	(function () {
	    $(document).ready(function () {
	        $('#navbox-trigger').click(function () {
	            return $('#top-bar').toggleClass('navbox-open');
	        });
	        return $(document).on('click', function (e) {
	            var $target;
	            $target = $(e.target);
	            if (!$target.closest('.navbox').length && !$target.closest('#navbox-trigger').length) {
	                return $('#top-bar').removeClass('navbox-open');
	            }
	        });
	    });
	}.call(this));
	</script>
		<script type="text/javascript">
	$(function(){
		$("#wrx-dialog-trigger").on("change", function(){
			if($(this).hasClass("login")){
					window.location.replace($(this).attr("data") + "out");
				}
			});
		$(".bt-fudan-login").on("click", function(){
			if($(this).hasClass("login")){
			var dialog = dialog_class.createNew();
			dialog.show("Server Massage", "You are going to log off.", true, "wrx-dialog-trigger");
			}else{
				window.location.replace($(this).attr("data") + "in");
			}
		});
	})
</script>

</body>
</html>
<?php $this->endPage();?>
