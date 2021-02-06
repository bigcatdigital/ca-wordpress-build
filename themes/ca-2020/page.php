<?php
	get_header();
?>
	<body class="brand-blue-scheme" class="page-top"> 
		<?php include('php-includes/global-header.php'); ?>	
		
	<div class="bc-content-container">
		<nav class="bc-breadcrumbs">
			<ul class="bc-breadcrumbs-links"> 
				<li>
					<a class="bc-breadcrumbs-link" href="<?php echo get_permalink(115); ?>">Root page</a>
				</li>
			</ul><!-- // .bc-breadcrumbs-links -->
		</nav><!-- // .bc-breadcrumbs -->
	</div>
	<?php 	
		/** WP Loop start **/
		while (have_posts()) {
		the_post(); 
		?>
	
	<main id="content-top">
		<section class="bc-content-container bc-cards ca-unique-processes" id="content-start">
			<div class="bc-content-row" >
				<div class="bc-content-column bc-feature-leader  bc-content-column--indented">
					<div class="bc-feature-leader__content">
						<h1><?php the_title() ?></h1> 
						<?php the_content() ?>
					</div>
				</div>
			</div> 
			
		</section><!-- .bc-content-container top -->
		<?php }//end the loop ?>
	</main>
	<?php include('php-includes/bottom-links.php'); ?>	
	<?php get_footer(); ?>