<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );

?>

<?php if ( $heading ) : ?>
  <h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php the_content(); ?>


<h3 class="mt-3">
	Характеристики
</h3>
<table class="product_characteristics">
	<tr>
		<td>Довжина</td>
		<td><?php the_field('product_lenghts'); ?></td>
	</tr>
	<tr>
		<td>Ширина</td>
		<td><?php the_field('product_width'); ?></td>
	</tr>
	<tr>
		<td>Висота</td>
		<td><?php the_field('product_height'); ?></td>
	</tr>
	<tr>
		<td>Ширина (глубина) сидіння</td>
		<td><?php the_field('product_width_seats'); ?></td>
	</tr>
	<tr>
		<td>Висота сидіння</td>
		<td><?php the_field('product_height_seats'); ?></td>
	</tr>
</table> 


<div class="material_productpage">
	<h3 class="mt-3">
	Матеріали
	</h3>
	<?php the_field('material_info'); ?>	
</div>