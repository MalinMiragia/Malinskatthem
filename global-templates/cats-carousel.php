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

$counter = count($our_cats->posts);

$count = 0;


if ($our_cats->have_posts() ) {

?>

	<div class="wrapper" id="wrapper-slider">
        <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php while ($our_cats->have_posts()) : $our_cats->the_post(); ?>
                            <?php
                                $post_thumbnail = get_the_post_thumbnail_url(get_the_id());
                            ?>

                            <div class="carousel-item  <?php if($count <= 0) {echo "active"; } ?>" Style="background-image: url('<?php echo $post_thumbnail; ?>" >
                                <!-- <img class="d-block w-100" src="<?php // echo esc_url($post_thumbnail); ?>" alt="<?php //the_title(); ?>"> -->
                                    <h1><a href="<? the_permalink(); ?>"> <?php the_title(); ?></a></h1>
                            </div>
                           
                            <?php
                            // var_dump($count);
                            $count++;
                            ?>
                    
            <?php endwhile; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            <?php
           
            wp_reset_postdata();
            ?>
            </div> <!-- row -->
        </div>  <!-- container -->
	</div>  <!-- wrapper-slider -->
    <?php
}
?>