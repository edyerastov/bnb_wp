<?php get_header();
	the_post();
?>

<main class="container pt-3 pb-3 text-center default-page">
	<h1 class="title"><?php the_title(); ?></h1>
	<div class="content text-left">
		<?php the_content(); ?>
		
	</div>
	
</main>

 <?php get_footer(); ?>