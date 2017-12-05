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
				<div class="frontpage-members">
					<h2>Tagjainktól kérdeztük: mit jelent számodra ez a klub?</h2>
					<div class="frontpage-members-list">
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/yasa.jpg" alt="">
								<h3 class="frontpage-member-name">Yasa</h3>
								<h4 class="frontpage-member-title">vezetőségi tag</h4>
								<p class="frontpage-member-since">Tagunk 2007. szeptember óta</p>
							</div>
							<blockquote class="frontpage-member-quote">Rengeteg jó embert és jó barátot ismertem meg a klubnak hála. Ezt az érzést semmiért nem adnám :)</blockquote>
						</div>
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/scor.jpg" alt="">
								<h3 class="frontpage-member-name">Scor</h3>
								<h4 class="frontpage-member-title">klubvezető</h4>
								<p class="frontpage-member-since">Tagunk 2007. szeptember óta</p>
							</div>
							<blockquote class="frontpage-member-quote">A VAK ad egy helyet, ahol egy kicsit őszintébben lehetünk önmagunk, közelebb kerülhetünk magunkhoz és másokhoz is. És mindenki, aki a közelünkbe kerül, érdekes személyiség valamiért...</blockquote>
						</div>
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/zaku.jpg" alt="">
								<h3 class="frontpage-member-name">Zaku</h3>
								<h4 class="frontpage-member-title">vezetőségi tag</h4>
								<p class="frontpage-member-since">Tagunk 2010. november óta</p>
							</div>
							<blockquote class="frontpage-member-quote">Egy család akire számíthatok, és ha vannak is ellentétek közöttünk, idővel bármit meg tudunk oldani ha mindenki összefog és közösen akarjuk.</blockquote>
						</div>
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/rizi.jpg" alt="">
								<h3 class="frontpage-member-name">Rizi</h3>
								<h4 class="frontpage-member-title">vezetőségi tag</h4>
								<p class="frontpage-member-since">Tagunk 2012. február óta</p>
							</div>
							<blockquote class="frontpage-member-quote">Barátokat, kissé talán egy második családot.:) Embereket, akikhez bizalommal fordulhatok, akik törődnek velem és akikkel törődhetek.</blockquote>
						</div>
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/dave.jpg" alt="">
								<h3 class="frontpage-member-name">Dave</h3>
								<h4 class="frontpage-member-title">vezetőségi tag</h4>
								<p class="frontpage-member-since">Tagunk 2013 óta</p>
							</div>
							<blockquote class="frontpage-member-quote">Mindig örömmel jövök a klubba. Egy olyan baráti társaság ahol jól érezhetem magam.</blockquote>
						</div>
						<div class="frontpage-member">
							<div class="frontpage-member-info">
								<img class="frontpage-member-avatar" src="<?php echo get_template_directory_uri() . "/" ?>dist/assets/images/avatars/kardfogu.jpg" alt="">
								<h3 class="frontpage-member-name">Kardfogú</h3>
								<h4 class="frontpage-member-title">vezetőségi tag</h4>
								<p class="frontpage-member-since">Tagunk 2016 tavasza óta</p>
							</div>
							<blockquote class="frontpage-member-quote">Egy nagyon jó, baráti társasággal hozott össze a sors. Sok mindenről lehetett beszélgetni velük.</blockquote>
						</div>
					</div>
				</div>
				<div class="frontpage-main-features">
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Eseményeink</h4>
							<div class="main-feature-text">Minden héten csütörtökön találkozót tartunk - általában a váci Madách Imre Művelődési Központban.</div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Legnépszerűbb cikkeink</h4>
							<div class="main-feature-text"></div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">VAKstars</h4>
							<div class="main-feature-text">A Váci Anime Klub saját fejlesztésű jutalmazó / motivációs játéka, pozitív pszichológia alapokon.</div>
						</div>
					</div>
					<div class="frontpage-main-feature">
						<div class="main-feature-content">
							<h4 class="main-feature-title">Galéria</h4>
							<div class="main-feature-text">
								Itt találhatsz rólunk képeket: http://vacianimeklub.local/category/kepeink/
							</div>
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
