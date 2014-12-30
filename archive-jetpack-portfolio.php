<?php
/**
 * The template for displaying lists of portfolio content items
 *
 * @package Metro
 * @since Metro 1.0
 */
?>
<?php get_header(); ?>

<div id="container"><div id="content">

	<?php if (have_posts()) the_post(); ?>
	<h1 class="page-title">
		<?php echo _e("Portfolio", "metro"); ?>
	</h1>

<?php
	rewind_posts();
	get_template_part("loop", "archive");
?>

</div></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
