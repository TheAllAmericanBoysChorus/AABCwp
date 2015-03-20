<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>

<div id="container-body-home">
	<?php responsive_widgets_before(); // above widgets container hook ?>
		<div id="home_widget_1" class="grid col-620">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
				<div class="widget-wrapper-home">
					<div class="widget-title-home"><h3><?php _e( 'Home Widget 1', 'responsive' ); ?></h3></div>
					<div class="textwidget"><?php _e( 'This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area 6 called Home Widget 1. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper-home -->
			<?php endif; //end of home-widget-1 ?> 
            
			<?php wp_reset_query(); ?>
            <div class="center">
            	<img class="no-border" src="<?php bloginfo( 'template_directory' )?>/core/images/starburst.png"/>
            </div>            


    
   	      

<!-- Start Tri Panel -->

    <div class="tab-panels">
		<ul class="tabs">
			<li rel="panel1" class="active">Up Coming Events</li>
			<li rel="panel2">Testimonials</li>
			<li rel="panel3">Alumni Spotlight</li>
		</ul>

		<div id="panel1" class="panel active">
			<?php

					$args = array(
						'post_type' => 'calendar',
						'posts_per_page' => '1'
					);

					$the_query = new WP_Query( $args );

			?>
			<img class="up-coming-events-img" src="<?php bloginfo( 'template_directory' )?>/core/images/L10013172.jpg"/>
			<?php if( have_posts() ) : ?>

				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php responsive_entry_before(); ?>
					<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
						<?php responsive_entry_top(); ?>

						<?php get_template_part( 'post-meta-page' ); ?>

						<div class="post-entry">
							<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
						</div>
						<!-- end of .post-entry -->
					</div><!-- end of #post-<?php the_ID(); ?> -->

				<?php
				endwhile;

				get_template_part( 'loop-nav' );

			else :

				get_template_part( 'loop-no-posts' );

			endif;
			?>
			<a href="taabc.org/calendar"><button class="home-calendar-btn">View Our Calendar</button></a> 
		</div>

		<?php wp_reset_query(); ?>

		<div id="panel2" class="panel">
		<h1>What Our Fans Are Saying</h1>
			<?php

					$args = array(
						'post_type' => 'testimonial',
						'posts_per_page' => '1',
					);

					$the_query = new WP_Query( $args );

			?>

			<?php if( have_posts() ) : ?>

				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php responsive_entry_before(); ?>
					<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
						<?php responsive_entry_top(); ?>

						<div class="post-entry">
						<div class="quotation-mark">"</div>
							<div class="testimonial-content"><?php the_field('testimonial'); ?></div>
							<div class="testimonial-name">- <?php the_field('name'); ?></div>
						</div>
						<!-- end of .post-entry -->
					</div><!-- end of #post-<?php the_ID(); ?> -->

				<?php
				endwhile;

				get_template_part( 'loop-nav' );

			else :

				get_template_part( 'loop-no-posts' );

			endif;
			?>
		</div>

		<?php wp_reset_query(); ?>

		<div id="panel3" class="panel">

			<h1>Alumni Spotlight</h1>

			<?php

					$args = array(
						'post_type' => 'aspotlight',
						'posts_per_page' => '1',
					);

					$the_query = new WP_Query( $args );

			?>

			<?php if( have_posts() ) : ?>

				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
						<div class="post-entry">

							<div class="alumni-spotlight-img">
								<img src="<?php the_field('image'); ?>" >
							</div>

							<?php the_field('description'); ?>
						</div>
						<!-- end of .post-entry -->
					</div><!-- end of #post-<?php the_ID(); ?> -->

				<?php
				endwhile;

				get_template_part( 'loop-nav' );

			else :

				get_template_part( 'loop-no-posts' );

			endif;
			?>


		</div>
	</div>
</div> <!-- end of .col-700 fit -->
    
    <?php get_sidebar( 'home-sidebar' ); ?>
<?php responsive_widgets_after(); // after widgets container hook ?>