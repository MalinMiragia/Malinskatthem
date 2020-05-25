<?php
/*
* Hero for the front page
*/
?>

<?php
    $image = get_field('hero_image');
    $bg_color = get_field('hero_background_color');
?>

<section id="front-page-hero" style="background_color: <?php echo $bg_color; ?>; background-image: url('<?php echo $image['url']; ?>');">
    <div class="container d-flex h-100">
        <div class="hero-content justify-content-center align-self-center">
        <h1><?php the_field('hero_title'); ?></h1>
        <h2><?php the_field('hero_subtitle'); ?></h2>
        </div>

    </div>
</section>


