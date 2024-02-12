<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

// Клас-прототип для студента
class StudentPrototype {
    protected $name;
    protected $course;
    protected $studentId;

    // Конструктор
    public function __construct($name, $course, $studentId) {
        $this->name = $name;
        $this->course = $course;
        $this->studentId = $studentId;
    }

    // Метод для клонування об'єкта
    public function clone() {
        return clone $this;
    }

    // Методи доступу до властивостей
    public function getName() {
        return $this->name;
    }

    public function getCourse() {
        return $this->course;
    }

    public function getStudentId() {
        return $this->studentId;
    }
}

// Створення прототипу студента
$studentPrototype = new StudentPrototype("John Doe", 3, "ABC123");

// Клонування прототипу для створення нового студента
$newStudent1 = $studentPrototype->clone();
$newStudent2 = $studentPrototype->clone();

// Виведення інформації про нових студентів
echo "New Student 1:\n";
echo "Name: " . $newStudent1->getName() . "\n";
echo "Course: " . $newStudent1->getCourse() . "\n";
echo "Student ID: " . $newStudent1->getStudentId() . "\n";

echo "\nNew Student 2:\n";
echo "Name: " . $newStudent2->getName() . "\n";
echo "Course: " . $newStudent2->getCourse() . "\n";
echo "Student ID: " . $newStudent2->getStudentId() . "\n";

?>



</body>

</html>