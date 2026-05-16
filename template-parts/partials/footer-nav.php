<?php $footer_navigation = get_field('footer_navigation', 'option'); ?>
<?php $footer_socials = get_field('footer_socials', 'option'); ?>

<div class="footer__nav">
    <div>
        <h3 class="footer__column-title">Navigation</h3>
        <?php if ($footer_navigation): ?>
            <?php
            $chunks = array_chunk($footer_navigation, ceil(count($footer_navigation) / 2));
            ?>
            <ul class="footer__list">
                <?php foreach ($chunks[0] as $item): ?>
                    <li>
                        <a href="<?php echo esc_url($item['item_link']); ?>">
                            <?php echo esc_html($item['item_label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <ul class="footer__list">
                <?php if (!empty($chunks[1])): ?>
                    <?php foreach ($chunks[1] as $item): ?>
                        <li>
                            <a href="<?php echo esc_url($item['item_link']); ?>">
                                <?php echo esc_html($item['item_label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    <?php endif; ?>
    <div>
        <h3 class="footer__column-title">Socials</h3>
        <?php if ($footer_socials): ?>
            <ul class="footer__list">
                <?php foreach ($footer_socials as $social): ?>
                    <li>
                        <a href="<?php echo esc_url($social['socials_item_link']); ?>" target="_blank" rel="noopener">
                            <?php echo esc_html($social['socials_item_label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>