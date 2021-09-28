<?php

require './models/Loan.php';

class LoanController
{

    public $loan;
    protected $id;

    public function __construct()
    {
        $this->loan = new Loan();
    }

    public function index()
    {
        $usersloans = $this->loan->all();
        include './resources/views/client/loans.php';
    }

    public function show()
    {
        $this->loan = find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {
        //ação de criar livros
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