<div class="authors-wrapper">
	
	<div class="author-col">
		<div class="author-header">Hanna
			<?php echo get_avatar('class="author-avatar"'); ?>
			<span class="author-name"><?php the_author('2');?></span>
			<span class="author-bio"><?php // echo get_the_author_meta('description'); ?>En kort presentation av varje skribent. Inte långt alls. Två eller tre meningar. Ungefär tre rader långt.</span>
		</div>
		
		<div class="author-list">
			Senaste inlägg av <?php the_author_firstname(); ?>
			<?php query_posts('author=2&cat=-7'); ?>
		</div>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<p class="author-meta-data">
			<?php
			 foreach((get_the_category()) as $category) {
			 echo $category->cat_name . ' ';
			 }
			 ?> | <?php the_date(); ?>
		</p>
		<h2 class="author-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="author-excerpt">
			<?php the_excerpt(); ?>
		</p>
	</article>

<?php endwhile; ?>
</div>
<?php else: ?>
<?php endif; ?>



	<div class="author-col">
		<div class="author-header">LINA
			<?php echo get_avatar('class="author-avatar"'); ?>
			<span class="author-name"><?php the_author('4');?></span>
			<span class="author-bio"><?php // echo get_the_author_meta('description'); ?>En kort presentation av varje skribent. Inte långt alls. Två eller tre meningar. Ungefär tre rader långt.</span>
		</div>
		
		<div class="author-list">
			Senaste inlägg av <?php the_author_firstname(); ?>
			<?php query_posts('author=4&cat=-7'); ?>
		</div>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<p class="author-meta-data">
			<?php
			 foreach((get_the_category()) as $category) {
			 echo $category->cat_name . ' ';
			 }
			 ?> | <?php the_date(); ?>
		</p>
		<h2 class="author-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="author-excerpt">
			<?php the_excerpt(); ?>
		</p>
	</article>

<?php endwhile; ?>
</div>
<?php else: ?>
<?php endif; ?>


	<div class="author-col">
		<div class="author-header">MARITA
			<?php echo get_avatar('class="author-avatar"'); ?>
			<span class="author-name"><?php the_author('5');?></span>
					<span class="author-bio"><?php // echo get_the_author_meta('description'); ?>En kort presentation av varje skribent. Inte långt alls. Två eller tre meningar. Ungefär tre rader långt.</span>
		</div>
		
		<div class="author-list">
			Senaste inlägg av <?php the_author_firstname(); ?>
			<?php query_posts('author=5&cat=-7'); ?>
		</div>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<p class="author-meta-data">
			<?php
			 foreach((get_the_category()) as $category) {
			 echo $category->cat_name . ' ';
			 }
			 ?> | <?php the_date(); ?>
		</p>
		<h2 class="author-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="author-excerpt">
			<?php the_excerpt(); ?>
		</p>
	</article>

<?php endwhile; ?>
</div>
<?php else: ?>
<?php endif; ?>


	<div class="author-col">

		<div class="author-header">ELEONOR
			<?php echo get_avatar('class="author-avatar"'); ?>
			<span class="author-name"><?php the_author('6');?></span>
			<span class="author-bio"><?php // echo get_the_author_meta('description'); ?>En kort presentation av varje skribent. Inte långt alls. Två eller tre meningar. Ungefär tre rader långt.</span>
		</div>
		
		<div class="author-list">
			Senaste inlägg av <?php the_author_firstname(); ?>
			<?php query_posts('author=6&cat=-7'); ?>
		</div>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<p class="author-meta-data">
			<?php
			 foreach((get_the_category()) as $category) {
			 echo $category->cat_name . ' ';
			 }
			 ?> | <?php the_date(); ?>
		</p>
		<h2 class="author-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="author-excerpt">
			<?php the_excerpt(); ?>
		</p>
	</article>

<?php endwhile; ?>
</div>
<?php else: ?>
<?php endif; ?>

</div>