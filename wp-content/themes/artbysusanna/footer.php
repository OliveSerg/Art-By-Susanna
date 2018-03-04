<footer class="site-footer" role="contentinfo">
	<div class="footer-top-wrapper">
		<div class="footer-top">
			<div class="footer-left">
				<h3>
					<?php echo __('Get In Touch'); ?>
				</h3>
				<p>
					<?php echo __('Got a special request or need more information?'); ?>
				</p>
				<table class="footer-contact-details">

					<body>
						<?php if ($phone = get_option('contact_phone')) :?>
						<tr>
							<td class="detail-title">
								<?php echo __('Phone:');?>
							</td>
							<td class="detail-content">
								<a href="tel:<?php echo $phone; ?>">
									<?php echo $phone; ?>
								</a>
							</td>
						</tr>
						<?php endif; ?>
						<?php if ($email = get_option('contact_email')) :?>
						<tr>
							<td class="detail-title">
								<?php echo __('Email:'); ?>
							</td>
							<td class="detail-content">
								<a href="mailto:<?php echo $email; ?>">
									<?php echo $email; ?>
								</a>
							</td>
						</tr>
						<?php endif; ?>
					</body>
				</table>
			</div>
			<?php if (has_nav_menu('footer')) : ?>
			<div class="footer-right">
				<h3>
					<?php echo __('Places To Checkout'); ?>
				</h3>
				<?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-social',
                        'menu_class'     => 'vertical menu'
                    ]); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="footer-bottom-wrapper">
		<div class="footer-bottom">
			<p class="footer-bottom-text">&copy;
				<script>
					document.write((new Date).getFullYear());
				</script>
				<?php echo get_bloginfo('name') . __('. All Rights Reserved.'); ?>
			</p>
			<p class="footer-bottom-text">
				<?php echo __('Development by S.Oliveira'); ?>
			</p>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>
