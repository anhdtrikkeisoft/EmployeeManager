<?php

class EmployeeController extends Controller
{
    public static function Employee()
    {
        static::CreateView("Employee/Employee");
    }

    public static function allEmployee()
    {
        static::truyenthamso('Employees', EmployeeModel::allEmployee());
        static::CreateView("Employee/allEmployee");
    }

    public static function showEmployee()
    {
        static::truyenthamso('Employee', EmployeeModel::getEmployeeById($_GET['id']));
        static::CreateView("Employee/showEmployee");
    }

    public static function createEmployee()
    {
        static::truyenthamso('Departments', DepartmentModel::allDepartment());
        static::CreateView("Employee/createEmployee");
    }

    public static function storeEmployee()
    {
        print_r($_REQUEST);
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = md5('123456');
        $job_title = $_REQUEST['job_title'];
        $cellphone = $_REQUEST['cellphone'];
        $id_department = $_REQUEST['id_department'];
        $changepwfirsttime = 0;
        $position = $_REQUEST['position'];
        $role = $_REQUEST['role'];
        EmployeeModel::insertEmployee($name, $email, $password, $job_title, $cellphone, $id_department, $changepwfirsttime, $position, $role);
        session_start();
        $_SESSION['message'] = 'Them thanh cong!';


        static::CreateView('test');
        Header('Location: employees');
    }

    public static function editEmployee()
    {
        static::truyenthamso('Employee', EmployeeModel::getEmployeeById($_GET['id']));
        static::truyenthamso('Departments', DepartmentModel::allDepartment());
        static::CreateView('Employee/editEmployee');
    }

    public static function updateEmployee()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $job_title = $_POST['job_title'];
            $cellphone = $_POST['cellphone'];
            $id_department = $_POST['id_department'];
            $position = $_POST['position'];
            $role = $_POST['role'];
            EmployeeModel::updateEmployee($name, $job_title, $cellphone, $id_department, $position, $role, $id);
            session_start();
            $_SESSION['message'] = 'Chinh sua thanh cong!';
        }
        Header('Location: employees');
    }

    public static function deleteEmployee()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        if (isset($_POST) && $_POST['_method'] == "DELETE") {
            $id = $_POST['id'];
            EmployeeModel::deleteEmployee($id);
            session_start();
            $_SESSION['message'] = 'Xoa thanh cong';
        }


        Header('Location: employees');
    }
}

?>
