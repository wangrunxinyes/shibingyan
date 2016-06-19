<?php
use frontend\assets\ResumeAsset;
use yii\helpers\Url;

$asset = ResumeAsset::register ( $this );

?>
<div class="main">
	<div id="cbp-contentslider" class="cbp-contentslider">
		<ul>
			<li id="slide1">
				<h3 class="icon-wolf">Basic</h3>
				<div>
					<div class="cbp-content wrx_content_class">
						<p>
							<img
								src="https://img.alicdn.com/imgextra/i2/112258296/TB2Vpw.lVXXXXbZXpXXXXXXXXXX_!!112258296.jpg"
								style="width: 120; height: 200">
						</p>
						<p>
							SHI Bingyan <br> Birthday: 1990/11/13 <br> Email:
							shibingyan@shibingyan.com <br> Phone: (852)68163965 <br>
							<br>
							<br> <a style="color: gray; display: none"
								href="<?php //echo Yii::app()->assets->getScirptPath('documents/cv.pdf');?>">click
								to download my resume.</a> <br>
					
					</div>
				</div>
			</li>
			<li id="slide2">
				<h3 class="icon-rabbit">HighLight</h3>
				<div>
					<div class="cbp-content">
						<p>I have excellent understanding and learning ability. Software engineering education background makes me familiar with the software develop circle and computer operation.</p>
						<p>
							<label>Skilled language</label> <br> In good charge of Mandarin and English. Well spoken English and good English writing. Being able to understand Cantonese. <br> 
							<label>Interested position</label>
							<br> Human resource managing, administrative staff.<br><br>
						</p>
					</div>
				</div>
			</li>
			<li id="slide3">
				<h3 class="icon-aligator">Education</h3>
				<div>
					<div class="cbp-content">
						<p>
							<label>The Hong Kong Institute of Education</label> <br>
							01/09/2015 - 01/06/2016(*Expected Graduate Date) <br> Public Policy and
							Governance <br>Master
						</p> <br><br> <br><br> <br><br><br>
						<p>
							<label>Fujian Normal University</label> <br> 01/09/2009
							-01/06/2013 <br> Software Engineering <br>Bachelor
						</p> 
						<p>
							<label>Fujian Normal University</label> <br> 01/06/2010
							-01/07/2013 <br> English <br>Bachelor(Double major)
						</p>
					</div>
				</div>
			</li>
			<li id="slide4">
				<h3 class="icon-turtle">Experience</h3>
				<div>
					<div class="cbp-content">
						<p>
							<label>Software developer</label> <br> 01/10/2012 - 01/02/2013
							<br> Fujian Fujitsu Communications Software Co., Ltd. <br> Account-by-Phone Service System developer(Programming Language: C)<br>
							Intern
						</p>
						<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br> <br><br>
						<p>
							<label>English Tutor</label> <br> 01/09/2013 - 01/01/2015
							<br> Nanyang Fifteenth Middle School. <br> Teaching English for junior high school students<br>Regular
							employee<br><a style="color:gray" target="blank" href="<?php echo Url::to('image?data='.md5('work'))?>" >click to view scaning copy of proof of employment.</a>
						</p>
						<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
					</div>
				</div>
			</li>
			<li id="slide5">
				<h3 class="icon-platypus">Award and certificates</h3>
				<div>
					<div class="cbp-content">
						<p>
							<label>Scholarship</label> <br> 2011-2012 Type: Examination
							<br> Award Class: Third-class award. <br>
							Awarding Institution: Fujian Normal University. <br><br><br>
						</p>
						<p>
							<label>CET-6</label> <br> Date: 09/2014 Type: English certificate
							<br> score: 507. <br>
							Awarding Institution: the Ministry of Education of advanced Education Division. <br><a style="color:gray" target="blank" href="<?php echo Url::to('image?data='.md5('cet6'))?>">click to view scanning copy of certificate.</a><br> <br>
						</p>
						<p>
							<label>Advanced Teaching Prize</label> <br> Date: 09/2014 Type: Assessment
							<br> Award Class: Honor certificate. <br>
							Awarding Institution: Nanyang Fifteenth Middle School. <br><a style="color:gray" target="blank" href="<?php echo Url::to('image?data='.md5('teacher'))?>">click to view scanning copy of certificate.</a> <br> <br>
						</p>
						<p>
							<label>Mandarin Level Test Certificate</label> <br> Date: 05/05/2012 Type: Examination
							<br> Score: 89.5 of 100. <br>
							Awarding Institution: Language Commission of Fujian Province. <br><a style="color:gray" target="blank" href="<?php echo Url::to('image?data='.md5('Mandarin'))?>">click to view scanning copy of certificate.</a> <br> <br>
						</p>
					</div>
				</div>
			</li>
		</ul>
		<nav>
			<a href="#slide1" class="icon-wolf"> <span>Basic</span>
			</a> <a href="#slide2" class="icon-rabbit"> <span>High Light</span>
			</a> <a href="#slide3" class="icon-aligator"> <span>Education</span>
			</a> <a href="#slide4" class="icon-turtle"> <span>Experience</span>
			</a> <a href="#slide5" class="icon-platypus"> <span>Award</span>
			</a>
		</nav>
	</div>
</div>
<script>
			$(function() {
				/*
				- how to call the plugin:
				$( selector ).cbpContentSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease-in-out',
					// current item's index
					current : 0
				}
				- destroy:
				$( selector ).cbpContentSlider( 'destroy' );
				*/

				$( '#cbp-contentslider' ).cbpContentSlider();
			});
		</script>