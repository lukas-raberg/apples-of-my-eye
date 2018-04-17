<div class="featured-wrapper">
<?php query_posts('cat=8&posts_per_page=5'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="featured featured-fill" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<span class="featured-category">
			<?php
			 foreach((get_the_category()) as $category) {
			 echo $category->cat_name . ' ';
			 }
			 ?>
		</span>

		<h2 class="featured-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
		<span class="featured-author">
			av <br />
			 <?php the_author(); ?>
		</span>
	</article>
</div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</div>

<div class="clearboth"></div>




/*------------------------------------*\
    FEATURED
\*------------------------------------*/
.featured-wrapper {
	position:relative;
	width:98%;
	margin:1%;
	display:block;
	clear:both;
	overflow:visible;
}

.featured {
	width:100%;
	float:left;
	margin:0;
	background:blue;
}

.last {
	margin:0;
}

.featured h2 {
	text-align:center;
}

.featured a {
	color:white;
	font-size:1.5em;
	margin-bottom:1em;
}

.category-featured {

}

ul.post-categories {
	list-style-type:none;
	padding:1em 0 0 0;
	text-align:center;
	font-weight:300;
	font-size:0.875em;
	letter-spacing:3px;
	text-transform:uppercase;

}

li.post-categories {

}

.featured-title {
	font-family: 'Alegreya', serif;
	font-style:normal;
	font-weight:100;
	font-size:1em;
	text-align:left;
	padding:0 .6em;
	height:auto;
	color:white;
}


.featured-category, .author {
	font-size:0.875em;
	text-align:center;
	color:white;
	margin:0 auto;
	display:block;
	text-transform:uppercase;
	font-weight:300;
	letter-spacing:3px;
	padding:2em 0 0 0;
}

.featured-author {
	font-size:.75em;
	text-align:center;
	color:white;
	margin:0 auto;
	display:block;
	text-transform:uppercase;
	font-weight:300;
	letter-spacing:2px;
	padding:1em 0;
}


.featured-fill {
	overflow:hidden;
	display:block;
	background-repeat:no-repeat;
	background-position:center center;
	background-size:cover;
	background-color:black;
	box-shadow: inset 0 0 0 1000px rgba(0,0,0,.5);
}

.featured-fill:hover {
	box-shadow: inset 0 0 0 1000px rgba(0,0,0,.3);
}

@media only screen and (min-width:768px) {
	.featured-title {
		font-size:.75em;
		height:8em;
	}
	
	.featured {
		max-width:50%;
		float:left;
		
}


@media only screen and (min-width:1279px) {
	.featured-title {
		font-size:1.375em;
	}
}

	@media only screen and (min-width:1439px) {
		.featured-title {
			font-size:1.625em;
		}
}