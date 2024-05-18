SELECT * FROM Students;
-- 1.png

SELECT NameFirst, Email FROM Students WHERE StudentID = 2;
-- 2.png

SELECT * FROM Students ORDER BY LastName ASC LIMIT 10;

-- --------------Insert-------------
INSERT INTO Students(`StudentID`, `NameFirst`, `LastName`, `Email`) 
VALUES ('3', 'Usres', 'Khadka', 'test3@email.com');
-- _. 3.png

INSERT INTO Students (StudentID, NameFirst, LastName, Email) 
VALUES ('4', 'Test4', 'teest4', 'test4@email.com'),
        ('5', 'Test5', 'teest5', 'test5@email.com'),
        ('6', 'Test6', 'teest6', 'test6@email.com'),
        ('7', 'Test7', 'teest7', 'test7@email.com');

-- -----------update.............
UPDATE Students
SET LastName = 'Koirala'
WHERE StudentID = 1;
-- ->4.png

UPDATE Students
SET Email = 'valid.com',
NameFirst = 'changed '
WHERE LastName = 'Koirala';
-- 5.png

-- -----DELETE.......
DELETE FROM Students
WHERE StudentID = 1;
-- 6.png

DELETE FROM Students
WHERE StudentID IN (2, 3);
-- 7.png

