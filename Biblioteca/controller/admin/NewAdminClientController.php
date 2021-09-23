<?php

require_once './models/User.php';

class NewAdminClientController
{

    public $user;
    protected $id;
    protected $data;

    public function __construct()
    {
        $this->user = new User();
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
//        $this->id = $_POST['id'];
    }

    public function index()
    {
        $this->user->all();
        include './resources/views/admin/register.php';
    }

    public function show()
    {
        $this->user = find($this->id);
    }

    public function create()
    {
        include './resources/views/admin/register.php';
    }

    public function store()
    {
        //ação de criar livros
        $this->user->create($this->data);
    }

    public function edit()
    {
        include './resources/views/admin/updateBook.php';
    }

    public function update()
    {
        $books_update = $this->user->update($this->id, $this->data);
    }

    public function delete()
    {
        //ação de deletar o livro
    }

}