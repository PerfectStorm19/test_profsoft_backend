*/ Задание 4.
Необходимо написать SQL запрос, который находит всех сотрудников из отдела Research.*/

SELECT
    e.name as employee_name,
    d.name as department_name
FROM
    Employee e
    JOIN Department d ON e.department = d.id
WHERE
    d.name = 'Research';


