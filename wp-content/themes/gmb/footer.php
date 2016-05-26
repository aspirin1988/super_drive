<?php $obj=get_queried_object()?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>КОНТАКТЫ</h3>
				<img src="<?php bloginfo('template_directory') ?>/public/img/pin.png" alt="pin">
				<address class="contact-item">
					<?=get_field('address')?>
				</address><br>
				<img src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="telephone">
				<address class="contact-item">
					Телефон: <a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a>
					(многоканальный)
				</address><br>
				<img src="<?php bloginfo('template_directory') ?>/public/img/mail.png" alt="mail">
				<address class="contact-item">
					E-mail: <a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
				</address>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<h3>МЕНЮ</h3>
				<nav>
					<ul class="nav nav-pills nav-stacked">
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
				</nav>
			</div>
		</div>
	</div>
	<div class="row">
		<col-md-12>
			<div class="blue-line"></div>
		</col-md-12>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/app.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('form.blink-mailer').html('<div class="row"><div class="col-sm-4 text-center">'+success+'</div><div class="col-sm-8 pic-col hidden-xs"><img src="<?=get_field('page_logo')?>" class="img-responsive"></div></div>');}, function(error) {});
</script>
<?=get_field('google')?>
<?=get_field('yandex')?>
</body>
</html>