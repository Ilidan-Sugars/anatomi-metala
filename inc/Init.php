<?php

namespace Kms142;

final class Init
{
    /**
     * Список модулей, используемых в теме
     * @return array Полный список классов-сервисов
     */
    public static function get_modules()
    {
        return [];
    }

    /**
     * Список сервисов, используемых в теме
     * @return array Полный список классов-сервисов
     */
    public static function get_services()
    {
        return [
            Setup\Setup::class,
            Setup\Enqueue::class,
            Setup\Menus::class,
            Setup\SEO::class,
            Setup\Admin::class
        ];
    }

    /**
     * Список компонентов, используемых в теме
     * @return array Полный список классов-сервисов
     */
    public static function get_components()
    {
        return [
            Components\Projects\ListProjects::class,
            Components\Reviews\ListReviews::class,
        ];
    }

    /**
     * Список пользовательских типов, используемых в теме
     * @return array Полный список классов-сервисов
     */
    public static function get_cpt()
    {
        return [
            CPT\Project::class,
            CPT\Review::class,
        ];
    }


    /**
     * Инициализация всех компонентов в теме
     */
    public static function register()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }

        foreach (self::get_cpt() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }

        foreach (self::get_components() as $class) {
            $component = self::instantiate($class);
            if (method_exists($component, 'register')) {
                $component->register();
            }
        }

        foreach (self::get_modules() as $class) {
            $component = self::instantiate($class);
            if (method_exists($component, 'register')) {
                $component->register();
            }
        }
    }

    /**
     * Создание экземпляра класса заданного типа
     * @param  class $class 		класс-сервис, который необходимо создать
     * @return class instance 		новый экземляр указанного класса
     */
    private static function instantiate($class)
    {
        return new $class();
    }
}
