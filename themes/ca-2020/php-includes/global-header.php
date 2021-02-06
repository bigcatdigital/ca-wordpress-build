		<header class="bc-header">
			<div class="bc-content-container">
				<div class="bc-content-row"> 
					<div class="bc-header-logo">
						<h1><a href="<?php echo get_permalink(111); ?>"><span>Cooney</span>Architects</a></h1>	
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
									<a class="bc-roll-up-link is-home-link" href="<?php echo get_permalink(111); ?>">
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
									<a class="projects-link bc-roll-up-link is-projects-link" href="<?php echo get_permalink(70); ?>">
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
									<a class="practice-link bc-roll-up-link is-practice-link" href="<?php echo get_permalink(115); ?>">
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
									<a class="bc-roll-up-link people-link is-people-link" href="<?php echo get_permalink(113); ?>">
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
					</div>
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
									
								</div><!-- // .bc-header-menu__contact -->
						<?php }//end while contact info have posts() 
							wp_reset_postdata();	
						?>
							
						</div><!-- // .bc-header-menu--mobile -->
				</div>
			</div>
		</header>