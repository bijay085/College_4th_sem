-- --------------- CREATE ------------------------

CREATE DATABASE db_clg;
-- 1 png 

CREATE TABLE Students (
    StudentID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    BirthDate DATE
);
-- 2 png

CREATE INDEX idx_lastname ON Students(LastName);
-- 3.png

-- -----------ALTER-------------------------
ALTER TABLE Students ADD Email VARCHAR(100);
-- 4.png

ALTER TABLE Students MODIFY COLUMN Email VARCHAR(150);
-- 5.png

ALTER TABLE Students
CHANGE COLUMN FirstName NameFirst VARCHAR(50);
-- 6.png

ALTER TABLE Student
DROP COLUMN BirthDate;
-- 7.png

-- ________DROP______________
DROP DATABASE db_college;

DROP TABLE Students;

DROP INDEX idx_lastname ON Students;
-- 8.png



-- ------TRUNCATE -------------
TRUNCATE TABLE Students;
