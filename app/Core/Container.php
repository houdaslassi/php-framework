<?php

namespace App\Core;

class Container
{
    protected static $instance;

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new \League\Container\Container();
        }

        return static::$instance;
    }
}
