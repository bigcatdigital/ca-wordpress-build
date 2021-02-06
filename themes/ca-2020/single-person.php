<?php
	/* Template Name: Project template */
	get_header();
?>
	<body class="brand-red-scheme is-inner-page" class="page-top"> 
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
							<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(113) ;?>">People</a>
						</li>
						<svg class="svg-icon"> 
							<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#next"></use>
						</svg>
						<li><?php echo get_field('person-name'); ?></li>
					</ul><!-- // .bc-breadcrumbs-links -->
				</nav><!-- // .bc-breadcrumbs -->
			</div><!-- // .bc-content container - breadcrumbs -->
			<main id="content-top">
				<div class="bc-content-container person-profile "> 
				<section class="bc-content-row" aria-label="<?php echo get_field('person-name') . ' ' . get_field('person-title'); ?>">
					<div class="two-col-feature">
						<div class="short-col">
							<figure>
								<div class="two-col-feature__image-wrap">
									<img src="<?php echo get_field('person-main-photo')['url']; ?>" alt="<?php echo get_field('person-main-photo')['alt']; ?>" />	
								</div>
								<figcaption> 
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#quotes"></use>
									</svg>	
									<p><?php echo get_field('person-quote'); ?></p>
								</figcaption>
							</figure>
						</div><!-- // .short-col -->
						<div class="long-col">
							<div class="bc-general-content-wrap">
								<h1 class="content-title"><?php echo get_field('person-name'); ?></h1> 
								<h2 class="content-subtitle"><?php echo get_field('person-title'); ?></h2>
								<p class="content-intro leader-text"><?php echo get_field('person-intro-text'); ?></p>
								<?php echo get_field('person-bio'); ?>
								<?php if (get_field('person-projects')) { ?>
								<p class="ca-arrow-link">
									<a href="#projects" class="is-page-scroll">
										See my projects with Cooney Architects
									</a>	
									<svg class="svg-icon"> 
										<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
									</svg>
								</p>
								<?php } ?>
								<?php 
									$person_quals_1 = get_field('person-qualifications')["qualification#1"];
									if ($person_quals_1 !== '' && $person_quals_1 !== null) {
										while (have_rows('person-qualifications')) { 
											the_row(); ?>
								<h3>Qualifications</h3>
								<table class="bc-table person-qualifications"> 
									<tbody>
										<tr>
											<td><?php echo get_sub_field('qualification#1') ?></td>
										</tr>
										<?php if (get_sub_field('qualification#2')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#2'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#2') ?>
										<?php if (get_sub_field('qualification#3')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#3'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#3') ?>
										<?php if (get_sub_field('qualification#4')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#4'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#4') ?>
										<?php if (get_sub_field('qualification#5')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#5'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#5') ?>
										<?php if (get_sub_field('qualification#6')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#6'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#6') ?>
										<?php if (get_sub_field('qualification#7')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#7'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#7') ?>
										<?php if (get_sub_field('qualification#8')) { ?>
										<tr>
											<td><?php echo get_sub_field('qualification#8'); ?></td>
										</tr>
										<?php }//end if get_sub_field('qualification#8') ?>
								</table>
									<?php } //endwhile person-qualifications ?>
								<?php }//end if have-rows person-qualifications ?>
							</div><!-- // .bc-general-content-wrap -->
						</div><!-- // .long-col -->
					</div><!-- // .two-col-feature -->
				</section><!-- // .person-profile -->
				<?php if (get_field('person-projects')) { 
					$person_projects = get_field('person-projects');
				?>
				<div class="bc-feature-footer">
					<div class="bc-feature-footer__scroll">
						<a href="javascript:void(0)" class="is-label">
							My projects at Cooney Architects
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>
						</a>
					</div>
				</div><!-- // .bc-feature-footer -->
			</div><!-- // .bc-content container - person profile -->
			<?php }//end if 'person-projects' ?>
			<?php if (get_field('person-projects')) { 
				$person_projects = get_field('person-projects');
			?>
			<section aria-label="<?php echo get_field('person-name') . ', projects' ?>" id="projects">
				<div class="bc-content-row" >
					<div class="bc-content-column">
							<h1>My projects</h1> 
						</div>
				</div> 
				<div class="bc-content-row bc-cards-row ca-projects-grid">
					<?php foreach ($person_projects as $person_project) { 
						setup_postdata($post); ?>
						<article class="bc-card bc-card--slide-up bc-fade-in-up"> 
							<figure class="bc-card-img is-square">
								<img src="<?php echo get_field('project-square-image', $person_project->ID)['url']; ?>" alt="<?php echo get_field('project-square-image', $person_project->ID)['url']; ?>" />	
							</figure>
							<figure class="bc-card-img--focus-image is-square">
								<img src="<?php echo get_field('project-square-image', $person_project->ID)['url']; ?>" alt="<?php echo get_field('project-square-image', $person_project->ID)['alt']; ?>" />	
							</figure>
							<div class="bc-card-content">
								<a href="<?php echo get_the_permalink($person_project->ID); ?>"> 
									<div class="bc-card-info">
										<h2 class="bc-card-title"><?php echo get_the_title($person_project->ID); ?></h2>
										<p class="bc-card-subtitle"><?php echo get_field('project-location', $person_project->ID); ?></p>
									</div> 
									<div class="bc-card-link">
										<span class="bc-card-link-text">View project</span> 
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
										</svg>	
									</div>
								</a>
							</div>
						</article><!-- // <?php the_title(); ?> -->
					<?php }//end foreach $person_projects ?>
				</div><!-- // .cards-row -->
			</section><!-- // #projects -->
			<?php }//endif person-projects ?>
		</main>
		<?php }// endwhile have_posts() ?>
		<div class="bc-content-container page-bottom-links">
			<div class="bc-content-row">
				<div class="page-bottom-links-back">	
					<?php
					$referrer_url = get_permalink(113);
					$referrer_name = get_the_title(113);
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