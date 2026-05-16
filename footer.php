<footer class="footer">
	<?php $logo = get_field('logo', 'option'); ?>
	<div class="container">
		<div class="footer__top">
			<div>
				<div class="footer__logo"><?php echo $logo; ?></div>
				<p class="footer__description">
					Creative digital marketing agency focused on growth, branding and performance.
				</p>
			</div>
			<?php get_template_part('template-parts/partials/footer-nav'); ?>
		</div>
		<div class="footer__bottom">
			<p>© 2026 Nova Digital. All rights reserved.</p>
			<p>Designed for performance & accessibility.</p>
		</div>
	</div>
</footer>

<script
	src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>

<?php wp_footer(); ?>

</body>

</html>