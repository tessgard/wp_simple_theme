<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tess_first_theme
 */

get_header();
?>

<div class="center-content">


	<main id="primary" class="site-main">

		<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content' );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'tess_first_theme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'tess_first_theme' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

			

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

	</div>

	<br>
	<br>
	<br>
	<br>

<?php

