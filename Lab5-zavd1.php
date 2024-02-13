<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        class Db
        {
            private static $instance;
            private $db;

            private function __construct()
            {
                echo "<h1>Connecting with database</h1>";
                $this->db = new mysqli('localhost', 'root', '');

                if ($this->db->connect_error) {
                    throw new Exception("Connection error : ");
                }

                $this->db->query("SET NAMES 'UTF8'");
            }

            public static function getInstance()
            {
                if (self::$instance === null) {
                    self::$instance = new self;
                }

                return self::$instance;
            }

            public function get_data()
            {
                $query = "SELECT * FROM menu";
                $result = $this->db->query($query);
                $row = [];

                for ($i = 0; $i < $result->num_rows; $i++) {
                    $row[] = $result->fetch_assoc();
                }

                return $row;
            }
        }

        $obj1 = Db::getInstance();
        $obj2 = Db::getInstance();
        $obj3 = Db::getInstance();
        ?>
</body>

</html>