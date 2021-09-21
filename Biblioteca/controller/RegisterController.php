<?php


require_once './models/User.php';

class RegisterController
{

    public $register;

    public function index()
    {
        $registers = (new User())->all();
        include './resources/views/register.php';
    }

    public function show(int $id)
    {
        $this->register = find($id);
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
