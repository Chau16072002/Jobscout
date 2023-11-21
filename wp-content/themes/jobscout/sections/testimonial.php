<?php
/**
 * Testimonial Section
 * 
 * @package JobScout
 */

$section_title  = get_theme_mod( 'testimonial_section_title', __( 'Clients Testimonials', 'jobscout' ) );
$section_desc   = get_theme_mod( 'testimonial_section_subtitle', __( 'We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout' ) );
$ed_testimonial =  get_theme_mod( 'ed_hometestimonial', true );
if( $ed_testimonial && ( $section_title || $section_desc ||  is_active_sidebar( 'testimonial' ) ) ){ ?>
	
	<?php
}