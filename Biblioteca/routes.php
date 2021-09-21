<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/controller/LoginController.php';
require  __DIR__ . '/controller/RegisterController.php';

require __DIR__ . '/controller/admin/BookControllerAdmin.php';
require __DIR__ . '/controller/admin/NewBookController.php';
require __DIR__ . '/controller/admin/NewAdminClientController.php';

require __DIR__ . '/controller/client/BookControllerClient.php';
require __DIR__ . '/controller/client/LoanController.php';
require __DIR__ . '/controller/client/HistoricController.php';
require __DIR__ . '/controller/client/DataUserController.php';

switch ($request) {
    //Tela login
    case '/' :
        (new LoginController())->index();
        break;

    //Register
    case '/register' :
        (new RegisterController())->index();
        break;


    //Routes Admin
    case '/home_admin' :
        (new BookControllerAdmin())->index();
        break;
    case '/register_adminUser' :
        (new NewAdminClientController())->index();
        break;
    case '/add_book' :
        (new NewBookController())->index();
        break;

    //Routes User
    case '/home_user' :
        (new BookControllerClient())->index();
        break;
    case '/loans' :
        (new LoanController())->index();
        break;
    case '/historic' :
        (new HistoricController())->index();
        break;
    case '/data_user' :
        (new DataUserController())->index();
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/resources/views/404.php';
        break;
}