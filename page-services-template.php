<?php
/**
 * Template Name: Services
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<section id="home" class="hero" data-aos="fade-in" data-aos-duration="1500">
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
			<div class="navWidth">
				<section id="companyIntro" class="paddedSection" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1000">
					<div class="drywallBack paddedSection">
						<div class="titleWrap">
							<h2>A Better Building Process</h2>
							<div class="underline"></div>
						</div>
						<p class="blockText limitWidth">
							LeMense Quality Homes provides an unmatched home building experience in northeast Wisconsin. Discover the ease of building your new home from scratch with confidence! Our streamlined process includes custom building, interior design, remodeling, realty—even a library of exclusive floor plans—allowing you to build an incredible home at an incredible value.
						</p>
					</div>
				</section>
				<section id="services"class="row">
					<div class="drywallBack paddedSection">
						<h3 class="extraLargeHeading centerText">All-inclusive Services</h3>
						<div class="pageWidth servicesContainer" data-aos="fade-in">
							<div class="serviceWrapper">
								<a href="/services/custom-building/">
									<div class="serviceWrapperInner">
										<h4>Custom Building</h4>
										<p>
											Let us guide you every step of the way to build the perfect home outfitted for your family’s unique needs.
										</p>
										<p>LEARN MORE <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/interior-design/">
									<div class="serviceWrapperInner">
										<h4>Interior Design</h4>
										<p>
											Included with your building plans, our interior designer can help you make decisions and achieve the stunning cohesive home in your mind.
										</p>
										<p>LEARN MORE <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/licensed-realty/">
									<div class="serviceWrapperInner">
										<h4>Licensed Realty</h4>
										<p>
											By timing the sale of your existing home with the completion of your new home, our on-staff realtor has the ability to make your
											move seamless.
										</p>
										<p>LEARN MORE <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
							<div class="serviceWrapper">
								<a href="/services/remodeling/">
									<div class="serviceWrapperInner">
										<h4>Remodeling</h4>
										<p>
											Whether you have an unfinished basement or other area in need of an update, our crew can bring their experience and talents to your existing home.
										</p>
										<p>LEARN MORE <?php get_template_part("/inc/svg-icons/arrow-right"); ?></p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
