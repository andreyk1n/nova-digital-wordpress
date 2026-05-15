<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/partials/head'); ?>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="container header__container">
			<a href="#hero" class="header__logo">Nova Digital</a>
			<nav class="header__nav nav" aria-label="Main navigation">
				<ul class="nav__list">
					<li class="nav__item"><a class="nav__link" href="#about">About us</a></li>
					<li class="nav__item"><a class="nav__link" href="#services">Services</a></li>
					<li class="nav__item"><a class="nav__link" href="#cases">Cases</a></li>
					<li class="nav__item"><a class="nav__link" href="#process">Process</a></li>
					<li class="nav__item"><a class="nav__link" href="#reviews">Testimonials</a></li>
					<li class="nav__item"><a class="nav__link" href="#contacts">Contacts</a></li>
				</ul>
			</nav>
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