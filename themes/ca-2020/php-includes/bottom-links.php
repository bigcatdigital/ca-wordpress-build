		<div class="bc-content-container page-bottom-links">
			<div class="bc-content-row">
				<div class="page-bottom-links-back">	
					<?php
					$referrer_url = wp_get_referer();
					if (strpos($referrer_url, 'ca-wordpress')) {
						$referrer_name = get_the_title(url_to_postid(wp_get_referer()));
						$back_message = 'Back to ' . $referrer_name;	?>
					<span class="icon-wrap">
						<svg class="svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#arrow-short--left"></use>
						</svg>
					</span>
					<a href="<?php echo esc_url($referrer_url); ?>" class="page-bottom-links-back-link is-label">
						<?php echo $back_message; ?>
					</a>
					<?php }//endif strpos 'cooneyarchitects.ie' ?>
				</div><!-- // .page-bottom-links-back -->
				<div class="page-bottom-links-top">
					<svg class="svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('/assets/media/svg/bc-icons.svg'); ?>#triangle"></use>
					</svg>
					<a  href="javascript:void(0)" class="page-bottom-links-top-link is-label is-page-scroll is-page-scroll">Top</a>
				</div>
			</div>
		</div>