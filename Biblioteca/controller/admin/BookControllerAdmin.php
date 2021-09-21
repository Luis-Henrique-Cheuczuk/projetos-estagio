<?php
    
require './models/Book.php';

class BookControllerAdmin
{

    public $book;

    public function index()
    {
        $books = (new Book())->all();
        include './resources/views/admin/homePage.php';
    }

    public function indexClient()
    {
        $booksClient = (new Book())->all();
        include './resources/views/client/homePage.php';
    }

    public function show(int $id)
    {
        $this->book = find($id);
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