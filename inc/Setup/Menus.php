<?php

namespace Kms142\Setup;

// Класс для регистрации областей меню и виджетов
class Menus
{
    /**
     * Регистрация хуков и фильтров для сервиса
     * @return
     */
    public function register()
    {
        add_action('after_setup_theme', array($this, 'setup'));
    }

    public function setup()
    {
        register_nav_menus(array('top' => 'Верхнее меню'));
        register_nav_menus(array('bottom' => 'Нижнее меню'));

        register_sidebar(array(
            'name' => 'Сайтбар блога',
            'id' => 'blog-sidebar',
            'before_widget' => '<div id="%1$s" class="blog-widget  %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="blog-widget__title">',
            'after_title' => '</div>',
        ));
    }
}
