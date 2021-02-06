<?php
	/* Template Name: Practice > Publications/Awards page */
	get_header();
?>
	<body class="brand-blue-scheme page-top"> 
		<?php include('php-includes/global-header.php'); ?>	
		<?php 
			global $post;
			$page_slug = $post->post_name;
			$post_type = ($page_slug === 'awards') ? 'award' : 'pub-conf';
			$page_title = ($post_type === 'award') ? 'Awards' : 'Publications';
		?>
		<div class="bc-content-container">
			<nav class="bc-breadcrumbs">
				<ul class="bc-breadcrumbs-links"> 
					<li>
						<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(115); ?>">Practice</a>
					</li>
					<svg class="svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#next"></use>
					</svg>
					<li>
						<?php echo $page_title; ?>
					</li>
				</ul><!-- // .bc-breadcrumbs-links -->
			</nav><!-- // .bc-breadcrumbs -->
		</div>
		<main id="content-top">
			<section class="bc-content-container bc-cards" id="content-start" aria-label="<?php echo 'Cooney Architects ' . $page_slug; ?>">
				<div class="bc-content-row" >
					<div class="bc-content-column bc-feature-leader  bc-content-column--indented">
						<div class="bc-feature-leader__content">
							<h1><?php echo $page_title; ?></h1> 
						</div>
					</div>
				</div><!-- // .bc-content-row -->
				<div class="bc-content-row bc-cards-row">
				<?php 
						$caPubsAwards = new WP_Query([
							'post_type' => $post_type
						]); 
						while ($caPubsAwards->have_posts()) {
							$caPubsAwards->the_post(); ?>	
							<?php if ($post_type === 'pub-conf') { ?>
							<article class="bc-card--slide-up-text bc-fade-in-up">
								<div class="bc-card-text is-square">
									<div>
										<?php if (get_field('pub-conference-year')) { ?>
											<h2 class="bc-card-title--year"><?php echo get_field('pub-conference-year'); ?></h2>
										<?php } ?>
										<h2 class="bc-card-title"><?php echo get_field('pub-conference-title') ?></h2> 
										<?php if (get_field('pub-conference-detail')) { ?>
											<p><?php echo get_field('pub-conference-detail') ?></p>
										<?php } ?>
									</div>	
								</div><!-- // .bc-card-text -->
								<?php if (get_field('pub-conference-grid-image-#2')) { 
									$pub_image = get_field('pub-conference-grid-image-#2'); ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_url($pub_image['url']); ?>" alt="<?php echo esc_attr($pub_image['alt']); ?>" />	
								</figure> 
								<?php } else { ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_url($pub_image_1['url']); ?>" alt="<?php echo esc_attr($pub_image_1['alt']); ?>" />	
								</figure> 
								<?php }//end if else pub image 2 ?>
								<div class="bc-card-content"> 
									<a href="<?php echo get_permalink() ?>">
										<div class="bc-card-info">
											<h2 class="bc-card-title"><?php echo get_field('pub-conference-title') ?></h2> 
											<?php if (get_field('pub-conference-detail')) { ?>
											<p><?php echo get_field('pub-conference-detail') ?></p>
											<?php } ?>
										</div><!-- // .bc-card-info -->
									</a>
								</div><!-- // .bc-card-content -->
							</article><!-- // .bc-card--slide-up -->
							<?php } elseif ($post_type === 'award') { ?>
							<article class="bc-card--slide-up bc-fade-in-up">
								<div class="bc-card-text is-square">
									<div>
										<?php if (get_field('pub-conference-year')) { ?>
											<h2 class="bc-card-title--year"><?php echo get_field('pub-conference-year'); ?></h2>
										<?php } ?>
										<h2 class="bc-card-title"><?php echo get_field('pub-conference-title') ?></h2> 
										<?php if (get_field('pub-conference-detail')) { ?>
											<p><?php echo get_field('pub-conference-detail') ?></p>
										<?php } ?>
										
									</div>	
								</div>
								<?php if (get_field('pub-conference-grid-image-#2')) { 
								$pub_image = get_field('pub-conference-grid-image-#2'); ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_url($pub_image['url']); ?>" alt="<?php echo esc_attr($pub_image['alt']); ?>" />	
								</figure> 
								<?php } else { ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_url($pub_image_1['url']); ?>" alt="<?php echo esc_attr($pub_image_1['alt']); ?>" />	
								</figure> 
								<?php }//end if else pub image 2 ?>
								<div class="bc-card-content"> 
									<a href="<?php echo get_permalink() ?>">
										<div class="bc-card-info">
											<h2 class="bc-card-title"><?php echo get_field('pub-conference-title') ?></h2> 
											<?php if (get_field('pub-conference-detail')) { ?>
											<p><?php echo get_field('pub-conference-detail') ?></p>
											<?php } ?>
										</div><!-- // .bc-card-info -->
									</a>
								</div><!-- // .bc-card-content -->
							</article><!-- // .bc-card--slide-up -->
							<?php }//end if else post_type is pubs/awards ?>
					
					<?php }//end while $caPubsAwards ?>
				</div><!-- // .cards-row -->
			</section><!-- .bc-content-container -->
		</main>
		<div class="bc-content-container page-bottom-links">
			<div class="bc-content-row">
				<div class="page-bottom-links-back">	
					<?php
					$referrer_url = get_permalink(115);
					$referrer_name = get_the_title(115);
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