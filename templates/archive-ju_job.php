<?php
/**
 * Archive pages.
 *
 * @since 1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'archive' );
$config->set( 'layout', 'masonry' );
$config->set( 'template.layout.type', 'masonry' );

get_header();
?>


    <h2>Jobs</h2>
	<!-- Content -->
	<div id="content" class="ju_job ju_job_archive job-content content" role="main">
    <div class="wf-container loading-effect-fade-in iso-container bg-under-post description-under-image content-align-left dt-isotope cont-id-0 iso-item-ready" data-padding="10px" data-cur-page="1" data-width="320px" data-columns="3" data-cont-id="0" style="position: relative; height: 383px;">

    <?php 
    // WP_Query arguments
    $args = array(
        'post_type'              => array( 'ju_job' ),
        'nopaging'               => false,
        'posts_per_page'         => '12',
        'ignore_sticky_posts'    => true,
        'order'                  => 'DESC',
        'orderby'                => 'date',
    );

    // The Query
    $ju_query = new WP_Query( $args );

    // The Loop
    if ( $ju_query->have_posts() ) {
        while ( $ju_query->have_posts() ) {
            $ju_query->the_post(); ?>
            
                <div class="wf-cell iso-item shown" data-post-id="1451" data-date="2020-02-04T12:26:38+00:00" data-name="test">
                    <article class="post no-img post-1451 ju_job type-ju_job status-publish format-standard hentry ju_job_industry-industrial ju_job_locations-west-midlands ju_job_types-permanent ju_job_status-cv-selection bg-on fullwidth-img description-off">

                        
                        <div class="blog-content wf-td">
                            <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?>!</a></h3>

                            <div class="entry-meta"><time class="entry-date updated" datetime="2020-02-04T12:26:38+00:00"><?php echo get_the_date(); ?></time></div>
                            <p><?php the_terms( get_the_id(), 'ju_job_status', __( "Job Status: " ), "," ); ?></p>
                            <p>Salary: <?php the_field( 'salary' ); ?></p>
                            <p><?php the_terms( get_the_id(), 'ju_job_locations', __( "Job Locations: " ), "," ); ?></p>
                            <p>Reference: <?php the_field( 'job_reference' ); ?></p>
                            
                            <p><?php the_excerpt();?></p>

                            <a href="<?php the_permalink(); ?>" class="job-read-more">
                                Read More &gt; 
                            </a>

                        </div>
                        
                    </article>

                </div>
            
       <?php }
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
    </div>

    

	

	</div><!-- #content -->

	<?php do_action( 'presscore_after_content' ); ?>

<?php get_footer(); ?>
