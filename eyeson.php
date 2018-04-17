<div class="selected" id="eyeson">
<?php query_posts('cat=7&posts_per_page=1'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<div class="selected-img"><?php the_post_thumbnail('selected'); ?></div>

		<div class="selected-puff">		
				<h3 class="featured-category">
					<?php echo get_cat_name(7); ?>
				</h3>
			<h3 class="selected-title">
				<div class="selected-title-thin"></div>
					<?php the_title(); ?>
				<div class="selected-title-thin"></div>
			</h3>
			<div class="authors"><?php echo get_author_name(); ?></div>
		</div>
	</a>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</div>
</div>
