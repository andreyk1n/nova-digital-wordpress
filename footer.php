<footer class="footer">
	<?php $logo = get_field('logo', 'option'); ?>
	<?php $footer_description = get_field('footer_description', 'option'); ?>
	<?php $footer_label = get_field('footer_label', 'option'); ?>
	<?php $footer_copyright = get_field('footer_copyright', 'option'); ?>
	<?php $footer_socials = get_field('footer_socials', 'option'); ?>
	<div class="container">
		<div class="footer__top">
			<div>
				<div class="footer__logo"><?php echo $logo; ?></div>
				<?php if ($footer_description): ?>
					<p class="footer__description">
						<?php echo $footer_description; ?>
					</p>
				<?php endif; ?>
			</div>
			<?php get_template_part('template-parts/partials/footer-nav'); ?>
		</div>
		<div class="footer__bottom">
			<p>©
				<?php echo date('Y'); ?> <?php echo $footer_copyright; ?>
			</p>
			<?php if ($footer_label): ?>
				<p>
					<?php echo $footer_label; ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</footer>

<script
	src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>

<?php wp_footer(); ?>

</body>

</html>