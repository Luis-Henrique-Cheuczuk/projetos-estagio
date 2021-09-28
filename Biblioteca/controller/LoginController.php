<?php
session_start();

require_once './models/User.php';

class LoginController
{

    public $login;
    protected $id, $email, $password, $is_admin;

    public function __construct()
    {
        $this->login = new User();
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->is_admin = $_POST['type_user'];
    }

    public function validation()
    {
        $login = $this->login->validation($this->email, $this->password);
//        var_dump($login);
        if(($login == "f")) {
            header("Location: /client/home_user");
        }else if (($login == "t")){
                    header("Location: /admin/home_admin");
            }
        else
            header("Location: /");
    }

    public function index()
    {
        $logins = $this->login->all();
        include './resources/views/login.php';
    }

    public function show()
    {
        $this->login = find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
