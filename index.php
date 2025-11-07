<?php

$num1 = 0;
$num2 = 0;

while (true) {
    echo "\n=== КАЛЬКУЛЯТОР ===\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "0. Выход\n";
    echo "Выберите пункт: ";
    
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case '0':
            echo "Выход...\n";
            exit;
        default:
            echo "Функция еще не реализована!\n";
    }
}

?>
