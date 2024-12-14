<?php

namespace Kms142\Setup;

// Класс для первончальной настройки, очистики от мусора wp
class Setup
{
    // public $userId = '1255820024';
    public $userId = '6707484078';
    public $token = '7686913372:AAE2YoDYo2nj1G_Qg9DwNltwuJLpvK6qpYo';

    /**
     * Регистрация хуков и фильтров для сервиса
     * @return
     */
    public function register()
    {
        add_action('after_setup_theme', array($this, 'setup'));
        add_action('after_setup_theme', array($this, 'content_width'), 0);
        add_action('init', array($this, 'clear'));
        
        add_action('wpcf7_mail_sent', array($this, 'cf7_sended'), 10, 3);
    }

    /**
     * Очистка от мусора
     * @return
     */
    public function clear()
    {
        global $pagenow;
        if ('post.php' != $pagenow && 'post-new.php' != $pagenow)
            wp_deregister_script('heartbeat');

        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        remove_action('rest_api_init', 'wp_oembed_register_route');
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');

        remove_action('wp_head', 'wp_bootstrap_starter_pingback_header');
    }

    public function setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        ));

        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        add_filter('wpcf7_autop_or_not', '__return_false');
        add_filter('upload_mimes', function ($mimes) {
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        });
        add_filter('render_block', function ($block_content, $block) {
            $block_content = str_replace(
                'wp-block-button__link',
                'wp-block-button__link btn btn-shop',
                $block_content
            );

            return $block_content;
        }, 5, 2);

        show_admin_bar(false);
    }

    /*
        Размер максимально-допустимого контента для изображений
    */
    public function content_width()
    {
        $GLOBALS['content_width'] = apply_filters('content_width', 1440);
    }

    function cf7_sended($contact_form)
    {
        $mail_body = $contact_form->prop('mail')['body'];
        $mail_body = wpcf7_mail_replace_tags($mail_body);

        $submission = \WPCF7_Submission::get_instance();
        if ($submission) {

            $mail_body = $contact_form->prop('mail')['body'];
            $mail_body = wpcf7_mail_replace_tags($mail_body);

            wp_remote_fopen('https://api.telegram.org/bot' . $this->token . '/sendMessage?chat_id=' . $this->userId . '&text=' . urlencode($mail_body) . '&parse_mode=markdown');
        }
    }
}
