<?php

namespace Kms142\Setup;

// Класс для работы с SEO оптимизацией
class SEO
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
        add_filter('disable_wpseo_json_ld_search', '__return_true');

        add_filter('language_attributes', array($this, 'opengraph_fix'), 20, 1);
    }

    public function opengraph_fix($lang)
    {
        $lang_prefix = 'prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#  profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#"';
        $lang_fix = preg_replace('!prefix="(.*?)"!si', $lang_prefix, $lang);
        return $lang_fix;
    }
}