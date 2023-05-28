// Задание 1.
// Дан массив целых чисел. Напишите функцию, которая получает данный массив в качестве аргумента и сортирует его по возрастанию.
// Решение 1.
// Напишем свою сортировку пузырьком и улучшенный ее вариант - сортировку выбором.

<?php
function bubbleSortArray(array $arr) : array
{
    // получаем длину массива
    $n = count($arr);

    // внешний цикл для определения количества проходов по массиву
    for ($i = 0; $i < $n-1; $i++) {
        $flag = true;
        // внутренний цикл для сравнения соседних элементов и их перестановки
        for ($j = 0; $j < $n-$i-1; $j++) {
            // если элементы расположены не по порядку, меняем их местами
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $flag = false;
            }
        }
        // если ни одной перестановки не было сделано, то цикл прерывается
        if ($flag == true) {
            break;
        }
    }
    return $arr;
};

function selectionSortArray(array $arr) : array
{
    // получаем длину массива
    $n = count($arr);

    // внешний цикл для прохода по всем элементам массива
    for ($i = 0; $i < $n; $i++) {
        $min = $i;
        // внутренний цикл для поиска индекса элемента с наименьшим значением
        for ($j = $i + 1; $j < $n; $j++) {
            // если текущий элемент меньше элемента с минимальным значением, обновляем минимальный индекс
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        // меняем местами элементы с наименьшим значением и текущим элементом
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
};

$a = [78, -32, 5, 39, 58, -5, -63, 57, 72, 9, 53, -1, 63, -97, -21, -94, -47, 57, -8, 60, -23, -72, -22, -79, 90, 96, -41, -71, -48, 84, 89, -96, 41, -16, 94, -60, -64, -39, 60, -14, -62, -19, -3, 32, 98, 14, 43, 3, -56, 71, -71, -67, 80, 27, 92, 92, -64, 0, -77, 2, -26, 41, 3, -31, 48, 39, 20, -30, 35, 32, -58, 2, 63, 64, 66, 62, 82, -62, 9, -52, 35, -61, 87, 78, 93, -42, 87, -72, -10, -36, 61, -16, 59, 59, 22, -24, -67, 76, -94, 59];
print_r(bubbleSortArray($a));
print_r(selectionSortArray($a));
