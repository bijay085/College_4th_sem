CREATE TABLE Doctor(
    did int AUTO_INCREMENT PRIMARY KEY,
    drfirstname VARCHAR(50) NOT NULL,
    drlasttname VARCHAR(50) NOT NULL
);

CREATE TABLE Patient(
    pid int AUTO_INCREMENT PRIMARY KEY,
    pfirstname VARCHAR(50) NOT NULL,
    plasttname VARCHAR(50) NOT NULL,
    insuranceNumber int UNIQUE NOT NULL
);

CREATE TABLE Specialization(
    sid int AUTO_INCREMENT PRIMARY KEY,
    description  VARCHAR(100)
);

CREATE TABLE Diagonse(
    code int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    details  VARCHAR(100)
);

-- #code to run in terminal
-- mysql -u root
-- show databases;
-- Create database dbname; #db_hospital- in this case
-- use  dbname;
-- show tables;
-- describe tableName; #to see the structure of a particular table.

-- alter table--
--ADD column to patient table
ALTER TABLE Patient
ADD enterDate DATETIME DEFAULT CURRENT_TIMESTAMP;

-- Change dataType
ALTER TABLE Patient
MODIFY COLUMN plasttname VARCHAR(200);  --varchar(50) changed to varchar(200) 


-- Rename added column
ALTER TABLE Patient
CHANGE COLUMN enterDate entryDate DATETIME DEFAULT CURRENT_TIMESTAMP;

-- Rename table 
ALTER TABLE Patient
RENAME to  NewPatients;

-- Delete a column from a table 
ALTER TABLE NewPatients
DROP COLUMN lastname;

-- Add foreign key constraint
ALTER TABLE Visit
ADD FOREIGN KEY (patientCode) REFERENCES NewPatients(code);