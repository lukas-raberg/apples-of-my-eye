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
				<div class="meta-micro">
					<strong>Text:</strong> <?php the_author(); ?>
				</div>
				<div class="meta-micro">
					<strong>Foto:</strong> <?php echo get_post_meta($post->ID, 'Fotograf:', true); ?>
				</div>
				<div class="meta-micro">
					<strong>Publicerat: </strong><?php the_date(); ?>
				</div>
			</div>
			
			<div class="single-intro">
				<?php the_excerpt(); ?>
			</div>
			
			<div class="singlesingle">
				<?php the_content(); ?>
				<?php edit_post_link(); ?>
			</div>
			
			<div class="singlesingle">
				<div class="facts">
					<p class="bold"><?php echo get_post_meta($post->ID, 'fact1', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact2', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact3', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact4', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact5', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact6', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact7', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact8', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact9', true); ?></p>
					<p><?php echo get_post_meta($post->ID, 'fact10', true); ?></p>					
				</div>
			</div>
			
			<div class="comments">
				<div class="meta-micro-pad">
					<strong>More:</strong> <span class="tags"><?php the_category(', '); ?></span>
				</div>
				
				<div class="meta-micro-pad">
					<strong>Taggar:</strong><span class="tags"><?php the_tags( ' ', '', ''); ?></span>
				</div>
			</div>
			
			<div class="comments">
				<span class="tags">
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