<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class TextFileHandler {
    private $input_file;
    private $output_file;

    // Конструктор класу, приймає ім'я вхідного і вихідного файлів
    public function __construct($input_file, $output_file) {
        $this->input_file = $input_file;
        $this->output_file = $output_file;
    }

    // Метод для читання чисел з вхідного файлу та запису їх у стовпчик у вихідний файл
    public function convertToColumn() {
        // Отримуємо вміст вхідного файлу
        $numbers_str = file_get_contents($this->input_file);

        // Розбиваємо рядок на масив чисел
        $numbers = explode(" ", $numbers_str);

        // Відкриваємо вихідний файл для запису
        $output_handle = fopen($this->output_file, "w");

        // Записуємо числа у стовпчик у вихідний файл
        foreach ($numbers as $number) {
            fwrite($output_handle, $number . PHP_EOL); // PHP_EOL - рядкова константа, яка додає символ нового рядка в залежності від операційної системи
        }

        // Закриваємо вихідний файл
        fclose($output_handle);
    }
}

// Створюємо об'єкт класу TextFileHandler з вказанням імені вхідного і вихідного файлів
$text_handler = new TextFileHandler("input.txt", "output.txt");

// Викликаємо метод для конвертації чисел у стовпчик
$text_handler->convertToColumn();

?>



</body>
</html>

