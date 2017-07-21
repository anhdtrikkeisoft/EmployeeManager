<?php
class AboutUs extends Controller{
    public static function doSomeThing (){
        $result = self::query("SELECT * FROM users");
        print_r($result);
    }
}
?>