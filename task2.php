<!--Реализовать функцию с тремя параметрами: -->
<!--function mathOperation($arg1, $arg2, $operation), -->
<!--где $arg1, $arg2 – значения аргументов, -->
<!--$operation – строка с названием операции. -->
<!--В зависимости от переданного значения операции -->
<!--выполнить одну из арифметических операций (использовать функции из пункта 3) и -->
<!--вернуть полученное значение (использовать switch).-->

<?php
// Вспомогательная функция для сложения
function add($a, $b) {
    return $a + $b;
}

// Вспомогательная функция для вычитания
function subtract($a, $b) {
    return $a - $b;
}

// Вспомогательная функция для умножения
function multiply($a, $b) {
    return $a * $b;
}

// Вспомогательная функция для деления
function divide($a, $b) {
    if ($b == 0) {
        return "Ошибка: деление на ноль невозможно.";
    }
    return $a / $b;
}

// Основная функция для выполнения арифметической операции
function mathOperation($arg1, $arg2, $operation) {
    // Проверяем, что аргументы являются числами
    if (!is_numeric($arg1) || !is_numeric($arg2)) {
        return "Ошибка: оба аргумента должны быть числами.";
    }

    // Используем switch для выбора операции
    switch ($operation) {
        case 'add':  // Операция сложения
            return add($arg1, $arg2);
        case 'subtract':  // Операция вычитания
            return subtract($arg1, $arg2);
        case 'multiply':  // Операция умножения
            return multiply($arg1, $arg2);
        case 'divide':  // Операция деления
            return divide($arg1, $arg2);
        default:
            // Если передана некорректная операция
            return "Ошибка: неизвестная операция '$operation'. Используйте add, subtract, multiply или divide.";
    }
}

// Пример использования функции:
echo mathOperation(10, 5, 'add');  // 15
echo "\n";
echo mathOperation(10, 5, 'subtract');  // 5
echo "\n";
echo mathOperation(10, 5, 'multiply');  // 50
echo "\n";
echo mathOperation(10, 5, 'divide');  // 2
echo "\n";
echo mathOperation(10, 0, 'divide');  // Ошибка: деление на ноль невозможно.
echo "\n";
echo mathOperation(10, 5, 'modulus');  // Ошибка: неизвестная операция 'modulus'.
?>

