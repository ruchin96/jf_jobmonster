<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">About Us</h1>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
            <div class="noo-text-block">
                <h3 class="text-center">The First Days</h3>
                <p class="text-center text-italic">
                    Keep reading this page to figure out how we got started and who is behind it!.
                </p>
            </div>
            <div class="container-boxed max">
            	<p style="text-align: center;">Computer technology revolutionized typography in the 20th century. Personal computers in the 1980s like the Macintosh allowed type designers to create types digitally using commercial graphic design software. Digital technology also enabled designers to create more experimental typefaces, alongside the practical fonts of traditional typography. Designs for typefaces could be created faster with the new technology, and for more specific functions. The cost for developing typefaces was drastically lowered, becoming widely available to the masses. The change has been called the “democratization of type” and has given new designers more opportunities to enter the field.</p>
            </div>
            <div class="noo-text-block">
                <h3 class="text-center">How we resolve it?</h3>
                <p class="text-center text-italic">
                    Keep reading this and you will found our solution.
                </p>
            </div>
            <div class="container-boxed max">
            	<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in tristique odio. Quisque nec sollicitudin est. Sed vel malesuada diam. Donec laoreet scelerisque imperdiet. Sed eleifend porta lorem a dictum. Sed lorem lorem, rhoncus eget posuere eget, bibendum ut odio. Nulla lacinia nunc et fermentum lobortis. Fusce scelerisque, lacus tincidunt pellentesque luctus, tellus risus consectetur dui, ut accumsan tellus leo vel mauris. Aenean id tortor lacus.</p>
            </div>
            <div class="noo-text-block">
                <h3 class="text-center">What's our solution?</h3>
            </div>
            <div class="container-boxed max">
            	<p style="text-align: center;">Quisque lobortis accumsan tempus. Mauris pretium neque eu posuere molestie. Maecenas tincidunt eleifend egestas. Vestibulum tellus augue, laoreet sit amet quam nec, pulvinar luctus nisl. In consequat elit et aliquet posuere. Mauris porttitor est a ipsum vehicula, non porttitor quam tincidunt. Proin id orci tortor. Integer sit amet enim a nisi sagittis ultrices. Sed efficitur feugiat lobortis. In in lorem mauris. Ut placerat velit ut ligula placerat, eu accumsan sapien luctus. Vivamus in est sit amet felis dictum dapibus. Sed et eros sed massa porttitor volutpat vel at orci. Proin et lacus molestie, bibendum nisi eu, bibendum velit.</p>
            </div>
            <div class="noo-text-block">
                <h3 class="text-center">JobMonster Team</h3>
                <p class="text-center text-italic">
                    This is our team for build this website.
                </p>
            </div>
			<div class="noo-main col-md-12">
				<div class="job-package clearfix">
					<div class="noo-pricing-table classic pricing-4-col package-pricing text-center">
						<?php foreach ($team as $tm) {?>
						<div class="noo-pricing-column">
							<div class="pricing-content">
								<div class="pricing-header">
									<h4 class="pricing-title"><?=$tm['team_name']?></h4>
									<h6><?=$tm['team_position']?></h6>
									<div>
									<?=$tm['team_picture'] == null ? 
                                        Html::img(Yii::getAlias('@web')."/uploads/team/team_picture/default/User.png", ['style'=>'border-radius: 50%; border: 5px solid #e6b706;','alt'=>'myImage','width'=>'150','height'=>'150']) 
                                    : 
                                    	Html::img(Yii::getAlias('@web')."/uploads/team/team_picture/".$tm['team_id']."/".$tm['team_picture'], ['style'=>'border-radius: 50%; border: 5px solid #e6b706;', 'alt'=>'myImage','width'=>'150','height'=>'150'])?>
                                    </div>
								</div>
								<div class="row  text-center">
									<div class="candidate-social col-sm-12" >
										<a class="noo-icon fa fa-facebook" href="http://<?=$tm['team_facebook']?>" target="_blank"></a>
										<a class="noo-icon fa fa-twitter" href="http://<?=$tm['team_twitter']?>" target="_blank"></a>
										<a class="noo-icon fa fa-google-plus" href="http://<?=$tm['team_googleplus']?>" target="_blank"></a>
										<a class="noo-icon fa fa-instagram" href="http://<?=$tm['team_instagram']?>" target="_blank"></a>
									</div>
								</div>
								<div class="pricing-info">
									<ul class="noo-ul-icon fa-ul">
										<li class="noo-li-icon" style="padding: 0 10%;">
											<i><?=$tm['team_quote']?></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div> 
	</div> 
</div> 