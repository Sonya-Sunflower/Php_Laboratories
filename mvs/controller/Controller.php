<?php
include_once("model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if (isset($_GET['book'])) {
            // show the requested book
            $book = $this->model->getBook($_GET['book']); // Передача ідентифікатора книги
            include 'view/viewbook.php';
        } elseif (isset($_GET['search'])) {
            // search for books
            $searchTerm = $_GET['search'];
            $books = $this->model->searchBooks($searchTerm);
            include 'view/booklist.php';
        } else {
            // show all available books
            $books = $this->model->getBookList(); // Виклик методу getBookList(), якщо не передано параметрів
            include 'view/booklist.php';
        }
    }
}
