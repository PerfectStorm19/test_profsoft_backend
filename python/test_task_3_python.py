# Задание 3.
# На вход подается целое число N.
# Постройте матрицу N * N с элементами от 1 до N2 в спиральном порядке. Представить это как список списков.
# Решение 3.

def spiral_matrix(N: int):
    '''функция получает на вход целое число N
    возвращает матрицу, заполненную по спирали числами от 1 до N в квадрате'''

    # создаем нулевую матрицу размером N x N
    matrix = [[0] * N for i in range(N)]

    # задаем текущие координаты стартовой ячейки row, column
    # и параметры направления движения по матрице dir_row - смещение по строкам, dir_col - смещение по столбцам
    # изначально движение направо dir_col = 1
    row, column, dir_row, dir_col = 0, 0, 0, 1

    # проходимся по числам от 1 до 9 и присваиваем это значение соответствующему элементу матрицы
    for k in range(1, N * N + 1):
        matrix[row][column] = k

        # проверяем, дошли ли мы до конца ряда, и необходимо ли сделать поворот
        # проверка выхода за пределы матрицы решается делением с остатком
        # если True - поворачиваем направление движения по часовой стрелке на 90 градусов
        if matrix[(row + dir_row) % N][(column + dir_col) % N]:
            dir_row, dir_col = dir_col, -dir_row

            # если за пределы не вышли - задаем координаты следующей ячейки в соответствии с направлением смещения
        row += dir_row
        column += dir_col

    # возвращаем матрицу в виде двумерного списка
    return matrix

N = 3
print(spiral_matrix(N))  # выводит [[1, 2, 3], [8, 9, 4], [7, 6, 5]]