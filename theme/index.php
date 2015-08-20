<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>

	<article class="hero" data-epicness-level="9001">
		<div class="hero__content">

			<header>
				<h1 class="hero__title">
					The Mozaik WordPress Theme Bootstrap
				</h1>
			</header>

			<p>
				Build tools included! :)
			</p>

			<p>
				<strong>Happy Hacking!</strong>
			</p>

			<footer>

				<a class="hero__cta"
				   target="_blank"
				   href="https://github.com/MozaikAgency/wp-theme-bootstrap">
					check out the README
				</a>

				<?php get_template_part( 'elements/github' ); ?>

				<div class="hero__icon">
					<?php echo file_get_contents( get_template_directory() . '\assets\svg\medal.svg' ); ?>
				</div>

				<div class="hero__credits">
					<p>
						Background image of Everest courtesy of <a target="_blank" href="https://unsplash.it/">Unsplash It.</a>
					</p>
					<p>
						SVG medal created by Creative Stall, from the <a target="_blank" href="https://thenounproject.com/creativestall/">Noun Project.</a>
					</p>
				</div>

			</footer>

		</div>
	</article>

<?php get_footer(); ?>