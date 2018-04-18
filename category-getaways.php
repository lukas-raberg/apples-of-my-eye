<?php get_header(); ?>
	<div class="category-wrapper">
		
		<h5 class="blog-name"><?php the_category('display_name'); ?></h5>
		
		<?php query_posts('cat=3'); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="category-list">	
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="category-img">
						<?php the_post_thumbnail('large'); ?>
					</div>			
					<div class="category-text">
						<h2 class="featured-category">
							<?php the_date(); ?>
						</h2>
					
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
	</div>
	<div class="clearboth"></div>
<?php get_footer(); ?>