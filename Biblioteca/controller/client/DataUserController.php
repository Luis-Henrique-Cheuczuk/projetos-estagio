<?php

require_once './models/User.php';

class DataUserController
{

    public $data_client;
    protected $id;

    public function __construct()
    {
        $this->data_client = new User();
    }

    public function index()
    {
        $data_clients = $this->data_client->oneToMany('loans', 'user_id', 'id');
        include './resources/views/client/dataUser.php';
    }

    public function show()
    {
        $this->data_client = find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {
        //ação de criar livros
        $books = (new Book())->create();
        include './resources/views/client/homePage.php';
    }

    public function edit()
    {
        //chamar a tela de edição de livros
    }

    public function update()
    {
        //ação de editar livro
    }

    public function delete()
    {
        //ação de deletar o livro
    }

}