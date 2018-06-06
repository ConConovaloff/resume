<?php


namespace AppBundle\Pattern\Singleton;


final class Singleton
{
    /**
     * @var self
     */
    private static $instance;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Приватный метод, чтобы никто не мог вызывать конструктор
     */
    private function __construct(){}

    /**
     * Приватный метод, чтобы никто не мог вызывать клонирование объекта
     */
    private function __clone(){}

    /**
     * Приватный метод, чтобы никто не восстановил\создал объект после сериализации
     */
    private function __wakeup(){}

    ////// Business logic

    private $some;

    public function some($val = null)
    {
        if ($val) {
            $this->some = $val;
        }

        return $this->some;
    }
}