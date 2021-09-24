<?php

require_once './models/Book.php';

class BookControllerClient
{

    public $book;
    protected $id;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function index()
    {
        $booksClient = $this->book->all();
        include './resources/views/client/homePage.php';
    }

    public function show()
    {
        $this->book = find($this->id);
    }

//    public function create()
//    {
//
//    }
//
//    public function store()
//    {
//        //ação de criar livros
//        $books = (new Book())->create();
//        include './resources/views/client/homePage.php';
//    }
//
//    public function edit()
//    {
//        //chamar a tela de edição de livros
//    }
//
//    public function update()
//    {
//        //ação de editar livro
//    }
//
//    public function delete()
//    {
//        //ação de deletar o livro
//    }

}