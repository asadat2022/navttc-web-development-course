
--
-- Table Insert for table `sys_admin`
--
INSERT INTO `std_manage_system`.`sys_admin`(admin_Username, admin_FirstName, admin_LastName, admin_Password, admin_Email)
VALUES('admin02', 'Oliver', 'Callum', '123456', 'oliver.callum@gmail.com'),
('admin03', 'Jack', 'Charlie', '123456', 'jack.charlie@gmail.com'),
('admin04', 'Harry', 'Jacob', '123456', 'harry.jacob@gmail.com'),
('admin05', 'Jacob', 'Kyle', '123456', 'jacob.kyle@gmail.com');

--
-- Table Insert for table `STUDENT`
--
INSERT INTO `std_manage_system`.`STUDENT` (student_ID, studentFirstName, studentLastName, studentPassword, DepartmentName, studentProgram, studentSemester)
VALUES('BSCS-023R19-01', 'Oliver', 'Callum', '123456', 'Computer Science', 'BSCS', 'Semester 1st'),
('BSCS-023R18-03', 'Callum', 'Jack', '123456', 'Computer Science', 'BSCS', 'Semester 2nd'),
('BSCS-023R18-04', 'Jack', 'Callum', '123456', 'Computer Science', 'BSCS', 'Semester 2nd'),
('BSCS-023R18-05', 'Charlie', 'Harry', '123456', 'Computer Science', 'BSCS', 'Semester 3rd'),
('BSIT-023R18-19', 'Harry', 'Jack', '123456', 'Computer Science', 'BSIT', 'Semester 2nd'),
('BSIT-023R18-21', 'Jacob', 'Harry', '123456', 'Computer Science', 'BSIT', 'Semester 3rd'),
('BSIT-023R15-31', 'Jacob', 'Charlie', '123456', 'Computer Science', 'BSIT', 'Semester 8th'),
('MCS-023R16-12', 'Kyle', 'Jacob', '123456', 'Computer Science', 'MCS', 'Semester 6th'),
('MIT-023R16-29', 'Harry', 'Jacob', '123456', 'Computer Science', 'MIT', 'Semester 6th'),
('MSIT-023R16-13', 'Jacob', 'Kyle', '123456', 'Computer Science', 'MSIT', 'Semester 6th');

--
-- Table Insert for table `Teacher`
--
INSERT INTO `teacher` (teacher_ID, teacherFirstName, teacherLastName, teacherPassword, DepartmentName)
VALUES('ADMIN-201P14-22', 'Callum', 'Oliver', '123456', 'Business Administrator'),
('CS-201P14-02', 'Harry', 'Jack', '123456', 'Computer Science'),
('CS-201V14-24', 'Jack', 'Jacob', '123456', 'Computer Science'),
('IT-201P15-01', 'Charlie', 'Kyle', '123456', 'Information Technology'),
('IT-201V15-05', 'Jacob', 'Kyle', '123456', 'Information Technology'),
('ADMIN-201P15-78', 'Kyle', 'Harry', '123456', 'Business Administrator');
