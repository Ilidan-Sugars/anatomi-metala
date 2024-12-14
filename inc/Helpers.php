<?php
if (!function_exists('dd')) {
    /**
     * Вывод отладочной инфомрации в PHP коде
     *
     * @return void
     */
    function dd()
    {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        echo '</pre>';
        die;
    }
}

if (!function_exists('starts_with')) {
    /**
     * Функция определяет начинается ли указанная строка с заданной подстроки
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * 
     * @return bool
     */
    function starts_with($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle != '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('mix')) {
    /**
     * Получает путь к версионному файлу Mix.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     *
     * @return string
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = '')
    {
        if (!$manifestDirectory) {
            $manifestDirectory = "assets/dist/";
        }

        static $manifest;
        if (!starts_with($path, '/')) {
            $path = "/{$path}";
        }
        if ($manifestDirectory && !starts_with($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        $rootDir = dirname(__FILE__, 2);
        if (!$manifest) {
            $manifestPath =  $rootDir . $manifestDirectory . 'mix-manifest.json';
            if (!file_exists($manifestPath)) {
                throw new Exception('The Mix manifest does not exist.');
            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }

        if (starts_with($manifest[$path], '/')) {
            $manifest[$path] = ltrim($manifest[$path], '/');
        }

        $path = $manifestDirectory . $manifest[$path];

        return get_template_directory_uri() . $path;
    }
}

if (!function_exists('assets')) {
    /**
     * Выводит путь к файлу ресурсов
     *
     * @param  string  $path
     */
    function assets($path)
    {
        if (!$path) {
            return;
        }

        echo get_template_directory_uri() . '/assets/dist/' . $path;
    }
}

if (!function_exists('svg')) {
    /**
     * Выводит путь то файла svg-иконки
     *
     * @param  string  $path
     */
    function svg($path)
    {
        if (!$path) {
            return;
        }
        echo get_template_part('assets/dist/svg/inline', $path . '.svg');
    }
}


if (!function_exists('get_url_by_slug')) {
    /**
     * Возвращает url страницы по её slug
     *
     * @param  string  $path
     * @param  string  $param
     * 
     * @return string
     */
    function get_url_by_slug($slug, $param = "")
    {
        $url = "";
        $page = get_page_by_path($slug);
        if ($page != null) $url = get_permalink($page);

        if ($param != "")
            return $url . "?" . $param;
        return $url;
    }
}

if (!function_exists('url_by_slug')) {
    /**
     * Выводит url страницы по её slug
     *
     * @param  string  $path
     * @param  string  $param
     */
    function url_by_slug($slug)
    {
        echo get_url_by_slug($slug);
    }
}


if (!function_exists('get_youtube_id')) {
    /**
     * Возвращает идентефикатор ролика по ссылке на ютуб
     *
     * @param  string  $url
     * 
     * @return string
     */
    function get_youtube_id($url)
    {
        $parts = parse_url($url);
        if (isset($parts['query'])) {
            parse_str($parts['query'], $qs);
            if (isset($qs['v'])) {
                return $qs['v'];
            } else if (isset($qs['vi'])) {
                return $qs['vi'];
            }
        }
        if (isset($parts['path'])) {
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path) - 1];
        }
        return $url;
    }
}


if (!function_exists('load_template_part')) {
    /**
     * Возвращает исходный код указанного файла для использования в файлах темы
     *
     * @param  string  $url
     * 
     * @return string
     */

    function load_template_part($template_name, $args = array())
    {
        ob_start();
        get_template_part($template_name, '', $args);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}

if (!function_exists('export_log')) {
    function export_log($content)
    {
        $uploads  = wp_upload_dir(null, false);
        $logs_dir = $uploads['basedir'] . '/pluginName-logs';

        if (!is_dir($logs_dir)) {
            mkdir($logs_dir, 0755, true);
        }
        $file = fopen($logs_dir . '/' . 'log.log', 'a+');

        fwrite($file, $content);
        fclose($file);
    }
}

if (!function_exists('get_stock_name')) {
    function get_stock_name($id)
    {
        if (!$id) {
            return false;
        }

        $all_stocks = get_option('all_1c_stocks');
        foreach ($all_stocks as $key => $value) {
            if ($key == $id) {
                return $value['Наименование'];
            }
        }
    }
}
