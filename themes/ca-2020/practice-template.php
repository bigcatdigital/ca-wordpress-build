<?php
	/* Template Name: Practice page */
	get_header();
?>
	<body class="brand-blue-scheme page-top"> 
		<?php include('php-includes/global-header.php'); ?>	
		<div class="bc-content-container">
			<nav class="bc-breadcrumbs">
				<ul class="bc-breadcrumbs-links"> 
					<li>
						<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(115); ?>">Practice</a>
					</li>
				</ul><!-- // .bc-breadcrumbs-links -->
			</nav><!-- // .bc-breadcrumbs -->
		</div>
		<main id="content-top">
			<?php while (have_posts()) {
				the_post(); ?>
			<section class="bc-content-container bc-cards ca-unique-processes" id="content-start">
				<?php if(get_field('intro-text')) { ?>
					<div class="bc-content-row" >
						<div class="bc-content-column bc-feature-leader  bc-content-column--indented">
							<div class="bc-feature-leader__content">
								<h1><?php echo get_field('intro-text'); ?></h1> 
							</div>
						</div>
					</div><!-- // .bc-content-row --> 
				<?php }//end if get_field('intro-text') ?>
				<div class="bc-content-row bc-cards-row" aria-label="Cooney Architects: A unique architectural practice">
					<?php if (get_field('awards-elements')) { 
						$awards_elements = get_field('awards-elements'); ?>
					<article class="bc-card--slide-up bc-fade-in-up"> 
						<?php if ($awards_elements['awards-item-square_image-#1']) {
						$awards_image_1 = $awards_elements['awards-item-square_image-#1'] ?>
						<figure class="bc-card-img is-square">
							<img src="<?php echo esc_url($awards_image_1['url']); ?>" alt="<?php echo esc_html($awards_image_1['alt']); ?>" />	
						</figure>
						<?php }//end if get_field($awards_elements['awards-item-square_image-#1']) ?>
						<?php if ($awards_elements['awards-item-square_image-#2']) {
						$awards_image_2 = $awards_elements['awards-item-square_image-#2']; ?>
						<figure class="bc-card-img--focus-image is-square">
							<img src="<?php echo esc_url($awards_image_2['url']); ?>" alt="<?php echo esc_html($awards_image_2['alt']); ?>" />	
						</figure>
						<?php } else { ?>
						<figure class="bc-card-img--focus-image is-square">
							<img src="<?php echo esc_url($awards_image_1['url']); ?>" alt="<?php echo esc_html($awards_image_1['alt']); ?>" />	
						</figure>
						<?php } //end if else get_field($awards_elements['awards-item-square_image-#2']) ?>
						<div class="bc-card-content"> 
							<a href="<?php echo esc_url($awards_elements['awards-item-link']['url']); ?>">
								<div class="bc-card-info">
									<h2 class="bc-card-title"><?php echo esc_html($awards_elements['awards-item-title']); ?></h2> 
								</div>
							</a>
						</div>
					</article><!-- // Awards -->
					<?php }//end if get_field('awards-elements') ?>
					<?php if (get_field('publications-elements')) { 
						$publications_elements = get_field('publications-elements'); ?>
					<article class="bc-card--slide-up bc-fade-in-up"> 
						<?php if ($publications_elements['publications-item-square_image-#1']) {
						$pubs_image_1 = $publications_elements['publications-item-square_image-#1']; ?>
						<figure class="bc-card-img is-square">
							<img src="<?php echo esc_url($pubs_image_1['url']); ?>" alt="<?php echo esc_html($pubs_image_1['alt']); ?>" />	
						</figure>
						<?php }//end if get_field($awards_elements['awards-item-square_image-#1']) ?>
						<?php if ($publications_elements['publications-item-square_image-#2']) {
						$pubs_image_2 = $publications_elements['publications-item-square_image-#2']; ?>
						<figure class="bc-card-img--focus-image is-square">
							<img src="<?php echo esc_url($pubs_image_2['url']); ?>" alt="<?php echo esc_html($pubs_image_2['alt']); ?>" />	
						</figure>
						<?php } else { ?>
						<figure class="bc-card-img is-square">
							<img src="<?php echo esc_url($pubs_image_2['url']); ?>" alt="<?php echo esc_html($pubs_image_2['alt']); ?>" />	
						</figure>
						<?php } //end if else get_field($awards_elements['awards-item-square_image-#2']) ?>
						<div class="bc-card-content"> 
							<a href="<?php echo esc_url($publications_elements['publications-item-link']['url']); ?>">
								<div class="bc-card-info">
									<h2 class="bc-card-title"><?php echo esc_html($publications_elements['publications-item-title']); ?></h2> 
								</div>
							</a>
						</div>
					</article><!-- // Awards -->
					<?php }//end if get_field('awards-elements') ?>
					<?php
						$caDesignProccs = new WP_Query([ 'post_type' => 'design-process' ]); 
						
						while ($caDesignProccs->have_posts()) { 
							$caDesignProccs->the_post(); ?>
							<article class="bc-card--slide-up bc-fade-in-up"> 
								<?php if (get_field('grid-images')) {
									$grid_images = get_field('grid-images'); ?>
								<figure class="bc-card-img is-square">
									<img src="<?php echo esc_html($grid_images['grid-image-#1']['url']); ?>" alt="<?php echo esc_html($grid_images['grid-image-#1']['alt']); ?>" />	
								</figure>
									<?php if ($grid_images['grid-image-#2']) { ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_html($grid_images['grid-image-#2']['url']); ?>" alt="<?php echo esc_html($grid_images['grid-image-#2']['alt']); ?>" />	
								</figure>
									<?php } else { ?>
								<figure class="bc-card-img--focus-image is-square">
									<img src="<?php echo esc_html($grid_images['grid-image-#1']['url']); ?>" alt="<?php echo esc_html($grid_images['grid-image-#1']['alt']); ?>" />	
								</figure>
									<?php }//end if/else grid-image-#2 ?>
								<?php }//end if grid-images ?> 
								<div class="bc-card-content"> 
									<a href="<?php echo get_permalink(); ?>"> 
										<div class="bc-card-info">
											<h2 class="bc-card-title"><?php echo get_field('design-process-title'); ?></h2>
											<?php if (get_field('design-process-sub-title')) { ?>
											<p class="bc-card-subtitle"><?php echo get_field('design-process-sub-title'); ?></p>
											<?php } //end if ?>
										</div>
									</a>
								</div>
							</article><!-- // Publications -->		
						<?php } //end while $caDesignProccs have post() 
							wp_reset_postdata();
						?>
				</div><!-- // .cards-row -->
				<div class="bc-feature-footer">
					<div class="bc-feature-footer__scroll">
						<a href="javascript:void(0)" class="">
							Memberships
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>
						</a>
					</div>
				</div><!-- // .bc-feature-footer -->
			</section><!-- .bc-content-container top -->
			<section class="bc-content-container is-black">
				<?php if (get_field('memberships-elements')) { 
					$memberships_elements = get_field('memberships-elements'); ?>
				<div class="bc-content-row" >
					<div class="bc-content-column bc-feature-leader  bc-content-column--indented">
						<div class="bc-feature-leader__content">
							<h1><?php echo esc_html($memberships_elements['memberships-title']); ?></h1> 
						</div>
					</div>
				</div><!-- .bc-content-row -->
				<?php }// get_field('memberships-elements') ?>
				<?php if ($memberships_elements['memberships-images']) { 
					$memberships_images = $memberships_elements['memberships-images']; ?>
				<div class="bc-content-row ca-memberships-logos">
					<div class="ca-memberships-logos__wrap bc-content-column--indented">
						<img class="ca-memberships-logos__logo" src="<?php echo esc_url($memberships_images['memberships-image-#1']['url']); ?>" alt="<?php echo esc_html($memberships_images['memberships-image-#1']['alt']); ?>" />	
						<img class="ca-memberships-logos__logo" src="<?php echo esc_url($memberships_images['memberships-image-#2']['url']); ?>" alt="<?php echo esc_html($memberships_images['memberships-image-#2']['alt']); ?>" />	
					</div>
				</div><!-- .bc-content-row -->
				<?php }// get_field('memberships-images') ?>
				<div class="bc-feature-footer">
					<div class="bc-feature-footer__scroll">
						<a href="javascript:void(0)" class="is-label">
							Contact us
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
							</svg>
						</a>
					</div>
				</div><!-- // .bc-feature-footer -->
			</section><!-- .bc-content-container memberships -->
			<section class="bc-content-container ca-contact-component" id="contact">
				<?php 
						$contact_info = new WP_Query([
						'post_type' => 'contact-information'
						]);	
						while ($contact_info->have_posts()) {
							$contact_info->the_post() ; ?>
				<article class="bc-content-row ca-contact-component-row">
					<div class="ca-contact-component__wrap bc-content-column--indented">
						<div class="ca-contact-info" aria-label="Contact Cooney Architects">
							<?php if (get_field('contact-#1')) {
								$contact_1 = get_field('contact-#1'); ?>
							<h1 class="ca-contact-heading">Contact</h1>		
							<h2 class="ca-contact-office"><?php echo esc_html($contact_1['office-name']) ?></h2>
							<p class="ca-contact-detail"><?php echo $contact_1['office-detail'] ?></p>
								<?php if ($contact_1['office-number']) { ?>
							<p class="ca-contact-detail"><a href="tel:<?php echo $contact_1['office-number'] ?>">+353 <?php echo $contact_1['office-number'] ?></a></p>
								<?php }//end if 'office-number' ?>
							<?php }//end if 'contact-#1' ?>
							<?php if (get_field('contact-#2')) {
								$contact_2 = get_field('contact-#2'); ?>
							<h2 class="ca-contact-office"><?php echo esc_html($contact_2['office-name']) ?></h2>
							<p class="ca-contact-detail"><?php echo $contact_2['office-detail'] ?></p>
								<?php if ($contact_2['office-number']) { ?>
							<p class="ca-contact-detail"><a href="tel:<?php echo $contact_2['office-number'] ?>">+353 <?php echo $contact_2['office-number'] ?></a></p>
								<?php }//end if 'office-number' ?>
							<?php }//end if 'contact-#2' ?>
							<p class="ca-contact-detail"><strong>Email: </strong><a href="mailto:<?php echo get_field('contact-main-email') ?>"><?php echo get_field('contact-main-email'); ?></a></p>
						</div><!-- .ca-contact-info --> 
							<?php if (get_field('contact-map')) { ?>
						<div class="ca-contact-map" aria-label="Contact Cooney Architects">
							<div class="ca-contact-map-embed">
								<?php echo get_field('contact-map'); ?>
<!--								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.19045182034!2d-6.2786091844354965!3d53.33984687997762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c2471b4e45f%3A0xa9daada97314833d!2sCooney+Architects+Limited!5e0!3m2!1sen!2sie!4v1550941014215" width="600" height="450" style="border:0" allowfullscreen></iframe>-->
							</div>							
						</div><!-- .ca-contact-map -->
							<?php }//end if 'contact-map' ?>
					</div><!-- // .ca-contact-component__wrap -->
				</article>
				<?php }//end while contact-info 
					wp_reset_postdata(); ?>
			</section><!-- .ca-contact-component -->
			<?php }//end while have_posts() ?>
		</main>
		<?php include('php-includes/bottom-links-up-only.php'); ?>	
	<?php get_footer(); ?>