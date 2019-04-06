<?php 
	get_header(); 
	$category = get_the_category();
?>

<main class="container pt-3 pb-3 default-page">
	<section class="product-catalog text-center">
		<span class="title"><?php if( is_category() )
	echo get_queried_object()->name; ?></span>
		
	</section>
	<section class="collection-desc text-left">
		<span class="collection-desc-title">Опис колекції</span>
		<?php echo category_description(); ?>
		<span class="collection-desc-title">Характеристики</span>
		<?php echo get_field('material_params', get_queried_object()); ?>
	</section>
	<section class="our-products text-center">
			<div class="row">
				<?php 
					
					if(have_posts()) {
						while(have_posts()) {
							the_post(); ?>
				
							<div class="col-lg-4">
								<div class="img-wraper">
									<?php the_post_thumbnail('post-thumbnail'); ?>
									<div class="img-hover text-center">
										<span><?php the_title(); ?></span>
									</div>
								</div>
							</div>
				
						<?php }
					}
				
				?>	
			</div>
					
		</section>
	
</main>

 <?php get_footer(); ?>