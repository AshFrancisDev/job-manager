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
					<p>Job Status: <span class="ju_status"><?php
						if( has_term('', 'ju_job_status') ){
							// do something
							the_terms( get_the_id(), 'ju_job_status', __( "" ), "," );
						}
						else if( strtotime( $post->post_date ) < strtotime('-28 days') ) {
						
							/* post is older than 5 weeks - do something with it!! */
							echo('Filled');
							
						}
						else if( strtotime( $post->post_date ) < strtotime('-21 days') ) {
						
							/* post is older than 60 days - do something with it!! */
							echo('Offer Stage');
							
						}
						else if( strtotime( $post->post_date ) < strtotime('-14 days') ) {
						
							/* post is older than 10 days - do something with it!! */
							echo('Interview Stage');
							
						}
						else if( strtotime( $post->post_date ) < strtotime('-1 seconds') ) {
						
							/* post is older than 10 days - do something with it!! */
							echo('New Role');
							
						}

					?></span></p>
					<a class="button dt-btn" href="/apply-online/?jobref=<?php the_field( 'job_reference' ); ?>&title=<?php echo esc_html( get_the_title() ); ?>&refurl=<?php echo get_permalink(); ?>">APPLY NOW</a>
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
		$('span.ju_status').filter(function() { return ($(this).text() === 'New Role') }).css('color', 'green');
		$('span.ju_status').filter(function() { return ($(this).text() === 'CV Selection') }).css('color', 'yellow');
		$('span.ju_status').filter(function() { return ($(this).text() === 'Interview Stage') }).css('color', 'orange');
		$('span.ju_status').filter(function() { return ($(this).text() === 'Offer Stage') }).css('color', 'red');
		$('span.ju_status').filter(function() { return ($(this).text() === 'Filled') }).css('color', 'darkred');
	});
</script>
