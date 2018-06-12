<?php get_header(); ?>

	<main role="main">
	<div class="category-wrapper">
		<h1 class="blog-name"><?php the_title(); ?></h1>
	</div>

	<div class="single-wrapper">
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
		</section>

	</div>
	
	</main>

<?php get_footer(); ?>
