<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php
	// We definitely don't want this at the moment.
	// get_template_part( 'template-parts/featured-image' ); 
?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php the_post_navigation(array(
					'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i> %title',
					'next_text' => '%title <i class="fa fa-chevron-right" aria-hidden="true"></i>',
				)); ?>
				<?php comments_template(); ?>
			<?php endwhile;?>
		</main>
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
