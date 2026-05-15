<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$items = get_sub_field("items");
// item_icon
// item_title
// item_description
?>

<section class="section services" id="services">
    <div class="container">
        <div class="section__header reveal">
            <?php if ($label): ?>
                <div class="section__label">
                    <?php echo $label; ?>
                </div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="section__title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>
            <?php if ($description): ?>
                <p class="section__description">
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($items): ?>
            <div class="services__grid">
                <?php foreach ($items as $item):
                    $item_icon = $item['item_icon'] ?? '';
                    $item_title = $item['item_title'] ?? '';
                    $item_description = $item['item_description'] ?? '';
                    if (!$item_title) {
                        continue;
                    }
                    ?>
                    <article class="services__card reveal">
                        <?php if ($item_icon): ?>
                            <div class="services__icon">
                                <img src="<?php echo esc_url($item_icon); ?>" alt="<?php echo esc_attr($item_title); ?>"
                                    loading="lazy">
                            </div>
                        <?php endif; ?>
                        <h3 class="services__title">
                            <?php echo esc_html($item_title); ?>
                        </h3>
                        <?php if ($item_description): ?>
                            <p class="services__description">
                                <?php echo esc_html($item_description); ?>
                            </p>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>