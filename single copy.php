<?php
/*
 * Template Name: Food
 * Template Post Type: post
 */
 get_header(); 
 ?>
<div class="singlehero">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
		<?php the_post_thumbnail('fill'); // Fullsize image for the single post ?>
	<?php endif; ?>
</div>
<div class="single-wrapper">
	<main role="main">
	<section>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="selected-title-thin"></div>
				<h2 class="selected-title">
					<?php the_title(); ?>
				</h2>
			<div class="selected-title-thin"></div>
			
			<div class="author-single">
				<?php the_author(); ?><br />
				<?php the_date(); ?><br />
				<?php $category = get_the_category(); 
				if ( $category[0]->cat_name == "Article" ) {
					$name = $category[1]->cat_name;
					$cat_id = get_cat_ID( $name );
					$link = get_category_link( $cat_id );
					echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
				} else {
			     $name = $category[0]->cat_name;
				 $cat_id = get_cat_ID( $name );
				 $link = get_category_link( $cat_id );
				 echo '<a href="'. esc_url( $link ) .'"">'. $name .'</a>';
				} ?>
			</div>

			<div class="singlesingle">
			<span class="p1">
				<?php the_content(); ?>
				<?php edit_post_link(); ?>	
			</span>
			</div>
			
			<div class="single-sidebar">
				<span class="tags">
					<?php the_tags( '<span class="bold">Taggat med:</span><br /> ', '<br />' ); ?>
				</span>
<div style="height:2em;"></div>
				<span class="tags BYT">
					<span class="bold">Dela med dig:<br /></span>
					[ikon] Facebook<br />
					[ikon] Twitter<br />
					[ikon] Email<br />
					[ikon] Kopiera länk
				</span>
			</div>

			<div class="comments">
				<?php comments_template( '', true ); // Remove if you don't want comments ?>
			</div>
			
		</article>

		<?php endwhile; ?>

		<?php else: ?>

		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
	<?php endif; ?>
	</section>
	</main>
</div>

<?php get_footer(); ?>