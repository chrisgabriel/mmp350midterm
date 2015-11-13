<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmp350midterm
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<span id="secondary" class="widget-area" role="complementary">
    <?php customMessage(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</span><!-- #secondary -->
