<!-- this is a post  -->
<div class="col-md-6">
    <?php if(has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', 'small'); ?>
        </a>
    <?php endif; ?>

    <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

  
              

    <?php the_excerpt(); ?>

    <div><?php the_category(); ?></div>
</div>  