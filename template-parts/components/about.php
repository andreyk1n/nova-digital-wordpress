<?php
$label = get_sub_field("label");
$title = get_sub_field("title");
$description = get_sub_field("description");
$nums = get_sub_field("nums");
?>

<section class="section about" id="about">
    <div class="container about__wrapper">
        <div class="about__content reveal">
            <div class="section__header">
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
            <?php if ($nums): ?>
                <div class="about__stats">
                    <?php foreach ($nums as $item):
                        $num = $item['num'] ?? '';
                        $num_title = $item['num_title'] ?? '';
                        if (!$num || !$num_title) {
                            continue;
                        }
                        ?>
                        <article class="about__stat">
                            <div class="about__stat-value">
                                <?php echo esc_html($num); ?>
                            </div>
                            <p class="about__stat-text">
                                <?php echo esc_html($num_title); ?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="about__visual reveal">
            <div class="about__shape about__shape--circle"></div>
            <div class="about__shape about__shape--square"></div>
            <div class="about__shape about__shape--triangle"></div>
            <div class="about__shape about__shape--blur"></div>
        </div>
    </div>
</section>