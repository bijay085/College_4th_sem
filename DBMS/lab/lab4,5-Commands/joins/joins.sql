SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
INNER JOIN Enrollments ON Students.StudentID = Enrollments.StudentID;
-- 1innerjoin.png


SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
LEFT JOIN Enrollments ON Students.StudentID = Enrollments.StudentID;
-- 2leftjoin.png

SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
RIGHT JOIN Enrollments ON Students.StudentID = Enrollments.EnrollmentID;
-- 3rightjoin.opng

SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
FULL OUTER JOIN Enrollments ON Students.StudentID = Enrollments.StudentID;

SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
LEFT JOIN Enrollments ON Students.StudentID = Enrollments.EnrollmentID
UNION
SELECT Students.StudentID, Students.FirstName, Enrollments.CourseID
FROM Students
RIGHT JOIN Enrollments ON Students.StudentID = Enrollments.EnrollmentID;
-- 4fulljoin.png


SELECT Students.StudentID, Enrollments.CourseID
FROM Students
CROSS JOIN Enrollments;
-- 5crossjoin.png