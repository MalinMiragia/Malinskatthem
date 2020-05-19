<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">


		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php the_field('cats_gallery')?>

	<!-- Cats taxanomies Gender and Type-->
	<div class="cat-taxanomies">
	
            <?php $terms = get_the_terms( $post->ID , 'cat_gender' );
                foreach($terms as $term) : 
                    echo $term->name;
                endforeach; ?>
				
				
            <?php $terms = get_the_terms( $post->ID , 'cat_town' );
                foreach($terms as $term) : 
                    echo $term->name;
				endforeach; ?>
				
				<?php the_field('cat_name')?>
				<?php the_field('cat_age')?>
				<?php the_field('cat_color')?>
				<?php the_field('cat_weight')?>
				<?php the_field('cat_adopted_when')?>

                
	</div>
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
