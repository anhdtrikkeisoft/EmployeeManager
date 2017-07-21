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

    public static function updateUser($id, $name, $email)
    {
        $query = "UPDATE users SET name = ?, email = ? WHERE id = ?;";
        return static::query($query, array($name, $email, $id));
    }
}

?>



