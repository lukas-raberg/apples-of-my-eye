<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


			<?php get_template_part('loop'); ?> <!-- alter this loop Query posts for blog -->

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
