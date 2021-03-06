<?php get_template_part('header') ?>
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
			<div class="selected-title-thin-less"></div>
			
			<div class="meta-single">
				<div class="meta-micro meta-micro-pad">
					<strong>Text:</strong> <?php the_author(); ?>
				</div>
				<div class="meta-micro meta-micro-pad">
					<strong>Foto:</strong> <?php echo get_post_meta($post->ID, 'Fotograf:', true); ?>
				</div>
				<div class="meta-micro meta-micro-pad">
					<strong>Publicerat: </strong><?php the_date(); ?>
				</div>
				<div class="meta-micro meta-micro-pad">
					<strong>I kategorin:</strong> <?php the_category(', '); ?>
				</div>
				<div class="meta-micro">
					<strong>Taggat med:</strong><span class="tags"><?php the_tags( ' ', '', ''); ?></span>
				</div>
			</div>
			
			<div class="single-intro">
				<?php the_excerpt(); ?>
			</div>
			
			<div class="singlesingle">
				<?php the_content(); ?>
				<?php edit_post_link(); ?>	
			</div>
			
			<div class="comments">
				<span class="tags BYT">
					<h3 class="comment-reply-title">Dela med dig:</h3>
					<?php echo do_shortcode("[Sassy_Social_Share]"); ?>
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