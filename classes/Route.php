<?php

/**
 * Created by PhpStorm.
 * User: anhdt
 * Date: 7/20/17
 * Time: 8:24 AM
 */
class Route
{
    public static $validRoutes = array();
    public static function set($route, $function)
    {
        self::$validRoutes[] = $route;
        if($_GET['url'] == $route){
            $function->__invoke();
        }


    }
}