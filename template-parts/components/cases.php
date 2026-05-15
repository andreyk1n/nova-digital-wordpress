<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$items = get_sub_field("items");
// item_url, item_title, item_description, item_image
?>

<section class="section cases" id="cases">
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
            <div class="cases__grid">
                <?php foreach ($items as $item):
                    $image = $item['item_image'];
                    $url = $item['item_url'];
                    ?>
                    <article class="cases__card reveal">
                        <div class="cases__image" style="background-image: url('<?php echo esc_url($image); ?>');"></div>
                        <div class="cases__content">
                            <h3 class="cases__title">
                                <?php echo esc_html($item['item_title']); ?>
                            </h3>
                            <p class="cases__description">
                                <?php echo esc_html($item['item_description']); ?>
                            </p>
                            <?php if ($url): ?>
                                <a href="<?php echo esc_url($url); ?>" class="button button--secondary">
                                    View Case
                                </a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>