<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

// Інтерфейс, який вимагається для використання
interface StudentInfo {
    public function getName();
    public function getCourse();
    public function getStudentId();
}

// Клас, який має ім'я, курс та номер залікової книжки
class Student {
    private $name;
    private $course;
    private $studentId;

    public function __construct($name, $course, $studentId) {
        $this->name = $name;
        $this->course = $course;
        $this->studentId = $studentId;
    }

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

// Адаптер для класу Student
class StudentAdapter implements StudentInfo {
    private $student;

    public function __construct(Student $student) {
        $this->student = $student;
    }

    public function getName() {
        return $this->student->getName();
    }

    public function getCourse() {
        return $this->student->getCourse();
    }

    public function getStudentId() {
        return $this->student->getStudentId();
    }
}

// Використання адаптера
$student = new Student("John Doe", 3, "ABC123");
$adapter = new StudentAdapter($student);

echo "Name: " . $adapter->getName() . "\n";
echo "Course: " . $adapter->getCourse() . "\n";
echo "Student ID: " . $adapter->getStudentId() . "\n";

?>


</body>

</html>