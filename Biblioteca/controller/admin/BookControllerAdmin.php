<?php
    
require './models/Book.php';

class BookControllerAdmin
{

    public $book;
    protected $id;
    protected $data;

    public function __construct()
    {
        $this->book = new Book();
        $this->data = array
        (
            "name" => $_POST['name'],
            "description" => $_POST['description'],
            "author" => $_POST['author'],
            "category" => $_POST['category'],
            "status" => $_POST['status'],
            "quantity" => 1,
            "created_at" => NULL,
            "updated_at" => NULL,
            "deleted_at" => NULL
        );
        $this->id = $_POST['id'];
    }

    public function index()
    {
        $books = $this->book->all();
        include './resources/views/admin/homePage.php';
    }

    public function show()
    {
        $this->book = find($this->id);
    }

    public function create()
    {
        include './resources/views/admin/newBook.php';
    }

    public function store() 
    {
        //ação de criar livros
        $books = $this->book->create($this->data);
    }

    public function edit()
    {
        $id = $_POST['id'];
        $book = (new Book())->find($id);
        include './resources/views/admin/updateBook.php';
    }

    public function update()
    {
        $this->book->update($this->id, $this->data);
    }

    public function delete()
    {
        //ação de deletar o livro
    }

}