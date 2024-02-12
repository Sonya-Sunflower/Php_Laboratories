<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    interface ILogger
    {
        public function log($date, $time, $message);
    }

    class FileLogger implements ILogger
    {
        private $logFilePath;

        public function __construct($logFilePath)
        {
            $this->logFilePath = $logFilePath;
        }

        public function log($date, $time, $message)
        {
            // Open the file in append mode
            $file = fopen($this->logFilePath, 'a');

            if ($file) {
                // Write log data to the file
                fwrite($file, "Date - $date, Time - $time, Message - $message\n");

                // Close the file
                fclose($file);
            } else {
                echo "Unable to open the log file for writing.";
            }
        }
    }

    abstract class Coor
    {
        private $firstName = "";
        private $lastName = "";

        public function setName($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function getName()
        {
            return "$this->firstName $this->lastName";
        }

        abstract public function showWelcomeMessage();
    }

    class Visitor extends Coor
    {
        public function showWelcomeMessage()
        {
            echo "Hi " . $this->getName() . ", welcome to our shop! To buy something, please, register!<br>";
        }

        public function newMessage($subject)
        {
            echo "Creating new message $subject<br>";
        }
    }

    class Shopper extends Coor
    {
        public function showWelcomeMessage()
        {
            echo "Hi " . $this->getName() . ", welcome to our online store!<br>";
        }

        public function addToCart($item)
        {
            echo "Adding $item to cart<br>";
        }
    }

    // Демонстрація роботи з FileLogger
    $fileLogger = new FileLogger("log.txt");
    $fileLogger->log(date("Y-m-d"), date("H:i:s"), "This is a log message");

    // Демонстрація використання showWelcomeMessage()
    $visitor = new Visitor();
    $visitor->setName("Jane", "Doe");
    $visitor->showWelcomeMessage();

    $shopper = new Shopper();
    $shopper->setName("Mary", "Brooks");
    $shopper->showWelcomeMessage();
    ?>

</body>

</html>