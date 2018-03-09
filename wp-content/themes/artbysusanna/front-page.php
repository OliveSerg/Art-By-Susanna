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
		<div class="gallery-container">

		</div>
		<?php endwhile; ?>
		<?php endif;?>
	</main>
	<!-- #main -->
</div>
<!-- #primary -->

<?php get_footer();
