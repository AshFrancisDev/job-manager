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


    
	<!-- Content -->
    <aside id="sidebar" class="sidebar">
		<div class="sidebar-content">
			<section id="search-3" class="widget widget_search"><div class="widget-title">Keyword Search</div>	
				<form class="searchform" role="search" method="get" action="https://www.johnsonunderwood.co.uk/">
					<label for="the7-search" class="screen-reader-text">Search:</label>
					<input type="text" id="the7-search" class="field searchform-s" name="s" value="" placeholder="Type and hit enter …">
					<input type="hidden" name="post_type" value="wpbb_job">
					<input type="submit" class="assistive-text searchsubmit" value="Go!">
					<a href="#go" class="submit"></a>
				</form>
			</section>
			<section id="beautiful-taxonomy-filters-widget-2" class="widget widget_beautiful-taxonomy-filters-widget">
			<div class="widget-title">Filter Jobs</div>		
			<div class="beautiful-taxonomy-filters-widget  select2-active" id="beautiful-taxonomy-filters-wpbb_job">
				<form method="POST" class="clearfix" id="beautiful-taxonomy-filters-form">												
				<div class="beautiful-taxonomy-filters-select-wrap clearfix">
				<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-featuredjob">
					<label for="select-job_types" class="beautiful-taxonomy-filters-label">Featured Jobs</label>
					<select data-taxonomy="job_types" name="select-job_types" id="select-job_types" class="beautiful-taxonomy-filters-select job-filter select2-hidden-accessible">
					<option value=" " selected="selected">All Job Types</option>
					<option class="level-0 featured" value="Contract">Contract</option>
					<option class="level-0 featured" value="Permanent">Permanent</option>
					<option class="level-0 featured" value="Temporary">Temporary</option>
					</select>

					<select data-taxonomy="job_locations" name="select-job_locations" id="select-job_locations" class="beautiful-taxonomy-filters-select job-filter select2-hidden-accessible">
					<option value=" " selected="selected">All Job Locations</option>
					<option class="level-0 featured" value="Bedfordshire">Bedfordshire</option>
					<option class="level-0 featured" value="Cambridgeshire">Cambridgeshire</option>
					<option class="level-0 featured" value="Hertfordshire">Hertfordshire</option>
					<option class="level-0 featured" value="Leicestershire">Leicestershire</option>
					<option class="level-0 featured" value="London">London</option>
					<option class="level-0 featured" value="Northamptonshire">Northamptonshire</option>
					<option class="level-0 featured" value="Swindon">Swindon</option>
					<option class="level-0 featured" value="West Midlands">West Midlands</option>
					</select>

					<select data-taxonomy="job_industries" name="select-job_industries" id="select-job_industries" class="beautiful-taxonomy-filters-select job-filter select2-hidden-accessible">
					<option value=" " selected="selected">All Job Industries</option>
					<option class="level-0 featured" value="Accountancy & Finance">Accountancy & Finance</option>
					<option class="level-0 featured" value="Ancillary, Facilities, Driving & Catering">Ancillary, Facilities, Driving & Catering</option>
					<option class="level-0 featured" value="Care & Social Work">Care & Social Work</option>
					<option class="level-0 featured" value="Commercial, Office & HR">Commercial, Office & HR</option>
					<option class="level-0 featured" value="Industrial">Industrial</option>
					<option class="level-0 featured" value="Information Technology">Information Technology</option>
					<option class="level-0 featured" value="Legal & Executive">Legal & Executive</option>
					<option class="level-0 featured" value="Public Sector">Public Sector</option>
					<option class="level-0 featured" value="Sales, Marketing & Events">Sales, Marketing & Events</option>
					<option class="level-0 featured" value="Specialist, Housing & NHS">Specialist, Housing & NHS</option>
					<option class="level-0 featured" value="Specialist, Housing, Education & NHS">Specialist, Housing, Education & NHS</option>
					<option class="level-0 featured" value="Specialist; Project Management">Specialist; Project Management</option>
					</select>

					<select data-taxonomy="job_status" name="select-job_status" id="select-job_status" class="beautiful-taxonomy-filters-select job-filter select2-hidden-accessible">
					<option value=" " selected="selected">All Job Statuses</option>
					<option class="level-0 featured" value="CV Selection">CV Selection</option>
					<option class="level-0 featured" value="Filled">Filled</option>
					<option class="level-0 featured" value="Interview Stage">Interview Stage</option>
					<option class="level-0 featured" value="More CVs Sought">More CVs Sought</option>
					<option class="level-0 featured" value="New Role">New Role</option>
					<option class="level-0 featured" value="Offer Stage">Offer Stage</option>
					<option class="level-0 featured" value="On Hold">On Hold</option>
					</select>
				</div>
			</section>
		<section id="beautiful-taxonomy-filters-info-widget-2" class="widget widget_beautiful-taxonomy-filters-info-widget">
		
		</section>		
		</div>
	</aside>
    
	<div id="content" class="ju_job ju_job_archive job-content content" role="main">
	<h2>Jobs</h2>

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
			$ju_query->the_post(); 
			$job_status = get_the_term_list( get_the_id(), 'ju_job_status' );
			$job_status = strip_tags($job_status);
			echo($job_status);
			?>
            
                <div class="wf-cell iso-item shown" data-reference="<?php the_field( 'job_reference' ); ?> " data-locations="<?php $location = wp_get_post_terms( $post->ID, 'ju_job_locations', array( 'fields' => 'names' ) ); print_r( $location[0] ); ?> " data-job-status="<?php $status = wp_get_post_terms( $post->ID, 'ju_job_status', array( 'fields' => 'names' ) ); print_r( $status[0] ); ?> " data-job-type="<?php $type = wp_get_post_terms( $post->ID, 'ju_job_types', array( 'fields' => 'names' ) ); print_r( $type[0] ); ?> " data-job-industry="<?php $type = wp_get_post_terms( $post->ID, 'ju_job_industry', array( 'fields' => 'names' ) ); print_r( $type[0] ); ?> ">
                    <article class="post no-img post-1451 ju_job type-ju_job status-publish format-standard hentry bg-on fullwidth-img description-off">

                        
                        <div class="blog-content wf-td">
                            <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                            <div class="entry-meta"><time class="entry-date updated" datetime="2020-02-04T12:26:38+00:00"><?php echo get_the_date(); ?></time></div>
                            <p><?php the_terms( get_the_id(), 'ju_job_status', __( "Job Status: " ), "," ); ?></p>
                            <p>Salary: <?php the_field( 'salary' ); ?></p>
                            <p><?php the_terms( get_the_id(), 'ju_job_locations', __( "Job Location: " ), "," ); ?></p>
                            <p><?php the_terms( get_the_id(), 'ju_job_types', __( "Job Type: " ), "," ); ?></p>
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

    <script>
    jQuery(document).ready(function( $ ){
		$('.sidebar-none').addClass('sidebar-left').removeClass('sidebar-none');
		
		$jobtype = $('#select-job_types').val();
		$jobloc = $('#select-job_locations').val();
		$jobind = $('#select-job_industries').val();
		$jobstat = $('#select-job_status').val();
		$('select.job-filter').change(function(){
			$('.wf-cell').hide();
			$jobtype = $('#select-job_types').val();
			$jobloc = $('#select-job_locations').val();
			$jobind = $('#select-job_industries').val();
			$jobstat = $('#select-job_status').val();
			$('.wf-cell[data-job-type*="'+ $jobtype +'"][data-locations*="'+ $jobloc +'"][data-job-industry*="'+ $jobind +'"][data-job-status*="'+ $jobstat +'"]').show();
		});
    });
    
</script>

<?php get_footer(); ?>
