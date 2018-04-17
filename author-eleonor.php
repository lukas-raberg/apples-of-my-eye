<?php
/*
 * Template Name: Blog
 * Template Post Type: eleonor
 */
 get_header(); 
 ?>
<div class="blog-intro">
	<h5 class="blog-name"><?php _e( '', 'html5blank' ); echo get_the_author(); ?></h5>
</div>
<div class="category-wrapper">
			<?php query_posts( array(
			 'post_type' => array( 'blog' ),
			 'showposts' => 1000,
			 'paged' => $paged,
			 'author' => 6,
			 'orderby' => 'desc')
			); ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="blog-list">

			<a class="category-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				
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
		</a>
	</div>		
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</div>
	<div class="clearboth"></div>
<?php get_footer(); ?>