<?php get_header(); ?>
	<div class="category-wrapper">

		<h5 class="blog-name"><?php _e( 'Inlägg med taggen: ', 'html5blank' ); echo single_tag_title('', false); ?></h5>

		<main role="main">
			<!-- section -->
			<section>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="category-list">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="category-img">
							<?php the_post_thumbnail('large'); ?>
						</div>

						<div class="category-text">

						<h2 class="featured-category">
							<?php the_category(', '); ?>
						</h2>

							<div class="selected-title-thin">

							</div>
						<a class="category-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<h3 class="category-title">
								<?php the_title(); ?>
							</h3>
						</a>

						<span class="category-excerpt">
							<?php the_excerpt(); ?>
						</span>

						<div class="selected-title-thin">

						</div>
						<span class="category-author">
							 <?php the_author(); ?>
						</span>
					</div>
					</div>
					<?php endwhile; ?>
					<?php else: ?>

				<?php endif; ?>

			</section>
			<!-- /section -->
		</main>
	</div>
<?php get_footer(); ?>