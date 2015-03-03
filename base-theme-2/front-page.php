<?php get_header(); ?>

<!-- Row for main content area -->
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


<!-- display custom types content (un-comment to use) -->

	<!-- <?php
		$args = array(
		'post_type'	=> '',
		'orderby' => 'menu_order',
		'order'   => 'ASC'
	);

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post();

	?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="">
				<div class=""><?php the_content(); ?></div>
			</div>
	</article>

	<?php } } else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata(); ?> -->
