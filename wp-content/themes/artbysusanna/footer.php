<footer class="site-footer" role="contentinfo">
	<div class="footer-top">
		<div class="footer-left">
			<?php if (is_active_sidebar('footer-left')) : ?>
			<?php dynamic_sidebar('footer-left');?>
			<?php endif; ?>
			<h3>
				<?php echo __('Get In Touch'); ?>
			</h3>
			<p>
				<?php echo __('Got a special request or need more information?'); ?>
			</p>
			<table class="footer-contact-details">

				<body>
					<tr>
						<td class="detail-title">
							<?php echo __('Phone:');?>
						</td>
						<td class="detail-content">
							<?php echo __('123-456-7890'); ?>
						</td>
					</tr>
					<tr>
						<td class="detail-title">
							<?php echo __('Email:'); ?>
						</td>
						<td class="detail-content">
							<?php echo __('email'); ?>
						</td>
					</tr>
				</body>
			</table>
		</div>
		<?php if (is_active_sidebar('footer-right')) : ?>
		<?php dynamic_sidebar('footer-right');?>
		<?php endif; ?>

		<?php if (has_nav_menu('footer')) : ?>
		<div class="footer-right">
			<h3>
				<?php echo __('Places To Checkout'); ?>
			</h3>
			<?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-links',
                        'menu_class'     => 'vertical menu'
                    ]); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="footer-bottom">
		<p>&copy;
			<script>
				document.write((new Date).getFullYear());
			</script>
			<?php echo get_bloginfo('name') . __('. All Rights Reserved.'); ?>
		</p>
		<p>
			<?php echo __('Development by'); ?>
			<a href="mailto:oliveserg@gmail.com?subject=Web Development Enquiry" target="_top">S.Oliveira</a>
		</p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>
