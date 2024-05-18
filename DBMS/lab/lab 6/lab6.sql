DELIMITER //

CREATE PROCEDURE GetStudentCourses (IN studentID INT)
BEGIN
    SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
    FROM Students
    INNER JOIN Enrollments ON Students.StudentID = Enrollments.StudentID
    WHERE Students.StudentID = studentID;
END //

DELIMITER ;

-- calling it
CALL GetStudentCourses(4);





DELIMITER //
CREATE TRIGGER BeforeStudentInsert
BEFORE INSERT ON Students
FOR EACH ROW
BEGIN
    -- Set default value for LastName if not provided
    IF NEW.LastName IS NULL THEN
        SET NEW.LastName = 'Unknown';
    END IF;
END //
DELIMITER ;

INSERT INTO Students (StudentID, FirstName) VALUES (6, 'Bijay');
SELECT * FROM Students WHERE StudentID = 6;
-- 2dmltrigger.png


CREATE INDEX idx_lastname ON Students (LastName);
CREATE INDEX idx_fullname ON Students (FirstName, LastName);
CREATE UNIQUE INDEX idx_student_email ON Students (Email);
CREATE FULLTEXT INDEX idx_text_content ON Articles (Content);
-- 3indexes.png


DROP INDEX idx_lastname ON Students;
SHOW INDEXES FROM Students;
