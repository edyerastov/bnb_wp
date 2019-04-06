<?php
/*
Template Name: Каталог материалов
*/ 

get_header(); ?>

	<main class="container">
		<section class="product-catalog text-center">
			<span class="title">Колекції матеріалів</span>
		</section>
		<section class="our-products text-center">
			<div class="row">
				<?php 
				$args = array(
					'hide_empty' => 0,
					'exclude' => '1, 60, 61', // ID рубрики, которую нужно исключить
					'number' => '0',
					'orderby' => 'none',
					'order' => 'DESC',
					'taxonomy' => 'category', // таксономия, для которой нужны изображения
					'pad_counts' => true,
				);
				
				$catlist = get_categories($args); // получаем список рубрик 
				
				foreach($catlist as $categories_item){ ?>
					
				<div class="col-lg-6 col-12">
					<div class="card">
						<a href="<?php echo get_category_link( $categories_item->term_id ); ?>" class="card-img-top">
							<img src="<?php echo get_field('collection_img', $categories_item->taxonomy . '_' . $categories_item->term_id); ?>">
						</a>
						<div class="card-body">
							<a href="<?php echo get_category_link( $categories_item->term_id ); ?>" class="card-title cat-name"><?php echo $categories_item->cat_name ?></a>
						</div>
					</div>
				</div>
				
				<?php }
			?>	
			</div>
					
		</section>
	</main>

<?php get_footer(); ?>