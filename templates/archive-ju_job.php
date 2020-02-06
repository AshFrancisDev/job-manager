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
	<div id="content" class="ju_job ju_job_archive job-content content" role="main">

    <div class="wf-container loading-effect-fade-in iso-container bg-under-post description-under-image content-align-left dt-isotope cont-id-0 iso-item-ready" data-padding="10px" data-cur-page="1" data-width="320px" data-columns="3" data-cont-id="0" style="position: relative; height: 383px;">
<div class="wf-cell iso-item shown" data-post-id="1451" data-date="2020-02-04T12:26:38+00:00" data-name="test" style="position: absolute; left: 0px; top: 0px;">
	<article class="post no-img post-1451 ju_job type-ju_job status-publish format-standard hentry ju_job_industry-industrial ju_job_locations-west-midlands ju_job_types-permanent ju_job_status-cv-selection bg-on fullwidth-img description-off">

		
		<div class="blog-content wf-td">
			<h3 class="entry-title"><a href="https://www.johnsonunderwood.co.uk/ju_job/test/" title="test" rel="bookmark">test</a></h3>

			<div class="entry-meta"><a class="author vcard" href="https://www.johnsonunderwood.co.uk/author/seo/" title="View all posts by seo" rel="author">By <span class="fn">seo</span></a><a href="javascript:void(0);" title="12:26" class="data-link" rel="bookmark"><time class="entry-date updated" datetime="2020-02-04T12:26:38+00:00">04/02/2020</time></a></div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque…</p>

		</div>
		<a href="https://www.johnsonunderwood.co.uk/ju_job/test/" class="job-read-more">
			Read More &gt; 
		</a>
	</article>

</div></div>

		<?php
		the_archive_description( '<div class="taxonomy-description">', '</div>' );

		if ( have_posts() ) {
			the7_archive_loop();
		} else {
			get_template_part( 'no-results', 'search' );
		}
		?>

	</div><!-- #content -->

	<?php do_action( 'presscore_after_content' ); ?>

<?php get_footer(); ?>
