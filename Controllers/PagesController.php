<?php

class PagesController extends Controller
{
    public static function aboutpage()
    {
        $users = UserModel::allUser();
        static::truyenthamso('users', $users);
        static::CreateView('AboutUs');
    }



}

?>