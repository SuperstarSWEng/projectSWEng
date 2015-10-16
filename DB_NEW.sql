-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 10, 2015 at 06:01 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `cpe_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `comment_adviser`
-- 

CREATE TABLE `comment_adviser` (
  `ID_Comment` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Comment` varchar(255) collate utf8_unicode_ci default NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Comment`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `comment_adviser`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `conclude_comment`
-- 

CREATE TABLE `conclude_comment` (
  `ID_ConclusionOfComment` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ConclusionOfComment` tinyint(1) NOT NULL,
  `ID_Comment` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_ConclusionOfComment`),
  KEY `ID_Comment` (`ID_Comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `conclude_comment`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `conclude_prograss`
-- 

CREATE TABLE `conclude_prograss` (
  `ID_Conclude` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ConcludePro` tinyint(1) NOT NULL,
  `ID_ProEveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Conclude`),
  KEY `ID_ProEveluation` (`ID_ProEveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `conclude_prograss`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `conclude_proposal`
-- 

CREATE TABLE `conclude_proposal` (
  `ID_Conclude_Proposal` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Teacher_evaluation` float NOT NULL,
  `Teacher_committee` float NOT NULL,
  `ID_Proposal_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Conclude_Proposal`),
  KEY `ID_Proposal_Eveluation` (`ID_Proposal_Eveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `conclude_proposal`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `conclude_test`
-- 

CREATE TABLE `conclude_test` (
  `ID_Conclude_Test` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Teacher_TestEvaluation` float NOT NULL,
  `Teacher_TestCommittee` float NOT NULL,
  `ID_Test_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Conclude_Test`),
  KEY `ID_Test_Eveluation` (`ID_Test_Eveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `conclude_test`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `confirm`
-- 

CREATE TABLE `confirm` (
  `ID_Confirm` varchar(10) collate utf8_unicode_ci NOT NULL,
  `FNameTeacherConfirm` varchar(20) collate utf8_unicode_ci NOT NULL,
  `LNameTeacherConfirm` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Date_Confirm` date NOT NULL,
  `ID_Teacher` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Confirm`),
  KEY `ID_Teacher` (`ID_Teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `confirm`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `implemeting`
-- 

CREATE TABLE `implemeting` (
  `ID_Implementing` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Date_Implementing` date NOT NULL,
  `Assignment_Im` varchar(255) collate utf8_unicode_ci NOT NULL,
  `Progress_Im` varchar(255) collate utf8_unicode_ci NOT NULL,
  `Note_Im` varchar(255) collate utf8_unicode_ci default NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Implementing`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `implemeting`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `member_student`
-- 

CREATE TABLE `member_student` (
  `SID_Member` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Password_Student` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Student_ID` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`SID_Member`),
  KEY `Student_ID` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `member_student`
-- 

INSERT INTO `member_student` VALUES ('MS000', '123', 'ST00000');
INSERT INTO `member_student` VALUES ('MS001', '111', 'ST00001');
INSERT INTO `member_student` VALUES ('MS002', '222', 'ST00002');
INSERT INTO `member_student` VALUES ('MS003', '1234', 'ST00003');
INSERT INTO `member_student` VALUES ('MS004', '333', 'ST00004');
INSERT INTO `member_student` VALUES ('MS005', '123', 'ST00005');
INSERT INTO `member_student` VALUES ('MS006', '1234', 'ST00006');
INSERT INTO `member_student` VALUES ('MS007', '111', 'ST00007');
INSERT INTO `member_student` VALUES ('MS008', '123', 'ST00008');
INSERT INTO `member_student` VALUES ('MS009', '123', 'ST00009');

-- --------------------------------------------------------

-- 
-- Table structure for table `member_teacher`
-- 

CREATE TABLE `member_teacher` (
  `TID_Member` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Password_Teacher` varchar(50) collate utf8_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`TID_Member`),
  KEY `ID_Teacher` (`ID_Teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `member_teacher`
-- 

INSERT INTO `member_teacher` VALUES ('MT000', '123456', 'TE0123');
INSERT INTO `member_teacher` VALUES ('MT001', '12345', 'TE1250');
INSERT INTO `member_teacher` VALUES ('MT002', '999', 'TE4517');
INSERT INTO `member_teacher` VALUES ('MT003', '987', 'TE4589');
INSERT INTO `member_teacher` VALUES ('MT004', '0000', 'TE5542');
INSERT INTO `member_teacher` VALUES ('MT005', '0101', 'TE7793');
INSERT INTO `member_teacher` VALUES ('MT006', '555', 'TE7849');

-- --------------------------------------------------------

-- 
-- Table structure for table `prograss_suggestion`
-- 

CREATE TABLE `prograss_suggestion` (
  `ID_ProSuggestion` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Progress_Suggestion` varchar(255) collate utf8_unicode_ci default NULL,
  `ID_ProEveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_ProSuggestion`),
  KEY `ID_ProEveluation` (`ID_ProEveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `prograss_suggestion`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `progress_evalution`
-- 

CREATE TABLE `progress_evalution` (
  `ID_ProEveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ProEveluation_Num1` tinyint(1) NOT NULL,
  `ProEveluation_Num2` tinyint(1) NOT NULL,
  `ProEveluation_Num3` tinyint(1) NOT NULL,
  `ProEveluation_Num4` tinyint(1) NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_ProEveluation`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `progress_evalution`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `project`
-- 

CREATE TABLE `project` (
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ProjectName_TH` varchar(50) collate utf8_unicode_ci NOT NULL,
  `ProjectName_EN` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Status_Project` varchar(20) collate utf8_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ID_Teacher2` varchar(20) collate utf8_unicode_ci default NULL,
  `ID_Teacher3` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Project`),
  KEY `ID_Teacher` (`ID_Teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `project`
-- 

INSERT INTO `project` VALUES ('PJ00000000', 'เครื่องไล่นก', 'Pigeon repelling device', '0', 'TE0123', NULL, 'TE4517');
INSERT INTO `project` VALUES ('PJ00000001', 'เครื่องไล่ยุง', 'mosquito repelling device', '0', 'TE1250', NULL, 'TE4517');
INSERT INTO `project` VALUES ('PJ00000002', 'เครื่องควบคุมกระแสไฟฟ้า', 'power control', '0', 'TE4517', NULL, 'TE1250');

-- --------------------------------------------------------

-- 
-- Table structure for table `proposal_eveluation`
-- 

CREATE TABLE `proposal_eveluation` (
  `ID_Proposal_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Eveluation_Num1` tinyint(1) NOT NULL,
  `Eveluation_Num2` tinyint(1) NOT NULL,
  `Eveluation_Num3` tinyint(1) NOT NULL,
  `Eveluation_Num4` tinyint(1) NOT NULL,
  `Eveluation_Num5` tinyint(1) NOT NULL,
  `Eveluation_Num6` tinyint(1) NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Proposal_Eveluation`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `proposal_eveluation`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `proposal_suggestion`
-- 

CREATE TABLE `proposal_suggestion` (
  `ID_Proposal_Suggestion` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Proposal_Suggestion` varchar(255) collate utf8_unicode_ci NOT NULL,
  `ID_Proposal_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Proposal_Suggestion`),
  KEY `ID_Proposal_Eveluation` (`ID_Proposal_Eveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `proposal_suggestion`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `scope_project`
-- 

CREATE TABLE `scope_project` (
  `ID_Scope` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Scope` varchar(255) collate utf8_unicode_ci NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Scope`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `scope_project`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `status_teacher`
-- 

CREATE TABLE `status_teacher` (
  `ID_Status` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Status` varchar(20) collate utf8_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) collate utf8_unicode_ci NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Status`),
  KEY `ID_Teacher` (`ID_Teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `status_teacher`
-- 

INSERT INTO `status_teacher` VALUES ('1', '1', 'TE0123', 'PJ00000000');
INSERT INTO `status_teacher` VALUES ('2', '1', 'TE1250', 'PJ00000001');
INSERT INTO `status_teacher` VALUES ('3', '1', 'TE4517', 'PJ00000002');
INSERT INTO `status_teacher` VALUES ('4', '3', 'TE4517', 'PJ00000000');
INSERT INTO `status_teacher` VALUES ('5', '3', 'TE4517', 'PJ00000001');
INSERT INTO `status_teacher` VALUES ('6', '3', 'TE1250', 'PJ00000002');

-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `Student_ID` varchar(10) collate utf8_unicode_ci NOT NULL,
  `StudentFirstName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `StudentLastName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Student_Tel` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Student_Email` varchar(50) collate utf8_unicode_ci NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` VALUES ('ST00000', 'สมยศ', 'มุ่งหมาย', '0812345678', 'somyos@gmail.com', 'PJ00000000');
INSERT INTO `student` VALUES ('ST00001', 'สมหมาย', 'มุ่งเมือง', '0819876543', 'sommai@hotmail.com', 'PJ00000000');
INSERT INTO `student` VALUES ('ST00002', 'สมปอง', 'ผองเพื่อน', '0851239758', 'sompong_like@gmail.com', 'PJ00000001');
INSERT INTO `student` VALUES ('ST00003', 'สุขใจ', 'อิ่มอุ่น', '0845236951', 'Sukjai_jai_aimaun@gmail.com', 'PJ00000001');
INSERT INTO `student` VALUES ('ST00004', 'สมชาย', 'ใจดี', '0811111111', 'somchai_jaidee@gmail.com', 'PJ00000002');
INSERT INTO `student` VALUES ('ST00005', 'สวย', 'เรียนเก่งมาก', '0891234567', 'sauy@gmail.com', '');
INSERT INTO `student` VALUES ('ST00006', 'สมใจ', 'ขายกำไร', '0987654321', 'somjai@hotmail.com', '');
INSERT INTO `student` VALUES ('ST00007', 'น้ำใจ', 'อัจฉริยะ', '0987654323', 'namjai@gmail.com', '');
INSERT INTO `student` VALUES ('ST00008', 'วันนั้น', 'โชคดี', '0987678909', 'wannan@hotmail.com', NULL);
INSERT INTO `student` VALUES ('ST00009', 'เด็กดี', 'ปัญญาดี', '0987576456', 'dekdee@hotmail.com', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `teacher`
-- 

CREATE TABLE `teacher` (
  `ID_Teacher` varchar(10) collate utf8_unicode_ci NOT NULL,
  `TeacherName` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `teacher`
-- 

INSERT INTO `teacher` VALUES ('TE0123', 'มาลี  สีแดง');
INSERT INTO `teacher` VALUES ('TE1250', 'เชิดชาย  ตั้งใจ');
INSERT INTO `teacher` VALUES ('TE4517', 'สมทรง เสียงเพราะ');
INSERT INTO `teacher` VALUES ('TE4589', 'มารวย  ทองแดง');
INSERT INTO `teacher` VALUES ('TE5542', 'สมหญิง  รักเรียน');
INSERT INTO `teacher` VALUES ('TE7793', 'มาณี  ผิวขาว');
INSERT INTO `teacher` VALUES ('TE7849', 'แจ่มใส  ยิ้มสวย');

-- --------------------------------------------------------

-- 
-- Table structure for table `test_eveluation`
-- 

CREATE TABLE `test_eveluation` (
  `ID_Test_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  `TestEveluation_Num1` tinyint(1) NOT NULL,
  `TestEveluation_Num2` tinyint(1) NOT NULL,
  `TestEveluation_Num3` tinyint(1) NOT NULL,
  `ID_Project` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Test_Eveluation`),
  KEY `ID_Project` (`ID_Project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `test_eveluation`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `test_suggestion`
-- 

CREATE TABLE `test_suggestion` (
  `ID_Suggestion` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Test_Suggestion` varchar(255) collate utf8_unicode_ci default NULL,
  `ID_Test_Eveluation` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID_Suggestion`),
  KEY `ID_Test_Eveluation` (`ID_Test_Eveluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `test_suggestion`
-- 


-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `comment_adviser`
-- 
ALTER TABLE `comment_adviser`
  ADD CONSTRAINT `comment_adviser_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `conclude_comment`
-- 
ALTER TABLE `conclude_comment`
  ADD CONSTRAINT `conclude_comment_ibfk_1` FOREIGN KEY (`ID_Comment`) REFERENCES `comment_adviser` (`ID_Comment`);

-- 
-- Constraints for table `conclude_prograss`
-- 
ALTER TABLE `conclude_prograss`
  ADD CONSTRAINT `conclude_prograss_ibfk_1` FOREIGN KEY (`ID_ProEveluation`) REFERENCES `progress_evalution` (`ID_ProEveluation`);

-- 
-- Constraints for table `conclude_proposal`
-- 
ALTER TABLE `conclude_proposal`
  ADD CONSTRAINT `conclude_proposal_ibfk_1` FOREIGN KEY (`ID_Proposal_Eveluation`) REFERENCES `proposal_eveluation` (`ID_Proposal_Eveluation`);

-- 
-- Constraints for table `conclude_test`
-- 
ALTER TABLE `conclude_test`
  ADD CONSTRAINT `conclude_test_ibfk_1` FOREIGN KEY (`ID_Test_Eveluation`) REFERENCES `test_eveluation` (`ID_Test_Eveluation`);

-- 
-- Constraints for table `confirm`
-- 
ALTER TABLE `confirm`
  ADD CONSTRAINT `confirm_ibfk_1` FOREIGN KEY (`ID_Teacher`) REFERENCES `teacher` (`ID_Teacher`);

-- 
-- Constraints for table `implemeting`
-- 
ALTER TABLE `implemeting`
  ADD CONSTRAINT `implemeting_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `member_student`
-- 
ALTER TABLE `member_student`
  ADD CONSTRAINT `member_student_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`);

-- 
-- Constraints for table `member_teacher`
-- 
ALTER TABLE `member_teacher`
  ADD CONSTRAINT `member_teacher_ibfk_1` FOREIGN KEY (`ID_Teacher`) REFERENCES `teacher` (`ID_Teacher`);

-- 
-- Constraints for table `prograss_suggestion`
-- 
ALTER TABLE `prograss_suggestion`
  ADD CONSTRAINT `prograss_suggestion_ibfk_1` FOREIGN KEY (`ID_ProEveluation`) REFERENCES `progress_evalution` (`ID_ProEveluation`);

-- 
-- Constraints for table `progress_evalution`
-- 
ALTER TABLE `progress_evalution`
  ADD CONSTRAINT `progress_evalution_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `project`
-- 
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`ID_Teacher`) REFERENCES `teacher` (`ID_Teacher`);

-- 
-- Constraints for table `proposal_eveluation`
-- 
ALTER TABLE `proposal_eveluation`
  ADD CONSTRAINT `proposal_eveluation_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `proposal_suggestion`
-- 
ALTER TABLE `proposal_suggestion`
  ADD CONSTRAINT `proposal_suggestion_ibfk_1` FOREIGN KEY (`ID_Proposal_Eveluation`) REFERENCES `proposal_eveluation` (`ID_Proposal_Eveluation`);

-- 
-- Constraints for table `scope_project`
-- 
ALTER TABLE `scope_project`
  ADD CONSTRAINT `scope_project_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `status_teacher`
-- 
ALTER TABLE `status_teacher`
  ADD CONSTRAINT `status_teacher_ibfk_1` FOREIGN KEY (`ID_Teacher`) REFERENCES `teacher` (`ID_Teacher`);

-- 
-- Constraints for table `test_eveluation`
-- 
ALTER TABLE `test_eveluation`
  ADD CONSTRAINT `test_eveluation_ibfk_1` FOREIGN KEY (`ID_Project`) REFERENCES `project` (`ID_Project`);

-- 
-- Constraints for table `test_suggestion`
-- 
ALTER TABLE `test_suggestion`
  ADD CONSTRAINT `test_suggestion_ibfk_1` FOREIGN KEY (`ID_Test_Eveluation`) REFERENCES `test_eveluation` (`ID_Test_Eveluation`);
