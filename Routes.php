<?php


// kohng can require class Route vi da duoc autoload

//Route::set('index.php', function () {
//    Controller::CreateView('Index');
//});

Route::set('about-us', function () {
//    AboutUs::CreateView('AboutUs');
    PagesController::aboutpage();

});

Route::set('contact-us', function () {
    ContactUs::CreateView("ContactUs");
});


// Cac route User

Route::set('allUser', function () {
    UserController::allUser();
});


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


/* Trang login */

Route::set('login', function () {
    Controller::CreateView("login");
});

Route::set('logout', function () {
    LoginController::dangxuat();
});


Route::set('dangnhap', function () {
    LoginController::dangnhap();
});




/* Employee */

Route::set('employees', function () {
    EmployeeController::allEmployee();
});

Route::set('showEmployee', function () {
    EmployeeController::showEmployee();
});


Route::set('createEmployee', function () {
    EmployeeController::createEmployee();
});

Route::set('storeEmployee', function () {
    EmployeeController::storeEmployee();
});


Route::set('editEmployee', function () {
    EmployeeController::editEmployee();
});

Route::set('updateEmployee', function () {
    EmployeeController::updateEmployee();
});


Route::set('deleteEmployee', function () {
    EmployeeController::deleteEmployee();
});


/* Department */
Route::set('index.php', function () {
    DepartmentController::allDepartment();
});

Route::set('showDepartment', function () {
    DepartmentController::showDepartment();
});


Route::set('createDepartment', function () {
    DepartmentController::createDepartment();
});

Route::set('storeDepartment', function () {
    DepartmentController::storeDepartment();
});


Route::set('editDepartment', function () {
    DepartmentController::editDepartment();
});

Route::set('updateDepartment', function () {
    DepartmentController::updateDepartment();
});


Route::set('deleteDepartment', function () {
    DepartmentController::deleteDepartment();
});

?>


