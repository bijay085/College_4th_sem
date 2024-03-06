-- using table patient 

--Insert data 
INSERT INTO Patient(pfirstname, plasttname, insuranceNumber)
VALUES ("Dr_Ramesh","Raina",101);

--Insert Multiple data 
INSERT INTO Patient(pfirstname, plasttname, insuranceNumber)
VALUES ("Dr_Suresh","Khadka",102),("Dr_Hari","Dalal",103) ;

-------------SELECT data from table -------------
SELECT  * FROM Patient;   //select all column and row of the table
SELECT pfirstname, plasttname, insuranceNumber FROM Patient;
SELECT * FROM Patient WHERE pid=2;

-----------UPDATE data from table -------------
UPDATE Patient
SET  pfirstname = 'Dr_Ajay', plasttname='Sharma'
WHERE pid = 1;

----------ADD column-----ddl
ALTER TABLE Patient
ADD address VARCHAR(80);

----Update address------
INSERT INTO Patient(address)
VALUES ("ktm"); ----this will make new row with all index null only address ktm so

----This wont add new row, this will change all the value of address to ktm
UPDATE Patient
SET address = "ktm";

---------------DELETE--------------
DELETE FROM Patient
WHERE insuranceNumber=101;

