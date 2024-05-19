CREATE TABLE doctor (
    doctor_id INT PRIMARY KEY,
    name VARCHAR(100),
    address VARCHAR(100),
    level INT
);

CREATE TABLE patient (
    patient_id INT PRIMARY KEY,
    name VARCHAR(100),
    address VARCHAR(255),
    gender ENUM('Male', 'Female', 'Other'),
    doctor_id INT,
    FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id)
);

CREATE TABLE medicine(
    medicine_id INT PRIMARY KEY,
    name VARCHAR(20),
    price VARCHAR(20),
    expdate DATE
);


CREATE TABLE treatment (
    treatment_id INT PRIMARY KEY,
    doctor_id INT,
    FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id),
    patient_id INT,
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id),
    date DATE,
    findings VARCHAR(255),
    medicine_id INT,
    FOREIGN KEY (medicine_id) REFERENCES medicine(medicine_id)
);


-- 1. Write a query to list patient name with their assigned doctor name.
SELECT
    patient.name AS patient_name,
    doctor.name AS doctor_name
FROM
    patient
JOIN
    doctor ON patient.doctor_id = doctor.doctor_id;

-- 2 waq to list the medicine name consumed by a patient hari
SELECT m.name AS medicine_name
FROM treatment t
JOIN medicine m ON t.medicine_id = m.medicine_id
JOIN patient p ON t.patient_id = p.patient_id
WHERE p.name = 'Hari';

-- 3 write a query to list the expired medicine name
SELECT 
    medicine.name AS medicine_name
FROM    
    medicine
WHERE expdate < CURDATE(); 

-- 4  Write a query to list doctor name starting with s and b in 3 place and any character after that
SELECT 
    name AS doctor_name
FROM doctor
WHERE name LIKE 'S_B%';

-- 5 write a query to list doctors those are  not assigned yet to a patient 
SELECT 
    d.name AS doctor_name
FROM 
    doctor d
LEFT JOIN 
    patient p ON d.doctor_id = p.doctor_id
WHERE 
    p.doctor_id IS NULL;





