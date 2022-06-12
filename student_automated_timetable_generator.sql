-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 12:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_automated_timetable_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(31) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Rushabh', 'rushabh@gmail.com', 'rus'),
(2, 'Riya', 'riya@gmail.com', 'riy'),
(3, 'Rushank', 'rushank@gmail.com', 'rushank'),
(4, 'Sahil', 'sahil@gmail.com', 'sahil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(21) NOT NULL,
  `department_course` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`, `department_course`) VALUES
(2, 'IT', 'BCA'),
(3, 'Commerce', 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`division_id`, `division_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(6, 'D'),
(7, 'E'),
(8, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(21) NOT NULL,
  `faculty_gender` varchar(21) NOT NULL,
  `faculty_mobile` bigint(10) NOT NULL,
  `faculty_dob` date NOT NULL,
  `faculty_address` varchar(300) NOT NULL,
  `faculty_photo` varchar(100) NOT NULL,
  `faculty_email` varchar(31) NOT NULL,
  `faculty_password` varchar(11) NOT NULL,
  `faculty_designation` varchar(21) NOT NULL,
  `faculty_department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `faculty_name`, `faculty_gender`, `faculty_mobile`, `faculty_dob`, `faculty_address`, `faculty_photo`, `faculty_email`, `faculty_password`, `faculty_designation`, `faculty_department_id`) VALUES
(8, 'Nirav', '10', 8239435752, '1981-05-15', '404 Alpine Flat, near paldi, ahmedabad', 'upload/t1.jpg', 'nirav@gmail.com', 'nirav123', 'Professor', 2),
(9, 'Heta', '20', 9345983753, '1989-08-18', '12 Apple Woods, ahmedabad ', 'upload/t2.jpg', 'heta@gmail.com', 'heta', 'Professor', 2),
(10, 'Ankit', '10', 8349575957, '1979-12-21', '209 Shilp Park, near satellite, ahmedabad', 'upload/t3.jpg', 'ankit@gmail.com', 'ankit', 'Professor', 3),
(11, 'Anjali', '20', 7238559399, '1984-01-10', '303 Xeta Flat, near wadaj, ahmedabad', 'upload/t4.jpg', 'anjali@gmail.com', 'anjali', 'Professor', 2),
(12, 'Rohan', '10', 8329527502, '1987-03-30', '805 Flower Flat, near riverfront, ahmedabad', 'upload/t5.jpg', 'rohan@gmail.com', 'rohan', 'Professor', 3),
(13, 'Bharti', '20', 9325757932, '1989-07-17', '1 Rosery Park, near shilaj, ahmedabad', 'upload/t6.jpg', 'bharti@gmail.com', 'bharti', 'Professor', 3),
(14, 'Aarav', '10', 9328522752, '1982-11-19', '44 Tower, near shahibaug, ahmedabad', 'upload/t7.jpg', 'aarav@gmail.com', 'aarav', 'Professor', 3),
(15, 'Garima', '20', 8235347934, '1991-09-19', '505 Flask, near gota, ahmedabad', 'upload/t8.jpg', 'garima@gmail.com', 'garima', 'Professor', 2),
(16, 'Paresh', '10', 7395797102, '1995-10-01', '2 Luxury, near mithakali, ahmedabad', 'upload/t9.jpg', 'paresh@gmail.com', 'paresh', 'Professor', 2),
(17, 'Vidhi', '20', 8932572922, '1990-03-31', '10 Iconic Tower, near himalaya mall, ahmedabad', 'upload/t10.jpg', 'vidhi@gmail.com', 'vidhi', 'Professor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `sem_id` int(11) NOT NULL,
  `sem_name` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`sem_id`, `sem_name`) VALUES
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '1'),
(9, '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(21) NOT NULL,
  `student_gender` varchar(11) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `student_mobileno` bigint(10) NOT NULL,
  `student_address` varchar(300) NOT NULL,
  `student_dob` date NOT NULL,
  `student_email` varchar(31) NOT NULL,
  `student_password` varchar(31) NOT NULL,
  `student_department_id` varchar(31) NOT NULL,
  `student_sem_id` varchar(11) NOT NULL,
  `student_div_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_gender`, `student_photo`, `student_mobileno`, `student_address`, `student_dob`, `student_email`, `student_password`, `student_department_id`, `student_sem_id`, `student_div_id`) VALUES
(8, 'Akash', '10', 'upload/s1.jpg', 9876543210, '41 Simandhar Flat, near satellite, ahmedabad', '2000-12-02', 'rushabh@gmail.com', 'rus', '2', '2', '6'),
(9, 'Payal', '20', 'upload/s2.jpg', 7454896980, '10 Zimba Flat, near odhav, ahmedabad', '2001-03-17', 'payal@gmail.com', 'payal', '2', '5', '7'),
(10, 'Darshan', '10', 'upload/s3.jpg', 9340938603, '24 Ashok Flat, near chandlodia, ahmedabad', '2000-06-08', 'darshan@gmail.com', 'darshan', '3', '6', '2'),
(11, 'Stuti', '20', 'upload/s4.jpg', 8430569069, '203 Simol Flat, near ashram road, ahmedabad', '2000-10-15', 'stuti@gmail.com', 'stuti', '3', '7', '3'),
(12, 'Parshwa', '10', 'upload/s5.jpg', 7905685406, '23 Arham Flat, near paldi, ahmedabad', '2001-11-01', 'parshwa@gmail.com', 'parshwa', '3', '3', '1'),
(13, 'Khushi', '20', 'upload/s6.jpg', 9435436030, '34 Olive Flat, near shastrinagar, ahmedabad', '2001-08-21', 'khushi@gmail.com', 'khushi', '2', '5', '3'),
(14, 'Ritik', '10', 'upload/s7.jpg', 8564695349, '506 Ristro Flat, near cg road, ahmedabad', '2000-10-04', 'ritik@gmail.com', 'ritik', '2', '5', '6'),
(15, 'Riya', '20', 'upload/s8.jpg', 9435325220, '612 Ram Flat, near kalupur, ahmedabad', '2000-07-26', 'riya@gmail.com', 'riya', '3', '6', '8'),
(16, 'Sahil', '10', 'upload/s9.jpg', 7235759359, '333 Tripod Flat, near Sindu bhawan, ahmedabad', '2001-01-11', 'sahil@gmail.com', 'sahil', '3', '4', '2'),
(17, 'Hridaya', '20', 'upload/s10.jpg', 7385453589, '901 Himalaya Park, near darpan road, ahmedabad', '2001-04-09', 'hrodaya@gmail.com', 'hridaya', '2', '2', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_name`) VALUES
(1, 'BCA'),
(2, 'MCA'),
(3, 'BBA'),
(4, 'MBA'),
(5, 'BSCIT'),
(7, 'MCOM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timetable`
--

CREATE TABLE `tbl_timetable` (
  `timetable_id` int(11) NOT NULL,
  `week_day` varchar(21) NOT NULL,
  `start_time` varchar(21) NOT NULL,
  `end_time` varchar(21) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `timetable_department_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT 0,
  `subject` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_timetable`
--

INSERT INTO `tbl_timetable` (`timetable_id`, `week_day`, `start_time`, `end_time`, `subject_id`, `semester_id`, `division_id`, `timetable_department_id`, `faculty_id`, `subject`) VALUES
(1, 'Tuesday', '10:00 AM', '01:15 PM', 1, 1, 1, 1, 8, 'DS'),
(2, 'Tuesday', '02:00 PM', '07:15 PM', 1, 1, 1, 1, 12, 'HTML'),
(3, 'Saturday', '10:00 AM', '07:15 PM', 1, 1, 1, 1, 17, 'JAVA'),
(4, 'Tuesday', '02:00 PM', '04:10 PM', 1, 1, 1, 1, 8, 'PHP'),
(5, 'Friday', '09:00 AM', '10:00 AM', 5, 5, 7, 2, 10, 'CSS'),
(6, 'Wednesday', '08:00 AM', '09:00 AM', 1, 8, 1, 2, 13, 'C'),
(7, 'Wednesday', '09:00 AM', '10:00 AM', 1, 8, 1, 2, 16, 'C++'),
(8, 'Monday', '09:00 AM', '10:00 AM', 2, 2, 2, 3, 12, 'PYTHON'),
(9, 'Wednesday', '10:00 AM', '11:00 AM', 3, 3, 3, 2, 15, 'COMP'),
(10, 'Monday', '08:00 AM', '09:00 AM', 1, 2, 1, 2, 11, 'SOOAD'),
(11, 'Monday', '10:00 AM', '11:00 AM', 1, 2, 1, 2, 9, 'DHTML'),
(12, 'Saturday', '08:00 AM', '09:00 AM', 1, 3, 3, 2, 10, 'JAVA'),
(13, 'Wednesday', '11:00 AM', '12:00 PM', 1, 2, 1, 2, 17, 'HTML'),
(14, 'Monday', '11:00 AM', '12:00 PM', 1, 3, 2, 2, 12, 'DHTML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_timetable`
--
ALTER TABLE `tbl_timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_timetable`
--
ALTER TABLE `tbl_timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
