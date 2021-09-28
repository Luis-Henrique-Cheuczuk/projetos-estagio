<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/controller/LoginController.php';
require  __DIR__ . '/controller/RegisterController.php';

require __DIR__ . '/controller/admin/BookControllerAdmin.php';
require __DIR__ . '/controller/admin/NewBookController.php';
require  __DIR__ . '/controller/admin/UserControllerAdmin.php';

require __DIR__ . '/controller/client/BookControllerClient.php';
require __DIR__ . '/controller/client/LoanController.php';
require __DIR__ . '/controller/client/HistoricController.php';
require __DIR__ . '/controller/client/DataUserController.php';

switch ($request) {
    //Tela login
    case '/' :
        (new LoginController())->index();
        break;
    case '/login' :
        (new LoginController())->validation();
        break;

    //Register
    case '/register' :
        (new RegisterController())->create();
        break;
    case '/store_register' :
        (new RegisterController())->store();
        header("Location: /");
        break;


    //Routes Admin
    case '/admin/home_admin' :
        (new BookControllerAdmin())->index();
        break;
    case '/admin/add_book' :
        (new BookControllerAdmin())->create();
        break;
    case '/admin/edit_book' :
        (new BookControllerAdmin())->edit();
        break;
    case '/admin/update_book' :
        (new BookControllerAdmin())->update();
        header("Location: /admin/home_admin");
        break;
    case '/admin/store_book' :
        (new BookControllerAdmin())->store();
        header("Location: /admin/home_admin");
        break;
    case '/admin/delete_book' :
        (new BookControllerAdmin())->delete();
        header("Location: /admin/home_admin");
        break;

    case '/admin/register_adminUser' :
        (new RegisterController())->createClientAdmin();
        break;
    case '/admin/store_user' :
        (new RegisterController())->storeClientAdmin();
        header("Location: /admin/home_admin");
        break;
    case '/admin/list_user' :
        (new UserControllerAdmin())->index();
        break;
    case '/admin/data_user' :
        (new UserControllerAdmin())->edit();
        break;
    case '/admin/update_user' :
        (new UserControllerAdmin())->update();
        header("Location: /admin/list_user");
        break;
    case '/admin/delete_user' :
        (new UserControllerAdmin())->delete();
        header("Location: /admin/home_admin");
        break;


    //Routes User
    case '/client/home_user' :
        (new BookControllerClient())->index();
        break;
    case '/client/loans' :
            (new LoanController())->index();
        break;
    case '/client/historic' :
        (new HistoricController())->index();
        break;
    case '/client/data_user' :
        (new DataUserController())->edit();
        break;
    case '/client/update_data_user' :
        (new DataUserController())->update();
        header("Location: /client/home_user");
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/resources/views/404.php';
        break;
}