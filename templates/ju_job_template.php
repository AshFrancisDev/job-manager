<?php
/**
 * The Template for displaying all single posts.
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

get_header( 'single' );
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		get_template_part( 'header-main' );

		if ( presscore_is_content_visible() ) {
			do_action( 'presscore_before_loop' );
			?>

			<div id="content" class="job-content content" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

				</article>

				

			</div><!-- #content -->

			<aside id="sidebar" class="sidebar sticky-sidebar">
				<div class="sidebar-content" style="position: relative;">
					<p>Job Reference: <?php the_field( 'job_reference' ); ?></p>
					<p>Salary: <?php the_field( 'salary' ); ?></p>
					<p><?php the_terms( get_the_id(), 'ju_job_industry', __( "Job Industries: " ), "," ); ?></p>
					<p><?php the_terms( get_the_id(), 'ju_job_locations', __( "Job Locations: " ), "," ); ?></p>
					<p><?php the_terms( get_the_id(), 'ju_job_types', __( "Job Types: " ), "," ); ?></p>
					<p><?php the_terms( get_the_id(), 'ju_job_status', __( "Job Status: " ), "," ); ?></p>
					<?php

						
						// if( strtotime( $post->post_date ) < strtotime('-5 minutes') ) {
						
						// 	/* post is older than 60 days - do something with it!! */
						// 	echo('older than 5');
							
						// }
						// if( strtotime( $post->post_date ) < strtotime('-10 minutes') ) {
						
						// 	/* post is older than 60 days - do something with it!! */
						// 	echo('older than 10 min');
							
						// }
						// if( strtotime( $post->post_date ) < strtotime('-1 days') ) {
						
						// 	/* post is older than 10 days - do something with it!! */
						// 	echo('older than 1 days');
							
						// }
						// if( strtotime( $post->post_date ) < strtotime('-10 days') ) {
						
						// 	/* post is older than 10 days - do something with it!! */
						// 	echo('older than 10 days');
							
						// }

					?>
					<p><a href="/apply-online/?jobref=<?php the_field( 'job_reference' ); ?>" class="button dt-btn"></a></p>
				</div>
			</aside>

			<?php
			// do_action( 'presscore_after_content' );
		}
	}
}

get_footer();
?>


<script>
	jQuery(function($){
		$('.ju_job-template-default .sidebar-content section').remove();
	});
</script>
