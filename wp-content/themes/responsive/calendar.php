<?php 

/*

	Template Name: Calendar

*/

get_header(); ?>


<div id="container-body">
	
    <div class="grid col-620"> 

<?php if( have_posts() ) : ?>
<?php while( have_posts() ) : the_post(); ?>

<?php endwhile; ?>
<?php endif;?>

<?php

	$args = array(
		'post_type' => 'calendar'
	);

	$the_query = new WP_Query( $args );

?>

	<?php if( have_posts() ) : ?>

		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta-page' ); ?>

				<div class="post-entry">
                            <hr />
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div>

<?php get_sidebar( 'calendar' ); ?>
<?php get_footer(); ?>