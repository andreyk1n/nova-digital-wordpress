<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/partials/head'); ?>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<?php $logo = get_field('logo', 'option'); ?>
		<div class="container header__container">
			<a href="#hero" class="header__logo"><?php echo $logo; ?></a>
			<?php get_template_part('template-parts/partials/header-nav'); ?>
			<div class="header__actions">
				<button class="theme-toggle" aria-label="Switch theme">
					☼
				</button>
				<div class="header__burger">
					<span></span>
				</div>
			</div>
		</div>
	</header>