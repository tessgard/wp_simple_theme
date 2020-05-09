<?php /* Template Name: Home Template */ ?>

<div class="center-content">

<main id="primary" class="site-main">





		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; 
		?>

    </main><!-- #main -->
    
 </div>
