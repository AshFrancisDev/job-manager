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
    <aside id="sidebar" class="sidebar">
		<div class="sidebar-content">
			<section id="search-3" class="widget widget_search"><div class="widget-title">Keyword Search</div>	<form class="searchform" role="search" method="get" action="https://www.johnsonunderwood.co.uk/">
		<label for="the7-search" class="screen-reader-text">Search:</label>
		<input type="text" id="the7-search" class="field searchform-s" name="s" value="" placeholder="Type and hit enter …">
		<input type="hidden" name="post_type" value="wpbb_job">
		<input type="submit" class="assistive-text searchsubmit" value="Go!">
		<a href="#go" class="submit"></a>
	</form>
</section><section id="beautiful-taxonomy-filters-widget-2" class="widget widget_beautiful-taxonomy-filters-widget"><div class="widget-title">Filter Jobs</div>		<div class="beautiful-taxonomy-filters-widget  select2-active" id="beautiful-taxonomy-filters-wpbb_job">
						<form method="POST" class="clearfix" id="beautiful-taxonomy-filters-form">
				<input type="hidden" name="site-url" value="https://www.johnsonunderwood.co.uk">
				<input type="hidden" name="post_type_rewrite" value="jobs">
				<input type="hidden" name="post_type" value="wpbb_job">
				<input type="hidden" id="btf_do_filtering_nonce" name="btf_do_filtering_nonce" value="b85871ce1f"><input type="hidden" name="_wp_http_referer" value="/jobs/">												<div class="beautiful-taxonomy-filters-select-wrap clearfix">
																													<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-featuredjob">
								<label for="select-featuredjob" class="beautiful-taxonomy-filters-label">Featured Jobs</label>
								<select data-taxonomy="featuredjob" data-options="{&quot;show_option_all&quot;:&quot;All Featured Jobs&quot;,&quot;show_option_none&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;name&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;show_count&quot;:&quot;&quot;,&quot;hide_empty&quot;:&quot;1&quot;,&quot;child_of&quot;:0,&quot;exclude&quot;:&quot;&quot;,&quot;echo&quot;:0,&quot;selected&quot;:0,&quot;hierarchical&quot;:true,&quot;name&quot;:&quot;select-featuredjob&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;beautiful-taxonomy-filters-select&quot;,&quot;depth&quot;:0,&quot;tab_index&quot;:0,&quot;taxonomy&quot;:&quot;featuredjob&quot;,&quot;hide_if_empty&quot;:false,&quot;option_none_value&quot;:-1,&quot;value_field&quot;:&quot;term_id&quot;,&quot;required&quot;:false}" data-nonce="fa56d4d3db" name="select-featuredjob" id="select-featuredjob" class="beautiful-taxonomy-filters-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
	<option value="0" selected="selected">All Featured Jobs</option>
	<option class="level-0 featured" value="77">Featured</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 274px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-featuredjob-container"><span class="select2-selection__rendered" id="select2-select-featuredjob-container" title="All Featured Jobs">All Featured Jobs</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
																														<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-wpbb_job_industry">
								<label for="select-wpbb_job_industry" class="beautiful-taxonomy-filters-label">Job Industries</label>
								<select data-taxonomy="wpbb_job_industry" data-options="{&quot;show_option_all&quot;:&quot;All Job Industries&quot;,&quot;show_option_none&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;name&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;show_count&quot;:&quot;&quot;,&quot;hide_empty&quot;:&quot;1&quot;,&quot;child_of&quot;:0,&quot;exclude&quot;:&quot;&quot;,&quot;echo&quot;:0,&quot;selected&quot;:0,&quot;hierarchical&quot;:true,&quot;name&quot;:&quot;select-wpbb_job_industry&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;beautiful-taxonomy-filters-select&quot;,&quot;depth&quot;:0,&quot;tab_index&quot;:0,&quot;taxonomy&quot;:&quot;wpbb_job_industry&quot;,&quot;hide_if_empty&quot;:false,&quot;option_none_value&quot;:-1,&quot;value_field&quot;:&quot;term_id&quot;,&quot;required&quot;:false}" data-nonce="fa56d4d3db" name="select-wpbb_job_industry" id="select-wpbb_job_industry" class="beautiful-taxonomy-filters-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
	<option value="0" selected="selected">All Job Industries</option>
	<option class="level-0 accountancy-finance" value="26">Accountancy &amp; Finance</option>
	<option class="level-0 ancillary-facilities-driving-catering" value="29">Ancillary, Facilities, Driving &amp; Catering</option>
	<option class="level-0 care-social-work" value="32">Care &amp; Social Work</option>
	<option class="level-0 commercial-office-hr" value="27">Commercial, Office &amp; HR</option>
	<option class="level-0 industrial" value="60">Industrial</option>
	<option class="level-0 it" value="18">Information Technology</option>
	<option class="level-0 legal-executive" value="28">Legal &amp; Executive</option>
	<option class="level-0 sales-marketing-events" value="31">Sales, Marketing &amp; Events</option>
	<option class="level-0 specialist-housing-nhs" value="38">Specialist, Housing &amp; NHS</option>
	<option class="level-0 specialist-housing-education-nhs" value="30">Specialist, Housing, Education &amp; NHS</option>
	<option class="level-0 specialist-project-management" value="54">Specialist; Project Management</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 274px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-wpbb_job_industry-container"><span class="select2-selection__rendered" id="select2-select-wpbb_job_industry-container" title="All Job Industries">All Job Industries</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
																														<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-wpbb_job_location">
								<label for="select-wpbb_job_location" class="beautiful-taxonomy-filters-label">Job Locations</label>
								<select data-taxonomy="wpbb_job_location" data-options="{&quot;show_option_all&quot;:&quot;All Job Locations&quot;,&quot;show_option_none&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;name&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;show_count&quot;:&quot;&quot;,&quot;hide_empty&quot;:&quot;1&quot;,&quot;child_of&quot;:0,&quot;exclude&quot;:&quot;&quot;,&quot;echo&quot;:0,&quot;selected&quot;:0,&quot;hierarchical&quot;:true,&quot;name&quot;:&quot;select-wpbb_job_location&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;beautiful-taxonomy-filters-select&quot;,&quot;depth&quot;:0,&quot;tab_index&quot;:0,&quot;taxonomy&quot;:&quot;wpbb_job_location&quot;,&quot;hide_if_empty&quot;:false,&quot;option_none_value&quot;:-1,&quot;value_field&quot;:&quot;term_id&quot;,&quot;required&quot;:false}" data-nonce="fa56d4d3db" name="select-wpbb_job_location" id="select-wpbb_job_location" class="beautiful-taxonomy-filters-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
	<option value="0" selected="selected">All Job Locations</option>
	<option class="level-0 cambridgeshire" value="23">Cambridgeshire</option>
	<option class="level-0 leicestershire" value="25">Leicestershire</option>
	<option class="level-0 london" value="59">London</option>
	<option class="level-0 northamptonshire" value="22">Northamptonshire</option>
	<option class="level-0 swindon" value="58">Swindon</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 274px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-wpbb_job_location-container"><span class="select2-selection__rendered" id="select2-select-wpbb_job_location-container" title="All Job Locations">All Job Locations</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
																														<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-wpbb_job_type">
								<label for="select-wpbb_job_type" class="beautiful-taxonomy-filters-label">Job Types</label>
								<select data-taxonomy="wpbb_job_type" data-options="{&quot;show_option_all&quot;:&quot;All Job Types&quot;,&quot;show_option_none&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;name&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;show_count&quot;:&quot;&quot;,&quot;hide_empty&quot;:&quot;1&quot;,&quot;child_of&quot;:0,&quot;exclude&quot;:&quot;&quot;,&quot;echo&quot;:0,&quot;selected&quot;:0,&quot;hierarchical&quot;:true,&quot;name&quot;:&quot;select-wpbb_job_type&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;beautiful-taxonomy-filters-select&quot;,&quot;depth&quot;:0,&quot;tab_index&quot;:0,&quot;taxonomy&quot;:&quot;wpbb_job_type&quot;,&quot;hide_if_empty&quot;:false,&quot;option_none_value&quot;:-1,&quot;value_field&quot;:&quot;term_id&quot;,&quot;required&quot;:false}" data-nonce="fa56d4d3db" name="select-wpbb_job_type" id="select-wpbb_job_type" class="beautiful-taxonomy-filters-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
	<option value="0" selected="selected">All Job Types</option>
	<option class="level-0 contract" value="35">Contract</option>
	<option class="level-0 permanent" value="33">Permanent</option>
	<option class="level-0 temporary" value="34">Temporary</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 274px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-wpbb_job_type-container"><span class="select2-selection__rendered" id="select2-select-wpbb_job_type-container" title="All Job Types">All Job Types</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
																														<div class="beautiful-taxonomy-filters-tax filter-count-5" id="beautiful-taxonomy-filters-tax-wpbb_job_status">
								<label for="select-wpbb_job_status" class="beautiful-taxonomy-filters-label">Job Statuses</label>
								<select data-taxonomy="wpbb_job_status" data-options="{&quot;show_option_all&quot;:&quot;All Job Statuses&quot;,&quot;show_option_none&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;name&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;show_count&quot;:&quot;&quot;,&quot;hide_empty&quot;:&quot;1&quot;,&quot;child_of&quot;:0,&quot;exclude&quot;:&quot;&quot;,&quot;echo&quot;:0,&quot;selected&quot;:0,&quot;hierarchical&quot;:true,&quot;name&quot;:&quot;select-wpbb_job_status&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;beautiful-taxonomy-filters-select&quot;,&quot;depth&quot;:0,&quot;tab_index&quot;:0,&quot;taxonomy&quot;:&quot;wpbb_job_status&quot;,&quot;hide_if_empty&quot;:false,&quot;option_none_value&quot;:-1,&quot;value_field&quot;:&quot;term_id&quot;,&quot;required&quot;:false}" data-nonce="fa56d4d3db" name="select-wpbb_job_status" id="select-wpbb_job_status" class="beautiful-taxonomy-filters-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
	<option value="0" selected="selected">All Job Statuses</option>
	<option class="level-0 cv-selection" value="69">CV Selection</option>
	<option class="level-0 filled" value="45">Filled</option>
	<option class="level-0 interview-stage" value="51">Interview Stage</option>
	<option class="level-0 more-cvs-sought" value="52">More CVs Sought</option>
	<option class="level-0 new-role" value="53">New Role</option>
	<option class="level-0 offer-stage" value="49">Offer Stage</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 274px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-wpbb_job_status-container"><span class="select2-selection__rendered" id="select2-select-wpbb_job_status-container" title="All Job Statuses">All Job Statuses</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
																				</div>
								<button type="submit" class="beautiful-taxonomy-filters-button dt-btn">Apply filter</button>
											</form>
					</div>
		</section><section id="beautiful-taxonomy-filters-info-widget-2" class="widget widget_beautiful-taxonomy-filters-info-widget"><div class="widget-title">You Searched For</div>		<div class="beautiful-taxonomy-filters-active-filter-widget">
							<p class="beautiful-taxonomy-filters-postcount">Result of filter: 73</p>

									
								
											<div class="beautiful-taxonomy-filters-single-tax">
														<span class="single-tax-key">Featured Jobs:</span>
							<span class="single-tax-value">All Featured Jobs</span>
						</div>
											<div class="beautiful-taxonomy-filters-single-tax">
														<span class="single-tax-key">Job Industries:</span>
							<span class="single-tax-value">All Job Industries</span>
						</div>
											<div class="beautiful-taxonomy-filters-single-tax">
														<span class="single-tax-key">Job Locations:</span>
							<span class="single-tax-value">All Job Locations</span>
						</div>
											<div class="beautiful-taxonomy-filters-single-tax">
														<span class="single-tax-key">Job Types:</span>
							<span class="single-tax-value">All Job Types</span>
						</div>
											<div class="beautiful-taxonomy-filters-single-tax">
														<span class="single-tax-key">Job Statuses:</span>
							<span class="single-tax-value">All Job Statuses</span>
						</div>
					
				
					</div>

		</section>		</div>
	</aside>
    
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
                            <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

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

    <script>
    $(document).ready(function(){
        $('.sidebar-none').addClass('sidebar-left').removeClass('sidebar-none');
    })
    
</script>

<?php get_footer(); ?>
