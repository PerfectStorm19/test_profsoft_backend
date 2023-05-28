# Задание 2.
# Дан массив целых чисел A и массив целых чисел B, элементы из массива B уникальны и все элементы из массива B также есть и в массиве A.
# Отсортируйте элементы массива A в таком же порядке, как в массиве B.
# Элементы, которые не появляются в массиве B должны находится в конце списка и отсортированы по убыванию.
# Решение 2.

def sort_a_by_b(A: list, B: list):
    '''функция принимает в качестве аргументов 2 списка A и B
    возвращает список A, элементы которого отсортированы по порядку из списка B, если они есть в B, иначе по убыванию'''
    # формируем 2 списка: элементов из списка A, которые есть в B, и которые уникальны для A
    not_in_b = []
    in_b = []

    for el in A:
        if el in B:
            in_b.append(el)
        else:
            not_in_b.append(el)

    # сортируем список элементов, которые были в B по их индексу в B
    in_b.sort(key=lambda x: B.index(x))
    # элементы, которых в B не было сортируем по убыванию
    not_in_b.sort(reverse=True)
    return in_b + not_in_b


array_a = [1, 4, 6, 2, 3, 8, 2, 13, 15, 14, 2, 10, 77]
# [2, 4, 1, 3, 2, 4, 6, 7, 9, 2, 19]
array_b = [1, 2, 3, 4]
# [2, 1, 4, 3, 6, 9]
sorted_array_a = sort_a_by_b(array_a, array_b)
print(sorted_array_a)  # выводит [2, 2, 2, 1, 4, 4, 3, 6, 9, 19, 7]