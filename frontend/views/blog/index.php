<?php
	use yii\helpers\Url;
	use yii\helpers\Html;

	$formatter = Yii::$app->formatter;
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Blogs &amp; Articles</h1>
		</div>
	</div>
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-8 post-area standard-blog">
				<?php foreach ($contents as $content) {?>
				<article class="hentry">
					<header class="content-header">
						<h2 class="content-title">
							<a href="<?=Url::to(['blog/detail-blog', 'id'=>$content['blog_id']])?>"><?=$content['blog_title']?></a>
						</h2>
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
								<a href="#"> <?=$content['blog_tags']?></a>
							</span>
							<span>
								<a href="#" class="meta-comments">
									<i class="fa fa-comments"></i> 6 Comments
								</a>
							</span>
						</p>
					</header>
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
					<div class="content-excerpt">
						<p style="text-align: justify;">
							<?=substr($content['blog_content'], 0, 300)."...."?>
						</p>
						<a href="<?=Url::to(['blog/detail-blog', 'id'=>$content['blog_id']])?>" class="read-more link">Continue reading</a>
					</div>
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
				<?php } ?>
				<div class="pagination list-center">
					<?php for ($pg=1; $pg <= $pageTotal ; $pg++) { 
						if ($pg == $pageCounter) {?>
						<span class='page-numbers current'><?=$pg?></span>
					<?php } else { ?>
						<a class='page-numbers link' href="<?=Url::to(['blog/index','page'=>$pg])?>"><?=$pg?></a>
					<?php } } ?>
					<a class="next page-numbers link" href="<?=Url::to(['blog/index','page'=>$pageTotal])?>">
						<i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
			</div>
			<?=$this->render('sidebar_blog',[
				'categories'=>$categories,
				'contentslist' => $contentslist,
			])?>
		</div> 
	</div> 
</div>