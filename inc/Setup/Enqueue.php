<?php

namespace Kms142\Setup;

// Класс для работы с подключением скриптов и стилей
class Enqueue
{
    /**
     * Регистрация хуков и фильтров для сервиса
     * @return
     */
    public function register()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function enqueue_scripts()
    {
        if (!is_customize_preview()) {
            wp_deregister_script('jQuery');
            wp_register_script('jQuery',  mix('js/jquery.js'), false, null, true);
            wp_enqueue_script('jQuery');
        }

        wp_enqueue_style('app', mix('css/app.css'));

        if (file_exists(get_template_directory_uri() . '/dist/js/manifest.js')) {
            wp_enqueue_script('manifest-js', mix('js/manifest.js'), null, null, true);
        }

        wp_enqueue_script('app-js', mix('js/app.js'), array('jQuery'), null, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_localize_script('app-js', 'app', array(
            'ajax_url' => site_url() . '/wp-admin/admin-ajax.php',
            'nonce' => wp_create_nonce('app_nonce')
        ));
    }
}
