<?php
	/* Template Name: People grid */
	get_header();
?>
	<body class="brand-red-scheme" class="page-top"> 
		<?php include('php-includes/global-header.php'); ?>	
		<div class="bc-content-container"> 
				<nav class="bc-breadcrumbs">
				<ul class="bc-breadcrumbs-links"> 
					<li>
						<a class="bc-breadcrumbs-link" href="<?php echo get_permalink('113'); ?>">People</a>
					</li>
				</ul><!-- // .bc-breadcrumbs-links -->
			</nav><!-- // .bc-breadcrumbs -->
		</div><!-- // .bc-content-container -->
		<main id="content-top">
			<div class="bc-content-container">  
				<section class="bc-content-row bc-cards-row ca-profiles" aria-label="Cooney Architects People">
					<?php //people custom query 
					$caPeople = new WP_Query([
						'post_type' => 'person'
					]);
					while ($caPeople->have_posts()) {
						$caPeople->the_post(); ?>
						<article class="bc-card bc-card--slide-up">
							<figure class="bc-card-img is-square">
								<img src="<?php echo get_field('person-grid-photo#1')['url'] ?>" alt="<?php echo get_field('person-grid-photo#1')['alt'] ?>" />	
							</figure>
							<?php if (get_field('person-grid-photo#2')) { ?>
							<figure class="bc-card-img--focus-image is-square">
								<img src="<?php echo get_field('person-grid-photo#2')['url'] ?>" alt="<?php echo get_field('person-grid-photo#2')['alt'] ?>" />	
							</figure> 	
							<?php } else { ?>
							<figure class="bc-card-img--focus-image is-square">
								<img src="<?php echo get_field('person-grid-photo#1')['url'] ?>" alt="<?php echo get_field('person-grid-photo#1')['alt'] ?>" />	
							</figure>
							<?php }	 //endifelse: person-grid-photo#2 ?>
							<div class="bc-card-content">
								<a href="<?php the_permalink(); ?>"> 
									<div class="bc-card-info">
										<h2 class="bc-card-title"><?php echo get_field('person-name'); ?></h2>
										<p class="bc-card-subtitle"><?php echo get_field('person-title'); ?></p>
									</div>
									<div class="bc-card-link">
										<span class="bc-card-link-text">View profile</span>
										<svg class="svg-icon">
											<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow"></use>
										</svg>	
									</div>
								</a>
							</div>
						</article><!-- // Frank Cooney -->
							
					<?php }//endwhile $caPeople->have_posts()  ?>
				</section><!-- // .cards-row -->
			</div><!-- // .bc-content-container -->
		</main>
		<?php include('php-includes/bottom-links-up-only.php'); ?>	
		<?php get_footer(); ?>