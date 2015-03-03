<?php
/*
Template Name: Full Width
*/
get_header(); ?>

	<div class="small-12 medium-12 large-12 columns" id="content" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h1 class=""><?php the_title(); ?></h1>

				<div class="">
					<?php the_content(); ?>
				</div>

		</article>

	<?php endwhile; // End the loop ?>

	</div>

<?php get_footer(); ?>
