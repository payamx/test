<?php
/**
 * Template part for displaying Post Types Slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elite Business
 */

$portfolio_args = elite_business_get_section_args( 'portfolio' );

$elite_business_loop = new WP_Query( $portfolio_args );

if ( $elite_business_loop->have_posts() ) :

	$portfolio_layout = elite_business_gtm( 'elite_business_portfolio_layout' );

	?>
	<div class="portfolio-main-wrapper">

		<?php

		while ( $elite_business_loop->have_posts() ) :
			$elite_business_loop->the_post();
			?>
			<div class="portfolio-item ff-grid-4">
				<div class="item-inner-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="portfolio-thumb-wrap image-hover-zoom">
						<?php the_post_thumbnail( 'elite-business-portfolio', array( 'class' => 'elite-business-portfolio' ) ); ?>
					</div>
					<?php endif; ?>

					<div class="portfolio-content">
						<div class="portfolio-inner-wrapper">
							<?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h3>'); ?>

						</div>
					</div><!-- .portfolio-content -->
				</div><!-- .item-inner-wrapper -->
			</div><!-- .portfolio-item -->
		<?php
		endwhile;
		?>
	</div><!-- .portfolio-main-wrapper -->
<?php
endif;

wp_reset_postdata();
