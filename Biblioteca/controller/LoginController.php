<?php


require_once './models/User.php';

class LoginController
{

    public $login;

    public function index()
    {
        $logins = (new User())->all();
        include './resources/views/login.php';
    }

    public function show(int $id)
    {
        $this->login = find($id);
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
