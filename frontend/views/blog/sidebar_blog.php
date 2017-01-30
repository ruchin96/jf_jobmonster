<?php
	use yii\helpers\Url;
	use yii\helpers\Html;

	$formatter = Yii::$app->formatter;
?>
<div class="noo-sidebar col-md-4">
	<div class="noo-sidebar-wrap">
		<div class="widget widget_search">
			<h4 class="widget-title">Search</h4>
			<form class="form-horizontal">
				<label for="s" class="sr-only"></label>
				<input type="search" id="s" name="s" class="form-control" value="" placeholder="Search"/>
				<input type="submit" id="searchsubmit" class="hidden" name="submit" value="Search"/>
			</form>
		</div>
		<div class="widget widget_categories">
			<h4 class="widget-title">Categories</h4>
			<ul>
				<?php foreach ($categories as $cate) {?>
				<li><a href="#"><?=$cate['category_name']?></a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="widget widget_recent_entries">
			<h4 class="widget-title">Recent Posts</h4>
			<ul>
				<?php foreach ($contentslist as $content) {?>
				<li>
					<a href="<?=Url::to(['blog/detail-blog', 'id'=>$content['blog_id']])?>"><?=$content['blog_title']?></a>
					<span class="post-date"><?= $formatter->asDate($content['blog_createdat'], 'long')?></span>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="widget widget_archive">
			<h4 class="widget-title">Archives</h4>
			<ul>
				<li><a href='#'>January 2015</a></li>
				<li><a href='#'>December 2014</a></li>
			</ul>
		</div>
	</div>
</div>