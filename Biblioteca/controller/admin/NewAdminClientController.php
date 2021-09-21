<?php

require_once './models/User.php';

class NewAdminClientController
{

    public $new_admin_client;

    public function index()
    {
        $new_admins_clients = (new User())->all();
        include './resources/views/admin/register.php';
    }

    public function show(int $id)
    {
        $this->new_admin_client = find($id);
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
