<?php get_search_form(); ?>
<?php wp_nav_menu(array(
    'menu' => 8,
    'container' => false,
    'menu_class' => 'sidebar-menu sidebar-main-menu',
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'depth' => 0
)); ?>
<div class="sidebar-form">
    <?= do_shortcode('[contact-form-7 id="185" title="Бесплатная консультация"]'); ?>
</div>
<div class="mt-3">
    <a href="/skidka-10/">
        <img src="<?=get_template_directory_uri()?>/img/vita_1.png" class="img-responsive" alt="">
    </a>
</div>