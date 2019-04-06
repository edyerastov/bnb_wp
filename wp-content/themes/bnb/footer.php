<footer class="mt-auto">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6">
						<span class="nav-title">Наша продукція:</span>
						<ul class="footer-nav">
							<?php wp_nav_menu(array(
								'theme_location'  => 'footer_1',
								'container'       => null,
								'menu_class'      => 'footer-nav'
							)) ?>
							<!-- <li class=""><a href="#">Весь каталог</a></li>
							<li class=""><a href="#">Диваны для дома</a></li>
							<li class=""><a href="#">Офисные диваны</a></li>
							<li class=""><a href="#">Диваны для кафе</a></li>
							<li class=""><a href="#">Пуфы</a></li> -->
						</ul>
					</div>

					<div class="col-lg-3 col-6">
						<span class="nav-title">Інформація:</span>
						<ul class="footer-nav">
							<?php wp_nav_menu(array(
								'theme_location'  => 'footer_2',
								'container'       => null,
								'menu_class'      => 'footer-nav'
							)) ?>
							<!-- <li><a href="#">О компании</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Как заказать</a></li>
							<li><a href="#">Как купить</a></li>
							<li><a href="#">Доставка</a></li> -->
						</ul>
					</div>

					<div class="col-lg-6 col-12">
						<span class="nav-title">Про компанію:</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem consectetur ipsam quam voluptates dolorum et, libero at minus, distinctio fugit, quod facere tempore ea. Neque molestiae provident ex! Quis, natus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae delectus dolor alias voluptatum nisi hic ab, maiores inventore. Quis amet architecto optio, repudiandae voluptas provident quasi vitae, error a. Illum.</p>
					</div>
				</div>

				<div class="d-flex justify-content-between mt-3">
					<span>BNB @ Copyright 2019</span>
					<span class="fury">Зроблено компанією <a href="">FurySoftware</a></span>
					<div class="footer-contact">
						<a href="tel:+380974249891" class="mr-3">+380974249891</a>
						<a href="tel:+380661020471" class="mr-3">+380661020471</a>
						<a href="mailto:bnbmebli@gmail.com">bnbmebli@gmail.com</a>
					</div>
				</div>

			</div>
				
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>