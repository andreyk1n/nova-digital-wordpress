<?php
/*
Template Name: 404 Page
*/
get_header();
?>

<style>
	.error-page {
		position: relative;
		min-height: 100vh;
		display: flex;
		align-items: center;
		overflow: hidden;
		background:
			radial-gradient(circle at top left,
				rgba(116, 72, 255, 0.18),
				transparent 35%),
			radial-gradient(circle at bottom right,
				rgba(0, 225, 255, 0.12),
				transparent 35%),
			var(--color-bg);
	}
	.error-page__hero {
		width: 100%;
		padding: 180px 0 120px;
	}
	.error-page__container {
		width: min(1200px, calc(100% - 32px));
		margin-inline: auto;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		align-items: center;
		gap: 80px;
	}
	.error-page__content {
		position: relative;
		z-index: 2;
	}
	.error-page__label {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		margin-bottom: 24px;
		padding: 12px 18px;
		border: 1px solid var(--color-border);
		border-radius: 999px;
		background: var(--color-surface);
		color: var(--color-accent);
		font-size: 14px;
		font-weight: 700;
		letter-spacing: 0.04em;
		text-transform: uppercase;
	}
	.error-page__title {
		margin-bottom: 24px;
		font-family: 'Space Grotesk', sans-serif;
		font-size: clamp(56px, 8vw, 110px);
		line-height: 0.95;
		font-weight: 800;
	}
	.error-page__description {
		max-width: 540px;
		margin-bottom: 40px;
		color: var(--color-muted);
		font-size: 18px;
		line-height: 1.7;
	}
	.error-page__actions {
		display: flex;
		align-items: center;
		gap: 16px;
	}
	.error-page__visual {
		position: relative;
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 500px;
	}
	.error-page__number {
		position: relative;
		z-index: 2;
		font-family: 'Space Grotesk', sans-serif;
		font-size: clamp(140px, 20vw, 320px);
		font-weight: 800;
		line-height: 1;
		background: linear-gradient(135deg,
				#7b61ff 0%,
				#4da3ff 50%,
				#00d1ff 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		opacity: 0.95;
	}
	.error-page__glow {
		position: absolute;
		border-radius: 50%;
		filter: blur(90px);
	}
	.error-page__glow--one {
		width: 280px;
		height: 280px;
		background: rgba(123, 97, 255, 0.35);
		top: 10%;
		left: 20%;
	}
	.error-page__glow--two {
		width: 320px;
		height: 320px;
		background: rgba(0, 209, 255, 0.25);
		bottom: 10%;
		right: 10%;
	}
	@media (max-width: 992px) {
		.error-page__container {
			grid-template-columns: 1fr;
			text-align: center;
		}
		.error-page__description {
			margin-inline: auto;
		}
		.error-page__actions {
			justify-content: center;
			flex-wrap: wrap;
		}
		.error-page__visual {
			min-height: 320px;
		}
	}
</style>

<main class="error-page">
	<section class="error-page__hero">
		<div class="error-page__container">
			<div class="error-page__content">
				<span class="error-page__label">
					Error 404
				</span>
				<h1 class="error-page__title">
					Page Not Found
				</h1>
				<p class="error-page__description">
					The page you are looking for does not exist,
					was moved or temporarily unavailable.
				</p>
				<div class="error-page__actions">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="button button--primary">
						Back Home
					</a>
				</div>
			</div>
			<div class="error-page__visual">
				<div class="error-page__glow error-page__glow--one"></div>
				<div class="error-page__glow error-page__glow--two"></div>
				<span class="error-page__number">
					404
				</span>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>