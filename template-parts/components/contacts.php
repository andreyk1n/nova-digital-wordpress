<?php
$label = get_sub_field('label');
$title = get_sub_field('title');
$description = get_sub_field('description');
$form_name = get_sub_field('form_name');
$form_email = get_sub_field('form_email');
$form_description = get_sub_field('form_description');
$form_button = get_sub_field('form_button');
?>

<div class="contact-modal" id="contacts" role="dialog" aria-modal="true" aria-labelledby="contact-title">
    <a href="#close" class="contact-modal__overlay" aria-label="Close modal"></a>
    <div class="contact-modal__content" role="document">
        <div class="contact-modal__left">
            <?php if ($label): ?>
                <div class="contact-modal__label">
                    <?php echo esc_html($label); ?>
                </div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="contact-modal__title" id="contact-title">
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>
            <?php if ($description): ?>
                <p class="contact-modal__description">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>
        </div>
        <form class="contact-modal__form">
            <label class="sr-only" for="name">
                <?php echo esc_html($form_name); ?>
            </label>
            <input id="name" type="text" class="contact-modal__input" placeholder="<?php echo esc_attr($form_name); ?>"
                required>
            <label class="sr-only" for="email">
                <?php echo esc_html($form_email); ?>
            </label>
            <input id="email" type="email" class="contact-modal__input"
                placeholder="<?php echo esc_attr($form_email); ?>" required>
            <label class="sr-only" for="message">
                <?php echo esc_html($form_description); ?>
            </label>
            <textarea id="message" class="contact-modal__textarea"
                placeholder="<?php echo esc_attr($form_description); ?>"></textarea>
            <button class="button button--primary" type="submit">
                <?php echo $form_button; ?>
            </button>
        </form>
        <a href="#close" class="contact-modal__close" aria-label="Close contact form">
            ✕
        </a>
    </div>
</div>