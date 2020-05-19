<?php
/**
 * Storys Carousel
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// get the three newest cats

$storys = new WP_Query( [
    'post_type'         =>      'our_cats',
    'posts_per_page'    =>      3,
]);

$counter = count($storys);

$count = 0;



if ($storys->have_posts() ) {

?>

	<div class="wrapper" id="wrapper-slider">
        <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php while ($storys->have_posts()) : $storys->the_post(); ?>
                            <?php
                                $post_tumbnail = get_the_post_tumbnail_url(get_the_id(),'full');
                            ?>

                            <div class="carousel-item <?php if($count <= 0) {echo "active"; } ?>">
                                <img class="d-block w-100" src="<?php echo esc_url($post_tumbnail); ?>" alt="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </div>
                            
                            <?php
                            var_dump($count);
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