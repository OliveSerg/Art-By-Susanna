<footer class="site-footer" role="contentinfo">
	<div class="footer-top">
		<div class="footer-contact">
			<h3>
				<?php echo __('Get In Touch'); ?>
			</h3>
			<p>
				<?php echo __('Got a special request or need more information?'); ?>
			</p>
			<dl>
				<dt>
					<?php echo __('Phone:');?>
				</dt>
				<dd>
					<?php echo __('123-456-7890'); ?>
				</dd>
				<dt>
					<?php echo __('Email:'); ?>
				</dt>
				<dd>
					<?php echo __('email'); ?>
				</dd>
			</dl>
		</div>
		<?php if (has_nav_menu('footer')) : ?>
		<div class="footer-links">
			<h3>
				<?php echo __('Other Places'); ?>
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
			<a href="mailto:oliveserg@gmail.com?subject=Web Development Enquiry" target="_top">oliveserg@gmail.com</a>
		</p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>
