<?php

class DepartmentModel extends Database
{
    public static function allDepartment()
    {
        return static::query("SELECT * FROM departments");
    }

    public static function insertDepartment($name, $office_number)
    {
        $query = "INSERT INTO departments(name, office_number) VALUES(?,?)";
        static::query($query, array($name, $office_number));
    }

    public static function deleteDepartment($id)
    {
        $query = "DELETE FROM departments WHERE id = ?";
        static::query($query, array($id));
    }

    public static function getDepartmentById($id)
    {
        $query = "SELECT * FROM departments WHERE id = ?";
        return static::query($query, array($id));
    }

    public static function updateDepartment($name, $office_number, $id)
    {
        $query = "UPDATE departments SET name = ?, office_number = ? WHERE id = ?;";
        return static::query($query, array($name, $office_number, $id));
    }
}

?>

