<?php
	get_header();
?>
	<body class="brand-blue-scheme @@inner-page" class="page-top"> 
	<?php include('php-includes/global-header.php'); ?>	
	<div class="bc-content-container"> 
		<nav class="bc-breadcrumbs">
			<ul class="bc-breadcrumbs-links">
				<li>
					<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(115) ;?>">Practice</a>
				</li>
				<svg class="svg-icon">
					<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#next"></use>
				</svg>
				<li>
					<?php the_title(); ?>
				</li>
			</ul><!-- // .bc-breadcrumbs-links -->
		</nav><!-- // .bc-breadcrumbs -->
	</div>
	<main id="content-top">
		<div class="bc-content-container bc-landing-hero-container">
			<section class="bc-content-row bc-hero--landing-hero bc-hero--landing-hero--carousel bc-design-process"> 
				<?php /** WP Loop start **/
					while (have_posts()) {
						the_post(); ?>
				<article class="bc-hero-block">
					<div class="bc-hero__carousel">
						<div class="bc-hero__carousel__slide bc-hero-image cover-slide">
							<div class="bc-hero__carousel__slide__text">
								<h1><?php echo esc_html(get_field('design-process-title')); ?></h1>
								<div class="bc-hero-body-subtext ">
									<a href="javascript:void()"> 
										<?php echo esc_html(get_field('design-process-sub-title')); ?>
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#play"></use> 
											 
										</svg>	
									</a>
								</div>	
							</div>
							<?php $design_proc_image = get_field('design-process-cover-image'); ?>
							<img src="<?php echo esc_url($design_proc_image['url']) ?>" alt="<?php echo esc_url($design_proc_image['alt']) ?>">
							<div class="bc-hero__carousel__slide__overlay"></div>
						</div>	
						<?php $design_proc_image = get_field('design-process-slider-image-#1'); ?>
						<picture class="bc-hero__carousel__slide bc-hero-image">
							<img src="<?php echo esc_url($design_proc_image['url']) ?>" alt="<?php echo esc_url($design_proc_image['alt']) ?>">
						</picture>
						<?php $design_proc_image = get_field('design-process-slider-image-#2'); ?>
						<picture class="bc-hero__carousel__slide bc-hero-image">
							<img src="<?php echo esc_url($design_proc_image['url']) ?>" alt="<?php echo esc_url($design_proc_image['alt']) ?>">
						</picture>
						<?php if (get_field('design-process-slider-image-#3')) { 
							$design_proc_image = get_field('design-process-slider-image-#4'); ?>?>
							<picture class="bc-hero__carousel__slide bc-hero-image">
								<img src="<?php echo esc_url($design_proc_image['url']) ?>" alt="<?php echo esc_url($design_proc_image['alt']) ?>">
							</picture>
						<?php }//end if design-process-slider-image-#3 ?>
						<a href="javascript:void(0)" class="bc-hero__carousel__control is-hidden bc-hero__carousel__control--prev">
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat--left"></use>
							</svg>	
						</a>
						<a href="javascript:void(0)" class="bc-hero__carousel__control is-hidden bc-hero__carousel__control--next">
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat"></use>
							</svg>	
						</a>
					</div><!-- // .bc-hero__carousel -->
				</article><!-- // .bc-hero-block -->
				<?php }//end WP loop ?>
			</section>	<!-- // .bc-hero--landing-hero--carousel -->
		</div><!-- // .bc-content-container -->  
	</main>
	<div class="bc-content-container page-bottom-links">
			<div class="bc-content-row">
				<div class="page-bottom-links-back">	
					<?php
					$referrer_url = get_permalink(115);
					$referrer_name = get_the_title(115);
					$back_message = 'Back to '. $referrer_name; ?>
					<span class="icon-wrap">
						<svg class="svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow-short--left"></use>
						</svg>
					</span>
					<a href="<?php echo esc_url($referrer_url); ?>" class="page-bottom-links-back-link is-label">
						<?php echo $back_message; ?>
					</a>
				</div><!-- // .page-bottom-links-back -->
				<div class="page-bottom-links-top">
					<svg class="svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
					</svg>
					<a  href="javascript:void(0)" class="page-bottom-links-top-link is-label is-page-scroll is-page-scroll">Top</a>
				</div>
			</div>
		</div>
	<?php get_footer(); ?>