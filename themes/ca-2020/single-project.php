<?php
	/* Template Name: Project template */
	get_header();
?>
	<body class="brand-yellow-scheme is-inner-page" class="page-top"> 
	<?php include('php-includes/global-header.php'); ?>	
	<?php 	
		/** WP Loop start **/
		while (have_posts()) {
		the_post(); 
	?>
	<div class="bc-content-container">
		<nav class="bc-breadcrumbs">
			<ul class="bc-breadcrumbs-links"> 
				<li>
					<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(70) ;?>">Projects</a>
				</li>
				<svg class="svg-icon">
					<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#next"></use>
				</svg>
				<li>
					<?php the_title() ?>
				</li>
			</ul><!-- // .bc-breadcrumbs-links -->
		</nav><!-- // .bc-breadcrumbs -->
	</div>
	<main id="content-top">
		<div class="bc-content-container">
			<section class="bc-hero--slider"> 
				<div class="bc-hero--slider__wrap">
					<div class="bc-hero--slider-slides">
						<?php 
							function is_slider_image($img) {
								return strstr($img, 'project-slider-image');
							}
							$all_fields = get_fields();
							$slider_images = array_filter($all_fields, 'is_slider_image', ARRAY_FILTER_USE_KEY );
							foreach ($slider_images as $slider_image) {
							
							if ($slider_image) { ?>
								<picture class="bc-hero--slider-slide">
									<img src="<?php echo $slider_image['url'] ?>" alt="<?php echo $slider_image['alt'] ?>">
								</picture>
							<?php }
						}
						?>
					</div><!-- // .bc-hero--slider-slides -->
					<div class="bc-hero--slider__controls">
						<a class="bc-hero--slider__control bc-hero--slider__control--prev">
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat--left"></use>  
							</svg>	
						</a>

						<div class="bc-hero--slider__counter">
							<span class="bc-hero--slider__counter__current">0</span>/
							<span class="bc-hero--slider__counter__count">0</span> 
						</div>

						<a class="bc-hero--slider__control bc-hero--slider__control--next">
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#carat"></use> 
							</svg>	
						</a>
					</div><!-- // .bc-hero--slider__controls -->	
				</div><!-- // .bc-hero--slider__wrap -->
				<div class="bc-feature-footer">
					<div class="bc-feature-footer__scroll">
						<a href="javascript:void(0)" class="is-label">
							About the project
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>
						</a>
					</div>
				</div><!-- // bc-feature-footer -->
			</section><!-- // .bc-hero -->
		</div><!-- // .bc-content-container -->
		<div class="bc-content-container" id="content-start">
			<section class="bc-content-row bc-general-content-row" aria-label="<?php the_title(); ?>">
				<article class="bc-general-content is-project-description"> 
					<div class="bc-general-content-wrap">
						<h1 class="is-project-title"><?php the_title(); ?></h1> 
						<?php 
							if ($all_fields['intro-text']) { ?>
								<p class="project-intro"><?php echo $all_fields['intro-text']; ?></p> 
						<?php } 
							the_content();
						?>
						<?php if (get_field('project-quote#1')) { ?>
							<hr class="project-separator">
							<blockquote> 
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
								</svg>
								<?php echo get_field('project-quote#1') ?>
								<p class="blockquote-citation"><b><?php echo get_field('project-quote-attribution#1') ?></b></p>
							</blockquote>	
							<hr class="project-separator">
						<?php } //end if project-quote#1 ?>
						<?php if (get_field('project-quote#2')) { ?>
							<blockquote> 
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
								</svg>
								<?php echo get_field('project-quote#2') ?>
								<p class="blockquote-citation"><b><?php echo get_field('project-quote-attribution#2') ?></b></p>
							</blockquote>	
							<hr class="project-separator">
						<?php } //end if project-quote#2 ?>
						<?php if (get_field('project-quote#3')) { ?>
							<blockquote> 
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
								</svg>
								<?php echo get_field('project-quote#3') ?>
								<p class="blockquote-citation"><b><?php echo get_field('project-quote-attribution#3') ?></b></p>
							</blockquote>	
							<hr class="project-separator">
						<?php } //end if project-quote#3 ?>
						<?php if (get_field('project-quote#4')) { ?>
							<blockquote> 
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
								</svg>
								<?php echo get_field('project-quote#4') ?>
								<p class="blockquote-citation"><b><?php echo get_field('project-quote-attribution#4') ?></b></p>
							</blockquote>	
							<hr class="project-separator">
						<?php } //end if project-quote#4 ?>
						<?php if (get_field('project-quote#5')) { ?>
								<blockquote> 
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
									</svg>
									<?php echo get_field('project-quote#5') ?>
									<p class="blockquote-citation"><b><?php echo get_field('project-quote-attribution#5') ?></b></p>
								</blockquote>	
								<hr class="project-separator">
						<?php } //end if project-quote#4 ?>
						<?php if (have_rows('pubs_awards')) { 
							while (have_rows('pubs_awards')) { 
								the_row(); ?>
								<?php if (get_sub_field('pub_#1')['detail']) { ?>
								<h3>Recognition</h3>
								<ul class="project-recognition-list">
										<?php if (get_sub_field('pub_#1')['detail']) {
											$pub_award = get_sub_field('pub_#1')['detail'];
											if (get_sub_field('pub_#1')['link']) {
												$pub_award .= '<br /><b><a class="ca-arrow-link__link" href="' . esc_url(get_sub_field('pub_#1')['link']['url']) . '">';
												$pub_award .=  esc_html(get_sub_field('pub_#1')['link']['title']) ;
												$pub_award .= '<svg class="svg-icon">';
												$pub_award .= '	<use xlink:href="' . get_theme_file_uri('/assets/media/svg/bc-icons.svg') . '#arrow"></use>';
												$pub_award .= '</svg>';
												$pub_award .= '</a></b>';
											} ?>
											<li>
												<?php echo $pub_award  ; ?>
											</li>
										<?php } // endif get_sub_field('pub_#1') ?>
										<?php if (get_sub_field('pub_#2')['detail']) {
											$pub_award = get_sub_field('pub_#2')['detail'];
											if (get_sub_field('pub_#2')['link']) {
												$pub_award .= '<br /><b><a class="ca-arrow-link__link" href="' . esc_url(get_sub_field('pub_#2')['link']['url']) . '"></b>';
												$pub_award .=  esc_html(get_sub_field('pub_#2')['link']['title']) ;
												$pub_award .= '<svg class="svg-icon">';
												$pub_award .= '	<use xlink:href="' . get_theme_file_uri('/assets/media/svg/bc-icons.svg') . '#arrow"></use>';
												$pub_award .= '</svg>';
												$pub_award .= '</a></b>';
											} ?>
											<li>
												<?php echo $pub_award  ; ?>
											</li>
										<?php } // endif get_sub_field('pub_#2') ?>
										<?php if (get_sub_field('pub_#3')['detail']) {
											$pub_award = get_sub_field('pub_#3')['detail'];
											if (get_sub_field('pub_#3')['link']) {
												$pub_award .= '<br /><b><a class="ca-arrow-link__link" href="' . esc_url(get_sub_field('pub_#3')['link']['url']) . '"></b>';
												$pub_award .=  esc_html(get_sub_field('pub_#3')['link']['title']) ;
												$pub_award .= '<svg class="svg-icon">';
												$pub_award .= '	<use xlink:href="' . get_theme_file_uri('/assets/media/svg/bc-icons.svg') . '#arrow"></use>';
												$pub_award .= '</svg>';
												$pub_award .= '</a></b>';
											} ?>
											<li>
												<?php echo $pub_award  ; ?>
											</li>
										<?php } // endif get_sub_field('pub_#3') ?>
										<?php if (get_sub_field('pub_#4')['detail']) {
											$pub_award = get_sub_field('pub_#4')['detail'];
											if (get_sub_field('pub_#4')['link']) {
												$pub_award .= '<br /><b><a class="ca-arrow-link__link" href="' . esc_url(get_sub_field('pub_#4')['link']['url']) . '"></b>';
												$pub_award .=  esc_html(get_sub_field('pub_#4')['link']['title']) ;
												$pub_award .= '<svg class="svg-icon">';
												$pub_award .= '	<use xlink:href="' . get_theme_file_uri('/assets/media/svg/bc-icons.svg') . '#arrow"></use>';
												$pub_award .= '</svg>';
												$pub_award .= '</a></b>';
											} ?>
											<li>
												<?php echo $pub_award  ; ?>
											</li>
										<?php } // endif get_sub_field('pub_#4') ?>
										<?php if (get_sub_field('pub_#5')['detail']) {
											$pub_award = get_sub_field('pub_#5')['detail'];
											if (get_sub_field('pub_#5')['link']) {
												$pub_award .= '<br /><b><a class="ca-arrow-link__link" href="' . esc_url(get_sub_field('pub_#5')['link']['url']) . '"></b>';
												$pub_award .=  esc_html(get_sub_field('pub_#5')['link']['title']) ;
												$pub_award .= '<svg class="svg-icon">';
												$pub_award .= '	<use xlink:href="' . get_theme_file_uri('/assets/media/svg/bc-icons.svg') . '#arrow"></use>';
												$pub_award .= '</svg>';
												$pub_award .= '</a></b>';
											} ?>
											<li>
												<?php echo $pub_award  ; ?>
											</li>
										<?php } // endif get_sub_field('pub_#5') ?>
								</ul>
								<?php }//endif get_sub_field('pub_#1''detail')?>
									
							<?php } //end while(have_rows(pubs_awards)) ?>
						
						<?php } //endif have_rows('pubs_awards') ?>
						<div class="project-details"> 
							<p><strong>Project</strong>: <?php the_title() ?></p>
 							<?php if (get_field('project-categories')) { 
								$project_cats = [];
								foreach (get_field('project-categories') as $project_cat) {
									array_push($project_cats, $project_cat['label']);
								}
								//$project_cats = ; ?>
								<p><strong>Project type</strong>: <?php echo implode(', ', $project_cats);  ?></p>
							<?php }//endif  ?>
							<?php if (get_field('project-location')) { ?>
								<p><strong>Project location</strong>: <?php echo get_field('project-location') ?></p>
							<?php }//endif  ?>
							<?php if (get_field('project-size')) { ?>
								<p><strong>Project size</strong>: <?php echo get_field('project-size') ?></p>
							<?php }//endif  ?>
							<?php if (get_field('project-team-rel')) {
								$project_team_rel = get_field('project-team-rel');
								$project_team_links = [];
								$project_team_o = '';
								$test_arr = [1,2,3];
								foreach ($project_team_rel as $post) {
									setup_postdata($post);
									$link = '<a href="'. get_the_permalink($post) . '"><b>' . get_field('person-name') . '</b></a>' ;
									array_push($project_team_links, $link);
									wp_reset_postdata();
								}//end foreaach 'project-team-rel'
								$project_team_o = implode(', ', $project_team_links);
								if (get_field('project-team')) {
									$project_team_o .= ', '; 
									$project_team_o .= implode(', ', get_field('project-team')) . '.';
								} else {
									$project_team_o .= '.';
								}
							}//endif project team rel ?>
							<p><strong>Project team</strong>: <?php echo $project_team_o; ?></p>
							<?php if (get_field('project-photographer')) { ?>
								<p><strong>Project photographer</strong>: <?php echo get_field('project-photographer') ?></p>
							<?php }//endif  ?>
						
						</div><!-- // .project-details -->
					</div><!-- // .bc-general-content-wrap -->
				</article><!-- // .bc-general-content-wrap -->
			</section><!-- // .bc-general-content -->
			<?php 
				/** Wordpress Loop end **/
				}; 
			?>
		</div><!-- // .bc-content-container -->
	</main>
	<div class="bc-content-container page-bottom-links">
		<div class="bc-content-row">
			<div class="page-bottom-links-back">	
				<?php
					$referrer_url = get_permalink(70);
					$referrer_name = get_the_title(70);
					$back_message = 'Back to ' . $referrer_name; ?>
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