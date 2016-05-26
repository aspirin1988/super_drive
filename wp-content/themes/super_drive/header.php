<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slidenav.min.css">
</head>
<body>
<nav class="uk-navbar" data-uk-sticky>
	<div class="uk-container uk-container-center">
		<a href="#" class="uk-navbar-brand"><?=get_field('logo')?></a>
		<div class="uk-navbar-flip">
			<ul class="uk-navbar-nav uk-hidden-small uk-navbar-attached">
				<li class="btn_main-section"><a href="#main-section" data-uk-smooth-scroll>Главная</a></li>
				<li class="btn_about"><a href="#about" data-uk-smooth-scroll="{offset: 65}">О компании</a></li>
				<li class="btn_services"><a href="#services" data-uk-smooth-scroll="{offset: 65}">Услуги</a></li>
				<li class="btn_promotions"><a href="#promotions" data-uk-smooth-scroll="{offset: 64}">Акции</a></li>
				<li class="btn_reviews"><a href="#reviews" data-uk-smooth-scroll="{offset: 64}">Отзывы</a></li>
				<li class="btn_footer"><a href="#footer" data-uk-smooth-scroll>Контакты</a></li>
			</ul>
			<a class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{target:'#my-id'}"></a>
		</div>
	</div>
</nav>

<div id="my-id" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
			<li class="btn_main-section"><a href="#main-section" data-uk-smooth-scroll>Главная</a></li>
			<li class="btn_about"><a href="#about" data-uk-smooth-scroll="{offset: 65}">О компании</a></li>
			<li class="btn_services"><a href="#services" data-uk-smooth-scroll="{offset: 65}">Услуги</a></li>
			<li class="btn_promotions"><a href="#promotions" data-uk-smooth-scroll="{offset: 64}">Акции</a></li>
			<li class="btn_reviews"><a href="#reviews" data-uk-smooth-scroll="{offset: 64}">Отзывы</a></li>
			<li class="btn_footer"><a href="#footer" data-uk-smooth-scroll>Контакты</a></li>
		</ul>
	</div>
</div>

<!-- Needed for padding at top of body, to look more like Bootstrap's example -->
<br>
