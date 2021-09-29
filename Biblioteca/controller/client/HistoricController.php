<?php

require_once './models/Loan.php';

class HistoricController
{

    public $historic;
    protected $id;

    public function __construct()
    {
        $this->historic = new Loan();
    }

    public function index()
    {
        $historics = $this->historic->all();
        include './resources/views/client/historic.php';
    }

    public function show()
    {
        $this->historic = find($this->id);
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