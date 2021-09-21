<?php

require_once './models/User.php';

class DataUserController
{

    public $data_client;

    public function index()
    {
        $data_clients = (new User())->all();
        include './resources/views/client/dataUser.php';
    }

    public function show(int $id)
    {
        $this->data_client = find($id);
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