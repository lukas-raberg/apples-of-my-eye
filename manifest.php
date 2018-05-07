<div class="hero"></div>
<div class="clearboth-alt"></div>
<?php query_posts('cat=19&posts_per_page=1'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="manifest-wrapper">
	<h1><?php the_title(); ?></h1>

	<p class="intro"><?php the_excerpt(); ?></p>
	<div class="manifest">
		<?php the_content();?>	
	</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>