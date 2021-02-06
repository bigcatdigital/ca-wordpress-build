<?php
	/* Template Name: Landing page */
	get_header();
?>
	<body>		
		<main> 
			<div class="bc-content-container bc-landing-hero-container">
				<header class="bc-hero-header">
					<div class="bc-content-container">
						<div class="bc-content-row">
							<div class="bc-header-logo">
								<h1><a href="<?php echo get_permalink(111) ?>"><span>Cooney</span>Architects</a></h1>	
							</div>
							<div class="bc-header-menu bc-header-menu--show-hide">
								<a href="javascript:void(0)" class="bc-header-menu__toggle">
										<svg class="svg-icon scroll-down-arrow bc-header-menu__toggle__show">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#menu-thin"></use>
										</svg>
										<svg class="svg-icon scroll-down-arrow bc-header-menu__toggle__hide">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#close-x"></use>
										</svg>	
									</a>
									<ul class="bc-header-menu__links"> 
										<li class="bc-header-menu__link">
											<a class="bc-roll-up-link is-home-link" href="<?php echo get_permalink(111) ?>">
												<span class="bc-roll-up-link-default ">Home</span>
												<span class="bc-roll-up-link-active ">
													Home
													<svg class="svg-icon scroll-down-arrow">
														<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
													</svg>	
												</span>
											</a>
										</li>
										<li class="bc-header-menu__link">
											<a class="projects-link bc-roll-up-link is-projects-link" href="<?php echo get_permalink(70) ?>">
												<span class="bc-roll-up-link-default ">Projects</span>
												<span class="bc-roll-up-link-active ">
													<!--<span class="bc-color-square"></span>-->
													Projects
													<svg class="svg-icon scroll-down-arrow">
														<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
													</svg>	
												</span>
											</a>
										</li>
										<li class="bc-header-menu__link">
											<a class="practice-link bc-roll-up-link is-practice-link" href="<?php echo get_permalink(115) ?>">
												<span class="bc-roll-up-link-default ">Practice</span>
													<span class="bc-roll-up-link-active ">
														Practice
														<svg class="svg-icon scroll-down-arrow">
															<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
														</svg>	
													</span>
												</a>
										</li>
										<li class="bc-header-menu__link">
											<a class="bc-roll-up-link people-link is-people-link" href="<?php echo get_permalink(113) ?>">
													<span class="bc-roll-up-link-default ">People</span>
													<span class="bc-roll-up-link-active ">
														People
														<svg class="svg-icon scroll-down-arrow">
															<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
														</svg>	
													</span>
											</a>
										</li>
									</ul>
								</div><!-- // .bc-header-menu--show-hide -->
								<div class="bc-header-menu--mobile">
									<ul class="bc-header-menu__links"> 
										<li class="bc-header-menu__link"><a href="<?php echo get_permalink(111) ?>">Home</a></li>
										<li class="bc-header-menu__link"><a href="<?php echo get_permalink(70) ?>">Projects</a></li>
										<li class="bc-header-menu__link"><a href="<?php echo get_permalink(115) ?>">Practice</a></li>
										<li class="bc-header-menu__link"><a href="<?php echo get_permalink(113) ?>">People</a></li>
									</ul>
								<?php 
									$contact_info = new WP_Query([
									'post_type' => 'contact-information'
									]);	
									while ($contact_info->have_posts()) {
										$contact_info->the_post() ; ?>
										<h3 class="bc-header-menu__heading">Contact</h3> 
										<div class="bc-header-menu__contact">
											<?php if (get_field('contact-#1')) {
												$contact_1 = get_field('contact-#1'); ?>
												<h4 class="ca-contact-office"><?php echo esc_html($contact_1['office-name']) ?></h4>
												<p class="ca-contact-detail"><?php echo $contact_1['office-detail'] ?></p>
												<?php if ($contact_1['office-number']) { ?>
													<h5>Phone</h5>
													<p class="ca-contact-detail"><a href="tel:<?php echo $contact_1['office-number'] ?>">+353 <?php echo $contact_1['office-number'] ?></a></p>
												<?php }//end if 'office-number' ?>
											<?php }//end if 'contact-#1' ?>
											<?php if (get_field('contact-main-email')) { ?>
												<h5 class="ca-contact-office-sub">Email</h5>
												<p class="ca-contact-detail"><a href="mailto:<?php echo get_field('contact-main-email') ?>"><?php echo get_field('contact-main-email'); ?></a></p>
											<?php }//end if 'contact-main-phone-email' ?>
											<?php if (get_field('contact-#2')) {
												$contact_2 = get_field('contact-#2'); ?>
												<h4 class="ca-contact-office"><?php echo esc_html($contact_2['office-name']) ?></h4>
												<p class="ca-contact-detail"><?php echo $contact_2['office-detail'] ?></p>
													<?php if ($contact_2['office-number']) { ?>
												<h5>Phone</h5>
												<p class="ca-contact-detail"><a href="tel:<?php echo $contact_2['office-number'] ?>">+353 <?php echo $contact_2['office-number'] ?></a></p>
													<?php }//end if 'office-number' ?>
											<?php }//end if 'contact-#2' ?>

										</div>
								<?php }//end while contact info have posts() 
									wp_reset_postdata();	
								?>

								</div><!-- // .bc-header-menu--mobile -->
							</div><!-- // .bc-content-row -->
						</div><!-- // .bc-content-container -->
					</header>
				<?php while (have_posts()) {
						the_post(); ?>
				<?php if (get_field('landing-page-type') === 'hero-carousel') { 
					$page_type = 'carousel'; 
					$carousel_items = get_field('landing-page-carousel-items'); ?>
				<section class="bc-content-row bc-hero--landing-hero bc-hero--landing-hero--carousel"> 
				<?php } else if (get_field('landing-page-type') === 'hero-video') { 
					$page_type = 'video'; ?>
				<section class="bc-hero--landing-hero--video"> 
				<?php } else { 
					$page_type = 'image'; ?>
				<section class="bc-content-row bc-hero--landing-hero">			
				<?php } ?>
					<article class="bc-hero-block">
						<?php if ($page_type === 'carousel') { ?>
						<div class="bc-hero__carousel">
							<?php if ($carousel_items) { ?>
								<?php if ($carousel_items['project-#1']['project-#1-project']) { 
									$project_image = $carousel_items['project-#1']['project-#1-cover-image']; 
									echo '<!-- ' . $project_image . '-->';
								?>
								<picture class="bc-hero__carousel__slide bc-hero-image">
									<img src="<?php echo esc_url($project_image['url']) ; ?>" alt="<?php echo $project_image['alt'] ; ?>">
									<div class="bc-gradient-overlay"></div>
								</picture>	
								<?php }// endif 'project-#1' ?>
								<?php if ($carousel_items['project-#2']['project-#2-project']) { 
									$project_image = $carousel_items['project-#2']['project-#2-cover-image'];
									echo '<!-- ' . $project_image . '-->';
									?>
									<picture class="bc-hero__carousel__slide bc-hero-image">
										<img src="<?php echo esc_url($project_image['url']) ; ?>" alt="<?php echo $project_image['alt'] ; ?>">
										<div class="bc-gradient-overlay"></div>
									</picture>	
								<?php }// endif 'project-#2' ?>
								<?php if ($carousel_items['project-#3']['project-#3-project']) {
									$project_image = $carousel_items['project-#3']['project-#3-cover-image'];
									echo '<!-- ' . $project_image . '-->';
									?>
									<picture class="bc-hero__carousel__slide bc-hero-image">
										<img src="<?php echo esc_url($project_image['url']) ; ?>" alt="<?php echo $project_image['alt'] ; ?>">
										<div class="bc-gradient-overlay"></div>
									</picture>	
								<?php }// endif 'project-#3' ?>
								<?php if ($carousel_items['project-#4']['project-#4-project']) { 
									$project_image = $carousel_items['project-#4']['project-#4-cover-image'];
									?>
									<picture class="bc-hero__carousel__slide bc-hero-image">
										<img src="<?php echo esc_url($project_image['url']) ; ?>" alt="<?php echo $project_image['alt'] ; ?>">
										<div class="bc-gradient-overlay"></div>
									</picture>	
								<?php }// endif 'project-#4' ?>
								<?php if ($carousel_items['project-#5']['project-#5-project']) { 
									$project_image = $carousel_items['project-#5']['project-#5-cover-image'];
									?>
									<picture class="bc-hero__carousel__slide bc-hero-image">
										<img src="<?php echo esc_url($project_image['url']) ; ?>" alt="<?php echo $project_image['alt'] ; ?>">
										<div class="bc-gradient-overlay"></div>
									</picture>	
								<?php }// endif 'project-#5' ?>
							<?php }//endif landing-page-carousel-items ?>	
						</div><!-- // .bc-hero__carousel -->
						<?php } else if ($page_type == 'video') { ?>
						<picture class="bc-hero-image">
							<img src="<?php echo esc_url(get_field('landing-page-static-image')['url']) ?>" alt="Meath GAA Centre of Excellence">
							<div class="bc-gradient-overlay"></div>
						</picture>
						<div class="bc-hero-video" style="background-image: url('<?php echo esc_url(get_field('landing-page-static-image')['url']) ?>')">
							<video class="bc-hero-video__video" playsinline autoplay muted poster="https://media.w3.org/2010/05/sintel/poster.png" id="bgvid">
								<source src="<?php echo esc_url(get_field('landing-page-video-url')) ?>" type="video/mp4">
							</video>	
						</div>
						<?php } else { ?>
						<picture class="bc-hero-image">
								<img src="<?php echo esc_url(get_field('landing-page-static-image')['url']) ?>" alt="Meath GAA Centre of Excellence">
								<div class="bc-gradient-overlay"></div>
							</picture>
						<?php }// end if else page type for media output  ?>
						
						<div class="bc-hero-body">
							<div class="bc-landing-hero-text">
								<div class="bc-landing-hero-quote-mark">
									<svg class="svg-icon scroll-down-arrow">
										<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
									</svg>	
								</div>
								<h1><?php echo get_field('landing-page-quote')?></h1>
							</div><!-- // .bc-landing-hero-text -->
								<ul class="bc-landing-hero-links">
									<?php if (get_field('landing-page-links')) { 
										while (have_rows('landing-page-links')) {
											the_row(); ?> 
											<?php if (get_sub_field('landing-page-link-#1')) { 
												$link = get_sub_field('landing-page-link-#1'); ?>
											<li class="hero-projects-link">
												<a class="bc-roll-up-link" href="<?php echo esc_url($link['url']); ?>">
													<?php echo esc_html($link['title']); ?>
													<svg class="svg-icon">
														<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
													</svg>
												</a>										
											</li>		
											<?php }// endif landing page link #1  ?>
											<?php if (get_sub_field('landing-page-link-#2')) { 
												$link = get_sub_field('landing-page-link-#2'); ?>
											<li class="hero-projects-link">
												<a class="bc-roll-up-link" href="<?php echo esc_url($link['url']); ?>">
													<?php echo esc_html($link['title']); ?>
													<svg class="svg-icon">
														<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
													</svg>
												</a>										
											</li>		
											<?php }// endif landing page link #1 ?>
											<?php if (get_sub_field('landing-page-link-#3')) { 
												$link = get_sub_field('landing-page-link-#3'); ?>
											<li class="hero-projects-link">
												<a class="bc-roll-up-link" href="<?php echo esc_url($link['url']); ?>">
													<?php echo esc_html($link['title']); ?>
													<svg class="svg-icon">
														<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
													</svg>
												</a>										
											</li>		
											<?php }// endif landing page link #3 ?>
									<?php }//endwhile landing-page-links
									}//end if landing-page-links ?>
								</ul><!-- // .bc-landing-hero-links -->
							<?php if ($page_type === 'carousel') { ?>
							<div class="bc-hero__carousel__info">
								<div class="bc-hero__carousel__info__text">
									<div class="bc-hero__carousel__titles__track">
										<?php if ($carousel_items['project-#1']['project-#1-project']) { 
											$project_id = $carousel_items['project-#1']['project-#1-project'];
										?>
										<h2 class="bc-hero__carousel__title">										
											<a href="<?php echo esc_url(get_permalink($project_id)); ?>">
												<span class="bc-hero__carousel__title__text"><?php echo esc_html(get_the_title($project_id)); ?></span>
												<svg class="svg-icon">
													<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
												</svg>
											</a>
										</h2>	
										<?php }// endif project-#1-project ?>
										<?php if ($carousel_items['project-#2']['project-#2-project']) { 
											$project_id = $carousel_items['project-#2']['project-#2-project'];
										?>
										<h2 class="bc-hero__carousel__title ">										
											<a href="<?php echo esc_url(get_permalink($project_id)); ?>">
												<span class="bc-hero__carousel__title__text"><?php echo esc_html(get_the_title($project_id)); ?></span>
												<svg class="svg-icon">
													<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
												</svg>
											</a>
										</h2>	
										<?php }// endif project-#2-project ?>
										<?php if ($carousel_items['project-#3']['project-#3-project']) { 
											$project_id = $carousel_items['project-#3']['project-#3-project'];
										?>
										<h2 class="bc-hero__carousel__title ">										
											<a href="<?php echo esc_url(get_permalink($project_id)); ?>">
												<span class="bc-hero__carousel__title__text"><?php echo esc_html(get_the_title($project_id)); ?></span>
												<svg class="svg-icon">
													<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
												</svg>
											</a>
										</h2>	
										<?php }// endif project-#3-project ?>
										<?php if ($carousel_items['project-#4']['project-#4-project']) { 
											$project_id = $carousel_items['project-#4']['project-#4-project'];
										?>
										<h2 class="bc-hero__carousel__title ">										
											<a href="<?php echo esc_url(get_permalink($project_id)); ?>">
												<span class="bc-hero__carousel__title__text"><?php echo esc_html(get_the_title($project_id)); ?></span>
												<svg class="svg-icon">
													<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
												</svg>
											</a>
										</h2>	
										<?php }// endif project-#4-project ?>
										<?php if ($carousel_items['project-#5']['project-#5-project']) { 
											$project_id = $carousel_items['project-#5']['project-#5-project'];
										?>
										<h2 class="bc-hero__carousel__title ">										
											<a href="<?php echo esc_url(get_permalink($project_id)); ?>">
												<span class="bc-hero__carousel__title__text"><?php echo esc_html(get_the_title($project_id)); ?></span>
												<svg class="svg-icon">
													<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
												</svg>
											</a>
										</h2>	
										<?php }// endif project-#5-project ?>
									</div><!-- // .bc-hero__carousel__titles__track -->
								</div><!-- // .bc-hero__carousel__info__text -->
								<div class="bc-hero__carousel__controls">
									<a href="javascript:void()" title="Previous" class="bc-hero__carousel__control bc-hero__carousel__controls__prev">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat--left"></use>
										</svg>	
									</a>
									<a href="javascript:void()" title="Previous" class="bc-hero__carousel__control bc-hero__carousel__controls__next">
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat"></use>
										</svg>	
									</a>
								</div><!-- // .bc-hero__carousel__controls -->
							</div><!-- // .bc-hero__carousel__info -->
							<?php } //endif page type is carousel ?>
						</div><!-- // .bc-hero-body -->
					</article><!-- // .bc-hero-block -->
				</section>	<!-- // .bc-hero--landing-hero--carousel -->
			<?php }//end while lave_posts() ?>
			</div><!-- // .bc-content-container -->   
		</main>
		<?php get_footer(); ?>
