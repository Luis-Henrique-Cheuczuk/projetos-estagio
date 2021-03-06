<?php


require_once './models/User.php';

class RegisterController
{

    public $register;
    protected $id;
    protected $data_user;
    protected $data;

    public function __construct()
    {
        $this->register = new User();
        $this->data_user = array
        (
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "name" => $_POST['name'],
            "phone" => $_POST['phone'],
            "is_admin" => false,
            "created_at" => NULL,
            "updated_at" => NULL,
            "deleted_at" => NULL
        );
        $this->data = array
        (
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "name" => $_POST['name'],
            "phone" => $_POST['phone'],
            "is_admin" => (!!$_POST['type_user']),
            "created_at" => NULL,
            "updated_at" => NULL,
            "deleted_at" => NULL
        );
    }

    public function index()
    {
        $this->register->all();
        include './resources/views/register.php';
    }

    public function indexClientAdmin()
    {
        $this->register->all();
        include './resources/views/admin/register.php';
    }

    public function show()
    {
        $this->register->find($this->id);
    }

    public function create()
    {
        include './resources/views/register.php';
    }

    public function createClientAdmin()
    {
        include './resources/views/admin/register.php';
    }

    public function store()
    {
        //ação de criar usuario
        $this->register->create($this->data_user);
    }

    public function storeClientAdmin()
    {
        //ação de criar usuario
        $this->register->create($this->data);
    }

    public function edit()
    {
        include './resources/views/admin/updateBook.php';
    }

    public function updateClientAdmin()
    {
        $books_update = $this->register->update($this->id, $this->data);
    }

    public function deleteClientAdmin()
    {
        //ação de deletar user
    }

}