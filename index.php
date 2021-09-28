<?php
require 'Route.class.php';

use Controller\Route as Route;

Route::get('/', function() {
    return "/View/home.php";
});

Route::get('/home', function() {
    return "/View/home.php";
});
Route::get('/login', function() {
    return "/View/Auth/login.php";
});
Route::get('/register', function() {
    return "/View/Auth/register.php";
});



$action = $_SERVER['REQUEST_URI'];
Route::run($action);
