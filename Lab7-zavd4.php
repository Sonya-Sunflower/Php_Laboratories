<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

// Інтерфейс обробника
interface Handler {
    public function setNext(Handler $handler);
    public function handleRequest($request);
}

// Обробник інформації про ім'я студента
class NameHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler) {
        $this->nextHandler = $handler;
    }

    public function handleRequest($request) {
        if ($request === "name") {
            return "John Doe"; // Повертаємо ім'я студента
        } elseif ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($request);
        } else {
            return null; // Якщо запит не знайдено
        }
    }
}

// Обробник інформації про курс студента
class CourseHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler) {
        $this->nextHandler = $handler;
    }

    public function handleRequest($request) {
        if ($request === "course") {
            return 3; // Повертаємо курс студента
        } elseif ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($request);
        } else {
            return null; // Якщо запит не знайдено
        }
    }
}

// Обробник інформації про номер залікової книжки студента
class StudentIdHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler) {
        $this->nextHandler = $handler;
    }

    public function handleRequest($request) {
        if ($request === "studentId") {
            return "ABC123"; // Повертаємо номер залікової книжки студента
        } elseif ($this->nextHandler !== null) {
            return $this->nextHandler->handleRequest($request);
        } else {
            return null; // Якщо запит не знайдено
        }
    }
}

// Створення ланцюга обробників
$nameHandler = new NameHandler();
$courseHandler = new CourseHandler();
$studentIdHandler = new StudentIdHandler();

$nameHandler->setNext($courseHandler);
$courseHandler->setNext($studentIdHandler);

// Виклик обробників для отримання інформації про студента
echo "Name: " . $nameHandler->handleRequest("name") . "\n";
echo "Course: " . $nameHandler->handleRequest("course") . "\n";
echo "Student ID: " . $nameHandler->handleRequest("studentId") . "\n";

?>


</body>

</html>