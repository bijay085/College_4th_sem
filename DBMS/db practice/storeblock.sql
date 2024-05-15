-- to make any "procedure"/"store block" / "PL/SQL block" in mysql 

DELIMITER //
CREATE PROCEDURE procedureName (IN parameters DataTypes)
BEGIN 
SELECT * FROM tableName WHERE parameter = (parameter);
END //
DELIMITER;

-- to execute this procidure 
CALL procedureName (parameter);


-- example

DELIMITER //
CREATE PROCEDURE getDetails (IN emp_id INT)
BEGIN 
SELECT * FROM EmployeeTable WHERE EmployeeID = emp_id;
END//
DELIMITER;

-- to excecute
CALL getDetails (163);
-- it will get details of the employye having employee id "163"


DELIMITER //

CREATE PROCEDURE IncreaseSalary
    (IN empID INT, IN raiseAmount INT)
BEGIN
    UPDATE Employees
    SET Salary = Salary + raiseAmount
    WHERE EmployeeID = empID;
END //

DELIMITER ;

CALL IncreaseSalary(73, 3739)


-- a large eaxample
DELIMITER //

CREATE PROCEDURE UpdateEmployeeSalary
    (IN emp_id INT, IN new_salary INT)
BEGIN
    DECLARE current_salary INT;
    
    -- Get the current salary of the employee
    SELECT Salary INTO current_salary FROM Employees WHERE EmployeeID = emp_id;
    
    -- Check if the new salary is higher than the current salary
    IF new_salary > current_salary THEN
        -- Update the salary in the Employees table
        UPDATE Employees SET Salary = new_salary WHERE EmployeeID = emp_id;
        SELECT CONCAT('Salary updated successfully for EmployeeID ', emp_id) AS Result;
    ELSE
        SELECT 'New salary must be higher than the current salary.' AS Result;
    END IF;
END //

DELIMITER ;


CALL UpdateEmployeeSalary(123, 50000);
