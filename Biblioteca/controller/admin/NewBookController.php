<?php


require_once './models/User.php';

class NewBookController
{

    public $new_book;
    protected $id;

    public function __construct()
    {
        $this->new_book = new Book();
    }

    public function index()
    {
        $new_books = $this->new_book->all();
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
        include './resources/views/admin/newBook.php';
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