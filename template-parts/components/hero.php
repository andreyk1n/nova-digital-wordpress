<?php
$label = get_sub_field('label');
$title = get_sub_field('title');
$description = get_sub_field('description');
$buttons = get_sub_field('buttons');
$items = get_sub_field('items');
?>

<section class="hero section" id="hero">
    <div class="container hero__container">
        <div class="hero__content reveal">
            <?php if ($label): ?>
                <div class="section__label">
                    <?php echo $label; ?>
                </div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h1 class="hero__title">
                    <?php echo $title; ?>
                </h1>
            <?php endif; ?>
            <?php if ($description): ?>
                <p class="hero__description">
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
            <?php if ($buttons): ?>
                <div class="hero__actions">
                    <?php foreach ($buttons as $button):
                        $button_text = $button['button_text'] ?? '';
                        $button_href = $button['button_href'] ?? '';
                        if (!$button_text || !$button_href) {
                            continue;
                        }
                        ?>
                        <a href="<?php echo esc_url($button_href); ?>"
                            class="button <?php echo $button === reset($buttons) ? 'button--primary' : 'button--secondary'; ?>">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($items): ?>
            <div class="hero__visual reveal">
                <?php foreach ($items as $index => $item):
                    $item_title = $item['item_title'] ?? '';
                    $item_num = $item['item_num'] ?? '';
                    if (!$item_title || !$item_num) {
                        continue;
                    }
                    $card_classes = [
                        'hero__card--analytics',
                        'hero__card--growth',
                        'hero__card--campaign',
                    ];
                    $card_class = $card_classes[$index] ?? '';
                    ?>
                    <article class="hero__card <?php echo esc_attr($card_class); ?>">
                        <div class="hero__card-title">
                            <?php echo esc_html($item_title); ?>
                        </div>
                        <div class="hero__card-value">
                            <?php echo esc_html($item_num); ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>