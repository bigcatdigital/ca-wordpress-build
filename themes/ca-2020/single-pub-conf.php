<?php
	/* Template Name: Publication/Conference template */
	get_header();
?>
	<body class="brand-yellow-scheme is-inner-page" class="page-top"> 
	<?php include('php-includes/global-header.php'); ?>	
	<?php 	
		/** WP Loop start **/
		while (have_posts()) {
		the_post(); ?>
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
					<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(120) ;?>">Publications/Conferences</a>
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
		<div class="bc-content-container" id="content-start">
			<section class="bc-content-row bc-general-content-row" aria-label="Coiste Na Mí GAA Centre of Excellence">
				<div class="content-separator-wrap">
					<div class="content-separator"></div>	
				</div>
				<article class="bc-general-content"> 
					<div class="bc-general-content-wrap">
						<h1><?php echo get_field('pub-conference-title') ?></h1>
						<div class="bc-publication-detail">
							<?php if (get_field('pub-conference-rel-project-link')) { ?>
							<p><a href="<?php echo esc_url(get_field('pub-conference-rel-project-link')['url']); ?>"><?php echo esc_html(get_field('pub-conference-rel-project-link')['title']); ?></a></p>
							<?php } else if (get_field('pub-conference-project-title')) {//end if pub-conference-link ?>
							<p><?php echo esc_html(get_field('pub-conference-project-title')); ?></p>
							<?php }//end if rel-project-link else if rel-project-title ?>
							<?php if (get_field('pub-conference-detail')) { ?>
							<p><em><?php echo get_field('pub-conference-detail') ?></em></p>
							<?php }//end if get_field('pub-conference-title') ?>
							<?php if (get_field('pub-conference-pdf-link')) { ?>
							<p><a target="_blank" href="<?php echo esc_url(get_field('pub-conference-pdf-link')['url']) ?>"><?php echo esc_html(get_field('pub-conference-pdf-link')['title']) ?></a></p>
							<?php }//end if pub-conference-pdf-link ?>
							<?php if (get_field('pub-conference-link')) { ?>
							<p><a target="_blank" href="<?php echo esc_url(get_field('pub-conference-link')['url']) ?>"><?php echo esc_html(get_field('pub-conference-link')['title']) ?></a></p>
							<?php }//end if pub-conference-pdf-link ?>
						</div><!--- // .bc-publication-detail -->
						<?php if (get_field('intro_text')) { ?>
						<p class="bc-content-intro"><?php get_field('intro_text'); ?></p>
						<?php }//end get field intro-text ?>
						<?php if (get_field('pub-conference-content')) { ?>
						<?php echo get_field('pub-conference-content'); ?>
						<?php }//end get field intro-text ?>
						<?php if (get_field('pub-conference-pdf')) { ?>
						<div class="bc-responsive-embed bc-responsive-embed--pdf">
							<iframe src="<?php echo esc_html(get_field('pub-conference-pdf')['url']); ?>" frameborder="0" width="100%" height="600px"></iframe>
						</div>
						<?php }//end get field intro-text ?>
					</div><!-- // .bc-general-content-wrap -->
				</article><!-- // .bc-general-content-wrap -->
			</section><!-- // .bc-general-content -->
		</div>
	</main>
	<?php }//end wp posts loop ?>
	<?php include('php-includes/bottom-links.php'); ?>	
	<?php get_footer(); ?>