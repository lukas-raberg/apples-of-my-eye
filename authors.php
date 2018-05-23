<div id="blogs" class="blogs-intro">
	<h5 class="blog-name">Blogs</h5>
</div>

<div class="authors-wrapper">
	


<div class="author-col first">
	<div class="author-header"> 
		<div class="avatar-box"><a href="../author/hanna/"><img class="avatar" src="./static/hanna.jpg" alt="Glad Hanna i blå skjorta, i bakgrund en gråblå vägg."></div>
		<div class="centered author-name"><?php the_author_meta( 'display_name', 2 ); ?></a></div>
		<div class="author-title-thin"></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '2', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
	<span class="centered" style="margin-bottom:2em"><a href="../author/hanna/">Alla inlägg av <?php the_author_meta( 'user_firstname', 2 ); ?></a></span>
</div>

<div class="author-col not-last">
	<div class="author-header"> 
		<div class="avatar-box"><a href="../author/marita/"><img class="avatar" src="./static/marita.jpg" alt="Marita i gul blus skrattar framför en rosa vägg."></div>
		<div class="centered author-name"><?php the_author_meta( 'display_name', 5 ); ?></a></div>
		<div class="author-title-thin"></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '5', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
	<span class="centered" style="margin-bottom:2em"><a href="../author/marita/">Alla inlägg av <?php the_author_meta( 'user_firstname', 5 ); ?></a></span>	
</div>

<div class="author-col not-last-alt">
	<div class="author-header"> 
		<div class="avatar-box"><a href="../author/eleonor/"><img class="avatar" src="./static/eleonor.jpg" alt="Eleonor i ljusblå stickad tröja skrattandes framför en gråblå vägg."></div>
		<div class="centered author-name"><?php the_author_meta( 'display_name', 6 ); ?></a></div>
		<div class="author-title-thin"></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '6', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
	<span class="centered" style="margin-bottom:2em"><a href="../author/eleonor/">Alla inlägg av <?php the_author_meta( 'user_firstname', 6 ); ?></a></span>
</div>

<div class="author-col last">
	<div class="author-header"> 
		<div class="avatar-box"><img class="avatar" src="./static/lina.jpg" alt="Leende Lina i rosa tröja framför en rosa vägg."></div>
		<div class="centered author-name"><?php the_author_meta( 'display_name', 4 ); ?></div>
		<div class="author-title-thin"></div>
	</div>
<?php $loop = new WP_Query( array( 'author' => '4', 'posts_per_page' => '1', 'post_type' => 'blog', 'category_name' => 'blog', 'ignore_sticky_posts' => 1, 'paged' => $paged ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="auth" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="author-meta-data"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_the_date(); ?></p>
		<h2 class="author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="author-excerpt center"><?php the_excerpt(); ?></p>
		<div class="author-title-thin"></div>
	</article>
	<?php endwhile; if (  $loop->max_num_pages > 1 ) : ?>
	<?php endif; endif; wp_reset_postdata(); ?>
	<span class="centered" style="margin-bottom:2em"><!--<a href="../author/.../">Alla inlägg av <?php the_author_meta( 'user_firstname', 4 ); ?></a> --></span>
</div>

</div>
<div class="clearboth"></div>