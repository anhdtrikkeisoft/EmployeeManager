<?php

class Controller extends Database
{

    public static $thamso = array();

    public static function CreateView($viewName)
    {
        extract(self::$thamso);
        include_once "Views/$viewName.php";

    }

    public function truyenthamso($name, $value)
    {
        self::$thamso[$name] = $value;
    }

}
?>