<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$items = get_sub_field("items");
?>

<section class="section stats">
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
            <div class="stats__grid">
                <?php foreach ($items as $item): ?>
                    <article class="stats-card reveal reveal--active">
                        <div class="stats-card__value">
                            <?php echo esc_html($item['item_num']); ?>
                        </div>
                        <p>
                            <?php echo esc_html($item['item_title']); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>