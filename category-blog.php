<?php
/*
 * Template Name: Blog
 * Template Post Type: Blog
 */
 get_header(); 
 ?>

	<div class="blog-wrapper">
		
		<h5 class="blog-name"><?php the_category('display_name'); ?></h5>
	<?php query_posts( array(
	 'post_type' => array( 'blog' ),
	 'showposts' => 1000,
	 'paged' => $paged,
	 'orderby' => 'desc')
	); ?>
	

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a class="category-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="blog-list">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="category-img">
						<?php the_post_thumbnail('large'); ?>
					</div>			
					<div class="category-text">
							<div class="selected-title-thin"></div>
							<h3 class="category-title">
								<?php the_title(); ?>
							</h3>
						
							<span class="category-excerpt">
								<?php the_excerpt(); ?>
							</span>
							<div class="selected-title-thin"></div>
						<span class="category-author">
							 <?php the_author(); ?>
						</span>
					</div>	
				</article>
			</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	<div class="clearboth"></div>
	</div>

<?php get_footer(); ?>