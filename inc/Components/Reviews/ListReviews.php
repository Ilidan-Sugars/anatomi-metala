<?php

namespace Kms142\Components\Reviews;

use WP_Query;

class ListReviews
{
    public function register()
    {
        add_shortcode('list-reviews', array($this, 'output'));
    }

    public function output($attr)
    {
        extract(shortcode_atts(array(
            "count" => -1
        ), $attr));

        $query_args = array(
            'post_type' => 'review',
            'numberposts' => $count,
            'post_status' => 'publish'
        );

        $html = '';

        $id = rand();
        $items = array();

        $query = new WP_Query($query_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                $items[] = [
                    'author' => get_the_title(),
                    'content' => get_the_content()
                ];
            }

            $html .= load_template_part('/inc/Components/Reviews/ListReviews-Display', [
                'id' => $id,
                'items' => $items
            ]);

            wp_reset_postdata();
            wp_reset_query();

            add_action('wp_footer', function () use ($id) {
                echo <<<END
            <script>
            document.addEventListener("DOMContentLoaded", (event) => {
                new Splide('#splide-reviews-$id', {
                    type: 'loop',
                    pagination: false,
                    perPage: 2,
                    gap: 15,
                    arrows: 0,
                    drag: 1,
                    breakpoints: {
                      900: {
                        perPage: 1
                      },
                      1100: {
                        perPage: 2
                      }
                    }
                  } ).mount();
            });
            </script>
            END;
            }, 100);
        }

        return $html;
    }
}
