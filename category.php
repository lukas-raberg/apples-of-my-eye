<?php get_header(); ?>
	<div class="category-wrapper">
		<?php
		$args = array (
		    'cat' => array(2,3,4,6),
		    'posts_per_page' => -1, //showposts is deprecated
		    'orderby' => 'date' //You can specify more filters to get the data 
		);

		$cat_posts = new WP_query($args);

		if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
		        get_template_part( 'content', 'category' );
		endwhile; endif;
		?>
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="category-list">

			<a class="category-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="category-img">
					<?php the_post_thumbnail('large'); ?>
				</div>			
				<div class="category-text">
					<h2 class="category-category">
						<?php
						 foreach((get_the_category()) as $category) {
						 echo $category->cat_name . ' ';
						 }
						 ?>
					</h2>
					
						<h3 class="category-title">
							<?php the_title(); ?>
						</h3>
						
						<span class="category-excerpt">
							<?php the_excerpt(); ?>
						</span>
					
					<span class="category-author">
						av <br />
						 <?php the_author(); ?>
					</span>
				</div>	
			</article>
		</div>
		</a>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</div>
	<div class="clearboth"></div>
<?php get_footer(); ?>