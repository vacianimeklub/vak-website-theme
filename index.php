<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<?php if ( is_front_page() ): ?>
			<main class="main-content-full-width">
				<?php // move this to template-parts ?>
				<div class="frontpage-main-features">
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Események</h4>
							<div class="main-feature-text"></div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Cikkek</h4>
							<div class="main-feature-text"></div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">VAKstars</h4>
							<div class="main-feature-text"></div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Galléria</h4>
							<div class="main-feature-text"></div>
						</div>
					</div>
				</div>
			</main>
		<?php else: ?>
			<main class="main-content">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php
				if ( function_exists( 'foundationpress_pagination' ) ) :
					foundationpress_pagination();
				elseif ( is_paged() ) :
				?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
					</nav>
				<?php endif; ?>

			</main>
			<?php get_sidebar(); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();
