USE containerdb;

-- --------------------------------------------------------

--Table structure for table `Login`
-- DROP TABLE IF EXISTS `Login`;
-- CREATE TABLE `Login` (
--   `Login_ID` int(10) NOT NULL,
--   `Email` varchar(100) NOT NULL,
--   'Password' varchar(50)
--   PRIMARY KEY ( `Login_ID` )
-- ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--  -- Table structure for table `Feedback`
--  DROP TABLE IF EXISTS `Feedback`;
--  CREATE TABLE `Feedback` (
--    `Feedback_ID` int(11) NOT NULL ,
--    `Login_ID` int(10)  NULL,
--    `First_Name` varchar(50) NULL ,
--    `Email` varchar(50) NOT NULL,
--    `Message` varchar(255) NULL ,
--    PRIMARY KEY ( `Feedback_ID` )
--  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 -- Clear data for table `Login`
 -- TRUNCATE TABLE `Login`
--  INSERT INTO `Login` (`Login_ID`, `User_Name`, `Email`) VALUES
--  (1, 'Karan', 'emapl@gmail.com'),
--  (2, 'Stella', 'adam@gmail.com'),
--  (3, 'Lucy', 'lucy@gmail.com'),
--  (4, 'Jenna', 'jenna@gmail.com'),
--  (5, 'David', 'david@gmail.com'),
--  (6, 'Nick', 'frank@gmail.com');


--  -- Clear data for table `Feedback`
--  -- TRUNCATE TABLE `Feedback`
--  INSERT INTO `Feedback` (`Feedback_ID`, `Login_ID`, `First_Name`,`Email``Message`) VALUES
--   (1,1,'Karan','kj@gmail.com', 'This is a very good website'),
--   (2,NULL,NULL,NULL,'anonymous@gmail.com', 'This is a nice website'),
--   (3,6,'Stella',NULL,'stella@gmail.com', 'This is a very good website'),
--   (4,2,'Nick',NULL,'nick@gmail.com', 'This is a  good website'),
--   (5,NULL,NULL,NULL,'Marry@gmail.com', 'This is a very good website'),
--   (6,NULL,NULL,NULL,'Luke@gmail.com', 'This is a nice website')

--  select * from Login;
-- select * from Feedback;