<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<?php

// Абстрактний клас, який визначає методи для створення студентів
abstract class StudentFactory {
    abstract public function createBachelorStudent($name, $course, $id);
    abstract public function createMasterStudent($name, $course, $id);
}

// Абстрактний клас для представлення студента
abstract class Student {
    protected $name;
    protected $course;
    protected $id;

    public function __construct($name, $course, $id) {
        $this->name = $name;
        $this->course = $course;
        $this->id = $id;
    }

    abstract public function getInfo();
}

// Конкретний клас, що реалізує студента бакалаврату
class BachelorStudent extends Student {
    public function getInfo() {
        return "Bachelor Student: Name - " . $this->name . ", Course - " . $this->course . ", ID - " . $this->id;
    }
}

// Конкретний клас, що реалізує студента магістратури
class MasterStudent extends Student {
    public function getInfo() {
        return "Master Student: Name - " . $this->name . ", Course - " . $this->course . ", ID - " . $this->id;
    }
}

// Конкретна фабрика, що створює студентів бакалаврату та магістратури
class ConcreteStudentFactory extends StudentFactory {
    public function createBachelorStudent($name, $course, $id) {
        return new BachelorStudent($name, $course, $id);
    }

    public function createMasterStudent($name, $course, $id) {
        return new MasterStudent($name, $course, $id);
    }
}

// Використання абстрактної фабрики та створення студентів
$factory = new ConcreteStudentFactory();

$bachelorStudent = $factory->createBachelorStudent("John Doe", 3, "ABC123");
echo $bachelorStudent->getInfo() . "\n";

$masterStudent = $factory->createMasterStudent("Jane Smith", 1, "DEF456");
echo $masterStudent->getInfo() . "\n";

?>

</body>

</html>