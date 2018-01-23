<?php
/**
 * AMPConf static slim entry template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<article class="entry entry--slim">
	<figure class="entry__thumbnail">
		<a href="single.php#development=1">
			<amp-img class="entry__image"
					 alt="Post title"
					 src="https://placehold.it/280x188"
					 width="280"
					 height="188"
					 layout="responsive"
					 srcset="https://placehold.it/122x82 380w,
					    https://placehold.it/160x107 1023w,
					    https://placehold.it/240x161 1024w"
					 sizes="(max-width: 479px) 122px,
					    (max-width: 1023px) 160px,
					    240px">
			</amp-img>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php get_template_part( 'templates/entry/meta/date' ); ?>
		<h3 class="entry__title">
			<a href="single.php#development=1" rel="bookmark">The eight African elections to watch out for in 2018</a>
		</h3>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>For many African countries, 2017 was the beginning of a new era. Long-term rulers departed in...</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php get_template_part( 'templates/entry/meta/byline' ); ?>
		<?php get_template_part( 'templates/entry/meta/category' ); ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
