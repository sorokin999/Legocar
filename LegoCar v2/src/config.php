<?php

/**
 * @todo как минимум, переписать на singletone
 */
class Config {
    static private $options = [];

    private function __construct() {

    }

     static public function getOption($name) {
        return self::$options[$name];
    }

    static  public function setOption($name, $value) {
       self::$options[$name] = $value;
    }
}