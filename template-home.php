<?php
/**
 * Template Name: Home Template
 */

namespace Roots\Sage\Setup;
use Roots\Sage\Assets;

?>

<?php
	get_template_part('templates/banner');
	wp_enqueue_script('home', Assets\asset_path('scripts/home.js'), ['jquery'], null, true);
?>