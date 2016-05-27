<footer id="footer">
	<div class="uk-container uk-container-center">
		<h3><?=get_field('logo')?></h3>
		<p class="phone-numbers">
			<span>Жанибек</span> <br>
			<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a> <br class="uk-visible-very-small"> <a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a> <br>
			<a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a> <br class="uk-visible-very-small"> <a href="tel:<?=get_field('phone4',4)?>"><?=get_field('phone4',4)?></a>
		</p>
	</div>
</footer>

<!-- НАЧАЛО modal заказ услуги -->
<div id="modalPurchase" class="uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<h2>Закажите услуги сейчас</h2>
		<form action="" class="blink-mailer" name="purchaseService">
			<label for="name">Имя</label>
			<input type="text" id="name">
			<label for="phoneNumber">Телефон</label>
			<input type="tel" id="phoneNumber">
			<input type="submit" value="Жду звонка" id="btnPurchase">
		</form>
		<div id="confirmMsg" class="confirm-msg">
			<p>Подтверждено, ждите звонка</p>
			<i class="uk-icon-check uk-icon-large uk-animation-scale-up"></i>
			<button type="button" class="uk-modal-close">ОК</button>
		</div>
	</div>
</div>
<!-- КОНЕЦ modal заказ услуги -->

<script src="<?php bloginfo('template_directory')?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/parallax.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/scripts.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); }, function(error) {});
</script>
<?=get_field('google')?>
<?=get_field('yandex')?>
<?php wp_footer() ?>
</body>
</html>