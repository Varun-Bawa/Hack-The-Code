-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2015 at 06:52 PM
-- Server version: 5.1.73-community
-- PHP Version: 5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upescsii_htc`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `college` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `level` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`email`, `password`, `fname`, `college`, `branch`, `phone`, `level`, `dt`) VALUES
('aakritijain20@gmail.com', 'aakriti8527016452', 'aakriti jain', 'upes', 'cse-mft', '7895291855', 5, '2015-02-04 15:45:38'),
('aayushvohra@yahoo.co.in', 'abcdef@123', 'Aayush Vohra', 'COES', 'APE-Gas', '8755079363', 1, '2015-02-03 16:28:28'),
('abbywizzz@gmail.com', 'chanakya', 'abhinav bhushan', 'upes', 'btechcsiraecom', '9536044839', 21, '2015-02-04 06:32:12'),
('abc@abc.com', 'qwertyqw', 'abc', 'upes', 'cs', '7830624231', 1, '2015-02-09 05:41:30'),
('abcd@abcd.com', 'qwertyqw', 'abcd', 'upes', 'cs', '7830252424', 1, '2015-02-09 05:42:11'),
('abhiarmy96@gmail.com', 'abhiarmy96@', 'Abhishek Yadav', 'UPES', 'CSE Oil&Gas Info', '8765703199', 11, '2015-02-03 17:29:41'),
('abhikaushal1711@gmail.com', 'ash2ash$', 'Abhishek', 'UPES', 'CSE', '9634605434', 13, '2015-02-03 13:10:16'),
('abhinav.shukla190197@gmail.com', 'abhinav', 'Abhinav', 'UPES', 'CSE - Oil and Gas', '8006108882', 9, '2015-02-08 16:32:51'),
('abhishek.dutta1337@gmail.com', 'abcd1234', 'Abhishek Dutta', 'UPES', 'B.Tech CSE CCVT ', '8006111438', 15, '2015-02-04 06:07:55'),
('adi.gupta95.ag@gmail.com', 'Aditya1234', 'Aditya Gupta', 'UPES', 'B.Tech CS-IT', '7830085419', 16, '2015-02-03 12:07:56'),
('ag212853@gmail.com', '8741819850', 'Ayush Garg', 'UPES', 'CSE-CCVT', '7060324605', 1, '2015-02-01 17:07:55'),
('ahuja.rachit@hotmail.com', 'rachitahuja', 'Rachit Ahuja', 'UPES', 'ADE', '9810349479', 13, '2015-02-03 14:32:59'),
('akarshraj12@gmail.com', '29534691', 'd3c3pti0n16', 'UPES', 'CSE-OSS', '9536131467', 26, '2015-02-03 22:09:45'),
('akhiljuneja3@gmail.com', 'xg54$Agn', 'Akhil Juneja', 'COES, UPES', 'CS-OSS', '7830820573', 12, '2015-02-03 15:50:58'),
('akpizzy@gmail.com', 'peshab', 'Arun', 'upes', 'btech ccvt', '7895263239', 4, '2015-02-01 17:17:01'),
('all.yash2403@gmail.com', 'Gmail@123', 'Yash Shanker Srivastava', 'UPES', 'CCVT', '09557420585', 3, '2015-02-03 19:14:15'),
('amritakashyap965@gmail.com', 'binga123', 'Amrita', 'upes', 'cse ong', '9897898913', 17, '2015-02-03 17:45:26'),
('amyte.orton@gmail.com', 'amitesh44', 'AMITESH JHA', 'UNIVERSITY OF PETROLEUM AND ENERGY STUDIES', 'CSE-Oil &Gas informatics', '9719078347', 1, '2015-02-02 20:09:53'),
('anav.rastogi@gmail.com', '25061996', 'Anav Rastogi', 'upes, dehradun', 'B.tech cse bao', '7351927595', 14, '2015-02-03 17:15:28'),
('anirudhkhanijau@gmail.com', 'interlove', 'anirudh khanijau', 'upes', 'cse-oss', '8375996629', 11, '2015-02-03 17:23:45'),
('ankit.jaggi@live.in', '123', 'Darth Vader', 'sdmfbwkj', 'kjkj', '99999', 22, '2015-02-02 18:10:10'),
('ankitasharmarock7865@gmail.com', '123456', 'ankita', 'UPES', 'cse-oss', '8193902365', 1, '2015-02-02 15:22:52'),
('ankitasood67@gmail.com', 'ashish', 'ankita sood', 'cse bao', 'upes', '9639913352', 16, '2015-02-03 15:30:11'),
('ankitsharmagehu@gmail.com', 'beeblebrox', 'ANKIT SHARMA', 'GRAPHIC ERA HILL UNIVERSITY', 'CS', '7895660110', 9, '2015-02-02 16:30:23'),
('ankitsingh258036@gmail.com', 'qwertyuiop', 'admin', 'dit', 'cse', '9639913352', 17, '2015-02-03 17:38:28'),
('ankkitasood@gmail.com', 'ankk1234', 'Ankkita Sood', 'UPES,dehradun', 'CS-BAO', '7895313038', 10, '2015-02-03 13:41:14'),
('anshulnautiyaldeo@gmail.com', '123456789', 'Anshul Nautiyal', 'Graphic Era Hill University', 'CSE', '8755647338', 9, '2015-02-04 05:43:05'),
('arora.sahil8@gmail.com', 'pinkimoge@123', 'Sahil Arora', 'upes-coes', 'cs-mft', '8755079382', 1, '2015-02-03 17:27:30'),
('ashish.sinha2304@gmail.com', 'aditi@123', 'ashish sinha', 'upes', 'ccvt', '9639913352', 5, '2015-02-01 17:42:08'),
('ashishryot@gmail.com', 'smallville', 'Ryot', 'upes', 'cs', '9418892455', 13, '2015-02-03 16:02:06'),
('avirukhroy@yahoo.com', 'password', 'Avirukh Roy', 'School of Design Studies', 'Bachelor of Design', '9557114858', 14, '2015-02-03 17:30:00'),
('ayush.bhagoliwal@gmail.com', '12521198', 'AB', 'upes', 'cse it', '8194044666', 9, '2015-02-02 09:20:39'),
('ayushi.saraswat596@gmail.com', 'princessal', 'Ayushi Saraswat', 'upes', 'ccvt', '9837052290', 1, '2015-02-02 13:35:48'),
('ayushn123@gmail.com', '@I1dont2know3', 'Ayush Nema', 'M.S.Ramaiah', 'Mechanical', '9424324339', 1, '2015-02-02 16:07:34'),
('bahlsourabh@gmail.com ', 'ncabangalore', 'Sourabh Bahl ', 'UPES ', 'Electrical ', '7351920440 ', 17, '2015-02-05 13:48:04'),
('banerjee1000@gmail.com', 'solution', 'Anurag Banerjee', 'UPES', 'CSE-MFT (2nd Yr)', '7534010044', 17, '2015-02-03 17:55:48'),
('bhavya.gandhi95@gmail.com', 'bhavya', 'Bhavya Gandhi', 'UPES', 'GeoScience', '+9199928061', 11, '2015-02-06 11:26:38'),
('bhuvan.sharma06@gmail.com', 'password', 'Bhuvan Sharma', 'UPES', 'Btech. CSE-BFSI', '9627490592', 9, '2015-02-02 13:02:36'),
('chamoli.mohit@gmail.com', 'madmax1994', 'Mohit Chamoli', 'Graphic Era Hill University', 'CSE', '8006058597', 9, '2015-02-02 13:08:21'),
('chandra.vidur@gmail.com', 'abhyuday@1', 'Vidur', 'COES', 'Top ki hai ', '9897976355', 14, '2015-02-03 13:27:01'),
('chiranjeevi274@gmail.com', 'chiranjeevi94', 'Chiranjeevi Chandan', 'coes', 'material science engnn.', '9410103526', 1, '2015-02-03 16:22:12'),
('civic.29.honda@gmail.com', 'z%ib3ms*', 'NISHANT S', 'upes', 'ADE', '9455035646', 13, '2015-02-03 18:39:52'),
('dbansal6@gmail.com', 'ashish', 'devanshi bansal', 'cse bao', 'upes', '9639913352', 15, '2015-02-02 18:11:42'),
('deeksha.chauhan06@gmail.com', 'deeksha6', 'deeksha chauhan', 'upes', 'cseoss', '08765921165', 1, '2015-02-02 18:07:23'),
('deeprajsinha7@gmail.com', '17/25/31', 'Deepraj Sinha', 'UPES', 'Btech FSE', '7351377927', 21, '2015-02-04 03:18:14'),
('dhruv2saini', 'two2-2two', 'dhruv saini', 'upes', 'ccvt', '9996662075', 17, '2015-02-03 17:38:34'),
('diksha.22071994@gmail.com', 'di@220794', 'diksha sharma', 'jiit', 'cse', '+9182855647', 1, '2015-02-01 19:17:40'),
('diksha.dvrs@gmail.com', 'diksha', 'diksha ', 'jiit', 'cse', '8285564797', 1, '2015-02-01 17:06:26'),
('dikshikagupta@yahoo.co.in', 'dikshika', 'DIKSHIKA GUPTA', 'UPES', 'CSE- BFSI', '9557123431', 13, '2015-02-03 17:44:45'),
('dishakhanna96@gmail.com', 'dishakhanna96', 'DISHA KHANNA', 'UPES', 'CSE-CCVT', '7830858559', 1, '2015-02-01 17:00:09'),
('divyanshag@yahoo.co.in', '123456', 'Divyansh Agarwal', 'UPES', 'CCVT', '9634019325', 10, '2015-02-02 16:00:26'),
('doomrock14@gmail.com', 'raks1995@1', 'RAKSHIT JAISWAL', 'UPES', 'MFT', '9760264265', 9, '2015-02-03 16:29:41'),
('Einstein@Gmail.com', 'Einstein ', 'Einstein', 'UPES', 'QWERTY', '9876543210', 4, '2015-02-04 13:26:54'),
('ershubhamaggarwal19@gmail.com', '}1Qq_"WW', 'Raptor', 'UPES', 'B.Tech CSE IT INFRA', '8954431823', 20, '2015-02-03 20:36:46'),
('gargkartik07@gmail.com', 'rajni@07', 'KARTIK GARG', 'upes', 'b tech ade', '+9178307189', 1, '2015-02-01 16:54:31'),
('gargraghav.96 @gmail.com', 'raghavrg', 'Raghav Garg', 'UPES', 'Cse-CCVT 1st Year', '8052903603', 4, '2015-02-01 19:40:00'),
('gauravng75@gmail.com', 'skrillex', 'gaurav negi', 'upes', 'cse', '7060325336', 9, '2015-02-09 16:31:36'),
('gauravsirvani@gmail.com', 'gauravsirvani1996', 'Gaurav sirvani', 'upes', 'Btech-PSE', '7500097482', 14, '2015-02-03 17:10:39'),
('gnimish01@gmail.com', 'nanananinano', 'Nimish Gupta', 'UPES', 'APE-Upstream', '7500347576', 13, '2015-02-03 14:51:41'),
('harshit.mohan12@stu.upes.ac.in', 'aashu', 'Harshit ', 'UPES', 'CS-OSS', '7895321682', 1, '2015-02-02 12:26:29'),
('hi.shikhararora@gmail.com', 'sra19895', 'Shikhar Arora', 'UPES', 'CS-OSS', '7895316930', 3, '2015-02-05 18:59:27'),
('hzb.prateek@gmail.com', 'prateek27', 'Prateek kumar', 'UPES', 'School Of Designing Studies', '8979772794', 10, '2015-02-02 17:54:00'),
('ishikacool.ban@gmail.com', 'Mimi_1994', 'Ishika', 'UPES', 'CSE CCVT', '9536136266', 17, '2015-02-03 17:44:36'),
('jagathtupakula@gmail.com', 'jazzmyass', 'Tupakula Jagath', 'UPES', 'CCVT', '8954613898', 1, '2015-02-01 17:42:36'),
('jlakshay1095@gmail.com', 'cholebhature', 'lakshay jain', 'university of petroleum and energy studies', 'cse+oss', '9720941796', 5, '2015-02-03 07:40:46'),
('karandeepdps@gmail.com', 'daddy', 'Karandeep Singh Dhillon', 'UPES', 'BAO 1ST', '7830899985', 16, '2015-02-05 04:38:37'),
('kartikey.mishra309@gmail.com', 'linkinparkl8br', 'Kartikey Mishr', 'UPES', 'CSE BAO', '09557069148', 9, '2015-02-01 18:33:09'),
('kavinsharma456@gmail.com', '9897002991', 'kavin sharma', 'upes', 'cse-o&g', '9557039327', 11, '2015-02-03 17:29:23'),
('khannasumit94@yahoo.com', 'Killdvirus', 'sumit', 'coes', 'cse', '9794068309', 16, '2015-02-02 18:34:35'),
('kupr50@gmail.com', 'kushalkushal', 'Kushal Priyadarshi', 'UPES', 'Mechanical', '955-649490', 1, '2015-02-02 14:50:56'),
('kvjaswal@yahoo.in', 'intheendlp23', 'The Professor', 'Upes', 'School Of Design', '7060324667', 4, '2015-02-02 14:02:56'),
('kyashank@yahoo.com', 'kapoor', 'yashank kapoor', 'University of Petroleum & Energy Studies (UPES) Dehradun', 'cse- mft', '8005156816', 14, '2015-02-04 16:03:54'),
('lakshay41295@gmail.com', 'Laksham1234', 'Lakshay', 'upes', 'CS-OG', '9873875426', 11, '2015-02-03 15:26:48'),
('lambostephen04@gmail.com', 'intheendlp23', 'Kay Vee', 'School Of Design,Upes', 'B.des', '7060324667', 10, '2015-02-02 17:52:12'),
('lavishgrover@gmail.com', '8791889822', 'Lovesh grover', 'graphic era hill university ', 'computer science ', '8791889822', 1, '2015-02-02 04:36:43'),
('lily02.anchal@gmail.com', '123456', 'Anchal Chopra', 'UPES', 'CSE-MFT', '8979467399', 17, '2015-02-04 02:46:12'),
('lovinabansalganesh@gmail.com', 'askaskask', 'Lovinabansal', 'GEHU', 'CSE', '8864937893', 1, '2015-02-02 06:26:46'),
('lovinabansalgehu@gmail.com', 'gehugehu', 'lovina', 'gehu', 'cse', '8864937893', 1, '2015-02-02 06:31:55'),
('manik_langer@stu.upes.ac.in', 'langer1994', 'Manik Langer', 'upes', 'cs oil and gas', '7534010066', 17, '2015-02-03 17:54:13'),
('mathur.shubham93@gmail.com', 'sam_1993', 'matty', 'UPES', 'Btech Cs Oss', '8958002407', 10, '2015-02-01 19:27:00'),
('mggmanik@gmail.com', 'chotimoti', 'Manik', 'COES', 'B.Tech(CS+OG)', '7060186830', 1, '2015-02-01 17:13:42'),
('mj74447@gmail.com', '098730087170', 'mayank joshi', 'upes', 'cse-mft', '07534028548', 12, '2015-02-03 12:47:10'),
('modishubham27@gmail.com', 'shubh', 'shubham', 'jiit', 'it', '9958562994', 1, '2015-02-01 17:05:36'),
('mohitg155@gmail.com', 'mohitg155', 'mohit gupta', 'GEHU', 'CSE', '8791330138', 1, '2015-02-01 18:12:59'),
('mudassir.khan@stu.upes.ac.in', '39sadum', 'Mudassir khan', 'upes ', 'btech msnt', '9557640396', 15, '2015-02-04 14:56:39'),
('nigam.aayush@gmail.com', 'ayushnigam', 'Ayush Nigam', 'upes', 'ape up', '8765379349', 11, '2015-02-02 18:43:56'),
('nitin.negi088@gmail.com', '27122012', 'nitin negi', 'UPES', 'CSE-IT', '9634736148', 9, '2015-02-02 09:48:53'),
('nitinsomani2@gmail.com', 'pass1234', 'nitin somani', 'upes coes', 'cse (o&g)', '8447311121', 14, '2015-02-03 17:10:00'),
('palakj786@gmail.com', 'ss', 'palak', 'jiit', 'it', '9958562977', 1, '2015-02-01 17:06:59'),
('pallavgupta159@gmail.com', '08233847521', 'Pallav', 'UPES', 'SoDS', '9557113983', 14, '2015-02-03 18:19:12'),
('parteek27@gmail.com', 'prateek', 'mack', 'school of designing studies', 'Upes', '8979772794', 11, '2015-02-03 16:06:47'),
('parthgupta.in@gmail.com', 'parth123', 'Parth Gupta', 'UPES', 'CSE-CCVT', '7830855580', 17, '2015-02-06 03:12:46'),
('pmparul25@gmail.com', 'pmparul25', 'Invincibles', 'UPES', 'CCVT', '9812444874', 16, '2015-02-03 17:33:59'),
('pradhanayush2@gmail.com', 'theflash', 'Ayush Pradhan', 'upes', 'cs-ccvt', '7830884123', 5, '2015-02-07 08:24:28'),
('pranav2vis@gmail.com', 'i luv my mother', 'Pranav Arora', 'UPES', 'CSE_BAO', '7830977706', 16, '2015-02-05 04:34:21'),
('prateek329@gmail.com', 'pratikjain', 'prateek jain', 'upes coes', 'msnt', '09810097196', 17, '2015-02-05 12:56:18'),
('prateekmehta1995@gmail.com', '19951902', 'prateek', 'university of petroleum and energy studies', 'btech ase +ave ', '09416216777', 2, '2015-02-03 04:23:34'),
('prateeksingh0000@gmail.com', 'prateek', 'Mack', 'School Of Designing Studies', 'upes', '8797051885', 1, '2015-02-03 15:06:36'),
('radhika_8345@yahoo.co.in', 'ilovemyself8345', 'Radhika Agarwal', 'IP', 'philosophy ', '+9195820950', 4, '2015-02-02 14:18:45'),
('raghav0495@gmail.com', 'qwerty123', 'hovid', 'UPES', 'CSE-OSS', '9557791747', 26, '2015-02-03 22:10:07'),
('rahulpatnabihar@gmail.com', 'ashish', 'shreypho', 'photography', 'mechanical', '9639913352', 16, '2015-02-02 19:30:51'),
('rahulsharmacs50@gmail.com', 'sR25012106', 'Rahul', 'UPES', 'CCVT IV', '8057024239', 4, '2015-02-01 17:16:50'),
('raj.akshita@gmail.com', 'ayushi19', 'Ayushi', 'upes', 'cs-bao', '9999066976', 7, '2015-02-03 12:52:04'),
('rajatk3130@gmail.com', 'real0007', 'Rajat kaliraman', 'UPES', 'CS cyber forensics', '8006108882', 5, '2015-02-07 08:25:47'),
('rajatk3130@gmail.om', 'rajat', 'Rajat Kaliraman', 'UPES', 'CSE - Cyber Forensics', '8006108882', 1, '2015-02-07 07:01:45'),
('ramubhattathiri@gmail.com', 'Mission1#', 'Harry Potter', 'MOM', 'Magic', '8755947583', 26, '2015-02-03 21:23:31'),
('rishabhgarg79@gmail.com', 'Gmail@123', 'rishabh', 'upes', 'ade', '7895343575', 1, '2015-02-07 17:31:44'),
('rishabhmathur.kota31@gmail.com', 'rrishabh123', 'Rishabh Mathur', 'UPES', 'Electrical Engg.', '+91-8764314', 15, '2015-02-04 13:46:21'),
('rohannagi@yahoo.com', 'DL4RSNKK', 'Rohan', 'SGT', 'CSE', '9711265090', 11, '2015-02-03 17:25:31'),
('rtk.rj1@gmail.com', '9931157808', 'Ritika Raj', 'college of enigineering', 'cse-oil and gas informatics', '9536127183', 1, '2015-02-02 17:27:06'),
('ruman_khan@stu.upes.ac.in', 'Gmail@123', 'Cypher_vampire', 'upes', 'CSE MFT', '8932850444', 9, '2015-02-02 14:02:34'),
('sagar.sikka123@gmail.com', 'unable2connect', 'sagar sikka', 'UPES', 'BTech CSE IT Infra', '9639816104', 1, '2015-02-01 16:52:41'),
('sahiltupes@gmail.com', 'football', 'Sahil Taneja', 'upes', 'cs-ccvt(2 sem)', '8006639968', 6, '2015-02-03 06:43:23'),
('saiyam.modi@gmail.com', 'honeymodi', 'saiyam', 'JUET GUNA', 'CSE', '8962612567', 1, '2015-02-01 17:12:55'),
('sam010395966@gmail.com', 'aman1bansal', 'Lakshit JJain', 'Graphic Era Hill University', 'Computer Science', '8126427422', 1, '2015-02-01 17:46:02'),
('sandeep.aniket13@gmail.com', 'dontactsmart', 'Sandeep Kumar', 'UPES', 'CSE', '9756475913', 1, '2015-02-02 16:46:08'),
('sapnarawat@gmail.com', 'sapnasapna', 'sapna', 'petroleum', 'civil', '123456789', 1, '2015-02-02 05:56:20'),
('satty913@gmail.com', '9897171276', 'Satyendra Singh', 'Gehu', 'CSE', '7409877913', 1, '2015-02-01 17:45:24'),
('seema@gmail.com', 'askaskask', 'seema', 'petroleum', 'cse', '23456789', 1, '2015-02-02 06:20:30'),
('sharma.vips@yahoo.com', 'vipul@123', 'Vipul Sharma ', 'upes', 'cs-ccvt', '9808063391', 3, '2015-02-03 04:23:55'),
('sherryjindal234@gmail.com', 'start123', 'Sherry Jindal', 'CoES, UPES', 'CSE-OSS', '8755966301', 8, '2015-02-02 18:31:14'),
('shiv113413@gmail.com', 'shiva', 'Shivam kapri', 'UPES', 'Aerospace and avionics', '9639330056', 6, '2015-02-03 09:57:47'),
('shreeansh.mairal@gmail.com', '123456', 'Shreeansh Mairal', 'UPES', 'CSE-CCVT', '7895285424', 17, '2015-02-03 17:38:17'),
('shubhamagarwal.gehu@gmail.com', '8272869963', 'Shubham Agarwal', 'Graphic Era Hill University', 'Information Technology', '8272869963', 11, '2015-02-04 09:30:00'),
('shubhamchoradia@gmail.com', 'gameofdeamons', 'Shubham Choradia', 'UPES', 'Cyber Law', '9897780732', 17, '2015-02-03 17:44:15'),
('shubhamgupta.mk@gmail.com', 'hackit', 'Shubham Gupta', 'UPES', 'CSE Oil and Gas Info.', '9756331230', 12, '2015-02-03 16:26:45'),
('shubhams469@gmail.com', 'facebook', 'Shobham Kumar Sharma', 'UPES', 'CSE OSS', '7599004098', 4, '2015-02-02 12:48:37'),
('simrandhamija30@gmail.com', 'Pancake4u!', 'thepurpleone', 'CoES', 'cse-oss', '7830843796', 9, '2015-02-03 13:08:27'),
('simrangupta.6995@gmail.com', '9557504816', 'Simran Gupta', 'CoES,UPES', 'CS-CCVT', '9557504816', 16, '2015-02-03 09:09:22'),
('sinha.ashish46@gmail.com', 'ashish', 'ayushi srivastav', 'upes ', 'cse bao', '9639913352', 17, '2015-02-03 17:51:58'),
('someshj4you@gmail.com', '123456', 'Somesh  Jaiswal', 'UPES', 'CS-OG', '07389336572', 9, '2015-02-02 14:05:26'),
('srashtigupta31995@gmail.com', 'srashti123', 'srashti', 'UPES', 'CS-OGI', '9532828845', 4, '2015-02-01 18:59:23'),
('srivastavashreyash99@gmail.com', 'gotohell_123', 'Shreyash Srivastava', 'DIET', 'BCA', '7895902979', 1, '2015-02-03 10:39:09'),
('sujayvenaik@gmail.com', 'sujay2396', 'Sujay Venaik', 'UPES', 'CSE-BFSI', '7500609937', 17, '2015-02-06 19:14:51'),
('sweatygenius@gmail.com', 'sweatyg', 'Kushal Agrawal', 'St. Joseph''s College', 'CS', '09335476563', 1, '2015-02-02 11:21:01'),
('tanyau 214@gmail.com', '8006708004', 'kritika saini', 'Graphic era hill university', 'b.com( hon''s)', '7536059330', 1, '2015-02-02 13:35:28'),
('tanymany.srv@gmail.com', 'tmkctmkb', 'tanmay srivastava', 'upes', 'cs', '9411948737', 1, '2015-02-07 08:27:24'),
('thesynchronizer47@gmail.com', 'asdfghjkl', 'Parakram Singh', 'UPES', 'CSE IT Infra', '7895315896', 26, '2015-02-03 22:10:10'),
('thukralsaransh@gmail.com', 'rishuthukral', 'SARANSH', 'NIFTEM', 'Btech', '9958318768', 5, '2015-02-07 08:49:28'),
('udattab2@gmail.com', 'harrypotter', 'Udatta Bhattacharya', 'UPES', 'CSE-MT', '8006598597', 9, '2015-02-02 20:01:38'),
('ujjawalkshp@gmail.com', 'uk4797492', 'UJJAWAL', 'UPES', 'CSE', '7779831717', 1, '2015-02-05 11:11:55'),
('Ujjwaltyagi32@gmail.com', 'Mannattyagi', 'Ujjwal', 'Graphic Era Hill University,Dehradun', 'IT', '7417336862', 4, '2015-02-02 02:40:49'),
('utkarshmalhotra43@gmail.com', 'utkarsh1995', 'utkarsh', 'upes', ' btech cs-mainframe', '7351919129', 14, '2015-02-03 17:09:55'),
('vanshaj.setia@gmail.com', 'GODISTHEBEST_1234', 'vanshaj setia', 'UPES', 'CS-CCVT', '7895294027', 1, '2015-02-01 16:58:47'),
('vardhan.singla11@gmail.com', 'love', 'honey', 'Upes', 'nothing', '8146882711', 16, '2015-02-03 02:33:50'),
('vedantsraghav@gmail.com', 'raghav', 'Vedant Singh Raghav', 'UPES,Dehradun', 'APE-UPSTREAM', '9557114831', 11, '2015-02-04 15:34:03'),
('vipin.ddn.2@gmail.com', 'asdf@123', 'vipin', 'UPES', 'CCVT', '9917044103', 4, '2015-02-02 02:42:21'),
('vtaneja127@gmail.com', '1234567890', 'Vibhor', 'upes', 'cse bao', '8755921886', 17, '2015-02-03 17:44:17'),
('yaman2012@gmail.com', 'pBR322', 'Yaman Gupta', 'UPES', 'Bachelor of Design', '9675194852', 6, '2015-02-03 13:16:00'),
('yo.ankit@gmail.com', '123', 'Spock', 'khbjh', 'jbj', '9999', 20, '2015-02-04 15:53:48'),
('yoraghavgarg@gmail.com', 'raghavrg', 'raghav garg', 'UPES', 'CCVT', '8765379349', 15, '2015-02-04 06:20:58'),
('yuvi@gmail.com', '67890-', 'UV', 'UPES', 'CCVT', '9997572251', 19, '2015-02-04 08:39:45'),
('zishanahmedgehu@gmail.com', 'HackCode_gehu', 'Zishan Ahmed', 'GRAPHIC ERA HILL UNIVERSITY', 'CS', '7895789890', 9, '2015-02-02 16:33:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
