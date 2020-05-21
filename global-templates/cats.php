<?php
/**
 * Cats setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// get the three newest cats

$our_cats = new WP_Query( [
    'post_type'         =>      'our_cats',
    'posts_per_page'    =>      3,
]);

if ($our_cats->have_posts() ) {

?>

	<div class="wrapper" id="wrapper-cats">

        <div class="container">
            <div class="row">
               <?php while ($our_cats->have_posts()) : $our_cats->the_post(); ?>
                <!-- For each post, include this template part -->
               <?php get_template_part('loop-templates/content', 'cat'); ?>

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