<?php
require_once('Routes.php');


// tu dong require cac file trong thu muc classes
function __autoload($class_name)
{
    if (file_exists('./classes/' . $class_name . '.php')) {
        require_once './classes/' . $class_name . '.php';
    } elseif (file_exists('./Controllers/' . $class_name . '.php')) {
        require_once './Controllers/' . $class_name . '.php';
    }elseif (file_exists('./models/' . $class_name . '.php')) {
        require_once './models/' . $class_name . '.php';
    }
}


?>







