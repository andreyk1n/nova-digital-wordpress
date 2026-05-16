<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$items = get_sub_field("items");
?>

<section class="section reviews" id="reviews">
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
            <div class="reviews__grid">
                <?php foreach ($items as $item): ?>
                    <article class="reviews__card reveal">
                        <div class="reviews__rating">
                            <?php echo esc_html($item['item_rating']); ?>
                        </div>
                        <p class="reviews__text">
                            <?php echo esc_html($item['item_text']); ?>
                        </p>
                        <div class="reviews__author">
                            <div class="reviews__avatar"></div>
                            <div>
                                <strong>
                                    <?php echo esc_html($item['item_name']); ?>
                                </strong>
                                <p>
                                    <?php echo esc_html($item['item_position']); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>