<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/controller/admin/BookController.php';

switch ($request) {
    case '/' :
        /* require __DIR__ . '/resources/views/login.php'; */
        
        break;
    //Routes Admin
    case '/home_admin' :
        (new BookController())->index();
        break;
    case '/register_adminUser' :
        require __DIR__ . '/resources/views/admin/register.php';
        break;

    //Register
    case '/register' :
        require __DIR__ . '/resources/views/client/register.php';
        break;

    //Routes User
    case '/home_user' :
        require __DIR__ . '/resources/views/client/homePage.php';
        break;
    case '/loans' :
        require __DIR__ . '/resources/views/client/loans.php';
        break;
    case '/historic' :
        require __DIR__ . '/resources/views/client/historic.php';
        break;
    case '/data_user' :
        require __DIR__ . '/resources/views/client/dataUser.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/resources/views/404.php';
        break;
}