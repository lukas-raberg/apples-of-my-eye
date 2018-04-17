<?php get_header(); ?>
<div class="category-wrapper">

		<h5 class="blog-name"><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h5>

		
	<?php query_posts( array(
	 'post_type' => array( 'blog', 'post' ),
	 'showposts' => 1000,
	 'orderby' => 'desc')
	); ?>
	

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="category-list">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="category-img">
					<?php the_post_thumbnail('large'); ?>
				</div>			
				<div class="category-text">
					<h3 class="author-single">
						<?php the_tags(); ?>
						<?php the_category(', '); ?>
					</h3>
			<a class="category-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="selected-title-thin"></div>
						<h3 class="category-title">
							<?php the_title(); ?>
						</h3>
						
						<span class="category-excerpt">
							<?php the_excerpt(); ?>
						</span>
						<div class="selected-title-thin"></div>
		</a>
					<span class="category-author">
						 <?php the_author(); ?>
					</span>
				</div>	
			</article>
		</div>

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</div>
	<div class="clearboth"></div>
<?php get_footer(); ?>




	<?php query_posts( array(
	'post_type' => array( 'post', 'blog' ),
	'showposts' => 1000,
	'paged' => $paged,
	'orderby' => 'desc')
	); ?>