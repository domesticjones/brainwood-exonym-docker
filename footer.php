			<footer id="footer-control"></footer>
			<footer id="footer" class="module" data-name="Contact Brainwood Creative" data-hash="contact" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="module-inner">
					<?php echo exmod_heading(get_field('contact_heading', 'options'), false, get_field('contact_subheading', 'options')); ?>
					<div class="contact-data">
						<div class="contact-content">
							<p><?php the_field('contact_blurb', 'options'); ?></p>
							<div class="contact-info contact-phone">
								<?php ex_contact('phone'); ?>
							</div>
							<div class="contact-info contact-email">
								<?php ex_contact('email'); ?>
							</div>
							<div class="contact-info contact-social">
								<?php ex_social(); ?>
							</div>
						</div>
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="119" title="Contact form 1"]'); ?>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<nav id="responsive-nav-toggle">
			<div class="open is-active">
				<span class="text">Menu</span>
				<span class="dots">
					<i class="dot"></i>
					<i class="dot"></i>
					<i class="dot"></i>
				</span>
			</div>
			<div class="close">
				<span class="text">Close</span>
			</div>
		</nav>
		<div id="responsive-phone"><?php ex_contact('phone', true, 'global'); ?></div>
		<?php wp_footer(); ?>
	</body>
</html>
