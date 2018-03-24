<?php
get_header();
?>

<div id="primary" class="content-area">
	<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="header-image">
		<?php the_post_thumbnail(); ?>
	</div>

	<?php endwhile; ?>
	<?php endif;?>

	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) :?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="about-container">
			<?php if ($aboutImage = get_field('about_image')) : ?>
			<div class="about-image">
				<img src="<?php echo $aboutImage['sizes']['large']; ?>" alt="<?php echo $aboutImage['alt'] ?: $aboutImage['title']; ?>">
			</div>
			<?php endif; ?>
			<div class="about-content">
				<?php the_content(); ?>
			</div>
		</div>

		<?php $the_query = new WP_Query('tag=Featured'); if ($the_query->have_posts()) : ?>
		<div id="home-page-feauted-posts" class="swiper-container">
			<div class="swiper-wrapper">
				<?php while ($the_query->have_posts()) : $the_query->the_post();?>
				<div class="swiper-slide">
					<?php echo get_the_title(); ?>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-pagination"></div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			<div class="swiper-scrollbar"></div>
		</div>
		<script>
			$(function() {
				var homeSwiper = new Swiper('#home-page-feauted-posts');
			});
		</script>
		<?php endif; wp_reset_postdata();?>
		<?php endwhile; ?>
		<?php endif;?>
	</main>
	<!-- #main -->
</div>
<!-- #primary -->

<?php get_footer();
