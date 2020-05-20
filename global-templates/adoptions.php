<?php
/**
 * Adoption tips setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// get the three latest adoption tips

$our_cats = new WP_Query( [
    'post_type'         =>      'adoption_tips',
    'posts_per_page'    =>      3,
]);

if ($adoption_tips->have_posts() ) {

?>

	<div class="wrapper" id="wrapper-adoptions">

        <div class="container">
            <div class="row">
               <?php while ($adoption_tips->have_posts()) : $adoption_tips->the_post(); ?>
                <!-- For each post, include this template part -->
               <?php get_template_part('loop-templates/content', 'adoption'); ?>

            <?php endwhile; ?>
            <?php
           
            wp_reset_postdata();
            ?>
            </div> <!-- row -->
        </div>  <!-- container -->
	</div>  <!-- wrapper-cats -->
<?php
}
?>