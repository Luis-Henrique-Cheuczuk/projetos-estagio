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
    case '/add_book' :
        (new BookControllerAdmin())->create();
        break;
    case '/edit_book' :
        (new BookControllerAdmin())->edit();
        break;
    case '/update_book' :
        (new BookControllerAdmin())->update();
        header("Location: /home_admin");
        break;
    case '/store_book' :
        (new BookControllerAdmin())->store();
        header("Location: /home_admin");
        break;
    case '/delete_book' :
        (new BookControllerAdmin())->delete();
        header("Location: /home_admin");
        break;

    case '/register_adminUser' :
        (new NewAdminClientController())->create();
        break;
    case '/store_user' :
        (new NewAdminClientController())->store();
        header("Location: /home_admin");
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