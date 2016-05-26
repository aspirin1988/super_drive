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
						<li>
							<div class="review-item">
								<img src="img/avatar-example.jpg">
								<div class="name">
									<figure></figure>
									<p>Жанар Манпар</p>
									<figure></figure>
								</div>
								<p>
									Consectetur adipisicing elit. Aliquid beatae dignissimos dolores id illum impedit,
									iste nesciunt nobis officiis, totam unde velit vero, voluptates? Amet assumenda
									ipsa minima molestiae necessitatibus
									odit officiis possimus quas quasi sed ut vero voluptate voluptates? Comodi placeat porro praesentium quia quibusdam sint ullam ut!
								</p>
							</div>
						</li>
						<li>
							<div class="review-item">
								<img src="img/avatar-example.jpg">
								<div class="name">
									<figure></figure>
									<p>Мужик Мужиков</p>
									<figure></figure>
								</div>
								<p>
									Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum.
								</p>
							</div>
						</li>
						<li>
							<div class="review-item">
								<img src="img/avatar-example.jpg">
								<div class="name">
									<figure></figure>
									<p>Джон Смит</p>
									<figure></figure>
								</div>
								<p>
									Voluptatem adipisicing elit. Accusamus asperiores culpa cum dicta dolores dolorum ea
									esse eveniet ex explicabo facere fugit ipsa itaque iure magnam, modi nemo neque
									nesciunt non, nulla numquam obcaecati odio officia provident quibusdam quis ratione
									recusandae. Debitis dolorem, doloremque ducimus, expedita fugit
									illo libero minus natus praesentium quidem quod recusandae unde velit!
								</p>
							</div>
						</li>
						<li>
							<div class="review-item">
								<img src="img/avatar-example.jpg">
								<div class="name">
									<figure></figure>
									<p>Поц с Района</p>
									<figure></figure>
								</div>
								<p>
									Ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum. Cumque debitis deserunt dolorum expedita fuga
									hic iste labore laborum, libero neque nostrum quaerat quos sint vel.
								</p>
							</div>
						</li>
						<li>
							<div class="review-item">
								<img src="img/avatar-example.jpg">
								<div class="name">
									<figure></figure>
									<p>Женщина Мужикова</p>
									<figure></figure>
								</div>
								<p>
									Expedita facilis illum minus, necessitatibus perferendis praesentium rem, suscipit
									voluptatum. Iure necessitatibus nostrum officiis? Doloribus eius excepturi facilis
									in minus nobis nostrum odit provident, rem reprehenderit sit temporibus voluptate
									voluptatibus! Commodi est facilis fugit in laudantium libero molestiae qui, ut?
									Aliquid
									Necessitatibus tempora voluptatibus.
								</p>
							</div>
						</li>
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