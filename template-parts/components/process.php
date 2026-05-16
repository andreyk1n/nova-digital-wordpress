<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$items = get_sub_field("items");
?>

<section class="section process" id="process">
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
            <div class="process__timeline">
                <?php foreach ($items as $index => $item): ?>
                    <?php
                    $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                    ?>
                    <article class="process__item reveal">
                        <div class="process__number">
                            <?php echo $number; ?>
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">
                                <?php echo esc_html($item['item_title']); ?>
                            </h3>
                            <p class="process__description">
                                <?php echo esc_html($item['item_text']); ?>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>