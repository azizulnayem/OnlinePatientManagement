-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 11:27 AM
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
-- Database: `opms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `Blood_Group` varchar(50) NOT NULL,
  `Quantity_Blood` varchar(50) NOT NULL,
  `Donor_ID` int(11) NOT NULL,
  `Number_of_donations` varchar(50) NOT NULL,
  `Patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`Blood_Group`, `Quantity_Blood`, `Donor_ID`, `Number_of_donations`, `Patient_id`) VALUES
('A+', '1 bag', 1, '7', 7),
('AB+', '2 bag', 2, '17', 5),
('B+', '1 bag', 3, '2', 3),
('AB-', '2 bag', 4, '10', 1),
('O+', '1 bag', 5, '3', 6),
('O-', '1 bag', 6, '9', 4),
('B-', '3 bag', 7, '31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `carry`
--

CREATE TABLE `carry` (
  `C_Days` varchar(50) NOT NULL,
  `Patient_id` int(11) NOT NULL,
  `Diseases_Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carry`
--

INSERT INTO `carry` (`C_Days`, `Patient_id`, `Diseases_Code`) VALUES
('26 Days', 1, 5),
('15 Days', 2, 4),
('07 Days', 3, 3),
('65 Days', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chamber`
--

CREATE TABLE `chamber` (
  `Chamber_Rent` float(7,2) NOT NULL,
  `Chamber_no` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `Available_Time` varchar(50) NOT NULL,
  `Telephone_no` varchar(50) NOT NULL,
  `Doctor_id` int(11) NOT NULL,
  `PA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chamber`
--

INSERT INTO `chamber` (`Chamber_Rent`, `Chamber_no`, `location`, `Available_Time`, `Telephone_no`, `Doctor_id`, `PA_ID`) VALUES
(19000.01, 1, 'Uttar Badda', '7:00pm-9:00pm', '+990789654', 3, 2),
(13060.00, 2, 'Gulshan', '7:00am-11:00am', '+990342654', 2, 6),
(31000.00, 3, 'Banani', '9:00pm-2:00pm', '+991697514', 5, 1),
(22400.00, 4, 'Uttara', '11:00am-9:00pm', '+990766694', 3, 3),
(27789.00, 5, 'Kakrail', '8:00am-01:00pm', '+990782554', 1, 5),
(17000.00, 6, 'Shanti-Nagar', '9:00am-03:00pm', '+994876514', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `Diseases_Name` varchar(50) NOT NULL,
  `Diseases_Code` int(11) NOT NULL,
  `Diseases_Symptom` varchar(1000) NOT NULL,
  `Doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`Diseases_Name`, `Diseases_Code`, `Diseases_Symptom`, `Doctor_id`) VALUES
('Cerebrovascular', 1, 'Affect brain,spinal cord,nerves,demyelinating of the central nervous system', 4),
('Psychological', 2, 'Problems in mental health, including substance use disorders', 1),
('Fever,Cough,Cold,Headache', 3, 'Runny nose,Sore throat,Congestion,mild headache,Sneezing', 3),
('Injuries', 4, 'Bleeding or uncontrolled or heavy bleeding,hemorrhage', 5),
('Dental Restoration', 5, 'Pain in teeth', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Doctor_Number` varchar(50) NOT NULL,
  `Doctor_Email` varchar(50) NOT NULL,
  `Joining_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_id`, `First_Name`, `Middle_Name`, `Last_Name`, `Age`, `Doctor_Number`, `Doctor_Email`, `Joining_Date`) VALUES
(1, 'MD.', 'ASHIK', 'AHMED', '41', '+8801700000000', 'ashik.mbbs@gmail.com', '29-12-1980'),
(2, 'MD.', 'RAFI', 'AHMED', '40', '+8801700110000', 'rafi.mbbs@gmail.com', '20-09-1981'),
(3, 'MD.', 'ROBI', 'UDDIN', '36', '+8801700110880', 'robi.mbbs@gmail.com', '30-11-1985'),
(4, 'MD.', 'ABU', 'BAKAR', '45', '+8801770119880', 'abu.mbbs@gmail.com', '10-12-1976'),
(5, 'MD.', 'SABBIR', 'HOSSAIN', '35', '+8801774819891', 'sabbir.mbbs@gmail.com', '17-08-1986');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Remarks` varchar(1000) NOT NULL,
  `V_Date` varchar(50) NOT NULL,
  `V_Month` varchar(50) NOT NULL,
  `V_Year` varchar(50) NOT NULL,
  `H_Code` int(11) NOT NULL,
  `Patient_id` int(11) NOT NULL,
  `Payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Remarks`, `V_Date`, `V_Month`, `V_Year`, `H_Code`, `Patient_id`, `Payment_id`) VALUES
('Okay', '10', 'January', '2021', 1, 4, 1),
('Okay', '20', 'January', '2021', 2, 7, 2),
('Okay', '10', 'February', '2021', 3, 2, 3),
('Okay', '23', 'May', '2021', 4, 5, 4),
('Okay', '07', 'March', '2021', 5, 1, 5),
('Okay', '17', 'November', '2021', 6, 6, 6),
('Okay', '07', 'October', '2021', 7, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `method`
--

CREATE TABLE `method` (
  `Method_Code` int(11) NOT NULL,
  `Method_Process` varchar(50) NOT NULL,
  `Method_Used_for` varchar(50) NOT NULL,
  `Payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `method`
--

INSERT INTO `method` (`Method_Code`, `Method_Process`, `Method_Used_for`, `Payment_id`) VALUES
(1, 'BKash', '2nd time', 3),
(2, 'Rocket', '3rd time', 7),
(3, 'Upay', '1st time', 5),
(4, 'Nagad', '5th time', 6),
(5, 'Card', '1st time', 2),
(6, 'BKash', '10th time', 4),
(7, 'Nagad', '2nd time', 1),
(8, 'BKash', '3rd time', 2),
(9, 'Card', '4th time', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `Salary` float(7,2) NOT NULL,
  `Email_PA` varchar(50) NOT NULL,
  `Start_Name` varchar(50) NOT NULL,
  `End_Name` varchar(50) NOT NULL,
  `PA_Number` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Zip_Code` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `PA_ID` int(11) NOT NULL,
  `Doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pa`
--

INSERT INTO `pa` (`Salary`, `Email_PA`, `Start_Name`, `End_Name`, `PA_Number`, `Street`, `Zip_Code`, `City`, `PA_ID`, `Doctor_id`) VALUES
(10012.50, 'masud@gmail.com', 'MD.', 'MASUD', '+8801800000000', 'Road-12', '5700', 'Dhaka', 1, 5),
(15000.00, 'momin@gmail.com', 'MD.', 'MOMIN', '+8801800110000', 'Road-18', '6700', 'Chittagong', 2, 3),
(19000.80, 'tamanna@gmail.com', 'TAMANNA', 'AKTER', '+8801800198002', 'Villa-90', '5700', 'Dhaka', 3, 3),
(13200.50, 'jamil@gmail.com', 'MD.', 'JAMIL', '+8801870896547', 'Dighi-09', '3700', 'Barishal', 4, 4),
(15490.00, 'ratul@gmail.com', 'MD.', 'RATUL', '+880180009034', 'Block-80', '5500', 'Khulna', 5, 1),
(11250.00, 'rabbi@gmail.com', 'MD.', 'RABBI', '+8801871110304', 'Road-34', '4200', 'Rangpur', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Patient_Number` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip_Code` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_id`, `Email`, `DOB`, `First_Name`, `Middle_Name`, `Last_Name`, `Patient_Number`, `Street`, `City`, `Zip_Code`, `State`, `Doctor_id`) VALUES
(1, 'aznayem@gmail.com', '28-12-1912', 'AZ', 'NAYEM', 'ISLAM', '+8801300000000', 'Road-67', 'Dhaka', '5700', 'BD', 5),
(2, 'hasi@gmail.com', '10-11-1998', 'MD.', 'HASI', 'CHOWDHURY', '+8801300110000', 'Road-98', 'Dhaka', '5700', 'BD', 5),
(3, 'zia@gmail.com', '17-10-1919', 'MD.', 'ZIA', 'ISLAM', '+8801390877890', 'Road-89', 'Rangpur', '4200', 'BD', 3),
(4, 'mithu@gmail.com', '10-09-1908', 'MD.', 'MITHU', 'TALUKDAR', '+8801345678903', 'Road-69', 'Rajshahi', '6000', 'BD', 1),
(5, 'rayhan@gmail.com', '10-07-1932', 'MD.', 'RAYHAN', 'ISLAM', '+8801311111111', 'Villa-56', 'Dhaka', '5700', 'BD', 2),
(6, 'moyna@gmail.com', '30-10-1952', 'HURI', 'MOYNA', 'KHATUN', '+8801378566644', 'Rasta-12', 'Khulna', '5500', 'BD', 4),
(7, 'noyon@gmail.com', '20-10-1992', 'MD.', 'NOYON', 'ISLAM', '+8801367323222', 'Road-14', 'Barishal', '3700', 'BD', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Payment_Date` varchar(50) NOT NULL,
  `Old_Amount` float(7,2) NOT NULL,
  `New_Amount` float(7,2) NOT NULL,
  `Total_Payment` float(8,2) NOT NULL,
  `Paid` varchar(50) NOT NULL,
  `Unpaid` varchar(50) NOT NULL,
  `Payment_Time` varchar(50) NOT NULL,
  `Patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Payment_Date`, `Old_Amount`, `New_Amount`, `Total_Payment`, `Paid`, `Unpaid`, `Payment_Time`, `Patient_id`) VALUES
(1, '02-12-2021', 0.00, 2000.00, 3000.00, 'Yes', 'No', '02:10:55', 4),
(2, '06-10-2021', 550.00, 2100.00, 1500.00, 'No', 'Yes', '01:16:35', 7),
(3, '21-08-2021', 0.00, 3600.00, 4400.00, 'Yes', 'No', '08:19:20', 2),
(4, '08-09-2021', 200.00, 5000.00, 7000.00, 'Yes', 'No', '09:33:48', 5),
(5, '23-01-2021', 0.00, 3200.00, 3200.00, 'Yes', 'No', '12:00:00', 1),
(6, '31-12-2021', 2000.00, 1530.00, 4500.00, 'No', 'Yes', '10:13:28', 6),
(7, '13-11-2021', 0.00, 7000.00, 8900.00, 'Yes', 'No', '06:13:12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Prescription_no` int(11) NOT NULL,
  `Direction` varchar(1000) NOT NULL,
  `Medicine` varchar(100) NOT NULL,
  `Dose` varchar(100) NOT NULL,
  `Doctor_id` int(11) NOT NULL,
  `Patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Prescription_no`, `Direction`, `Medicine`, `Dose`, `Doctor_id`, `Patient_id`) VALUES
(1, 'Smile All Day Long', 'Adderall', 'three times', 5, 2),
(2, 'Eat Healthy Foods', 'Ativan', 'one time', 3, 3),
(3, 'Exercise Daily', 'Atorvastatin', 'two times', 1, 4),
(4, 'Work Hard', 'Losartan', 'three times', 2, 5),
(5, 'Strees free Life Needed', 'Albuterol', 'five times', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `Doc_Q_length` varchar(50) NOT NULL,
  `Doc_Degree` varchar(50) NOT NULL,
  `Doc_Institution` varchar(50) NOT NULL,
  `Qua_ID` int(11) NOT NULL,
  `Doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`Doc_Q_length`, `Doc_Degree`, `Doc_Institution`, `Qua_ID`, `Doctor_id`) VALUES
('30 years', 'Doctor in medicine', 'Dhaka Medical College', 1, 5),
('30 years', 'Doctor in Radiologists', 'Dhaka Medical College', 2, 5),
('34 years', 'Doctor in Surgery', 'Dhaka Medical College', 3, 2),
('33 years', 'Doctor in Neurologists', 'Comilla Medical College', 4, 4),
('31 years', 'Doctor in Psychiatrists', 'Dhaka Medical College', 5, 1),
('32 years', 'Doctor in Anesthesiologists', 'Rajshahi Medical College', 6, 3),
('32 years', 'Doctor in medicine', 'Dhaka Medical College', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Test_Name` varchar(50) NOT NULL,
  `Result` varchar(1000) NOT NULL,
  `Time_Needed` varchar(50) NOT NULL,
  `Test_Serial` int(11) NOT NULL,
  `Patient_id` int(11) NOT NULL,
  `Doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Test_Name`, `Result`, `Time_Needed`, `Test_Serial`, `Patient_id`, `Doctor_id`) VALUES
('Cerebrovascular Test', 'Positive', '1 hour 30 min', 1, 6, 4),
('Psychological Test', 'Positive', '2 hour 00 min', 2, 4, 1),
('Fever Test', 'Positive', '0 hour 30 min', 3, 3, 3),
('Dental Restoration Test', 'No', '1 hour 30 min', 4, 5, 2),
('Injuries Test', 'Positive', '1 hour 00 min', 5, 2, 5),
('Cough Test', 'Positive', '0 hour 30 min', 6, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`Donor_ID`),
  ADD KEY `Patient_id` (`Patient_id`);

--
-- Indexes for table `carry`
--
ALTER TABLE `carry`
  ADD PRIMARY KEY (`Patient_id`,`Diseases_Code`),
  ADD KEY `Diseases_Code` (`Diseases_Code`);

--
-- Indexes for table `chamber`
--
ALTER TABLE `chamber`
  ADD PRIMARY KEY (`Chamber_no`),
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `PA_ID` (`PA_ID`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`Diseases_Code`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`H_Code`),
  ADD KEY `Patient_id` (`Patient_id`),
  ADD KEY `Payment_id` (`Payment_id`);

--
-- Indexes for table `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`Method_Code`),
  ADD KEY `Payment_id` (`Payment_id`);

--
-- Indexes for table `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`PA_ID`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_id`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Patient_id` (`Patient_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Prescription_no`),
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `Patient_id` (`Patient_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`Qua_ID`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Test_Serial`),
  ADD KEY `Patient_id` (`Patient_id`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `Donor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chamber`
--
ALTER TABLE `chamber`
  MODIFY `Chamber_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `Diseases_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `H_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `method`
--
ALTER TABLE `method`
  MODIFY `Method_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pa`
--
ALTER TABLE `pa`
  MODIFY `PA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Prescription_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `Qua_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Test_Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `blood_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`);

--
-- Constraints for table `carry`
--
ALTER TABLE `carry`
  ADD CONSTRAINT `carry_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`),
  ADD CONSTRAINT `carry_ibfk_2` FOREIGN KEY (`Diseases_Code`) REFERENCES `diseases` (`Diseases_Code`);

--
-- Constraints for table `chamber`
--
ALTER TABLE `chamber`
  ADD CONSTRAINT `chamber_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`),
  ADD CONSTRAINT `chamber_ibfk_2` FOREIGN KEY (`PA_ID`) REFERENCES `pa` (`PA_ID`);

--
-- Constraints for table `diseases`
--
ALTER TABLE `diseases`
  ADD CONSTRAINT `diseases_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`Payment_id`) REFERENCES `payment` (`Payment_id`);

--
-- Constraints for table `method`
--
ALTER TABLE `method`
  ADD CONSTRAINT `method_ibfk_1` FOREIGN KEY (`Payment_id`) REFERENCES `payment` (`Payment_id`);

--
-- Constraints for table `pa`
--
ALTER TABLE `pa`
  ADD CONSTRAINT `pa_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`);

--
-- Constraints for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `qualifications_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`Patient_id`) REFERENCES `patient` (`Patient_id`),
  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
