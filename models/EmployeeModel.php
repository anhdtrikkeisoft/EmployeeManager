<?php

class EmployeeModel extends Database
{
    public static function allEmployee()
    {
        return static::query("SELECT employees.*, departments.name as department_name
FROM employees
INNER JOIN departments ON employees.id_department = departments.id");
    }

    public static function insertEmployee($name, $email, $password, $job_title, $cellphone, $id_department, $changepwfirsttime, $position, $role)
    {


        $query = "INSERT INTO employees 
(name, email, password, job_title, cellphone, id_department, changepwfirsttime, position, role) VALUES (?,?,?,?,?,?,?,?,?);
";
        static::query($query, array($name, $email, $password, $job_title, $cellphone, $id_department, $changepwfirsttime, $position, $role));
    }

    public static function deleteEmployee($id)
    {
        $query = "DELETE FROM employees WHERE id = ?";
        static::query($query, array($id));
    }

    public static function getEmployeeById($id)
    {
        $query = "SELECT employees.*, departments.name as department_name
FROM employees
INNER JOIN departments ON employees.id_department = departments.id WHERE employees.id = ?";
        return static::query($query, array($id));
    }

    public static function updateEmployee($name, $job_title, $cellphone, $id_department, $position, $role, $id)
    {
        $query = "UPDATE employees SET name = ?, job_title = ?, cellphone = ?, id_department = ?, position = ?, role = ? WHERE id = ?;";
        return static::query($query, array($name, $job_title, $cellphone, $id_department, $position, $role, $id));
    }

    public static function getManager()
    {
        return static::query("SELECT * FROM employees WHERE position = 'manager'");
    }

}

?>