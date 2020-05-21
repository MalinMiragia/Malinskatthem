<?php
    get_header();
?>
<div class="container">
    <h2><?php _e('Archive', 'katthemmet'); ?></h2>
<h1> storys archive </h1>
    <div class="row">
        <div class="col-md-9 content">
            <!-- Loop here	 -->
            <?php if ( have_posts() ) : ?>
                <!-- Posts  -->
                <div class="row">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('loop-templates/content', 'archivestory'); ?>
                    <?php endwhile; ?>
                </div> <!-- End of posts -->
            <?php endif; ?>
        </div>
        <!-- end of posts  -->

        <?php get_sidebar('primary-sidebar'); ?>

    </div>
</div>
<?php
    get_footer();