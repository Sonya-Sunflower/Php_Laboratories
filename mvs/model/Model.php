<?php
include_once("model/Book.php");

class Model
{
    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'bookstore';
        $username = 'root';

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getBookList()
    {
        $stmt = $this->pdo->query("SELECT books.*, authors.last_name, authors.first_name, authors.country 
                                   FROM books 
                                   LEFT JOIN authors ON books.author_id = authors.id");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }


    public function getBook($id)
    {
        $stmt = $this->pdo->prepare("SELECT books.*, authors.last_name, authors.first_name, authors.country 
                                 FROM books 
                                 LEFT JOIN authors ON books.author_id = authors.id
                                 WHERE books.id = :id");
        $stmt->execute(array(':id' => $id));
        $book = $stmt->fetch(PDO::FETCH_ASSOC);
        return $book;
    }


    public function searchBooks($searchTerm)
    {
        $stmt = $this->pdo->prepare("SELECT books.*, authors.last_name, authors.first_name 
                                     FROM books 
                                     LEFT JOIN authors ON books.author_id = authors.id
                                     WHERE books.title LIKE :searchTerm 
                                     OR books.description LIKE :searchTerm 
                                     OR authors.last_name LIKE :searchTerm 
                                     OR authors.first_name LIKE :searchTerm");
        $stmt->execute(array(':searchTerm' => '%' . $searchTerm . '%'));
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }
}
