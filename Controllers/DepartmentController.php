<?php

class DepartmentController extends Controller
{
    public static function Department()
    {
        static::CreateView("Department/Department");
    }

    public static function allDepartment()
    {
        static::truyenthamso('Departments', DepartmentModel::allDepartment());
        static::truyenthamso('Managers', EmployeeModel::getManager());
        static::CreateView("Department/allDepartment");
    }

    public static function showDepartment()
    {
        static::truyenthamso('Employees', EmployeeModel::allEmployee() );
        static::truyenthamso('Department', DepartmentModel::getDepartmentById($_GET['id']));
        static::CreateView("Department/showDepartment");
    }

    public static function createDepartment()
    {
        static::CreateView("Department/createDepartment");
    }

    public static function storeDepartment()
    {

        $name = $_REQUEST['name'];
        $office_number = $_REQUEST['office_number'];
        DepartmentModel::insertDepartment($name, $office_number);
        session_start();
        $_SESSION['message'] = 'Them thanh cong!';
        Header('Location: index.php');
    }

    public static function editDepartment()
    {
        static::truyenthamso('Department', DepartmentModel::getDepartmentById($_GET['id']));
        static::CreateView('Department/editDepartment');
    }

    public static function updateDepartment()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $office_number = $_POST['office_number'];

            DepartmentModel::updateDepartment($name, $office_number, $id);
            session_start();
            $_SESSION['message'] = 'Chinh sua thanh cong!';
        }
        Header('Location: index.php');
    }

    public static function deleteDepartment()
    {

        if (isset($_POST) && $_POST['_method'] == "DELETE") {
            $id = $_POST['id'];
            DepartmentModel::deleteDepartment($id);
            session_start();
            $_SESSION['message'] = 'Xoa thanh cong';
        }
        Header('Location: index.php');
    }
}

?>

