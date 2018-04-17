<div class="featured-wrapper">
	<?php query_posts('cat=6&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="featured featured-fill featured-first"> 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post_thumbnail('large'); ?>
			
				<h2 class="featured-category">
					<?php the_category(); ?>
				</h2>
				<div class="selected-title-thin"></div>
				<h3 class="featured-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="selected-title-thin"></div>
				<span class="featured-author">
					 <?php the_author(); ?>
				</span>
			</article>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=2&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="featured featured-fill featured-second"> 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post_thumbnail('large'); ?>
			
				<h2 class="featured-category">
					<?php the_category(); ?>
				</h2>
				<div class="selected-title-thin"></div>
				<h3 class="featured-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="selected-title-thin"></div>
				<span class="featured-author">
					 <?php the_author(); ?>
				</span>
			</article>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=4&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="featured featured-fill featured-first"> 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post_thumbnail('large'); ?>
			
				<h2 class="featured-category">
					<?php the_category(); ?>
				</h2>
				<div class="selected-title-thin"></div>
				<h3 class="featured-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="selected-title-thin"></div>
				<span class="featured-author">
					 <?php the_author(); ?>
				</span>
			</article>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	
	<?php query_posts('cat=3&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="featured featured-fill featured-second"> 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post_thumbnail('large'); ?>
			
				<h2 class="featured-category">
					<?php the_category(); ?>
				</h2>
				<div class="selected-title-thin"></div>
				<h3 class="featured-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="selected-title-thin"></div>
				<span class="featured-author">
					 <?php the_author(); ?>
				</span>
			</article>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>

<div class="clearboth" id="blogs"></div>