<?php
/**
 * Cats setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- get the three newest cats -->

$cats = new WP_Query([
    'post_type'     =>      'our_cats'
]);

	<div class="wrapper" id="wrapper-cats">

        <div class="container">
            <div class="row">
                <?php get_template_part('loop-templates/content','cat'); ?>
           

            </div>
        </div>

    <!-- Loop over the cats -->
    <!-- For each cat, include a template part -->


		<?php
		get_template_part( 'sidebar-templates/sidebar', 'hero' );
		get_template_part( 'sidebar-templates/sidebar', 'herocanvas' );
		get_template_part( 'sidebar-templates/sidebar', 'statichero' );
		?>

	</div>
