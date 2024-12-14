<?php

namespace Kms142\Components\Projects;

use WP_Query;

class ListProjects
{
    public function register()
    {
        add_shortcode('list-projects', array($this, 'output'));
    }

    public function output($attr)
    {
        extract(shortcode_atts(array(
            "category" => -1,
            "count" => -1
        ), $attr));



        $query_args = array(
            'post_type' => 'project',
            'numberposts' => $count,
            'post_status' => 'publish'
        );

        if ($category != -1) {
            $query_args['tax_query'] = array(
                array(
                    'taxonomy' => 'project_category',
                    'field'    => 'slug',
                    'terms'    => $category,
                )
            );
        }

        $html = '';

        $id = rand();
        $items = array();

        $query = new WP_Query($query_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                $items[] = [
                    'img' => get_the_post_thumbnail(),
                    'author' => get_the_title(),
                    'content' => get_the_content()
                ];
            }

            $html .= load_template_part('/inc/Components/Projects/ListProjects-Display', [
                'items' => $items
            ]);

            wp_reset_postdata();
            wp_reset_query();
        }

        return $html;
    }
}
