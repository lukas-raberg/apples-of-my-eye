<div class="authors-wrapper">
	
<h5 class="blog-name">Blogs</h5>

<div class="author-col first">
	<div class="author-header"> 
		<div class="avatar-box"><img class="avatar" src="./static/hanna.jpg" alt="Glad Hanna i blå skjorta, i bakgrund en gråblå vägg."></div>
		<div class="author-name"><a href="../author/hanna/"><?php the_author_meta( 'display_name', 2 ); ?></a></div>
		<div class="author-bio"><?php the_author_meta('user_description', 2); ?></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '2', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
</div>

<div class="author-col not-last">
	<div class="author-header"> 
		<div class="avatar-box"><img class="avatar" src="./static/marita.jpg" alt="Marita i gul blus skrattar framför en rosa vägg."></div>
		<div class="author-name"><a href="../author/marita/"><?php the_author_meta( 'display_name', 5 ); ?></a></div>
		<div class="author-bio"><?php the_author_meta('user_description', 5); ?></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '5', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>	
	</article>
<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
<?php endif; endif; wp_reset_postdata(); ?>
</div>

<div class="author-col not-last-alt">
	<div class="author-header"> 
		<div class="avatar-box"><img class="avatar" src="./static/eleonor.jpg" alt="Eleonor i ljusblå stickad tröja skrattandes framför en gråblå vägg."></div>
		<div class="author-name"><a href="../author/eleonor/"><?php the_author_meta( 'display_name', 6 ); ?></a></div>
		<div class="author-bio"><?php the_author_meta('user_description', 6); ?></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '6', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>	
	</article>
<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
<?php endif; endif; wp_reset_postdata(); ?>
</div>

<div class="author-col last">
	<div class="author-header"> 
		<div class="avatar-box"><img class="avatar" src="./static/lina.jpg" alt="Leende Lina i rosa tröja framför en rosa vägg."></div>
		<div class="author-name"><?php the_author_meta( 'display_name', 4 ); ?></div>
		<div class="author-bio"><?php the_author_meta('user_description', 4); ?></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '4', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="author-title-thin"></div>				
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
<?php endif; endif; wp_reset_postdata(); ?>
</div>

</div>
<div class="clearboth"></div>