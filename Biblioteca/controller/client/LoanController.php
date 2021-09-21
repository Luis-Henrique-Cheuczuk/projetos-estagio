<?php

require './models/Loan.php';

class LoanController
{

    public $loan;

    public function index()
    {
        $loans = (new Loan())->all();
        include './resources/views/client/loans.php';
    }

    public function show()
    {
        $this->loan = find();
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