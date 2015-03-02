<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Alumni Spotlight
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
		'post_type' => 'alumni spotlight'
	);

	$the_query = new WP_Query( $args );

?>
<div id="content-full" class="grid col-940">

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			
            <div class="alumni-spotlight-video"><?php the_field( 'youtube_video' ); ?></div>
            <h1><?php the_title(); ?></h1>
            <p><?php the_field ( 'excerpt' ); ?></p>
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

</div><!-- end of #content-full -->

<?php get_footer(); ?>
