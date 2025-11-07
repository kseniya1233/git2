<?php

$num1 = 0;
$num2 = 0;
$numbers_set = false;

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
        case '1':
            echo "Введите первое число: ";
            $num1 = (float)trim(fgets(STDIN));
            echo "Введите второе число: ";
            $num2 = (float)trim(fgets(STDIN));
            $numbers_set = true;
            echo "Числа сохранены: $num1 и $num2\n";
            break;
            
        case '2':
            if (!$numbers_set) {
                echo "Сначала введите числа (пункт 1)!\n";
                break;
            }
            $result = $num1 + $num2;
            echo "Результат: $num1 + $num2 = $result\n";
            break;
            
        case '3':
            if (!$numbers_set) {
                echo "Сначала введите числа (пункт 1)!\n";
                break;
            }
            $result = $num1 - $num2;
            echo "Результат: $num1 - $num2 = $result\n";
            break;
            
        case '4':
            if (!$numbers_set) {
                echo "Сначала введите числа (пункт 1)!\n";
                break;
            }
            if ($num2 == 0) {
                echo "Ошибка: деление на ноль!\n";
            } else {
                $result = $num1 / $num2;
                echo "Результат: $num1 / $num2 = $result\n";
            }
            break;
            
        case '5':
            if (!$numbers_set) {
                echo "Сначала введите числа (пункт 1)!\n";
                break;
            }
            $result = pow($num1, $num2);
            echo "Результат: $num1 ^ $num2 = $result\n";
            break;
            
        case '0':
            echo "Выход...\n";
            exit;
            
        default:
            echo "Неверный выбор!\n";
    }
}

?>

