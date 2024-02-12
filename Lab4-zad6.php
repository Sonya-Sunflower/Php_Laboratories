<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

// Трейт, який містить методи для роботи з ім'ям
trait HasName {
    protected $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Трейт, який містить методи для роботи з курсом
trait HasCourse {
    protected $course;

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getCourse() {
        return $this->course;
    }
}

// Трейт, який містить методи для роботи з номером залікової книжки
trait HasStudentId {
    protected $studentId;

    public function setStudentId($studentId) {
        $this->studentId = $studentId;
    }

    public function getStudentId() {
        return $this->studentId;
    }
}

// Клас, який використовує трейти для реалізації множинного спадкування
class Student {
    use HasName, HasCourse, HasStudentId;

    public function __construct($name, $course, $studentId) {
        $this->setName($name);
        $this->setCourse($course);
        $this->setStudentId($studentId);
    }

    public function displayInfo() {
        echo "Name: " . $this->getName() . "\n";
        echo "Course: " . $this->getCourse() . "\n";
        echo "Student ID: " . $this->getStudentId() . "\n";
    }
}

// Створення об'єкта класу Student та виклик методу для відображення інформації
$student = new Student("John Doe", 3, "ABC123");
$student->displayInfo();

?>

</body>

</html>