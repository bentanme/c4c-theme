<?php
/**
 * Template Name: Home Template
 */

namespace Roots\Sage\Setup;
use Roots\Sage\Assets;

?>

<?php
	get_template_part('templates/banner');
	get_template_part('templates/post-grid');
	get_template_part('templates/newsletter-sign-up');
	get_template_part('templates/home-about');
	get_template_part('templates/home-charities');
	get_template_part('templates/home-sponsors');

	wp_enqueue_script('responsive-bootstrap-toolkit', Assets\asset_path('scripts/responsive-bootstrap-toolkit.js'), ['jquery'], null, true);
	wp_enqueue_script('home', Assets\asset_path('scripts/home.js'), ['jquery', 'responsive-bootstrap-toolkit'], null, true);
?>