<div class="featured-wrapper">
	<?php query_posts('cat=6&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="featured featured-fill featured-first"> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail('large'); ?>
			
					<h2 class="featured-category">
						<?php echo get_cat_name(6); ?>
					</h2>
					<div class="selected-title-thin"></div>
					<h3 class="featured-title">
						<?php the_title(); ?>
					</h3>
					<div class="selected-title-thin"></div>
					<span class="featured-author">
						 <?php the_author(); ?>
					</span>
				</article>
			</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=2&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="featured featured-fill featured-second"> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail('large'); ?>
			
					<h2 class="featured-category">
						<?php echo get_cat_name(2); ?>
					</h2>
					<div class="selected-title-thin"></div>
					<h3 class="featured-title">
						<?php the_title(); ?>
					</h3>
					<div class="selected-title-thin"></div>
					<span class="featured-author">
						 <?php the_author(); ?>
					</span>
				</article>
			</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=4&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="featured featured-fill featured-first"> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail('large'); ?>
			
					<h2 class="featured-category">
						<?php echo get_cat_name(4); ?>
					</h2>
					<div class="selected-title-thin"></div>
					<h3 class="featured-title">
						<?php the_title(); ?>
					</h3>
					<div class="selected-title-thin"></div>
					<span class="featured-author">
						 <?php the_author(); ?>
					</span>
				</article>
			</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=3&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="featured featured-fill featured-second"> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail('large'); ?>
			
					<h2 class="featured-category">
						<?php echo get_cat_name(3); ?>
					</h2>
					<div class="selected-title-thin"></div>
					<h3 class="featured-title">
						<?php the_title(); ?>
					</h3>
					<div class="selected-title-thin"></div>
					<span class="featured-author">
						 <?php the_author(); ?>
					</span>
				</article>
			</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>

<div class="clearboth" id="blogs"></div>