<?php


require_once './models/User.php';

class NewBookController
{

    public $new_book;

    public function index()
    {
        $new_books = (new Book())->all();
        include './resources/views/admin/newBook.php';
    }

    public function show(int $id)
    {
        $this->new_book = find($id);
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