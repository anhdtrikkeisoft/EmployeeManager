/* tao thu muc User (trong thu muc Views) , trong co 4 file: */
// allUser.php, showUser.php, editUser.php, createUser.php


/* routes.php */
Route::set('showUser', function () {
UserController::showUser();
});


Route::set('createUser', function () {
UserController::createUser();
});

Route::set('storeUser', function () {
UserController::storeUser();
});


Route::set('editUser', function () {
UserController::editUser();
});

Route::set('updateUser', function () {
UserController::updateUser();
});


Route::set('deleteUser', function () {
UserController::deleteUser();
});


/* tao file UserController.php noi dung: */
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
        $_SESSION['message'] = 'Them thanh cong!';
        Header('Location: allUser');
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


/* Tao file models/UserModel.php */
<?php

class UserModel extends Database
{
    public static function allUser()
    {
        return static::query("SELECT * FROM users");
    }

    public static function insertUser($name, $email, $password)
    {
        $query = "INSERT INTO users(name, email, password) VALUES(?,?,?)";
        static::query($query, array($name, $email, $password));
    }

    public static function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = ?";
        static::query($query, array($id));
    }

    public static function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = ?";
        return static::query($query, array($id));
    }

    public static function updateUser($name, $email, $id)
    {
        $query = "UPDATE users SET name = ?, email = ? WHERE id = ?;";
        return static::query($query, array($name, $email));
    }
}

?>

