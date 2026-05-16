<?php if (have_rows('header_navigation', 'option')): ?>
<nav class="header__nav nav" aria-label="Main navigation">
    <ul class="nav__list">
        <?php while (have_rows('header_navigation', 'option')): the_row(); ?>
            <?php 
                $label = get_sub_field('navigation_item_label');
                $link = get_sub_field('navigation_item_link');
            ?>
            <li class="nav__item">
                <a class="nav__link" href="<?php echo esc_url($link); ?>">
                    <?php echo esc_html($label); ?>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</nav>
<?php endif; ?>