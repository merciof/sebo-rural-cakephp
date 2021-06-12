<?php

namespace App\Controller;

use Cake\Controller\Controller;

class BooksController extends Controller {


     public function index () {
        
        $books = $this->Books->find()->fetchAll();

        $this->set('books', $books);

        $this->render('index');


     }   



}