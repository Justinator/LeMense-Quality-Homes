<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<section class="hero" data-aos="fade-in" data-aos-duration="1500" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
			<div class="heroOverlay">
				<div class="overlayBorderOuter">
					<div class="overlayBorder"></div>
				</div>
			</div>
			<div class="headerOuterWrap">
				<div class="headerInnerWrap" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
					<h1><?php the_title(); ?></h1>
					<div class="arrow">
						<?php get_template_part('/inc/svg-icons/chevron-down'); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="pageContentContainer">
			<div class="navWidth paddedSection">
				<section id="thankYou" class="paddedSection" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1000">
					<div class="drywallBack paddedSection">
						<div class="titleWrap">
							<h2>Thank You for Your Interest in Our Work!</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText">
						We'll get back to you as soon as we can. In the meantime, browse some of our projects or floor plans below. We look forward to working with you!
						</p>
					</div>
				</section>
			</div>
			<?php get_template_part('/inc/related-projects'); ?>
			<?php get_template_part('/inc/related-floor-plans'); ?>
		</div>
	</main>
</div>
<?php
get_footer();