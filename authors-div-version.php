<div class="authors-wrapper">
	
	<div class="author-col first">
		<div class="author-header"> 
			<img class="avatar" src="./static/hanna.jpg">
			<span class="author-name"><a href="../author/hanna/"><?php the_author_meta( 'display_name', 2 ); ?></a></span>
			<span class="author-bio"><?php esc_textarea(the_author_meta('description', 2)); ?><span>
		</div>

			<?php $loop = new WP_Query( array( 'author' => '2', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="author-title-thin"></div>				
			<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
			<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="author-excerpt"><?php the_excerpt(); ?></p>
			<div class="author-title-thin"></div>	
		</article>
	</div>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>


	<div class="author-col not-last">
		<div class="author-header"> 
			<img class="avatar" src="./static/lina.jpg">
			<span class="author-name"><?php the_author_meta( 'display_name', 4 ); ?></span>
			<span class="author-bio"><?php esc_textarea(the_author_meta('description', 4)); ?><span>
		</div>

			<?php $loop = new WP_Query( array( 'author' => '4', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="author-title-thin"></div>				
			<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
			<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="author-excerpt"><?php the_excerpt(); ?></p>
			<div class="author-title-thin"></div>	
		</article>
	</div>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
	
	
<div class="author-col not-last">
	<div class="author-header"> 
		<img class="avatar" src="./static/marita.jpg">
		<span class="author-name"><a href="../author/marita/"><?php the_author_meta( 'display_name', 5 ); ?></a></span>
		<span class="author-bio"><?php esc_textarea(the_author_meta('description', 5)); ?><span>
	</div>

		<?php $loop = new WP_Query( array( 'author' => '5', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>	
	</article>
</div>
<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
<?php endif; endif; wp_reset_postdata(); ?>


<div class="author-col last">
	<div class="author-header"> 
		<img class="avatar" src="./static/eleonor.jpg">
		<span class="author-name"><a href="../author/eleonor/"><?php the_author_meta( 'display_name', 6 ); ?></a></span>
		<span class="author-bio"><?php esc_textarea(the_author_meta('description', 6)); ?><span>
	</div>

		<?php $loop = new WP_Query( array( 'author' => '6', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>	
	</article>
</div>
<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
<?php endif; endif; wp_reset_postdata(); ?>

</div>
<div class="clearboth"></div>