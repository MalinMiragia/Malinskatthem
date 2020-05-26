<?php
/**
 * Single cat post partial template
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
<div class="catsGallery">
	<?php 
$images = get_field('cats_gallery');
if( $images ): ?>
    
        <?php foreach( $images as $image ): ?>
            
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            
        <?php endforeach; ?>
    
<?php endif; ?>
</div>
	<!-- Cats taxanomies Gender,Town and Custom fields Cat details-->
	<div class="cat-taxanomies">
				
				<h2><?php the_field('cat_name')?></h2><br>
					<?php the_field('cat_age')?><br>
					<?php $terms = get_the_terms( $post->ID , 'cat_town' );
                	foreach($terms as $term) : 
                    echo $term->name;
					endforeach; ?><br>
				<?php $terms = get_the_terms( $post->ID , 'cat_gender' );
                	foreach($terms as $term) : 
                    echo $term->name;
                	endforeach; ?><br>
				<?php the_field('cat_color')?><br>
				<?php the_field('cat_weight')?><br>
				<?php the_field('cat_adopted_when')?><br>

                
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
