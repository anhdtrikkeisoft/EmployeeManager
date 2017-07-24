<?php

class LoginController extends Controller
{
    public static function dangnhap()
    {

        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $result = LoginModel::login($email, $password);


        if (!empty($result[0])) {
            session_start();
            $_SESSION['employee_id'] = $result[0]['id'];
            $_SESSION['employee_name'] = $result[0]['name'];
            $_SESSION['employee_email'] = $result[0]['email'];
            $_SESSION['message'] = 'Login successfully!';
            header("Location: employees");
        } else {
            session_start();
            $_SESSION['message'] = 'Login failed!';
            header("Location: login");

        }


    }

    public static function dangxuat()
    {
        session_start();
        if (session_destroy()) {
            session_start();
            $_SESSION['message'] = 'Logout successfully!';
            header("Location: login");
        }
    }
}

?>