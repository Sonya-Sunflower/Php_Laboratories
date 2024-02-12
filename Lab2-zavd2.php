<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Батьківський клас "Студент"
class Student {
    public $name;
    public $course;
    public $id;

    // Конструктор класу
    public function __construct($name, $course, $id) {
        $this->name = $name;
        $this->course = $course;
        $this->id = $id;
    }

    // Деструктор класу
    public function __destruct() {
        echo "Student object destructed.\n";
    }

    // Метод виведення інформації про студента на екран
    public function showInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
        echo "ID: " . $this->id . "\n";
    }
}

// Похідний клас "Студент-дипломник"
class DiplomaStudent extends Student {
    public $thesis;

    // Конструктор класу з темою диплома
    public function __construct($name, $course, $id, $thesis) {
        parent::__construct($name, $course, $id);
        $this->thesis = $thesis;
    }

    // Деструктор класу
    public function __destruct() {
        parent::__destruct();
        echo "DiplomaStudent object destructed.\n";
    }
}

// Створення об'єкта класу Student
$student1 = new Student("John Doe", 3, "ABC123");

// Виведення інформації про студента на екран
echo "Information for Student:\n";
$student1->showInfo();

// Створення об'єкта класу DiplomaStudent
$diploma_student = new DiplomaStudent("Jane Smith", 4, "DEF456", "Advanced Topics in Computer Science");

// Виведення інформації про студента-дипломника на екран
echo "\nInformation for Diploma Student:\n";
$diploma_student->showInfo();
echo "Thesis: " . $diploma_student->thesis . "\n";

?>

</body>
</html>
