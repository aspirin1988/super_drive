<footer id="footer">
	<div class="uk-container uk-container-center">
		<h3>СУПЕР ДРАЙВ</h3>
		<p class="phone-numbers">
			<span>Жанибек</span> <br>
			<a href="#">+7 747 322 04 89</a> <br class="uk-visible-very-small"> <a href="#">+7 705 170 37 09</a> <br>
			<a href="#">+7 775 885 32 51</a> <br class="uk-visible-very-small"> <a href="#">+7 747 886 20 85</a>
		</p>
	</div>
</footer>

<!-- НАЧАЛО modal заказ услуги -->
<div id="modalPurchase" class="uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<h2>Закажите услуги сейчас</h2>
		<form action="" name="purchaseService">
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
</body>
</html>