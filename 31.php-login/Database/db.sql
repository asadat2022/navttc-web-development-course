--
-- CREATE Database: `login`
--
DROP DATABASE IF EXISTS `login`;
CREATE DATABASE IF NOT EXISTS `login`;
USE `login`;

--
-- Table structure for table `user`
--
CREATE TABLE `login`.`user`
    (
      user_ID int(12) NOT NULL auto_increment,
      user_Username VARCHAR(30) NOT NULL,
      user_Name VARCHAR(30) NOT NULL,
      user_Password VARCHAR(30) NOT NULL,
      user_Email VARCHAR(30) NOT NULL,
      UNIQUE(user_Username),
      UNIQUE(user_Email),
      PRIMARY KEY(user_id)
    );

INSERT INTO `login`.`user`(user_Username, user_Name, user_Password, user_Email)
VALUES('admin01', 'Marco', '123456', 'charlie.connor@gmail.com');