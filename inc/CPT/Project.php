<?php

namespace Kms142\CPT;

use WP_Query;

class Project
{
    public function register()
    {
        add_action('init', array($this, 'register_cpt')); 

        add_filter('archive_template', array($this, 'template_redirect'), -1);
    }

    public function register_cpt()
    {
        $labels = array(
            'name' => 'Проекты',
            'singular_name' => 'project',
            'add_new' => 'Добавить проект',
            'add_new_item' => 'Добавить новый проект',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view_item' => 'Просмотр проекта',
            'search_items' => 'Поиск',
            'not_found' =>  'Нет проектов',
            'not_found_in_trash' => 'Нет проектов в корзине',
            'parent_item_colon' => ''
        );

        register_post_type('project', array(
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

        register_taxonomy("project_category", array("project"), array("hierarchical" => true, "label" => "Категории", "singular_label" => "category", "rewrite" => true));
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
