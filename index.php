<?php
require 'Controller/Route.class.php';

use Controller\Route as Route;

Route::get('/', function() {
    return "/home.php";
});

Route::get('/home', function() {
    return "/home.php";
});
Route::get('/login', function() {
    return "/login.php";
});
Route::get('/register', function() {
    return "/register.php";
});



$action = $_SERVER['REQUEST_URI'];
Route::run($action);
