<?php

namespace Kms142\CPT;

use WP_Query;

class Review
{
    public function register()
    {
        add_action('init', array($this, 'register_cpt')); 

        add_filter('archive_template', array($this, 'template_redirect'), -1);
    }

    public function register_cpt()
    {
        $labels = array(
            'name' => 'Отзывы',
            'singular_name' => 'review',
            'add_new' => 'Добавить отзыв',
            'add_new_item' => 'Добавить новый отзыв',
            'edit_item' => 'Редактировать отзыв',
            'new_item' => 'Новый отзыв',
            'view_item' => 'Просмотр отзыва',
            'search_items' => 'Поиск',
            'not_found' =>  'Нет отзывов',
            'not_found_in_trash' => 'Нет отзывов в корзине',
            'parent_item_colon' => ''
        );

        register_post_type('review', array(
            'labels' => $labels,
            'public' => true,
            'show_in_admin_bar'   => false,
            'show_in_nav_menus'   => false,
            'publicly_queryable'  => true,
            'query_var'           => false,
            'has_archive' => true,
            'rewrite' => array('slug' => 'reviews', 'with_front' => false),
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array('title', 'editor', 'thumbnail'),
            'exclude_from_search' => true
        ));
    }

    function template_redirect()
    {
        if (is_post_type_archive('review')) {
            global $wp_query;

            $wp_query->set_404();
            status_header(404);
            get_template_part(404);
            exit();
        }
    } 
}
