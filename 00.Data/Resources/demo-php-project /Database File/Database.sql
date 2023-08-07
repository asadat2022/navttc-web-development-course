--
-- CREATE Database: `std_manage_system`
--
DROP DATABASE IF EXISTS `std_manage_system`;
CREATE DATABASE IF NOT EXISTS `std_manage_system`;
USE `std_manage_system`;

--
-- Table structure for table `sys_admin`
--
CREATE TABLE `std_manage_system`.`sys_admin`
    (
      admin_ID int(12) NOT NULL auto_increment,
      admin_Username VARCHAR(30) NOT NULL,
      admin_FirstName VARCHAR(30) NOT NULL,
      admin_LastName VARCHAR(30) NOT NULL,
      admin_Password VARCHAR(30) NOT NULL,
      admin_Email VARCHAR(30) NOT NULL,
      CONSTRAINT `uk_username` UNIQUE(admin_Username),
      CONSTRAINT `pk_admin_id` PRIMARY KEY(admin_id)
    );

INSERT INTO `std_manage_system`.`sys_admin`(admin_Username, admin_FirstName, admin_LastName, admin_Password, admin_Email)
VALUES('admin01', 'Charlie', 'Connor', '123456', 'charlie.connor@gmail.com');


--
-- Table structure for table `STUDENT`
--
CREATE TABLE `std_manage_system`.`STUDENT`
    (
      student_ID VARCHAR(15) NOT NULL,
      studentFirstName VARCHAR(20) NOT NULL,
      studentLastName VARCHAR(20) NOT NULL,
      studentPassword VARCHAR(30) NOT NULL,
      DepartmentName VARCHAR(50) NOT NULL,
      studentProgram VARCHAR(30) NOT NULL,
      studentSemester VARCHAR(30) NOT NULL,
      CONSTRAINT `PK_studentID` PRIMARY KEY (student_ID)
    );

--
-- Table structure for table `Teacher`
--
CREATE TABLE `std_manage_system`.`Teacher`
    (
      teacher_ID VARCHAR(15) NOT NULL,
      teacherFirstName VARCHAR(20) NOT NULL,
      teacherLastName VARCHAR(20) NOT NULL,
      teacherPassword VARCHAR(30) NOT NULL,
      DepartmentName VARCHAR(50) NOT NULL,
      CONSTRAINT `PK_teacherID` PRIMARY KEY (teacher_ID)
    );

--
-- Table structure for table `Attendance`
--
CREATE TABLE `std_manage_system`.`Attendance`
    (
      att_ID int(12) NOT NULL auto_increment,
      student_ID VARCHAR(15) NOT NULL,
      subjectName VARCHAR(50) NOT NULL,
      att_Date VARCHAR(25) NOT NULL,
      att_Lect VARCHAR(25) NOT NULL,
      att_Status VARCHAR(26) NOT NULL,
      CONSTRAINT `PK_att_ID` PRIMARY KEY (att_ID),
      CONSTRAINT `FK_studentID` FOREIGN KEY (student_ID) REFERENCES `STUDENT`(student_ID),
      CONSTRAINT `UK_att` UNIQUE(student_ID, subjectName, att_Lect)
    );

--
-- Table structure for table `Assignment`
--
CREATE TABLE `std_manage_system`.`Assignment`
    (
      assi_ID int(12) NOT NULL auto_increment,
      DepartmentName VARCHAR(50) NOT NULL,
      studentProgram VARCHAR(50) NOT NULL,
      studentSemester VARCHAR(50) NOT NULL,
      subjectName VARCHAR(50) NOT NULL,
      assi_No VARCHAR(50) NOT NULL,
      assi_Path VARCHAR(50) NOT NULL,
      CONSTRAINT `PK_assi_ID` PRIMARY KEY (assi_ID),
      CONSTRAINT `UK_assi` UNIQUE(DepartmentName, studentProgram, studentSemester, subjectName, assi_No)

    );
