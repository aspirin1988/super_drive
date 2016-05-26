<?php $obj=get_queried_object()?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GMB Travel</title>

	<link href="<?php bloginfo('template_directory') ?>/public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/style.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!-- Навигационное меню  -->

<div class="container-fluid menu-background">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="<?=get_field('logo',4)?>" alt="logo"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				<?php if (is_tax()||is_category()){$id=$obj->term_id;}else{$id=$obj->ID;}
					$menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  {
						$class='';
						if($id==$val->object_id){
							$class='active';} ?>
					<li class="<?=$class?>" >
						<a href="<?=$val->url?>"><?=$val->title?></a>
					</li>
					<?php }?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">
							<img src="<?php bloginfo('template_directory') ?>/public/img/icon-phone.png" alt="phone">
                            <span class="button-call">
                                ЗАКАЗАТЬ ЗВОНОК
                            </span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="devise_one_first">
					<?=get_field('motto-one-1',4)?>
				</div>
				<div class="devise_one_second">
					<?=get_field('moto-one-2',4)?>
				</div>
				<div class="devise_two">
					<?=get_field('motto-second',4)?>
				</div>
			</div>
			<div class="col-md-8"></div>
		</div>
	</div>
	<div class="row">
		<img class="cloud-image" src="<?php bloginfo('template_directory') ?>/public/img/background-cloud.png" alt="cloud-back">
	</div>
</div>