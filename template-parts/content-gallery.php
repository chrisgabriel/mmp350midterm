<?php
/**
 * Template part for displaying gallery content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mmp350midterm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="gallery-container">
	<header class="gallery-header">
		<?php the_title( '<h1 class="gallery-title">', '</h1>' ); ?>
	</header><!-- .gallery-header -->

	<div class="gallery-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mmp350midterm' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .gallery-content -->
        
        
    </div><!-- .gallery-container-->
	<footer class="gallery-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'mmp350midterm' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .gallery-footer -->
</article><!-- #post-## -->

