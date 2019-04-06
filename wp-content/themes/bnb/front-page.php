<?php
/*
Template Name: Главная
*/ 

get_header(); ?>

	<main class="container">
		<section class="slider-control">
			<div class="owl-carousel" id="header-carousel">
				<a href="<?php the_field('link_1') ?>"><img src="<?php the_field('carusel_img_1') ?>" alt=""></a>
				<a href="<?php the_field('link_2') ?>"><img src="<?php the_field('carusel_img_2') ?>" alt=""></a>
				<a href="<?php the_field('link_3') ?>"><img src="<?php the_field('carusel_img_3') ?>" alt=""></a>
				<a href="<?php the_field('link_4') ?>"><img src="<?php the_field('carusel_img_4') ?>" alt=""></a>
				<a href="<?php the_field('link_5') ?>"><img src="<?php the_field('carusel_img_5') ?>" alt=""></a>
			</div>
			<a class="slider-left" href="javascript:;"><img src="https://img.icons8.com/wired/64/000000/chevron-left.png"></a> 
			<a class="slider-right" href="javascript:;"><img src="https://img.icons8.com/wired/64/000000/chevron-right.png"></a>
		</section>
		<section class="product-catalog text-center">
			<span class="title">Дивани для дому</span>
			
			<div class="d-flex  justify-content-between">			
			<?php
				$loop = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => 3,
					'product_cat' => 'for_home'
				));

					 while ( $loop->have_posts() ): $loop->the_post(); ?>

				<div class="card">
					<a href="<?php the_permalink(); ?>" class="card-img-top">
						<?php the_post_thumbnail(); ?>
					</a>
					<div class="card-body d-flex flex-column">
						<a href="" class="product-title"><?php the_title(); ?></a>
						<div class="text-secondary main-post-desc mt-3 mb-3"><?php the_content(); ?></div>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			
		</section>
		<section class="product-catalog text-center">
			<span class="title">Дивани для бізнесу</span>
			
			<div class="d-flex  justify-content-between">			
			<?php
				$loop = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => 3,
					'product_cat' => 'for_office, for_cafe, puffs'
				));

					 while ( $loop->have_posts() ): $loop->the_post(); ?>

				<div class="card">
					<a href="<?php the_permalink(); ?>" class="card-img-top">
						<?php the_post_thumbnail(); ?>
					</a>
					<div class="card-body d-flex flex-column">
						<a href="" class="product-title"><?php the_title(); ?></a>
						<div class="text-secondary main-post-desc mt-3 mb-3"><?php the_content(); ?></div>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			
		</section>
		<section class="our-products text-center">
			<span class="title">Наша продукція</span>
			<div class="slider-control mt-3">
                <div class="product-carousel owl-carousel">
					
					<?php
						$loop = new WP_Query( array(
						'post_type' => 'product',
						'posts_per_page' => get_field('9')
						));

						while ( $loop->have_posts() ): $loop->the_post(); ?>

                    <div class="card">
                    	<a href="<?php the_permalink(); ?>" class="card-img-top">
                    		<?php the_post_thumbnail(); ?>
                    	</a>
                        <div class="card-body d-flex flex-column">
                        	<a href="" class="product-title"><?php the_title(); ?></a>
                        	<div class="text-secondary main-post-desc mt-3 mb-3"><?php the_content(); ?></div>
                        	<span class="price"><?php echo $product->get_price_html(); ?></span>
                        </div>
                    </div>
					
					<?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
                <a class="slider-left" href="javascript:;"><img src="https://img.icons8.com/wired/64/000000/chevron-left.png"></a> 
				<a class="slider-right" href="javascript:;"><img src="https://img.icons8.com/wired/64/000000/chevron-right.png"></a>
            </div>
		</section>
		
		<section class="company-information text-center">
			<span class="title">Про компанію</span>
				<?php the_field('main_about_company'); ?>
		</section>
	</main>

<?php get_footer(); ?>

		