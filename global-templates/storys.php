<?php
/**
 * Storys Setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// get the three newest Sorys

$our_cats = new WP_Query( [
    'post_type'         =>      'storys',
    'posts_per_page'    =>      3,
]);

if ($storys->have_posts() ) {

?>

	<div class="wrapper" id="wrapper-storys">

        <div class="container">
            <div class="row">
               <?php while ($storys->have_posts()) : $storys->the_post(); ?>
                <!-- For each post, include this template part -->
               <?php get_template_part('loop-templates/content', 'story'); ?>

            <?php endwhile; ?>
            <?php
           
            wp_reset_postdata();
            ?>
            </div> <!-- row -->
        </div>  <!-- container -->
	</div>  <!-- wrapper-cats -->
