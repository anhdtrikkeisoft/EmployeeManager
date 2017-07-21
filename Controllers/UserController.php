<?php

class UserController extends Controller
{

    public static function User()
    {
        static::CreateView("User/User");
    }

    public static function allUser()
    {
        static::truyenthamso('Users', UserModel::allUser());
        static::CreateView("User/allUser");
    }

    public static function showUser()
    {
        static::truyenthamso('User', UserModel::getUserById($_GET['id']));
        static::CreateView("User/showUser");
    }

    public static function createUser()
    {
        static::CreateView("User/createUser");
    }

    public static function storeUser()
    {
        print_r($_REQUEST);
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        UserModel::insertUser($name, $email, $password);
        session_start();
        $_SESSION['message'] = 'success!!!!!!!!';
        Header('Location: allUser');
//        static::CreateView('User/storeUser');
    }

    public static function editUser()
    {
        static::truyenthamso('User', UserModel::getUserById($_GET['id']));
        static::CreateView('User/editUser');
    }

    public static function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];


            UserModel::updateUser($id, $name, $email);
            session_start();
            $_SESSION['message'] = 'Chinh sua thanh cong!';

//            echo '<pre>';
//            print_r($_POST);
//            echo '</pre>';

        }


        Header('Location: allUser');


    }

    public static function deleteUser()
    {

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';


        if (isset($_POST) && $_POST['_method'] == "DELETE") {
            $id = $_POST['id'];
            UserModel::deleteUser($id);
            session_start();
            $_SESSION['message'] = 'Xoa thanh cong';
        }


        Header('Location: allUser');
    }
}

?>