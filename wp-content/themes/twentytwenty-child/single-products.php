<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			?>
		
		<section class="product-detail-wrap">  
            <div class="container">
                <div class="detail-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="thumbnail-slider">
                                <div class="image-viewer">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-info">
                                <h3><?php the_title(); ?></h3>
                                <h4><?php the_content(); ?></h4>
								<?php 
                                        $field = get_field_object('price');
                                        $prepend = $field['prepend'];
                                        $value = $field['value'];
                                        $append = $field['append'];
                                        ?>
                                        <span><?php  echo $prepend.$value.$append; ?></span>
                                <p>Tax included for Pakistan</p>
                            </div>
                            <form action="" class="product-form">
                                <div class="quantity">
                                    <label for="">Quantity</label>
                                    <input type="number" value="1" min="1">
                                </div>
                                <span class="notification"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> All 1 Gold plated dragon earrings are in your cart.</span>
                                <div class="product-btns">
                                    <button class="btn" type="submit">add to cart</button>
                                    <button class="btn dark" type="button">buy it now</button>
                                </div>
                            </form>
                            <div class="product-detail">
                                <h5>Details</h5>
                                <ul>
                                    <li>Handmade in Georgia</li>
                                    <li>Product Code: NL007</li>
                                    <li>24kt gold-plated earrings</li>
                                    <li>Gold-plated brass</li>
                                    <li>Post back closure</li>
                                    <li>Composition: Brass</li>
                                </ul>
                                <p class="about">Georgian designers Natia Kutsishvili and Lako Bukia collaborated under the idea to create NATIA X LAKO, expressive shaped feminine earrings. Their creations are handcrafted and modern inspired by ornaments and shapes. The main material of the earrings is leather, silver and metal, with different shapes like snakes, big circles and golden dragons.</p>
                            </div>
                            <div class="social-link-btns">
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> share</a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> tweet</a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> pin it</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

			<?php


		}
	}

	?>

</main><!-- #site-content -->



<?php get_footer(); ?>
