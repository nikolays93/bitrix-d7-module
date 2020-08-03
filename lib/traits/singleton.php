<?php

namespace Boilerplate\Traits;

trait Singleton
{
    /** @var static The stored singleton instance */
    protected static $instance;

    /**
     * Creates the original or retrieves the stored singleton instance
     * @return static
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = (new \ReflectionClass(get_called_class()))
                ->newInstanceWithoutConstructor();
            call_user_func_array(array(static::$instance, "constructor"), func_get_args());
        }

        return static::$instance;
    }

    protected function __clone()
    {
    }

    protected function __sleep()
    {
    }

    protected function __wakeup()
    {
    }
}
