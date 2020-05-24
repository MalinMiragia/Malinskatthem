<?php
    get_header();
?>
<div class="container">
    <h2><?php _e('Archive', 'Katthemmet'); ?></h2>

    <div class="row">
        <div class="col-md-9 content">
            
                <!-- Loop here	 -->
            
             <?php 
                $terms = get_terms( 'cat_town' );
                if ( ! empty( $terms ) ){ ?>
 
                <div class="our_cats">
 
                <?php  foreach ( $terms as $term ) {
                //print_r($term) // DEBUG;
                $term_slug = $term->slug;
                $term_name = $term->name;
                $term_description = $term->description;
                ?>
 
                <div class="cat_town <?=$term_slug; ?>">
 
                    <h1 class="section-head"> <?=$term_name; ?> </h1>
                     <p><?=$term_description; ?> </p>
 
                    <?php  
                         $args = array(
                        'post_type'     => 'our_cats',
                        'tax_query' => array(
                        array(
                        'taxonomy' => 'cat_town',
                        'field'    => 'slug',
                        'terms'    => $term_slug,
                        ),
                    ),
                    'posts_per_page' => -1,
                    );    
 
                    $the_query = new WP_Query( $args ); ?>
 
                      <?php if ( $the_query->have_posts() ) : ?>
                        <div class="row">
                        <? while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php get_template_part('loop-templates/content', 'archivecat'); ?>
                        <div class="our_cat">
                 
                    <? // MORE TEMPLATING CODE ?>
                    </div>
 
                    <?php  endwhile; ?>
                    </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
                <?        } // foreach
                        } //if terms
                    ?>

        </div>
    </div>
<?php  
wp_reset_postdata();

    get_footer();
