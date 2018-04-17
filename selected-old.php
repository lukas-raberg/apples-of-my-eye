<div class="selected">
<?php query_posts('cat=7'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="selected-img">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
	</div>
	<div class="selected-puff">		
			<?php the_category(); ?>
		<h2 class="selected-title">
			<div class="seleted-title-thin"></div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			<div class="seleted-title-thin"></div>
		</h2>
		<div class="author"><?php the_author_posts_link(); ?></div>
	</div>
</article>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</div>
</div>

