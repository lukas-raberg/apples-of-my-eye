<?php
/*
 * Template Name: Blog
 * Template Post Type: Blog
 */
 get_header(); 
 ?>
	<div class="category-wrapper">

		<h5 class="blog-name"><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h5>

		<main role="main">
			<!-- section -->
			<section>

				<?php get_template_part('loop-blog'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>
	</div>
<?php get_footer(); ?>