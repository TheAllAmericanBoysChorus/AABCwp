<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Half Content Template
 *
Template Name:  AABC Blog
 *
 * @file           full-width-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<?php

	$args = array(
		'post_type' => 'blog'
	);

	$the_query = new WP_Query( $args );

?>
<div id="content" class="grid col-460">

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
             <a class="alumni-spotlight-btn" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/core/images/buttons/read-more-btn.png" /></a>

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>
            
            <hr />

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content -->

<?php get_sidebar( 'sidebar-blog' ); ?>
<?php get_footer(); ?>

