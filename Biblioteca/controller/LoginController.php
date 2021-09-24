<?php


require_once './models/User.php';

class LoginController
{

    public $login;
    protected $id;

    public function __construct()
    {
        $this->login = new User();
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
