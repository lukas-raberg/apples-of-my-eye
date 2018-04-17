<div class="featured-wrapper">
<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'travel, article', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="featured featured-fill"> 
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

<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'cocktails, article', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="featured featured-fill"> 
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

<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'lifestyle, article', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="featured featured-fill"> 
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

<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'food, article', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="featured featured-fill"> 
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

<div class="clearboth"></div>