<?php

class LoginModel extends Database
{
    public static function login($email, $password)
    {

        //Check username and password from database
        $query = "SELECT * FROM employees WHERE email= ? and password= ? ";
        return static::query($query, array($email, $password));


        //If username and password exist in our database then create a session.
        //Otherwise echo error.

//        if (mysqli_num_rows($result) == 1) {
//            $_SESSION['username'] = $login_user; // Initializing Session
//            header("location: home.php"); // Redirecting To Other Page
//        } else {
//            $error = "Incorrect username or password.";
//        }

    }
}

?>

