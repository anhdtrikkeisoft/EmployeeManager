<?php

// kohng can require class Route vi da duoc autoload

Route::set('index.php', function () {
    Controller::CreateView('Index');
});

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


?>