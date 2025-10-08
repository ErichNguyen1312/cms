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
	<div class="news-item-wrapper my-5">
		<div class="news-item">

			<!-- Thumbnail -->
			<div class="news-left">
				<a href="<?php the_permalink(); ?>">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large', ['class' => 'news-img']); ?>
					<?php else : ?>
						<img src="https://via.placeholder.com/500x300" alt="<?php the_title(); ?>" class="news-img">
					<?php endif; ?>
				</a>
			</div>

			<!-- Content -->
			<div class="news-right">
				<div class="news-datebox">
					<div class="news-date"><?php echo get_the_date('d'); ?></div>
					<div class="news-month"><?php echo 'Tháng ' . get_the_date('m') . '<br>' . get_the_date('Y'); ?></div>
				</div>

				<div class="news-info">
					<a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
					<div class="news-category">Categories: <strong><?php the_category(', '); ?></strong></div>
					<p class="news-desc"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
				</div>
			</div>

		</div>
	</div>
</div>