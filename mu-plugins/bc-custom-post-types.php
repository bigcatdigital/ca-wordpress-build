<?php
/*
	* Big Cat Custom Post types
	* 
	* @author				Michael Mason Big Cat Design			
	* Plugin Name: 	Big Cat Custom Post types
	* Plugin URI: 	example.com
	* Version: 			0.1.0
	* Author: 			Michael Mason Big Cat Design
	* Description: 	Adds Custom post types to a Wordpress build
*/

define('CPTSHOME', plugin_dir_path(__FILE__));

//Base class 
require CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-cpt.php';

//Custom Post Types
/* 
 * ISD Custom Post Types:
 */
//One col feature
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-project-cpt.php';
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-person-cpt.php';
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-pubs-confs-cpt.php';
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-award-cpt.php';
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-design-process-cpt.php';
include CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-contact-cpt.php';

$project_cpt_labels = array(
	'name'               => 'Projects',
	'singular_name'      => 'Project',
	'menu_name'          => 'Projects',
	'name_admin_bar'     => 'Project',
	'add_new'            => 'New Project',
	'add_new_item'       => 'New Project',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Project',
	'view_item'          => 'View Project',
	'all_items'          => 'All Projects',
	'search_items'       => 'Search Projects',
	'parent_item_colon'  => 'Parent Projects',
	'not_found'          => 'No Projects Found',
	'not_found_in_trash' => 'No Projects Found in Trash'
);

$project_cpt_args = array(
	'labels'              => $project_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_rest'				=> true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-admin-appearance',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'editor', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'projects' ),
	'query_var'           => true
);
$bc_project_cpt = new BCProjectCPT('CA Project', 'project', $project_cpt_args);

$person_cpt_labels = array(
	'name'               => 'People',
	'singular_name'      => 'Person',
	'menu_name'          => 'People',
	'name_admin_bar'     => 'Person',
	'add_new'            => 'New Person',
	'add_new_item'       => 'New Person',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Person',
	'view_item'          => 'View Person',
	'all_items'          => 'All People',
	'search_items'       => 'Search People',
	'parent_item_colon'  => 'Parent People',
	'not_found'          => 'No People Found',
	'not_found_in_trash' => 'No People Found in Trash'
);
$person_cpt_args = array(
	'labels'              => $person_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-admin-users',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'people' ),
	'query_var'           => true
);
$bc_person_cpt = new BCPersonCPT('CA Person', 'person', $person_cpt_args, false);

$publication_cpt_labels = array(
	'name'               => 'Publications/Conferences',
	'singular_name'      => 'Publication/Conference',
	'menu_name'          => 'Pubs/Conferences',
	'name_admin_bar'     => 'Pubs/Conferences',
	'add_new'            => 'New Pub/Conference',
	'add_new_item'       => 'New Pub/Conference',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Publication/Conference',
	'view_item'          => 'View Publication/Conference',
	'all_items'          => 'All Pubs/Conferences',
	'search_items'       => 'Search Pubs/Conferences',
	'parent_item_colon'  => 'Parent Pubs/Conferences',
	'not_found'          => 'No Pubs/Conferences Found',
	'not_found_in_trash' => 'No Pubs/Conferences Found in Trash'
);
$publication_cpt_args = array(
	'labels'              => $publication_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-format-aside',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'pubs-confs' ),
	'query_var'           => true
);

$bc_publication_cpt = new BCPubConfCPT('CA Publication/Conference', 'pub-conf', $publication_cpt_args, false);

$award_cpt_labels = array(
	'name'               => 'Awards',
	'singular_name'      => 'Award',
	'menu_name'          => 'Awards',
	'name_admin_bar'     => 'Awards',
	'add_new'            => 'New Award',
	'add_new_item'       => 'New Award',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Award',
	'view_item'          => 'View Award',
	'all_items'          => 'All Awards',
	'search_items'       => 'Search Awards',
	'parent_item_colon'  => 'Parent Awards',
	'not_found'          => 'No Awards Found',
	'not_found_in_trash' => 'No Awards Found in Trash'
);
$award_cpt_args = array(
	'labels'              => $award_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-awards',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'awards' ),
	'query_var'           => true
);

$bc_award_cpt = new BCPubConfCPT('CA Award', 'award', $award_cpt_args, false);

$design_procc_cpt_labels = array(
	'name'               => 'Design Processes',
	'singular_name'      => 'Design Process',
	'menu_name'          => 'Design Process',
	'name_admin_bar'     => 'Design Processes',
	'add_new'            => 'Design Process',
	'add_new_item'       => 'Design Process',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Design Process',
	'view_item'          => 'View Design Process',
	'all_items'          => 'All Design Processes',
	'search_items'       => 'Search Design Processes',
	'parent_item_colon'  => 'Parent Design Processes',	
	'not_found'          => 'No Design Processes Found',
	'not_found_in_trash' => 'No Design Processes Found in Trash'
);
$design_procc_cpt_args = array(
	'labels'              => $design_procc_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-art',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'design-processes' ),
	'query_var'           => true
);

$bc_des_procc_cpt = new BCPubConfCPT('CA Design Process', 'design-process', $design_procc_cpt_args, false);

$contact_cpt_labels = array(
	'name'               => 'Contact Information',
	'singular_name'      => 'Contact Information',
	'menu_name'          => 'Contact Information',
	'name_admin_bar'     => 'Contact Information',
	'add_new'            => 'Contact Information',
	'add_new_item'       => 'Contact Information',
	'new_item'           => 'New',
	'edit_item'          => 'Edit Contact Information',
	'view_item'          => 'View Contact Information',
	'all_items'          => 'All Contact Information',
	'search_items'       => 'Search Contact Information',
	'parent_item_colon'  => 'Parent Contact Information',	
	'not_found'          => 'No Contact Information Found',
	'not_found_in_trash' => 'No Contact Information Found in Trash'
);
$contact_cpt_args = array(
	'labels'              => $contact_cpt_labels,
	'public'              => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'show_ui'             => true,
	'show_in_nav_menus'   => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-email',
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'supports'            => array( 'title', 'author', 'thumbnail'),
	'has_archive'         => false,
	'rewrite'             => array( 'slug' => 'contact-information' ),
	'query_var'           => true
);

$contact_cpt = new BCContactInfoCPT('CA Contact information', 'contact-information', $contact_cpt_args, false);

?>
