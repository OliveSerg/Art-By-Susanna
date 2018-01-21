<?php
get_header();
?>

<div id="primary" class="content-area">
	<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="header-image">
		<?php $headerImage = get_field('header_image'); ?>
		<img src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt'] ?: $headerImage['title']; ?>">
	</div>

	<?php endwhile; ?>
	<?php endif;?>

	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) :?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="about-container">
			<?php $aboutImage = get_field('about_image'); ?>
			<img src="<?php echo $aboutImage['sizes']['medium']; ?>" alt="<?php echo $aboutImage['alt'] ?: $aboutImage['title']; ?>">
			<?php the_content(); ?>
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
