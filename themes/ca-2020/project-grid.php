<?php
	/* Template Name: Project Grid */
	get_header();
?>
	<body class="brand-yellow-scheme @@inner-page" class="page-top"> 
		<?php include('php-includes/global-header.php'); ?>	
		<div class="bc-content-container bc-breadcrumbs-container">
			<nav class="bc-breadcrumbs has-project-filter">
				<ul class="bc-inner-nav bc-breadcrumbs-links">  
					<li>
						<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(70) ?>">Projects</a>
					</li>
				</ul><!-- // .bc-breadcrumbs-links -->
				<div class="ca-project-filters-toggle">
					<a class="ca-project-filters__label" href="javascript:void(0)">
						<span class="">Filter projects:</span>
					</a> 
					<a class="ca-project-filters__show-hide" href="javascript:void(0)">
						<svg class="svg-icon svg-funnel-icon"> 
							<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#funnel"></use>
						</svg>	
						<svg class="svg-icon svg-close-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#close-x"></use>
						</svg>	
					</a>	
				</div><!-- // .ca-project-filters-toggle -->
			</nav><!-- // .bc-breadcrumbs -->
			<div class="ca-project-filters">
				<ul class="ca-project-filters__list is-invisible"> 
					<li class="bc-inner-nav-active">
						<a data-filter="all-projects" class="is-label ca-project-filter is-active" href="javascript:void(0)">
							<svg class="svg-icon ca-project-filter__indicator">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>	
							All projects
						</a> 
					</li>
					<li>
						<a class="ca-project-filter is-label" data-filter="sport" data-filter-label="Sport" href="javascript:void(0)">
							<svg class="svg-icon ca-project-filter__indicator">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>	
							Sport
						</a>
					</li>
					<li>
						<a class="ca-project-filter is-label" data-filter="civic-and-cultural" data-filter-label="Civic &amp; Cultural" href="javascript:void(0)">
							<svg class="svg-icon ca-project-filter__indicator">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>	
							Civic &amp; Cultural
						</a>
					</li>
					<li>
						<a class="ca-project-filter is-label" data-filter="housing" data-filter-label="Housing" href="javascript:void(0)">
							<svg class="svg-icon ca-project-filter__indicator">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>	
							Housing
						</a>
					</li>
					<li>
						<a class="ca-project-filter is-label" data-filter="adaptive-reuse" data-filter-label="Adaptive reuse" href="javascript:void(0)">
							<svg class="svg-icon ca-project-filter__indicator">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>	
							Adaptive reuse
						</a>
					</li>
				</ul><!-- // .ca-project-filters__list -->
			</div><!-- // .ca-project-filters -->
		</div><!-- // .bc-breadcrumbs-container -->
		<main>
			<div class="bc-content-container"> 
				<div class="bc-content-row ca-projects-grid-header" style="display: none" >
					<div class="bc-content-column bc-feature-leader  bc-content-column--indented">
						<div class="bc-feature-leader__content">
							<h1>Sports</h1> 
						</div>
					</div>
				</div><!-- // .bc-content-row -->
				<section class="bc-content-row bc-cards-row ca-projects-grid" aria-label="Cooney Architects Projects"> 
					 <?php 
							$caProjects = new WP_Query([
								'post_type' => 'project'
							]);
							while ($caProjects->have_posts()) {
								$caProjects->the_post(); ?>
								<?php $squareImage = get_field('project-square-image'); ?>
								<article class="bc-card--slide-up bc-fade-in-up"> 
									<figure class="bc-card-img is-square">
										<img src="<?php echo esc_url($squareImage['url']); ?>" alt="<?php echo esc_attr($squareImage['url']); ?>" />	
									</figure>
									<figure class="bc-card-img--focus-image is-square">
										<img src="<?php echo esc_url($squareImage['url']); ?>" alt="<?php echo esc_attr($squareImage['url']); ?>" />	
									</figure>
									<div class="bc-card-content"> 
										<a href="<?php the_permalink(); ?>"> 
											<div class="bc-card-info">
												<h2 class="bc-card-title"><?php echo get_the_title(); ?></h2> 
												<p class="bc-card-subtitle"><?php echo get_field('project-location'); ?></p> 
											</div>
										</a>
									</div>
								</article><!-- // end project -->
							<?php }; 
								wp_reset_postdata(); ?>
				</section><!-- // .cards-row -->
			</div><!-- // .bc-content-container -- project cards -->
		</main>
		<?php include('php-includes/bottom-links-up-only.php'); ?>	
		<?php get_footer(); ?>