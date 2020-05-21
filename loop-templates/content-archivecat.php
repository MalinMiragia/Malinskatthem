<!-- this is a post  -->
<div class="col-md-6">
    <?php if(has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', 'small'); ?>
        </a>
    <?php endif; ?>

    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php $terms = get_the_terms( $post->ID , 'cat_gender' );
                foreach($terms as $term) : 
                    echo $term->name;
                endforeach; ?>

    <?php the_excerpt(); ?>

    <div><?php the_category(); ?></div>
</div>  