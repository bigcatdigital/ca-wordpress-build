<?php 
	/* 	Big Cat Custom Post Type 
			Publications/Awards
	*/
	class BCContactInfoCPT extends BCCustomPostType {	
		/* 
			Handle all matters for CPT shortcode 
		*/
		//Create shortcode
		public function create_bc_cpt_shortcode($atts = [], $content = null, $tag = 'bc_cpt_shortcode') {
				return NULL;
		}//bc_cpt_shortcode()
	}//abstract class BCCustomPostType
?>