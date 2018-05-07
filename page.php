<?php get_header(); ?>

	<main role="main">
	<div class="category-wrapper">
		<h1 class="blog-name"><?php the_title(); ?></h1>
	</div>

	<div class="single-wrapper">
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
		</section>

	
	<div class="authors-wrapper" id="blogs">
	
	<div class="author-col-alt first">
		<div class="author-header"> 
			<div class="avatar-box"><img class="avatar" src="../static/hanna.jpg" alt="Glad Hanna i blå skjorta, i bakgrund en gråblå vägg."></div>
			<div class="author-name"><?php the_author_meta( 'display_name', 2 ); ?></div>
			<span class="author-position">Affärsutvecklare</span>
			<div class="author-bio-alt"><?php the_author_meta('user_description', 2); ?></div>
		</div>
	</div>

	<div class="author-col-alt not-last">
		<div class="author-header"> 
			<div class="avatar-box"><img class="avatar" src="../static/marita.jpg" alt="Marita i gul blus skrattar framför en rosa vägg."></div>
			<div class="author-name"><?php the_author_meta( 'display_name', 5 ); ?></div>
			<span class="author-position">Onlinemarknadsförare</span>
			<div class="author-bio-alt"><?php the_author_meta('user_description', 5); ?></div>
		</div>
	</div>

	<div class="author-col-alt not-last-alt">
		<div class="author-header"> 
			<div class="avatar-box"><img class="avatar" src="../static/eleonor.jpg" alt="Eleonor i ljusblå stickad tröja skrattandes framför en gråblå vägg."></div>
			<div class="author-name"><?php the_author_meta( 'display_name', 6 ); ?></div>
			<span class="author-position">Skribent</span>
			<div class="author-bio-alt"><?php the_author_meta('user_description', 6); ?></div>
		</div>
	</div>

	<div class="author-col-alt last">
		<div class="author-header"> 
			<div class="avatar-box"><img class="avatar" src="../static/lina.jpg" alt="Leende Lina i rosa tröja framför en rosa vägg."></div>
			<div class="author-name"><?php the_author_meta( 'display_name', 4 ); ?></div>
			<span class="author-position">Fotograf</span>			
			<div class="author-bio-alt"><?php the_author_meta('user_description', 4); ?></div>
		</div>
	</div>
	</div>
	</div>
	
	</main>

<?php get_footer(); ?>
