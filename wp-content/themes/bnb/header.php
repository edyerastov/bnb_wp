<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BNB</title>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="d-flex flex-column h-100 justify-content-between">
		<header>
			<div class="top-header">
				<div class="container d-flex justify-content-between align-items-center">
					<?php wp_nav_menu(array(
						'theme_location'  => 'header_top',
						'container'       => null,
						'menu_class'      => 'nav'
					)) ?>
					<ul class="contact">
						<li>
							<img class="mr-1" src="https://img.icons8.com/wired/64/000000/phone.png">
							<a href="tel:+380974249891">+380974249891</a>
						</li>
						<li>
							<img class="mr-1" src="https://img.icons8.com/wired/64/000000/phone.png">
							<a href="tel:+380661020471">+380661020471</a>
						</li>
						<li>
							<img class="mr-1" src="https://img.icons8.com/wired/64/000000/secured-letter.png">
							<a href="mailto:bnbmebli@gmail.com">bnbmebli@gmail.com</a>
						</li>
					</ul>
					
				</div>
			</div>
			<div class="middle-header">
				<div class="container d-flex justify-content-between align-items-center">
					<a href="<?php echo get_permalink(10); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/icons/logo.svg" alt=""></a>
					<ul class="product-catalog-list">
					<li>
						<a href="http://bnbwp.zzz.com.ua/product-catalog/for-home/" class="d-flex flex-column align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/header-home.png">
							<span>Для дому</span>
						</a>
					</li>
					<li>
						<a href="http://bnbwp.zzz.com.ua/product-catalog/for-office/" class="d-flex flex-column align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/header-office.png"> 
							<span>Для офісу</span>
						</a>
					</li>
					<li>
						<a href="http://bnbwp.zzz.com.ua/product-catalog/for-cafe/" class="d-flex flex-column align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/header-cafe.png">
							<span>Для кафе</span>
						</a>
					</li>
					<li>
						<a href="http://bnbwp.zzz.com.ua/product-catalog/puffs/" class="d-flex flex-column align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/header-puf.png">
							<span>Пуфи</span>
						</a>
					</li>
				</ul>
					<div class="user-controls">
						<?php echo do_shortcode('[ti_wishlist_products_counter]');?>
<!-- 						<a href="" class="control wishlist"></a> -->
						<a href="<?php the_permalink(122) ?>" class="control header-cart"></a>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container d-flex justify-content-center">
				<?php wp_nav_menu(array(
					'theme_location'  => 'header_bottom',
					'container'       => null,
					'menu_class'      => 'nav'
				)) ?>
				</div>
			</div>
			
		</header>