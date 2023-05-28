// Задание 2.
// Дан массив целых чисел A и массив целых чисел B, элементы из массива B уникальны и все элементы из массива B также есть и в массиве A.
// Отсортируйте элементы массива A в таком же порядке, как в массиве B.
// Элементы, которые не появляются в массиве B должны находится в конце списка и отсортированы по убыванию.
// Решение 2.

<?php
function sortArrayByAnotherArray(array $arrayA, array $arrayB) : array
{
    // функция принимает два массива:
    // $arrayA - массив, который нужно отсортировать,
    // $arrayB - массив, по которому нужно выполнить сортировку

    // создаем два пустых массива
    $valuesNotInB = array(); // массив элементов из $arrayA, которых нет в $arrayB
    $valuesInB = array(); // массив элементов из $arrayA, которые есть в $arrayB

    // перебираем элементы массива $arrayA
    // и распределяем по спискам в зависимости от того, есть ли они в $arrayB
     foreach($arrayA as $el) {
        if (in_array($el, $arrayB)) {
            array_push($valuesInB, $el);
        } else {
            array_push($valuesNotInB, $el);
        }
    }

    //  сортируем элементы по порядку значений массива $arrayB
    // для сравнения элементов используется анонимная функция
    usort($valuesInB, function ($x, $y) use ($arrayB) {
        return array_search($x, $arrayB) - array_search($y, $arrayB);
        });

    // для элементов, которых нет в массиве $arrayB, вызываем сортировку по убыванию
    rsort($valuesNotInB);
    // объединяем два массива и возвращаем результат
    return array_merge($valuesInB, $valuesNotInB);
};

$arrayA = [1, 4, 6, 2, 3, 8, 2, 13, 15, 14, 2, 10, 77, 1, 1, 79];
$arrayB = [1, 2, 3, 4];
print_r(sortArrayByAnotherArray($arrayA, $arrayB));
