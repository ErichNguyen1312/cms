<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


?>
<div class="container">
	<article class="post">
		<div class="post-image">
			<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('medium'); ?>
				<?php else : ?>
					<img src="https://via.placeholder.com/400x250" alt="No image">
				<?php endif; ?>
			</a>
		</div>

		<div class="post-content">
			<div class="post-date">
				<span class="day"><?php echo get_the_date('d'); ?></span>
				<span class="month-year"><?php echo 'Tháng ' . get_the_date('m') . '<br>' . get_the_date('Y'); ?></span>
			</div>
			<div class="post-info">
				<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="category">
					Categories:
					<span><?php the_category(', '); ?></span>
				</p>
				<p class="description"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
			</div>
		</div>
	</article>


</div>