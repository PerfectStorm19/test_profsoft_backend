/* Задание 6.
Написать SQL запрос, который находит сотрудника с самой высокой зарплатой в каждом отделе.*/

SELECT e.name as employee_name,
       d.name as department_name,
       e.salary
FROM Employee AS e
JOIN Department AS d ON e.department = d.id
WHERE (e.department, e.salary) IN (SELECT department, MAX(salary)
                                   FROM Employee
                                   GROUP BY department);


-- или

SELECT e.name as employee_name, 
       d.name as department_name, 
       e.max_salary
FROM (SELECT name, department, MAX(salary) as max_salary
      FROM Employee
      GROUP BY name, department) as e
      JOIN Department AS d ON e.department = d.id;