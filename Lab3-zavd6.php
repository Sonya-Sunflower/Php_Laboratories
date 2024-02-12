<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    interface Figure
    {
        public function draw();
        public function erase();
        public function move();
        public function getColor();
        public function setColor($color);
    }

    class Circle implements Figure
    {
        private $color;

        public function __construct($color)
        {
            $this->color = $color;
        }

        public function draw()
        {
            echo "Drawing a circle.<br>";
        }

        public function erase()
        {
            echo "Erasing a circle.<br>";
        }

        public function move()
        {
            echo "Moving a circle.<br>";
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }
    }

    class Square implements Figure
    {
        private $color;

        public function __construct($color)
        {
            $this->color = $color;
        }

        public function draw()
        {
            echo "Drawing a square.<br>";
        }

        public function erase()
        {
            echo "Erasing a square.<br>";
        }

        public function move()
        {
            echo "Moving a square.<br>";
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }
    }

    class Triangle implements Figure
    {
        private $color;

        public function __construct($color)
        {
            $this->color = $color;
        }

        public function draw()
        {
            echo "Drawing a triangle.<br>";
        }

        public function erase()
        {
            echo "Erasing a triangle.<br>";
        }

        public function move()
        {
            echo "Moving a triangle.<br>";
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }
    }

    // Демонстрація використання класів
    echo "Circle<br>";
    $circle = new Circle("Red");
    $circle->draw();
    $circle->erase();
    $circle->move();
    echo "Color: " . $circle->getColor() . "<br>------------------------------<br>";

    echo "Square<br>";
    $square = new Square("Blue");
    $square->draw();
    $square->erase();
    $square->move();
    echo "Color: " . $square->getColor() . "<br>------------------------------<br>";

    echo "Triangle<br>";
    $triangle = new Triangle("Green");
    $triangle->draw();
    $triangle->erase();
    $triangle->move();
    echo "Color: " . $triangle->getColor() . "<br>------------------------------<br>";
    ?>

</body>

</html>