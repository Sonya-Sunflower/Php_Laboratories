<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    interface Int1
    {
        public function func1();
    }

    interface Int2
    {
        public function func2();
    }

    class MyClass implements Int1, Int2
    {
        public function func1()
        {
            echo 1;
        }

        public function func2()
        {
            echo 2;
        }
    }

    // Створення об'єкту класу MyClass
    $obj = new MyClass;

    // Виклик методів інтерфейсів через об'єкт
    $obj->func1();
    echo "<br>";
    $obj->func2();
    ?>

</body>

</html>