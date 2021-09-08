<?php

require 'Models/User.php';
    $uUser = new User();

    //Listando users no banco
   $users = $uUser->loans();
   echo $users;

    
    //Dados do banco
   /*  $data = [
        'email' => 'teste2@gmail.com',
        'password' => '12345678901234',
        'name' => 'teste2',
        'phone' => '(42) 99999-2222',
        'is_admin' => false
    ];

    //Criar no banco
    $user = $uUser->create($data); */

    //Update no banco
    /* $user = $uUser->update(3, $data);*/
    
    //Delete no banco
    /* $user = $uUser->delete(2); */

    /* $user = $uUser->loans(1, 1); */
 
//---------------------------------------------------------
/* require 'Models/Book.php';

 $books = new Book(); */

    //Listando books no banco
    /* $book = $books->loans();
    echo $book; */

    
    //Criando/alterando no banco

    /* $data = [
        'name' => 'Teste_Title_2',
        'description' => 'Description',
        'author' => 'Teste_2',
        'category' => 'Action',
        'status' => 'pending',
        'quantity' => 1
    ];

    //Criar no banco
    $book = $books->create($data); */

    //Update no banco
    /* $book = $books->update(1, $data); */
    
    //Delete no banco
    /* $book = $books->delete(1); */

//---------------------------------------------------------
/* require 'Models/Loan.php';

 $loans = new Loan(); */

    //Listando empréstimos no banco
    /* $loan = $loans->loanOneToOne();
    echo $loan;  */

    
    //Criando/alterando no banco

    /* $data = [
        'date_start' => '2020-09-07 23:59:59',
        'date_end' => '2020-09-12 18:59:59',
        'user_id' => '2',
        'book_id' => '2',
    ];  */

    //Criar no banco
    /* $loan = $loans->create($data);  */


    /*//Update no banco
    $loan = $loans->update(2, $data);*/
    
    //Delete no banco
    /* $loan = $loans->delete(2); */