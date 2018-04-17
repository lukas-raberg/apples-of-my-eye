<?php
/*
 * Template Name: Blog
 * Template Post Type: post
 */
 get_header(); 
 ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="blog-intro">
		<h5 class="blog-name"><?php the_author_meta('display_name'); ?></h5>
	</div>

<div class="single-blog-wrapper">

	<main role="main">
	<section>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="selected-title">
					<?php the_title(); ?>
				</h1>

			
			<div class="author-single">
				<?php the_author(); ?><br />
				<?php the_date(); ?><br />
				<?php _e( '', 'html5blank' ); the_category(', '); ?>
			</div>

			<div class="blog-single">
				<?php the_content(); ?>
				<?php edit_post_link(); ?>	
			</div>
			
			<div class="blog-meta">
				<div class="blog-meta-tags">
					<span class="tags">
						<?php _e( '', 'html5blank' ); the_tags('<span class="bold">Taggat med:</span><br />', '', ''); ?>
					</span>
	<div style="height:2em;"></div>
					<span class="tags">
						<span class="bold">Dela med dig:<br /></span>
						<?php echo do_shortcode("[Sassy_Social_Share]"); ?>
					</span>
				</div>
			
				<div class="comments-blog">
					<?php comments_template(); // Remove if you don't want comments ?>
				</div>
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