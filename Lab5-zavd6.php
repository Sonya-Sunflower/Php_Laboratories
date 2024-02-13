<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Student {
    public $name;
    public $course;
    public $id;
    private $tuition_fee; // Додане приватне поле

    // Конструктор класу
    public function __construct($name, $course, $id, $tuition_fee) {
        $this->name = $name;
        $this->course = $course;
        $this->id = $id;
        $this->tuition_fee = $tuition_fee;
    }

    // Метод для встановлення значення поля name
    public function setName($name) {
        $this->name = $name;
    }

    // Метод для отримання значення поля name
    public function getName() {
        return $this->name;
    }

    // Метод для встановлення значення поля course
    public function setCourse($course) {
        $this->course = $course;
    }

    // Метод для отримання значення поля course
    public function getCourse() {
        return $this->course;
    }

    // Метод для встановлення значення поля id
    public function setId($id) {
        $this->id = $id;
    }

    // Метод для отримання значення поля id
    public function getId() {
        return $this->id;
    }

    // Приватний метод, який демонструє механізм звернення до приватного методу усередині класу
    private function calculateTotalFee() {
        // Цей метод може бути використаний усередині класу для обчислення загальної плати
        return $this->course * $this->tuition_fee;
    }

    // Метод для виведення на екран значення полів класу
    public function show() {
        echo "Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
        echo "ID: " . $this->id . "\n";
        echo "Tuition Fee: " . $this->calculateTotalFee() . "\n"; // Викликаємо приватний метод
    }

    // Метод для пошуку за ім'ям
    public function search($query) {
        return $this->name === $query;
    }

    // Метод для виведення масиву об'єктів класу на екран
    public static function show_objects($students) {
        foreach ($students as $student) {
            $student->show();
            echo "-----------------------------------\n";
        }
    }
}

// Фабричний клас для створення об'єктів класу Student
class StudentFactory {
    public static function createStudent($name, $course, $id, $tuition_fee) {
        return new Student($name, $course, $id, $tuition_fee);
    }
}

// Створення масиву об'єктів класу Student за допомогою фабрики
$students = array(
    StudentFactory::createStudent("John Doe", 2, "ABC123", 1000),
    StudentFactory::createStudent("Jane Smith", 3, "DEF456", 1200),
    StudentFactory::createStudent("Michael Johnson", 1, "GHI789", 900),
    StudentFactory::createStudent("Emily Davis", 4, "JKL012", 1500),
    StudentFactory::createStudent("David Wilson", 2, "MNO345", 1100)
);

// Виклик методу для виведення масиву об'єктів класу на екран
Student::show_objects($students);

?>

</body>
</html>