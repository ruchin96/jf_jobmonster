<?php
	use yii\helpers\Url;
	use yii\helpers\Html;

	$formatter = Yii::$app->formatter;
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info ">
			<h1 class="page-title">
				<?=$content['blog_title']?>
			</h1>
		</div>
		<div class="page-sub-heading-info">
			<p class="content-meta">
				<span>
					<i class="fa fa-pencil"></i>
					<a href="#"><?="Jobmonster"?></a>
				</span>
				<span>
					<time class="entry-date" datetime="2015-01-19T04:09:55+00:00">
						<i class="fa fa-calendar"></i>
						<?= $formatter->asDate($content['blog_createdat'], 'long')?>
					</time>
				</span>
				<span>
					<i class="fa fa-list-ul"></i>
					<a href="#"> <?=$content['blogIdCategory']['category_name']?></a>
				</span>
			</p>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-8">
				<article class="hentry">
					<div class="content-wrap">
						<div class="content-featured">
							<a class="content-thumb" href="#">
							<?=
								$content['blog_picture'] == null ? 
			                    Html::img(Yii::getAlias('@web')."/uploads/blog/blog_picture/default/2.png", ['alt'=>'myImage','width'=>'1920','height'=>'1280']) 
			                    : 
			                    Html::img(Yii::getAlias('@web')."/uploads/blog/blog_picture/".$content['blog_id']."/".$content['blog_picture'], ['alt'=>'myImage','width'=>'1920','height'=>'1280'])
							?>
							</a>
						</div>
						<div class="content">
							<p style="text-align: justify;">
								<?=$content['blog_content']?>
							</p>
							<div class="entry-tags">
								<span><i class="fa fa-tag"></i></span>
								<?php $tagArray = explode(',', $content['blog_tags']);
								foreach ($tagArray as $arr) {?>
								<a href="#"><?=$arr?></a>
								<?php } ?>
							</div>
						</div>
					</div>
					<footer class="content-footer">
						<div class="author-bio">
							<div class="author-avatar">
								<img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/images.png' height='80' width='80'/>
							</div>
							<div class="author-info">
								<h4>
									<a href="#"><?="Jobmonster"?> </a>
								</h4>
								<p>
									<?="User for jobmonster ID used by all team administrator"?>
								</p>
								<div class="author-social">
									<div><a href="#"><i class="fa fa-facebook">&nbsp;</i></a></div>
									<div><a href="#"><i class="fa fa-twitter">&nbsp;</i></a></div>
									<div><a href="#"><i class="fa fa-google">&nbsp;</i></a></div>
									<div><a href="#"><i class="fa fa-linkedin">&nbsp;</i></a></div>
									<div><a href="#"><i class="fa fa-pinterest">&nbsp;</i></a></div>
								</div>
							</div>
						</div>
					</footer>
					<div class="content-left">
						<div class="author-bio">
							<div class="author-avatar">
								<img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/images.png' height='95' width='95'/>
							</div>
							<div class="content-share">
								<div class="noo-social social-share">
									<span class="noo-social-title">Share</span>
									<a href="#share" class="noo-share" title="Share on Facebook">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#share" class="noo-share" title="Share on Twitter">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#share" class="noo-share" title="Share on Google+">
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#share" class="noo-share" title="Share on Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
									<a href="#share" class="noo-share" title="Share on LinkedIn">
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>  
			<?=$this->render('sidebar_blog',[
				'categories'=>$categories,
				'contentslist' => $contentslist,
			])?>
		</div> 
	</div> 
</div>