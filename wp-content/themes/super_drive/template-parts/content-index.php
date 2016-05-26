<!--НАЧАЛО main section-->
<div class="main-section" id="main-section">
	<div class="text-section">
		<p>
			<?=get_field('motto',4);?>
		</p>
		<div class="outer-border uk-visible-large"></div>
	</div>
	<button type="button" data-uk-modal="{target:'#modalPurchase', center:true}"><?=get_field('order_button',4)?></button>
</div>
<!--КОНЕЦ main section-->

<!--НАЧАЛО summary-section -->
<div id="about">
	<div class="brand-head">
	<h2 class="uk-container uk-container-center">Мы всегда заботимся о вас</h2>
	</div>
	<div class="uk-container uk-container-center we-care-about">
		<div class="uk-grid">
			<div class="uk-width-medium-4-10 uk-push-6-10">
				<?php $post=get_post(7)?>
				<img src="<?=get_the_post_thumbnail_url($post->ID)?>" <?php get_the_post_thumbnail_tag($post->ID) ?> class="uk-responsive-width uk-align-center">
			</div>
			<div class="uk-width-medium-6-10 uk-pull-4-10 text-section">
				<p><?=$post->post_content?></p>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ summary-section -->

<!--НАЧАЛО services -->
<div id="services">
	<div class="brand-head">
		<h2 class="uk-container uk-container-center">Наши услуги</h2>
	</div>
	<div class="uk-container uk-container-center services">
		<div class="uk-grid uk-grid-collapse">
			<?php $posts=get_posts(array('category_name'=>'services','orderby'=>'id','order'=>'ASC'));
			foreach ($posts as $value):
			?>
			<div class="uk-width-medium-1-3">
				<img src="<?=get_the_post_thumbnail_url($value->ID)?>" <?php get_the_post_thumbnail_tag($value->ID) ?> class="uk-responsive-width uk-align-center" data-uk-parallax="{blur: '10px, 0', viewport: '0.4'}">
			</div>
			<div class="uk-width-medium-1-3 text-section">
				<p data-uk-parallax="{opacity: '0,1', scale: '0,1', viewport: '0.3'}">
					<?=$value->post_title?>
				</p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!--КОНЕЦ services -->

<!--НАЧАЛО promotions -->
<div id="promotions">
	<div class="brand-head">
		<h2 class="uk-container uk-container-center">Акции</h2>
	</div>
	<div class="uk-container uk-container-center promotions">
		<div class="text-section-wrapper">
			<div class="text-section" data-uk-parallax="{opacity: '0,1', viewport: '0.5'}">
				<p>
				<?=get_field('promotions_text',4)?>
				</p>
				<img src="<?=get_field('promotions_image',4)?>">
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ promotions -->

<!--НАЧАЛО reviews -->
<div id="reviews">
	<div class="brand-head">
		<h2 class="uk-container uk-container-center">Отзывы</h2>
	</div>
	<div class="uk-container uk-container-center reviews">
		<div class="sliderbar-wrapper">
			<div class="uk-slidenav-position"  data-uk-slider="{min-height: 250px}">

				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-3">
						<?php $posts=get_posts(array('category_name'=>'reviews'));
						foreach ($posts as $value):
						?>
						<li>
							<div class="review-item">
								<img src="<?=get_the_post_thumbnail_url($value->ID)?>">
								<div class="name">
									<figure></figure>
									<p><?=$value->post_title?></p>
									<figure></figure>
								</div>
								<p>
									<?=$value->post_content?>
								</p>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous"
				   data-uk-slider-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ reviews -->