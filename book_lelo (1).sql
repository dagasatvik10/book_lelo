-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2016 at 03:24 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_lelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `no_of_pages` int(11) DEFAULT NULL,
  `type` enum('notes','books') COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `need` enum('buy','sell') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'sell',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `name`, `year`, `branch_id`, `author`, `publication`, `publication_year`, `no_of_pages`, `type`, `description`, `price`, `need`, `created_at`, `updated_at`) VALUES
(1, 3, 'auto', '781', 0, 'myself', 'no', 9021, 781271289, 'books', 'ssbjsbcn ', 3526, 'sell', '2016-04-06 04:31:12', '2016-04-06 04:31:12'),
(2, 3, 'Automata', '2', 10, 'me', 'myself', 2013, 200, 'books', 'barbaad book', 200, 'sell', '2016-04-08 15:13:26', '2016-04-08 15:13:26'),
(3, 3, 'Automata', '2', 10, 'me', 'myself', 2013, 200, 'books', 'barbaad book', 200, 'sell', '2016-04-08 15:14:25', '2016-04-08 15:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `book_pics`
--

CREATE TABLE `book_pics` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `original_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_pics`
--

INSERT INTO `book_pics` (`id`, `book_id`, `name`, `size`, `original_name`, `extension`, `mime`, `created_at`, `updated_at`) VALUES
(1, 1, 'BookPics_1id1', 162811, '7f298d18-cf6f-414f-8bc1-aafe226d43cf.jpg', 'jpg', 'image/jpeg', '2016-04-06 04:31:12', '2016-04-06 04:31:12'),
(2, 1, 'BookPics_1id2', 126495, '11891131_972250866160302_5915719681936235227_n.jpg', 'jpg', 'image/jpeg', '2016-04-06 04:31:12', '2016-04-06 04:31:12'),
(3, 1, 'BookPics_1id3', 152970, 'a2ed5c88-9d67-4d0c-afc5-da3e83ec7f76.jpg', 'jpg', 'image/jpeg', '2016-04-06 04:31:12', '2016-04-06 04:31:12'),
(4, 2, 'BookPics_2id1', 1555600, 'Screenshot from 2016-03-27 09-18-04.png', 'png', 'image/png', '2016-04-08 15:13:26', '2016-04-08 15:13:26'),
(5, 2, 'BookPics_2id2', 116838, 'Screenshot from 2016-03-29 14-04-14.png', 'png', 'image/png', '2016-04-08 15:13:26', '2016-04-08 15:13:26'),
(6, 2, 'BookPics_2id3', 115497, 'Screenshot from 2016-04-08 05-15-45.png', 'png', 'image/png', '2016-04-08 15:13:26', '2016-04-08 15:13:26'),
(7, 2, 'BookPics_2id4', 239152, 'Screenshot from 2016-04-08 21-49-36.png', 'png', 'image/png', '2016-04-08 15:13:27', '2016-04-08 15:13:27'),
(8, 2, 'BookPics_2id5', 162388, 'Screenshot from 2016-04-05 23-01-19.png', 'png', 'image/png', '2016-04-08 15:13:27', '2016-04-08 15:13:27'),
(9, 2, 'BookPics_2id6', 159589, 'Screenshot from 2016-04-04 17-51-46.png', 'png', 'image/png', '2016-04-08 15:13:27', '2016-04-08 15:13:27'),
(10, 3, 'BookPics_3id1', 1555600, 'Screenshot from 2016-03-27 09-18-04.png', 'png', 'image/png', '2016-04-08 15:14:25', '2016-04-08 15:14:25'),
(11, 3, 'BookPics_3id2', 116838, 'Screenshot from 2016-03-29 14-04-14.png', 'png', 'image/png', '2016-04-08 15:14:25', '2016-04-08 15:14:25'),
(12, 3, 'BookPics_3id3', 115497, 'Screenshot from 2016-04-08 05-15-45.png', 'png', 'image/png', '2016-04-08 15:14:25', '2016-04-08 15:14:25'),
(13, 3, 'BookPics_3id4', 239152, 'Screenshot from 2016-04-08 21-49-36.png', 'png', 'image/png', '2016-04-08 15:14:25', '2016-04-08 15:14:25'),
(14, 3, 'BookPics_3id5', 162388, 'Screenshot from 2016-04-05 23-01-19.png', 'png', 'image/png', '2016-04-08 15:14:25', '2016-04-08 15:14:25'),
(15, 3, 'BookPics_3id6', 159589, 'Screenshot from 2016-04-04 17-51-46.png', 'png', 'image/png', '2016-04-08 15:14:26', '2016-04-08 15:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`) VALUES
(0, 'Civil Engg.'),
(7, 'Mining Engg.'),
(10, 'Computer Sc. & engg.'),
(11, 'Computer Science'),
(12, 'Comp. Engg. & Information Technology'),
(13, 'Information Technology'),
(14, 'Master of Computer Application'),
(15, 'Computer Engg.'),
(16, 'Information Science'),
(20, 'Electrical Engg.'),
(21, 'Electrical & Electronics engg.'),
(22, 'Instrumentation & Control Engg.'),
(23, 'Instrumentation Engg.'),
(30, 'Electronics Engg.'),
(31, 'Electronics & Communication Engg.'),
(32, 'Electronics & Instrumentation Engg.'),
(33, 'Electronics & Telecommunication Engg.'),
(34, 'Electronics, Instrumentation & Controll Engg.'),
(35, 'Applied Electronics & Instrumentation Engg.'),
(40, 'Mechanical Technology'),
(41, 'Manufacturing Technology'),
(42, 'Metallurgical Engg.'),
(43, 'Mechanical & Industrial Engg.'),
(44, 'Production Engg.'),
(45, 'Industrial & Production Engg.'),
(46, 'Production & Industrial Engg.'),
(50, 'Bachelor of Pharmacy'),
(51, 'Chemical Engg.'),
(52, 'Bio-Chemical Engg.'),
(53, 'Chemical & Alcohol Technology'),
(54, 'Bio-Technology'),
(55, 'Chemical & Bio Engg,'),
(60, 'Textile Chemistry'),
(61, 'Textile Technology'),
(62, 'Man-made Fibre Technology'),
(63, 'Textile Engg.'),
(64, 'Carpet Technology'),
(65, 'Bachelor of Fashion & Apparel Design (BFAD)'),
(70, 'MBA'),
(72, 'MBA (Rural Development)'),
(74, 'BHMCT'),
(80, 'Agricultural Engg.'),
(81, 'Architecture'),
(82, 'Food Technology & Engg.'),
(83, 'Sugar Technology'),
(84, 'Oil Technology'),
(85, 'Paint Technology'),
(86, 'Leather Technology'),
(87, 'Plastic Technology'),
(88, 'Ceramic Technology'),
(89, 'Agriculture Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `city`) VALUES
(1, 'Anand Engineering College', 'AGRA'),
(2, 'Faculty of Engineering & Technology', 'AGRA'),
(3, 'Hindustan Institute of Technology and Management', 'AGRA'),
(4, 'RAJA BALWANT SINGH ENGINEERING TECHNICAL CAMPUS, BICHPURI, AGRA', 'AGRA'),
(5, 'RAJA BALWANT SINGH MANAGEMENT TECHNICAL CAMPUS, AGRA', 'AGRA'),
(6, 'Agra Public Institute of Technology & Computer Education (Deptt. of Pharmacy)', 'AGRA'),
(7, 'Shivdan Singh Institute of Technology & Management', 'ALIGARH'),
(10, 'United College of Engineering & Research', 'ALLAHABAD'),
(11, 'United Institute of Management', 'ALLAHABAD'),
(12, 'Pharmacy College', 'AZAMGARH'),
(13, 'Shri Gopichand College Of Pharmacy', 'BAGHPAT'),
(14, 'Shri Ram Murti Smarak College of Engineering & Technology', 'BAREILLY'),
(16, 'Rakshpal Bahadur Management Institute', 'BAREILLY'),
(17, 'Kunwar Satyavira College Of Engineering and Management, Bijnor', 'BIJNOR'),
(18, 'Babu Banarsi Das Institute Of Engineering Technology & Research Centre', 'BULANDSHAHAR'),
(19, 'Marathwada Inst. of Technology , ', 'BULANDSHAHAR'),
(26, 'Jhunjhunwala Business School', 'FAIZABAD'),
(27, 'Ajay Kumar Garg Engineering College', 'GHAZIABAD'),
(28, 'Ideal Institute of Technology', 'GHAZIABAD'),
(29, 'KIET GROUP OF INSTITUTIONS(KRISHNA INSTITUTE OF ENGINEERING AND TECHNOLOGY)', 'GHAZIABAD'),
(30, 'Inderprastha Engineering College', 'GHAZIABAD'),
(32, 'Abes Engineering College , Ghaziabad', 'GHAZIABAD'),
(33, 'Raj Kumar Goel Institute Of Technology', 'GHAZIABAD'),
(35, 'Babu Banarsi Das Institute Of Technology', 'GHAZIABAD'),
(36, 'Institute of Management Studies', 'GHAZIABAD'),
(37, 'Institute of Management Education', 'GHAZIABAD'),
(38, 'Institute of Technology & Science', 'GHAZIABAD'),
(39, 'Institute of Management & Research', 'GHAZIABAD'),
(40, 'Technical Education & Research Institute, Post Graduate College', 'GHAZIPUR'),
(41, 'Acharya Narendra Dev College of Pharmacy', 'GONDA'),
(42, 'M.M.M. Engineering College', 'GORAKHPUR'),
(43, 'Bundelkhand Institute of Engineering & Technology, ', 'JHANSI'),
(44, 'Uttar Pradesh Textile Technology Institute', 'KANPUR NAGAR'),
(45, 'Harcourt Butler Technological Institute', 'KANPUR NAGAR'),
(46, 'Maharana Pratap Engineering College', 'KANPUR NAGAR'),
(47, 'Dr. Virendra Swarup Institute Of Computer Studies', 'KANPUR NAGAR'),
(48, 'Dayanand Academy Of Management Studies', 'KANPUR NAGAR'),
(50, 'College Of Management Studies', 'KANPUR NAGAR'),
(51, 'Faculty Of Architecture, U P Technical University (Formerly: Lucknow College Of Architecture & GCA)', 'LUCKNOW'),
(52, 'Institute of Engineering & Technology', 'LUCKNOW'),
(53, 'Azad Institute of Engg. & Technology', 'LUCKNOW'),
(54, 'Babu Banarasi Das National Institute of Technology & Management', 'LUCKNOW'),
(56, 'Babu Banarasi Das Northern India Institute of Technology', 'LUCKNOW'),
(57, 'International Institute For Special Education (IISE)', 'LUCKNOW'),
(58, 'Institute Of Environment & Management', 'LUCKNOW'),
(59, 'Lal Bahadur Shastri Institute of Management & Development Studies,', 'LUCKNOW'),
(60, 'Gyan Institute of Management & Technology', 'LUCKNOW'),
(61, 'Sherwood College of Management', 'LUCKNOW'),
(62, 'Motilal Rastogi School of Management', 'LUCKNOW'),
(64, 'Hindustan College Of Science & Technology', 'MATHURA'),
(65, 'B.S.A.College Of Engineering & Technology', 'MATHURA'),
(66, 'Rajeev Academy For Pharmacy', 'MATHURA'),
(67, 'Hindustan Institute Of Management & Computer Studies', 'MATHURA'),
(68, 'Meerut Institute Of Engineering & Technology', 'MEERUT'),
(69, 'Radha Govind Engineering College', 'MEERUT'),
(70, 'College Of Engg. & Rural Technology', 'MEERUT'),
(72, 'IIMT Management College', 'MEERUT'),
(74, 'Dewan Institute Of Management Studies', 'MEERUT'),
(75, 'Institute Of Informatics & Management Sciences', 'MEERUT'),
(76, 'Ghanshyam Binani Academy of Management Sciences', 'MIRZAPUR'),
(77, 'Dr. K.N. Modi Institute Of Engineering & Technology', 'GHAZIABAD'),
(78, 'Dr. K.N. Modi Institute Of Pharmaceutical Education & Research', 'GHAZIABAD'),
(79, 'Unique Institute Of Management & Technology', 'GHAZIABAD'),
(81, 'Institute Of Foreign Trade And Management', 'MORADABAD'),
(82, 'Moradabad Institute Of Technology', 'MORADABAD'),
(83, 'S.D.College of Engineering & Technology', 'MUZAFFARNAGAR'),
(84, 'Bhagwant Institute Of Technology', 'MUZAFFARNAGAR'),
(85, 'S.D. College Of Management Studies', 'MUZAFFARNAGAR'),
(88, 'Apeejay Institute Of Technology, School Of Architecture & Planning,', 'GAUTAM BUDDH NAGAR'),
(90, 'I.E.C. College Of Engineering & Technology', 'GAUTAM BUDDH NAGAR'),
(91, 'J.S.S. Academy Of Technical Education', 'GAUTAM BUDDH NAGAR'),
(92, 'Priyadarshani College Of Computer Sciences', 'GAUTAM BUDDH NAGAR'),
(93, 'Ram Eesh Institute Of Vocational And Technical Education, ', 'GAUTAM BUDDH NAGAR'),
(94, 'Galgotias Institute Of Management And Technology (GIMT) ', 'GAUTAM BUDDH NAGAR'),
(95, 'Mahatama Gandhi Mission College Of Engineering & Technology', 'GAUTAM BUDDH NAGAR'),
(96, 'Vishveshwarya Institute Of Engineering & Technology', 'GAUTAM BUDDH NAGAR'),
(97, 'Galgotias College Of Engg. & Technology, ', 'GAUTAM BUDDH NAGAR'),
(98, 'Institute Of Management Studies, ', 'GAUTAM BUDDH NAGAR'),
(99, 'Harlal Institute Of Management & Technology (HIMT)', 'GAUTAM BUDDH NAGAR'),
(100, 'Amity School of Computer Sciences', 'GAUTAM BUDDH NAGAR'),
(103, 'Shobhit Institute Of Engineering & Technology', 'SAHARANPUR'),
(104, 'Kamla Nehru Institute Of Technology', 'SULTANPUR'),
(106, 'School Of Management Sciences', 'VARANASI'),
(107, 'Institute of Computer Science & Technology', 'VARANASI'),
(108, 'Rajarshi School of Management and Technology (RSMT)', 'VARANASI'),
(109, 'Aligarh College of Engineering and Technology', 'ALIGARH'),
(110, 'Institute Of Engineering & Rural Technology', 'ALLAHABAD'),
(112, 'Indian Institute Of Carpet Technology', 'S.R.NAGAR'),
(113, 'Integrated Academy of Management & Technology (INMANTEC)', 'GHAZIABAD'),
(114, 'Institute of Professional Excellence & Management', 'GHAZIABAD'),
(115, 'Advance Institute Of Management', 'GHAZIABAD'),
(116, 'Jaipuria Institute Of Management', 'GHAZIABAD'),
(117, 'Ram Chameli Chadha Vishvas (Post Graduate) Girls College, ', 'GHAZIABAD'),
(118, 'Nandani Nagar Mahavidayala College of Pharmacy, ', 'GONDA'),
(119, 'Maharana Pratap Mangla Devi Insititute of Computer Science Tech. & Mgt.', 'GORAKHPUR'),
(120, 'Institute Of Technology & Management', 'GORAKHPUR'),
(121, 'Subhash Institute Of Software Technology', 'KANPUR NAGAR'),
(122, 'Shri Ramswaroop Memorial College Of Engineering & Management', 'LUCKNOW'),
(123, 'Saroj Institute of Technology & Management', 'LUCKNOW'),
(124, 'Institute Of Co-Operative & Corporate Management, Research & Training', 'LUCKNOW'),
(126, 'Sachdeva Institute of Technology', 'MATHURA'),
(127, 'IIMT Engineering College', 'MEERUT'),
(128, 'Bharat Institute Of Technology (School Of Engineering)', 'MEERUT'),
(129, 'Forte Institute of Technology (FIT)', 'MEERUT'),
(132, 'Greater Noida Institute Of Technology (Engineering Institute)', 'GAUTAM BUDDH NAGAR'),
(133, 'Noida Institute Of Engg. & Technology (Engineering Institute)', 'GAUTAM BUDDH NAGAR'),
(134, 'Sacred Heart Institute Of Managament & Technology, ', 'SITAPUR'),
(135, 'Kamla Nehru Institute of Physical & Social Sciences', 'SULTANPUR'),
(136, 'S.D.College Of Pharmacy And Vocational Studies, ', 'MUZAFFARNAGAR'),
(138, 'B.B.S.College of Enginering and Technology', 'ALLAHABAD'),
(139, 'Kali Charan Nigam Institute Of Technology', 'BANDA'),
(140, 'Institute Of Environment & Management', 'BARABANKI'),
(141, 'Sagar Institute of Technology & Management', 'BARABANKI'),
(142, 'Khandelwal College of Management Science and Technology', 'BAREILLY'),
(143, 'Ims Engineering College', 'GHAZIABAD'),
(144, 'Prasad Institute f Technology', 'JAUNPUR'),
(145, 'SR Group of Institutions(College Of Science and Engineering)', 'JHANSI'),
(146, 'B.D.S.Institute of Management', 'MEERUT'),
(148, 'Teerthanker Mahaveer Institute of Management & Technology', 'MORADABAD'),
(149, 'Centre For Management Technology', 'GAUTAM BUDDH NAGAR'),
(150, 'College of Engineering & Technology', 'GAUTAM BUDDH NAGAR'),
(151, 'Global Institute of Information Technology', 'GAUTAM BUDDH NAGAR'),
(152, 'Mangalmay Institute of Management and Technology', 'GAUTAM BUDDH NAGAR'),
(153, 'Skyline Institute of Engineering & Technology, ', 'GAUTAM BUDDH NAGAR'),
(154, 'Faculty of Management And Technology', 'VARANASI'),
(155, 'Ewing Christian Institute of Management & Technology', 'ALLAHABAD'),
(156, 'Central Institute of Computer & Management Education', 'LUCKNOW'),
(157, 'Institute of Hotel Managememt Catering Technology & Applied Nutrition', 'MEERUT'),
(158, 'Janhit Institute of Education & Information', 'GAUTAM BUDDH NAGAR'),
(159, 'J.P. Institute of Hotel Management & Catering Technology', 'MEERUT'),
(161, 'Krishna Engineering College', 'GHAZIABAD'),
(162, 'Shambhunath Institute of Engg. & Technology', 'ALLAHABAD'),
(163, 'Dr. M.C. Saxena College of Engineering & Technology', 'LUCKNOW'),
(164, 'Pranveer Singh Institute of Technology', 'KANPUR NAGAR'),
(165, 'Kanpur Institute of Technology', 'KANPUR NAGAR'),
(166, 'Dr. Ambedkar Institute of Technology for Handicapped', 'KANPUR NAGAR'),
(167, 'Rajarshi Rananjay Sinh College of Pharmacy', 'SULTANPUR'),
(168, 'Smt. Vidyawati College of Pharmacy', 'JHANSI'),
(169, 'Rakshpal Bahadur College of Pharmacy', 'BAREILLY'),
(170, 'I.T.S. Paramedical College', 'GHAZIABAD'),
(171, 'Shri R.L.T. Institute of Pharmaceutical Science & Technology College', 'ETAWAH'),
(172, 'Lloyd Institute of Management & Technology', 'GAUTAM BUDDH NAGAR'),
(173, 'Rajiv Academy For Technology & Management', 'MATHURA'),
(174, 'Kishan Institute of Information Technology', 'MEERUT'),
(175, 'Al-Barkaat Institute of Management Studies', 'ALIGARH'),
(176, 'I.I.L.M. Academy for Higher Learning', 'LUCKNOW'),
(177, 'Indira Gandhi Institute of Co-Operative Management', 'LUCKNOW'),
(179, 'Jeevandeep Institute of Management & Technology, ', 'VARANASI'),
(180, 'M.P. Institute of Management & Computer Application', 'VARANASI'),
(181, 'S.T.E.P.- H.B.T.I.', 'KANPUR NAGAR'),
(182, 'Kalka Institute For Research & Advanced Studies (Kiras )', 'MEERUT'),
(183, 'Pt. Sujan Singh Degree College', 'MEERUT'),
(184, 'Institute of Management Sciences', 'VARANASI'),
(185, 'Iimt Hotel Management College', 'MEERUT'),
(186, 'Kamla Nehru Institute of Management & Technology', 'SULTANPUR'),
(187, 'Feroze Gandhi Institute of Engg. & Technology', 'RAIBAREILLY'),
(188, 'Advance Institute of Biotech & Paramedical Sciences', 'KANPUR NAGAR'),
(189, 'Central Institute of Plastic Enginerring & Technology', 'LUCKNOW'),
(190, 'Doeacc Society', 'GORAKHPUR'),
(191, 'Invertis Institute of Engg. & Technology', 'BAREILLY'),
(192, 'Ganeshi Lal Bajaj Institute of Technology & Management', 'GAUTAM BUDDH NAGAR'),
(193, 'United College of Engg. & Research', 'GAUTAM BUDDH NAGAR'),
(194, 'H.R.Institute of Technology', 'GHAZIABAD'),
(195, 'K.N.G.D. Modi Engieering College', 'GHAZIABAD'),
(196, 'College of Engineering, Science & Technology', 'LUCKNOW'),
(197, 'Azad Institute of Pharmacy & Research', 'LUCKNOW'),
(198, 'Iimt College of Medical Sciences', 'MEERUT'),
(199, 'KIET GROUP OF INSTITUTIONS(KIET SCHOOL OF PHARMACY)', 'GHAZIABAD'),
(200, 'Maharana Pratap College Of Pharmacy', 'KANPUR NAGAR'),
(201, 'Nkbr College of Pharmacy & Research Centre', 'MEERUT'),
(202, 'Hygia Institute of Pharmaceutical Education And Research', 'LUCKNOW'),
(203, 'Rameshwaram Institute of Technology & Management', 'LUCKNOW'),
(204, 'R. V. Northland Institute', 'GREATOR NOIDA'),
(205, 'Institute of Pharmacy', 'VARANASI'),
(206, 'Translam Institute of Pharmaceutical Education & Research', 'MEERUT'),
(207, 'Vishveshwarya Institute of Medical Sciences', 'GAUTAM BUDDH NAGAR'),
(210, 'Vivek College of Technical Education', 'BIJNOR'),
(211, 'Rakshpal Bahadur Management Institute', 'GAUTAM BUDDH NAGAR'),
(212, 'United Institute of Management', 'GAUTAM BUDDH NAGAR'),
(213, 'Hindustan Institute of Technology', 'GAUTAM BUDDH NAGAR'),
(214, 'Himt College of Pharmacy', 'GAUTAM BUDDH NAGAR'),
(215, 'Shree Ganpati Institute of Technology', 'GHAZIABAD'),
(216, 'Iimt College of Engineering', 'GAUTAM BUDDH NAGAR'),
(217, 'D.J.College of Pharmacy', 'GHAZIABAD'),
(219, 'Bhagwant Institute of Pharmacy', 'MUZAFFARNAGAR'),
(220, 'Hi-Tech Institute of Engineering & Technology, ', 'GHAZIABAD'),
(221, 'Institute of Engineering And Technology', 'SITAPUR'),
(222, 'I.T.S.Engineering College', 'GHAZIABAD'),
(223, 'Vivekanand Institute of Technology And Science', 'GHAZIABAD'),
(224, 'Lord Krishna College of Engineering', 'GHAZIABAD'),
(225, 'Accurate Institute of Management & Technology', 'GAUTAM BUDDH NAGAR'),
(226, 'DJ College of Engineering & Technology', 'GHAZIABAD'),
(227, 'Innovative College of Pharmacy', 'GAUTAM BUDDH NAGAR'),
(228, 'Sanjivnie College of Pharmacy', 'BAHRAICH'),
(229, 'Vidya College of Engineering', 'MEERUT'),
(230, 'Dronacharya Group of Institution', 'GAUTAM BUDDH NAGAR'),
(231, 'R. D. Engineering College', 'GHAZIABAD'),
(232, 'Adarsh Vijendra Institute of Pharmaceutical Sciences', 'SAHARANPUR'),
(233, 'R.K Pharmacy College', 'AZAMGARH'),
(234, 'Aligarh College of Pharmacy', 'ALIGARH'),
(235, 'Rajeev Gandhi College of Pharmacy', 'MAHARAJGANJ'),
(236, 'Sir Madan Lal Institute of Pharmacy', 'ETAWAH'),
(237, 'H.R. Institute of Hotel Management', 'GHAZIABAD'),
(238, 'N. I. M. T. Institute of Hospital And Farma Management', 'GAUTAM BUDDH NAGAR'),
(239, 'Ishwar Chand Vidya Sagar Institute of Technology', 'MATHURA'),
(240, 'Sunderdeep Engineering College', 'GHAZIABAD'),
(241, 'Shambhunath Institute of Pharmacy', 'ALLAHABAD'),
(243, 'College Of Pharmacy', 'AGRA'),
(244, 'Anand College Of Pharmacy', 'AGRA'),
(245, 'H.R.Institute of Pharmacy', 'GHAZIABAD'),
(246, 'Dayanand Dinanath College, Institute of Pharmacy', 'KANPUR NAGAR'),
(247, 'IIMT College of Pharmacy', 'GAUTAM BUDDH NAGAR'),
(248, 'Society of Advanced Management Studies, Institute of Hotel Management', 'VARANASI'),
(249, 'SRI Ram College of Management', 'MUZAFFARNAGAR'),
(250, 'B.B.S. Institute of Management Studies', 'GAUTAM BUDDH NAGAR'),
(252, 'Sanjay Institute of Engineering and Management', 'MATHURA'),
(253, 'Mewar Institute', 'GHAZIABAD'),
(254, 'Bhabha Institute of Technology', 'KANPUR NAGAR'),
(255, 'J.S. Institute of Management and Technology', 'SIKOHABAD'),
(256, 'Dns College of Engineering And Technology', 'J.P.NAGAR'),
(257, 'Saraswati Institute of Technology And Management', 'UNNAO'),
(258, 'Institute of Pharmacy', 'SITAPUR'),
(259, 'Sunderdeep College of Pharmacy', 'GHAZIABAD'),
(260, 'IBNE Seena Pharmacy College', 'HARDOI'),
(261, 'Shakti College of Pharmacy, Dulhinpur', 'BALRAMPUR'),
(262, 'Institute of Pharmaceutical Sciences & Research (Ipsr)', 'UNNAO'),
(263, 'Vidya School of Business', 'MEERUT'),
(264, 'B.N. Degree College (MBA)', 'HARDOI'),
(265, 'Sir Madanlal Institute of Management', 'ETAWAH'),
(266, 'LTR Institute of Technology', 'MEERUT'),
(267, 'Sanjay College of Pharmacy', 'MATHURA'),
(269, 'Sherwood College of Pharmacy', 'BARABANKI'),
(270, 'IEC Institute of Hotel Management', 'GAUTAM BUDDH NAGAR'),
(271, 'Bharat Institute of Technology (School of Management)', 'MEERUT'),
(272, 'Greater Noida Institute of Technology(MBA Institute)', 'GAUTAM BUDDH NAGAR'),
(273, 'Noida Institute of Engineering & Technology(MCA Institute)', 'GAUTAM BUDDH NAGAR'),
(274, 'Narvadeshwar Management College', 'LUCKNOW'),
(275, 'M.D. College, Sikandra', 'AGRA'),
(276, 'Deen Dayal College of Management', 'MUZAFFARNAGAR'),
(277, 'Patronage Institute of Management Studies', 'GAUTAM BUDDH NAGAR'),
(278, 'Aryan Institute Of Management And Computer Studies', 'AGRA'),
(279, 'Sri Ram Institute Of Management', 'GAUTAM BUDDH NAGAR'),
(280, 'Apex Institute Of Technology', 'RAMPUR'),
(281, 'Sherwood College Of Engineering Research & Technology', 'BARABANKI'),
(282, 'J.P.Institute Of Engineering & Technology', 'MEERUT'),
(283, 'Ldc Institute Of Technical Studies', 'ALLAHABAD'),
(284, 'United Institute of Technology', 'ALLAHABAD'),
(285, 'Institute Of Technology & Management', 'MEERUT'),
(286, 'Vishveshwarya Institute of Technology', 'GAUTAM BUDDH NAGAR'),
(287, 'Naraina College of Engineering & Technology', 'KANPUR NAGAR'),
(288, 'Venkateshwara Institute of Technology', 'MEERUT'),
(289, 'Institute of Engineering & Management', 'MATHURA'),
(290, 'Abes Institute Of Technology', 'GHAZIABAD'),
(291, 'Dit School Of Engineering', 'GAUTAM BUDDH NAGAR'),
(292, 'Meerut Institute Of Technology', 'MEERUT'),
(293, 'Rama Institute Of Engg. & Tech.', 'KANPUR NAGAR'),
(295, 'B.B.S Institute of Pharmaceutical & allied Sciences', 'GAUTAM BUDDH NAGAR'),
(297, 'DCET Business School (DBS)', 'LUCKNOW'),
(299, 'Doon College of Education, Saharanpur', 'SAHARANPUR'),
(300, 'Saraswati Higher Education & Technical College of Pharmacy', 'VARANASI'),
(301, 'Sagar Institute of Technology & Management Department of Pharmacy', 'BARABANKI'),
(303, 'Dr. M.C.Saxena College Of Pharmacy', 'LUCKNOW'),
(305, 'Aryabhatt College Of Engineering & Technology,', 'BAGHPAT'),
(306, 'Disha Institute Of Science & Technology', 'BIJNOR'),
(307, 'Dayanad Dinanath College Of Management, ', 'KANPUR NAGAR'),
(308, 'Ishwar Chand Vidya Sagar Institute of Management , ', 'MATHURA'),
(309, 'Raj Kumar Goel Engineering College', 'GHAZIABAD'),
(310, 'Dr. Rizvi College Of Engineering, Karari', 'KAUSHAMBI'),
(311, 'Dewan V.S. Institute Of Engineering & Technology', 'MEERUT'),
(312, 'Abss Institute Of Technology', 'MEERUT'),
(315, 'United Institute Of Pharmacy, U.C.E.R', 'ALLAHABAD'),
(316, 'Aryakul College Of Pharmacy & Research', 'LUCKNOW'),
(318, 'Vidya Institute of Fashion Technology', 'MEERUT'),
(319, 'Rakshpal Bahadur College of Engineering & Technology', 'BAREILLY'),
(320, 'Inverties Institute of Engineering & Management', 'BAREILLY'),
(321, 'Translam Institute of Technology & Management', 'MEERUT'),
(323, 'Spectrum Institute Of Pharmaceutical Sciences And Research (Sipsar)', 'GAUTAM BUDDH NAGAR'),
(324, 'Anjali College of Pharmacy and Science', 'AGRA'),
(326, 'Sunder Deep College of Hotel Management', 'GHAZIABAD'),
(327, 'Sunder Deep College of Architechture', 'GHAZIABAD'),
(328, 'Sunder Deep College Of Engineering & Technology, ', 'GHAZIABAD'),
(329, 'Ghaziabad Institute of Management & Technology', 'GHAZIABAD'),
(330, 'Saraswati Institute Of Engineering & Technology, ', 'GHAZIABAD'),
(331, 'D.S.Institute Of Technology & Management, ', 'GHAZIABAD'),
(332, 'Maharaja Agrasain Institute of Technology, ', 'GHAZIABAD'),
(333, 'Raj Kumar Goel Institute Of Technology For Women, ', 'GHAZIABAD'),
(334, 'Rishi Chadha Vishvas Girls Institute Of Technology , ', 'GHAZIABAD'),
(335, 'Shamli Institute Of Engineering & Technology, ', 'MUZAFFARNAGAR'),
(336, 'Roorkee Engineering & Management Technology Institute, ', 'MUZAFFARNAGAR'),
(337, 'R.B. Institute Of Technology', 'AGRA'),
(338, 'K. P. Engineering College', 'AGRA'),
(339, 'ACN College of Engineering & Management Studies', 'ALIGARH'),
(340, 'Vivekananda College Of Technology & Management', 'ALIGARH'),
(341, 'Institute Of Technology & Management', 'ALIGARH'),
(342, 'United College of Engineering & Management', 'ALLAHABAD'),
(343, 'Allahabad Institute of Engineering & Technology', 'ALLAHABAD'),
(344, 'Shri Gopi Chand Institute Of Technology & Management', 'BAGHPAT'),
(345, 'Seth Vishambhar Nath Institute Of Engineering & Technology', 'BARABANKI'),
(346, 'Institute Of Technology (Exclusive Engg. College For Girls)', 'GORAKHPUR'),
(348, 'PSIT College of Engineering', 'KANPUR NAGAR'),
(349, 'Maharana Institute Of Professional Studies', 'KANPUR NAGAR'),
(350, 'Indus Institute Of Technology & Management', 'KANPUR NAGAR'),
(351, 'Krishna Institute Of Technology, ', 'KANPUR NAGAR'),
(352, 'Krishna Girls Engineering College', 'KANPUR NAGAR'),
(353, 'Apollo Institute of Technology', 'KANPUR NAGAR'),
(354, 'Bhabha Institute of Science & Technology', 'KANPUR NAGAR'),
(355, 'Bhabha College Of Engineering', 'KANPUR NAGAR'),
(356, 'Sri Krishna Yogi Raj Technical Institute', 'HATHRAS'),
(357, 'Aryavart Institute Of Technology & Management', 'LUCKNOW'),
(358, 'Rameshwaram Institute of Technology & Management', 'LUCKNOW'),
(359, 'Prasad Institute of Management and Technology', 'LUCKNOW'),
(360, 'Goel Institute Of Technology & Management', 'LUCKNOW'),
(361, 'R.R. Institute of Modern Technology', 'LUCKNOW'),
(362, 'Lucknow Institute Of Technology', 'LUCKNOW'),
(363, 'Ambalika Institute Of Management & Technology', 'LUCKNOW'),
(364, 'S P Memorial Institute Of Technology', 'ALLAHABAD'),
(366, 'Nikhil Institute of Engineering & Management', 'MATHURA'),
(367, 'Bon Maharaj Engineering College', 'MATHURA'),
(368, 'Excel Institute Of Management & Technology', 'MATHURA'),
(369, 'IAMR College of Engineering', 'MEERUT'),
(370, 'Shanti Institute Of Technology,', 'MEERUT'),
(371, 'IIMT Institute Of Engineering & Technology', 'MEERUT'),
(372, 'Kishan Institute of Engineering & Technology', 'MEERUT'),
(373, 'Neelkanth Institute of Technology', 'MEERUT'),
(374, 'Rishi Institute of Engineering & Technology', 'MEERUT'),
(375, 'Shree Bankey Bihari Institute Of Technology', 'MEERUT'),
(376, 'Bansal Institute Of Engineering & Technology', 'MEERUT'),
(377, 'Gyan Bharti Institute Of Technology', 'MEERUT'),
(379, 'ESAR College of Engineering', 'MEERUT'),
(380, 'Modinagar Institute of Technology', 'GHAZIABAD'),
(381, 'Krishna Institute Of Management & Technology', 'MORADABAD'),
(382, 'Kamla Nehru Institute of Physical & Social Sciences', 'SULTANPUR'),
(383, 'Rajarshi Rananjay Sinh Institute of Management & Technology', 'SULTANPUR'),
(384, 'Saraswati Higher Education & Technical College Of Engineering', 'VARANASI'),
(385, 'Murti Devi Memorial College', 'BAGHPAT'),
(386, 'M.K.R.P.G. Institute of Technology, ', 'BAGHPAT'),
(387, 'SR Group of Institutions (College of Pharmacy)', 'JHANSI'),
(389, 'Oxford College Of Pharmacy', 'GHAZIABAD'),
(390, 'K.R.S. College of Pharmacy', 'GONDA'),
(391, 'Mahatma Gandhi Institute Of Pharmacy', 'LUCKNOW'),
(392, 'Goel Institute Of Pharmacy & Sciences', 'LUCKNOW'),
(393, 'Varanasi College of Pharmacy', 'VARANASI'),
(394, 'College of Business Studies', 'AGRA'),
(395, 'Vtech Institute Of Integrated Technology, ', 'BULANDSHAHAR'),
(396, 'Aryakul Collge of Management', 'LUCKNOW'),
(397, 'T.D.L.College of Technology & Management', 'LUCKNOW'),
(398, 'Bhalchandra Institute Of Education & Management', 'LUCKNOW'),
(399, 'A C M E Institute Of Management & Technology', 'BAREILLY'),
(403, 'K.R.S. College of Management', 'GONDA'),
(404, 'Indradev Institute Of Education & Technology', 'BAGHPAT'),
(405, 'Aryabhatt College Of Management & Technology', 'BAGHPAT'),
(406, 'M.C.A.T. Education', 'MEERUT'),
(407, 'Shree Bankey Bihari Institute Of Management', 'MEERUT'),
(408, 'Chandra Mauli Institute Of Management Sciences & Technology, ', 'GORAKHPUR'),
(409, 'Shamli Institute Of Management & Computer Technology', 'MUZAFFARNAGAR'),
(410, 'R.S.D. Academy (College Of Management & Technology)', 'MORADABAD'),
(411, 'H.M.F.A.Memorial Institute Of Engineering & Technology', 'ALLAHABAD'),
(412, 'Aryan Institute Of Technology', 'GHAZIABAD'),
(413, 'Vedant Institute of Management & Technology', 'GHAZIABAD'),
(414, 'Bhagwati Institute Of Technology & Science', 'GHAZIABAD'),
(415, 'Alpine College Of Engineering, ', 'GAUTAM BUDDH NAGAR'),
(416, 'GNIT Girls Institute of Technology', 'GAUTAM BUDDH NAGAR'),
(418, 'Vidya Bhavan College For Engineering Technology', 'KANPUR NAGAR'),
(419, 'Prabhat Engineering College', 'RAMABAI NAGAR'),
(421, 'Surya School Of Planning & Engineering Management', 'LUCKNOW'),
(422, 'Bansal Institute Of Engineering & Technology', 'LUCKNOW'),
(423, 'School of Management Science (SMS Institute of Technology)', 'LUCKNOW'),
(424, 'Institute Of Advanced Management & Technology', 'MEERUT'),
(425, 'Meerut International Institute Of Technology', 'MEERUT'),
(426, 'Doon College of Engineering & Technology', 'SAHARANPUR'),
(427, 'Dayanand Dinanath Institute of Technology', 'UNNAO'),
(428, 'Kashi Institute Of Technology', 'VARANASI'),
(429, 'Naraina Vidya Peeth Engineering & Management Institute', 'KANPUR NAGAR'),
(430, 'Maharana Institute Of Technology & Science', 'LUCKNOW'),
(431, 'B.N.College of Engineering & Technology(BNCET)', 'LUCKNOW'),
(433, 'Meerut Institute Of Engineering & Technology (MCA Institute)', 'MEERUT'),
(434, 'Jagran Institute Of Management', 'KANPUR NAGAR'),
(435, 'Meerut Institute of Technology', 'MEERUT'),
(436, 'K. P. College Of Management', 'AGRA'),
(437, 'B.B.S. Institute of Management & Technology', 'ALLAHABAD'),
(438, 'Vivek College Of Management & Technology', 'BIJNOR'),
(439, 'Mewar Girls Business School, ', 'GHAZIABAD'),
(440, 'Naraina Vidya Peeth Management Institute , ', 'KANPUR NAGAR'),
(441, 'Central Institute of Management & Technology, ', 'LUCKNOW'),
(442, 'Sardar Bhagat Singh College Of Technology & Management', 'LUCKNOW'),
(443, 'Excel School Of Business,', 'MATHURA'),
(444, 'Mahaveer Institute Of Technology, ', 'MEERUT'),
(445, 'Dr. Ram Manohar Lohia Institute , ', 'GHAZIABAD'),
(446, 'Institute Of Professional Studies & Research (IPSR),', 'UNNAO'),
(447, 'Gokaran Narvadeshwar Institute Of Technology & Management', 'BARABANKI'),
(448, 'Neelam College of Engineering & Technology', 'AGRA'),
(449, 'K.S. Jain Institute Of Engineering & Technology, ', 'GHAZIABAD'),
(450, 'Shri Ram Murti Smarak Women College Of Engineering & Technology, ', 'BAREILLY'),
(451, 'Women Institute of Engineering & Technology, ', 'SITAPUR'),
(452, 'Bhagwant Institute Of Technology For Women', 'MUZAFFARNAGAR'),
(453, 'Kunwar Hari Bansh Singh College of Pharmacy, ', 'JAUNPUR'),
(455, 'Navneet College Of Technology & Management, ', 'AZAMGARH'),
(456, 'Pratap College Of Management, ', 'FATEHPUR'),
(458, 'I.E.C. College of Engineering & Technology (MCA Institute)', 'GAUTAM BUDDH NAGAR'),
(459, 'Academy Of Business & Engineering Sciences,', 'GHAZIABAD'),
(460, 'Anupama College Of Engineering, ', 'AGRA'),
(461, 'Chatrapati Shahu ji Maharaj College of Engineering and Technology, ', 'ALLAHABAD'),
(463, 'NIMT Mahila Techinal College for Pharmacy, ', 'GAUTAM BUDDH NAGAR'),
(464, 'NIMT Mahila Techinal College for Hotel Management & Catering Tech.', 'GAUTAM BUDDH NAGAR'),
(465, 'Himalayan Institute of Technology & Management', 'LUCKNOW'),
(467, 'Madhu Vachaspati Institute Of Engineering And Technology', 'KAUSHAMBI'),
(468, 'Satyam College Of Engineering,', 'GHAZIABAD'),
(469, 'Satyam College Of Management,', 'GHAZIABAD'),
(470, 'Devprayag Institute Of Technical Studies, ', 'ALLAHABAD'),
(471, 'Eshan College Of Engg, Farah,', 'MATHURA'),
(472, 'Institute Of Technology And Management, ', 'MAHARAJGANJ'),
(473, 'G.C.R.G. Memorial Trusts Group Of Institutions,Faculty Of Engineering, ', 'LUCKNOW'),
(474, 'Shri Siddhi Vinayak Institute Of Technology,', 'BAREILLY'),
(475, 'Shri Jeet Ram Smarak Institute Of Engg. Andtechnology,', 'BAREILLY'),
(476, 'Future Institute Of Engineering And Technology,', 'BAREILLY'),
(477, 'Sunder Deep College of Engg And Research Centre', 'GHAZIABAD'),
(478, 'ACME College Of Engg.Muradnagar , ', 'GHAZIABAD'),
(479, 'Rajshree Institute Of Management & Technology,  ', 'BAREILLY'),
(480, 'North India Institute Of Technology, ', 'BIJNOR'),
(481, 'K.L.S. Institute of Engg and Technology, ', 'BIJNOR'),
(482, 'Millennium Institute Of Technology', 'SAHARANPUR'),
(483, 'Institute Of Technology & Management', 'LUCKNOW'),
(484, 'Lucknow Model Institute Of Technology & Management', 'LUCKNOW'),
(485, 'S.R. Institute Of Management & Technology,', 'LUCKNOW'),
(486, 'A.N.A. College Of Engineering & Management Studies, ', 'BAREILLY'),
(487, 'Panchwati Institute Of Engineering & Technology, ', 'MEERUT'),
(488, 'Shrinathji Institute For Technical Education,', 'MEERUT'),
(489, 'Dr. Z.H. Institute Of Technology & Management,', 'AGRA'),
(490, 'Suyash Institute Of Information Technology, ', 'GORAKHPUR'),
(491, 'Shriram Institute Of Technology,', 'MEERUT'),
(492, 'KCC Institute Of Technology & Management, ', 'GAUTAM BUDDH NAGAR'),
(493, 'Maharaja Agrasen College Of Engineering And Technology, Moradabad Highway,', 'J.P.NAGAR'),
(494, 'Sri Sri Institute Of Technology And Management (S.S.I.T.M.) ,', 'KANSHIRAM NAGAR'),
(495, 'Focus Institute Of Engineering & Management, ', 'BAREILLY'),
(496, 'FIT Engineering College,', 'MEERUT'),
(497, 'Om Sai Institute Of Technology & Science', 'BAGHPAT'),
(498, 'Delhi Institute Of Engineering & Technology', 'MEERUT'),
(499, 'Veer Kunwar Institute Of Technology', 'BIJNOR'),
(500, 'Trident Et Group Of Institutions, Faculty Of Engineering', 'GHAZIABAD'),
(501, 'R.V. Institute Of Technology', 'BIJNOR'),
(502, 'Dev Bhoomi Groups Of Institutions,Faculty Of Engineering', 'SAHARANPUR'),
(503, 'P.K. Institute Of Technology & Management, ', 'MATHURA'),
(504, 'Asia School Of Engineering & Management', 'BARABANKI'),
(505, 'Allenhouse Institute Of Technology', 'KANPUR NAGAR'),
(506, 'International College Of Engineering, ', 'GHAZIABAD'),
(507, 'R.D. Foundation Group Of Institutions,Faculty Of Engineering', 'GHAZIABAD'),
(508, 'Babu Banarasi Das Educational Society Group Of Institutions, Faculty Of Engineering', 'LUCKNOW'),
(509, 'Shri Girraj College Of Engineering & Management, ', 'MATHURA'),
(510, 'Trident Et Group Of Institutions, Faculty Of Management', 'GHAZIABAD'),
(511, 'G.L. Bajaj Institute Of Engineering & Technology, ', 'MATHURA'),
(512, 'Mass College Of Engineering And Management, ', 'HATHRAS'),
(513, 'R.V. Northland Institute Of Technology,', 'GAUTAM BUDDH NAGAR'),
(514, 'Shanti Nikatan Trusts Group Of Instituions', 'MEERUT'),
(515, 'Dr. K.N. Modi Girls Engineering College, ', 'MODINAGAR'),
(516, 'Kailash Institute Of Pharmacy & Management , ', 'GORAKHPUR'),
(517, 'KIPM College Of Management, ', 'GORAKHPUR'),
(518, 'SSLD Varshney Engineering College', 'ALIGARH'),
(519, 'Bhagwant Institute Of Technology , ', 'GHAZIABAD'),
(520, 'Indraprastha Institute Of Management And Technology', 'SAHARANPUR'),
(521, 'Kothiwal institute of Technology and Professional Studies', 'MORADABAD'),
(522, 'MAHARANA PRATAAP COLLEGE OF ENGINEERING', 'KANPUR NAGAR'),
(523, 'Vision Institute of Technology', 'KANPUR NAGAR'),
(524, 'Vision Institute of Technology', 'ALIGARH'),
(525, 'Buddha Institute of Technology', 'GORAKHPUR'),
(526, 'Dr. M.C. Saxena Institute of Engineering and Management', 'LUCKNOW'),
(527, 'Sunrise Institute of Engineering Technology & Management', 'UNNAO'),
(528, 'Ram-Eesh Institute of Engineering and Technology,Gautam Buddh Nagar', 'GREATOR NOIDA'),
(529, 'Lucknow Institute Of Technology & Management,', 'LUCKNOW'),
(531, 'Rama Institute Of Technology, ', 'KANPUR NAGAR'),
(532, 'Murli Manohar Agrawal Institute Of Technology,', 'MATHURA'),
(533, 'R.V. Northland Institute Of Management,', 'GREATOR NOIDA'),
(534, 'Mahaveer Institute Of Technology And Management,', 'RAIBAREILLY'),
(535, 'Rajendra Prasad College of Management,', 'AZAMGARH'),
(536, 'Shree jee Baba Institute of Professional Studies', 'MATHURA'),
(537, 'V K Jain Institute Of Management', 'KANSHIRAM NAGAR'),
(538, 'Aks Management College, Bakshi-Ka-Talab,', 'LUCKNOW'),
(539, 'St. Bosco College Of Management,', 'LUCKNOW'),
(540, 'Krishna Institute Of Management, ', 'MEERUT'),
(541, 'Amardeep College Of Engineering And Management', 'FIROZABAD'),
(542, 'Shri Krishna College Of Engineering, ', 'BAGHPAT'),
(543, 'Baba Kadhera Singh College Of Engineering And Technology, ', 'MATHURA'),
(544, 'Kalka Engineering College, ', 'MEERUT'),
(545, 'Jahangirabad Educational Trust Group Of Institutions , Faculty Engineering , ', 'BARABANKI'),
(546, 'Seth Sriniwas Agarwal Institute Of Engineering And Technology, ', 'KANPUR NAGAR'),
(547, 'Chaudhary Beeri Singh College Of Engineering And Management, ', 'AGRA'),
(548, 'Dewan V.S. Institute Of Hotel Management & Technology, ', 'MEERUT'),
(549, 'Radha Govind Institute Of Pharmacy, ', 'MORADABAD'),
(550, 'Kanpur Institute Of Technology & Pharmacy', 'KANPUR NAGAR'),
(551, 'Kashi Institute Of Pharmacy , ', 'VARANASI'),
(552, 'Chandra Shekhar Singh College Of Pharmacy, ', 'KAUSHAMBI'),
(554, 'Naraina Vidya Peeth Group Of Institutions', 'KANPUR NAGAR'),
(556, 'Naraina Vidya Peeth Group Of Institutions', 'KANPUR NAGAR'),
(557, 'Shanti Niketan Group Of Institutions,', 'MEERUT'),
(558, 'Regency Institute of Management & Technology,', 'SITAPUR'),
(559, 'Sir Madan Lal Institute of Management studies,', 'ETAWAH'),
(560, 'Adharshila College Of Management Studies', 'MEERUT'),
(561, 'Hari College Of Management', 'SAHARANPUR'),
(562, 'Sri Ram Instiute of Management and Technology, ', 'MUZAFFARNAGAR'),
(563, 'Kanpur Instiute of Business management, ', 'UNNAO'),
(564, 'Vidyadeep Institute of Management', 'MEERUT'),
(565, 'Shri Giriraj Maharaj College, ', 'MATHURA'),
(566, 'Future Institute Of Management And Technology, ', 'BAREILLY'),
(567, 'Bora Institute of Management Sciences,', 'LUCKNOW'),
(568, 'Seth Sri Nivas Agarwal Institute of Management', 'KANPUR NAGAR'),
(569, 'Institute Of Planning & Management,', 'JAUNPUR'),
(570, 'College Of Innovative Management & Science', 'LUCKNOW'),
(571, 'Dr. B.R. Ambedkar Pooja College Of Pharmacy', 'GORAKHPUR'),
(572, 'Lucknow Institute Of Pharmcy', 'LUCKNOW'),
(574, 'KNGD Modi Institute Of Pharmaceutical Education & Research', 'MODINAGAR'),
(575, 'Malti Memorial Trusts Csm “Group Of Institutions”, Faculty Of B. Pharmacy, ', 'ALLAHABAD'),
(576, 'Faculty of Management, CSM Group of Institutions,', 'ALLAHABAD'),
(577, 'Shriji Instiute of Management & Technology, ', 'BAREILLY'),
(578, 'Lord Krishna College of Management, ', 'GHAZIABAD'),
(579, 'HLM College,', 'GHAZIABAD'),
(580, 'H R Institute of Professional Studies', 'GHAZIABAD'),
(581, 'Shri Giriraj Maharaj Institute of Management, ', 'MATHURA'),
(582, 'Sun Institute Of Management And Technology', 'SHAHJAHANPUR'),
(583, 'Lakshya Institute Of Management & Information Technology, ', 'SHAHJAHANPUR'),
(584, 'Bansi College of Management & Technology', 'KANPUR NAGAR'),
(585, 'Maharaja Agrasen Mahavidyalaya Institute Of Management, ', 'BAREILLY'),
(586, 'Dev Bhoomi Groups Of Institutions,Faculty Of Computer Application', 'SAHARANPUR'),
(587, 'R.D. Foundations Group of Institutions, Faculty of Management', 'GHAZIABAD'),
(588, 'Prince Institute Of Innovetive Technology', 'GAUTAM BUDDH NAGAR'),
(589, 'Asian College of Management', 'SAHARANPUR'),
(590, 'Trivedi Institute Of Management & Technology', 'FATEHPUR'),
(591, 'Triveni Institute Of Management Education', 'BAGHPAT'),
(592, 'Venkateshwara School Of Pharmacy, ', 'MEERUT'),
(593, 'Vinayak Vidyapeeth, ', 'MEERUT'),
(594, 'Apex College Of Technical Education, ', 'MEERUT'),
(595, 'Srajan Institute Of Management & Technology, ', 'BAREILLY'),
(596, 'Centre For Hotel Management & Catering Technology, ', 'MODINAGAR'),
(597, 'Khandelwal College Of Architecture & Design, ', 'BAREILLY'),
(598, 'Moradabad Educational Trust (Met)- Group Of Institutions - Faculty Of Pharmacy, ', 'MORADABAD'),
(599, 'Jahangirabad Educational Trusts Group Of Institutions,Faculty Of Management', 'BARABANKI'),
(600, 'Charak Institute Of Business Management', 'LUCKNOW'),
(602, 'Aashlar Business School', 'MATHURA'),
(603, 'Shri RLT Instiute of Management', 'ETAWAH'),
(604, 'Prem Prakash Gupta Institute of Management', 'BAREILLY'),
(605, 'Unnati Management College, ', 'MATHURA'),
(606, 'Vidya Institute of Training and Development', 'MEERUT'),
(607, 'Dr Virendra Swaroop Institute of Professional Studies', 'KANPUR NAGAR'),
(608, 'ACME Institute of planning & Management', 'BAREILLY'),
(609, 'JP School Of Business, ', 'MEERUT'),
(610, 'Abes Institute Of Business Management, ', 'GHAZIABAD'),
(611, 'Shakumbari College, ', 'SAHARANPUR'),
(612, 'Braj Institute Of Management & Technology', 'ALIGARH'),
(613, 'Institute of Higher Studies', 'GHAZIABAD'),
(614, 'Shree Satya Instiute of Management', 'MORADABAD'),
(615, 'Instiute of Management Studies, ', 'SAHARANPUR'),
(616, 'Dhampur Institute of Technology & Management', 'BIJNOR'),
(617, 'Uttam Institute of Management Studies', 'AGRA'),
(618, 'Five School of Business,', 'KANPUR NAGAR'),
(619, 'Baran Instiute of Management', 'BULANDSHAHAR'),
(620, 'GCRG Memorial Trusts Group of Institutions Faculty of Management', 'LUCKNOW'),
(621, 'Dev Bhoomi Groups Of Institutions,Faculty Of Management,', 'SAHARANPUR'),
(622, 'Modern Institute Of Technology & Management, ', 'GHAZIABAD'),
(623, 'Bharti Institute of Management andTechnology, ', 'MEERUT'),
(624, 'AL Haaj A R Sani Institute Of Management And Technology,', 'MATHURA'),
(625, 'Sanskar College of Management & Computer Application,', 'ALLAHABAD'),
(626, 'Prakash Deep Institute of Management and Technology, ', 'GHAZIABAD'),
(627, 'MKRPG Instiute of Technology,', 'BAGHPAT'),
(628, 'Venketeshwara School of Computer Science, ', 'MEERUT'),
(629, 'Greater Noida Institute Of Technology (MCA Institute), ', 'GAUTAM BUDDH NAGAR'),
(630, 'Abhinav Institute of Managemant and Technology, ', 'KANPUR NAGAR'),
(631, 'Moradabad Educational Trust (MET) Group of Institutions Faculty of Architecture', 'MORADABAD'),
(633, 'M.P. School of Engineering', 'VARANASI'),
(634, 'Institute of Architecture and Town Planning', 'SITAPUR'),
(635, 'Jyoti College of Management Science and Technology', 'BAREILLY'),
(636, 'Saharanpur Institute of Advanced Studies', 'SAHARANPUR'),
(637, 'Asian Institute of Engineering and Technology', 'LUCKNOW'),
(638, 'Durga Prasad Baljeet Singh College of Computer Application', 'BULANDSHAHAR'),
(639, 'Raj Kumar Goel Institute of Technology ( MBA Institute )', 'GHAZIABAD'),
(640, 'Dr Virendra Swarup Memorial Trust Group of Institutions', 'UNNAO'),
(641, 'Ashoka Institute of Technology & Management', 'VARANASI'),
(643, 'Abhay Memorial Trust Group of Institutions', 'ALLAHABAD'),
(644, 'S V S Group of Institutions', 'MEERUT'),
(645, 'Ideal Institute of Management & Technology', 'GHAZIABAD'),
(646, 'Ayodhya Prasad Management Institute & Technology', 'ALLAHABAD'),
(647, 'Indraprastha Institute of Technology', 'J.P.NAGAR'),
(648, 'Babu Sundar Singh Institute of Technology & Management', 'LUCKNOW'),
(649, 'M.G. Institute of Management & Technology', 'LUCKNOW'),
(650, 'Azad Engineering College', 'LUCKNOW'),
(651, 'Dr. G.P.R.D. Patel Institute of Technology And Management', 'KANPUR NAGAR'),
(653, 'Prem Prakash Gupta Institute of Engineering', 'BAREILLY'),
(654, 'Sarvottam Institute of Technology & Management', 'GREATOR NOIDA'),
(655, 'Sanskriti Institute of Management & Technology', 'MATHURA'),
(656, 'G L Bajaj Group of Institutions', 'MATHURA'),
(657, 'Krishnarpit Institute of Pharmacy', 'ALLAHABAD'),
(658, 'Zacistha Educational Institute Of Pharmacy', 'LUCKNOW'),
(659, 'Heritage Institute of Hotel & Tourism', 'AGRA'),
(660, 'Goel Institute of Higher Studies', 'LUCKNOW'),
(661, 'Krishnarpit Institute of Management & Technology', 'ALLAHABAD'),
(662, 'S S Institute of Management', 'LUCKNOW'),
(663, 'KCC Institute of Management', 'GREATOR NOIDA'),
(664, 'Yesh Raj Institute of Education & Management', 'LUCKNOW'),
(665, 'Muzaffarnagar Institute of Technology', 'MUZAFFARNAGAR'),
(666, 'SRM Business School', 'LUCKNOW'),
(667, 'Saraswati Institute of Business Management & Research', 'UNNAO'),
(668, 'Edify Institute of Management & Technology', 'MATHURA'),
(669, 'Seth Vishambhar Nath Institute of Management Studies & Research', 'BARABANKI'),
(670, 'Lucknow Model Institute of Management', 'LUCKNOW'),
(671, 'Brahmanand Group of Institutions', 'BULANDSHAHAR'),
(672, 'ITM Institute of Architecture and Town Planning', 'LUCKNOW'),
(673, 'ITM School of Management', 'LUCKNOW'),
(674, 'Shree College of Management', 'LUCKNOW'),
(675, 'New Era College of Science & Technology', 'GHAZIABAD'),
(676, 'Globel Institute of Management', 'KANPUR DEHAT'),
(679, 'ITERC College of Management', 'GHAZIABAD'),
(680, 'City College of Management & Technology', 'LUCKNOW'),
(681, 'Lloyd Business School', 'GAUTAM BUDDH NAGAR'),
(682, 'BIMT College', 'MEERUT'),
(684, 'GNIT Management School', 'GREATOR NOIDA'),
(685, 'INJ Business School', 'GREATOR NOIDA'),
(686, 'Accurate Institute of Advanced Management', 'GAUTAM BUDDH NAGAR'),
(687, 'ANA College of Managemet Studies', 'BAREILLY'),
(688, 'Devprayag Institute of Management', 'ALLAHABAD'),
(689, 'Institute of Information Management & Technology', 'ALIGARH'),
(690, 'School of Management, Dronacharya Group of Institutions', 'GREATOR NOIDA'),
(691, 'C-Impact Institute of Management & Tech.', 'AGRA'),
(692, 'Skyline Institute of Management & Technology', 'GREATOR NOIDA'),
(693, 'Sanskriti School of Business', 'MATHURA'),
(694, 'Sanskriti Institute of Hotel Management', 'MATHURA'),
(695, 'Shri Ram Group of Colleges', 'MUZAFFARNAGAR'),
(696, 'Institute of Engineering & Rural Technology', 'SITAPUR'),
(697, 'Agra Public College of Technology & Management', 'AGRA'),
(698, 'Dwarikadheesh Research Education And Management School', 'SAHARANPUR'),
(699, 'R. D. Engineering & Management College, Duhai', 'GHAZIABAD'),
(700, 'Abes Institute of Management', 'GHAZIABAD'),
(702, 'MIT College of Management', 'MORADABAD'),
(703, 'Shri Siddhi Vinayak Institute of Management', 'BAREILLY'),
(704, 'Shree jee Goverdhan Maharaj College of Professional Studies', 'MATHURA'),
(705, 'Jms Group of Institutions', 'GHAZIABAD'),
(706, 'Agra Vanasthali Mahavidyalaya', 'AGRA'),
(707, 'Tirupati Institute of Professional Studies', 'MEERUT'),
(708, 'SSLD Varshney Institute Of Management & Engineering', 'ALIGARH'),
(709, 'Gauri Vidyapeeth Business School', 'MEERUT'),
(710, 'Ch. Harchand Singh College Of Management', 'BULANDSHAHAR'),
(711, 'Vishweshraiya College Of Education', 'MEERUT'),
(712, 'IIMT College Of Management,', 'GAUTAM BUDDH NAGAR'),
(713, 'IIMT Professional College,', 'MEERUT'),
(714, 'Kanpur Institute Of Management Studies', 'UNNAO'),
(715, 'SR Group of Institutions(College of Engineering Management & Technology),', 'Jhansi'),
(716, 'Mahaveer Institute of Engineering and Technology', 'MEERUT'),
(717, 'FMG Academy Group of Institutions', 'GREATOR NOIDA'),
(718, 'Heeralal Yadav Institute of Technology & Management', 'LUCKNOW'),
(719, 'Axis Institute Of Technology & Management', 'KANPUR NAGAR'),
(720, 'Axis Institute of Fashion Technology', 'KANPUR NAGAR'),
(721, 'Axis Institute of Architecture,', 'KANPUR NAGAR'),
(722, 'Axis Buisness School', 'KANPUR NAGAR'),
(723, 'Axis Institute of Planning and Management', 'KANPUR NAGAR'),
(725, 'Sharda Institute of Management & Technology', 'KANPUR NAGAR'),
(726, 'Institute of Mangement & Science', 'J.P.NAGAR'),
(727, 'Shambhunath Institute of Management', 'ALLAHABAD'),
(728, 'Faculty of Management Studies, Meerut College,', 'MEERUT'),
(729, 'Shree Bankey Bihari Institute of Architecture', 'MEERUT'),
(730, 'Stallion College For Engineering & Technology', 'SAHARANPUR'),
(731, 'H. R. Institute of Engineering and Technology', 'GHAZIABAD'),
(732, 'Rudra Group of Institutions', 'MEERUT'),
(733, 'Hierank Business School', 'NOIDA'),
(734, 'Dr. Bhimrao Ambedkar Engineering College of Information Technology', 'BANDA'),
(735, 'Dr. Bhimrao Ambedkar Engineering College of Information Technology', 'BIJNOR'),
(736, 'Manyawar Kansi Ram Engineering College of Information Technology', 'AZAMGARH'),
(737, 'Manyawar Kansi Ram Engineering College of Information Technology', 'AMBEDKAR NAGAR'),
(738, 'Global Educational & Welfare Society Group of Institutions', 'LUCKNOW'),
(739, 'JRE Group of Institutions Plot no.5,6,7,& 8, Knowledge Park-IV, Greater Noida.', 'Greater Noida'),
(740, 'Prayag Institute of Technology & Management', 'ALLAHABAD'),
(741, 'J.K. Institute of Pharmacy and Management, Khurja, Bulandshahr', 'BULANDSHAHAR'),
(742, 'Amarjyoti Institute of Management Science, Gatumbudh Nagar', 'GAUTAM BUDDH NAGAR'),
(743, 'Bhavdiya Institute of Business Management', 'FAIZABAD'),
(744, 'Rhans College of Management', 'LUCKNOW'),
(745, 'Sri Rammurti Smarak College of Engg. & Tech.', 'UNNAO'),
(746, 'Kunwar Haribansh Singh Institute of Management', 'JAUNPUR'),
(747, 'Raj School of Management & Sciences', 'VARANASI'),
(748, 'Ansal Technical Campus', 'LUCKNOW'),
(749, 'Madhu Vachaspati School of Management', 'KAUSHAMBI'),
(750, 'Infinity institute of Technology', 'ALLAHABAD'),
(751, 'KIPM-College of Engineering & Technology', 'GORAKHPUR'),
(752, 'Nandini Nagar Technical Campus', 'GONDA'),
(753, 'Lakshya Technical Campus', 'SHAHJAHANPUR'),
(754, 'DNM-Institute of Engineering & Technology', 'LUCKNOW'),
(755, 'Basudev Institute of Management & Technology', 'LUCKNOW'),
(756, 'Institute of Management Research & Technology', 'LUCKNOW'),
(757, 'Utkarsh College of Management Education', 'BAREILLY'),
(758, 'Shine College Of Management', 'LUCKNOW'),
(759, 'Dr. Om Prakash Institute of Management & Technology', 'FARRUKHABAD'),
(760, 'Lotus Institute OF Management', 'BAREILLY'),
(761, 'M.V.D. Educational & Law College', 'LUCKNOW'),
(762, 'Noble Institute of Management & Technology', 'LUCKNOW'),
(763, 'Maa Bhagwata Kunwar Institute of Management', 'LUCKNOW'),
(764, 'Smt.Fulehra Smarak college of Pharmacy', 'BALLIA'),
(765, 'Remote Sensing Application Centre Lucknow', 'LUCKNOW'),
(766, 'Purvanchal Institute of Architecture & Design', 'GORAKHPUR'),
(780, 'Landmark Technical Campus Dedoli, Amroha, J.P. Nagar', 'J.P.NAGAR'),
(781, 'Hardayal Technical Campus Mathura', 'MATHURA'),
(782, 'Shivam Technical, Khurja, Buland Shaher', 'BULANDSHAHAR'),
(783, 'R.D. Engineering College, Duhai, Ghaziabad', 'GHAZIABAD'),
(784, 'Rama Engineering Technical Campus, Ghaziabad', 'GHAZIABAD'),
(785, 'G & R Institute of Management and Technology, Bhulandshar', 'BULANDSHAHAR'),
(786, 'Mangalmay Institute of Engineering and Technology, Knowledge Park, Gr. Noida', 'GREATOR NOIDA'),
(787, 'Dev Technical Campus, Kuberpur, Agra', 'AGRA'),
(788, 'Ideal School of Architecture, Ghaziabad', 'GHAZIABAD'),
(789, 'Dayanand Vidhyapeeth Education, meerut', 'MEERUT'),
(790, 'School of Buisness Management, Khurja Road, Bulanshar', 'BULANDSHAHAR'),
(791, 'Disha Bharti College of Management & Educational, Shahranpur', 'SAHARANPUR'),
(792, 'Institiute of Advanced Management and Research, Ghaziabad', 'GHAZIABAD'),
(793, 'JIMS Management Technical Campus, Knowledge Park, Greater Noida', 'GREATOR NOIDA'),
(794, 'JKEC Instute of Management, Ghaziabad', 'GHAZIABAD'),
(795, 'DIT School of Business, Gr. Noida', 'GREATOR NOIDA'),
(796, 'Adhunik College of Engineering , Duhai, Ghaziabad', 'GHAZIABAD'),
(797, 'Adhunik Institute of Productivity Management & Research , Ghaziabad', 'GHAZIABAD'),
(798, 'Anand college of Architecture,  Agra.', 'AGRA'),
(799, 'ACE College of Engineering & Management,Etmadpura,Agra.', 'AGRA'),
(800, 'Jag Mohan  Institute of Management & Technology, Baghpat.', 'BAGHPAT'),
(801, 'G.L Bajaj Institute of Management & Research Gr. Noida', 'GREATOR NOIDA'),
(802, 'Nitra Technical Campus', 'GHAZIABAD'),
(803, 'Greater Noida Institute of Business Management, Greater Noida.', 'GREATOR NOIDA'),
(804, 'APS College of Education & Technology, Meerut', 'MEERUT'),
(805, 'Accurate Institute of Architercture & Panning, Gr. Noida.', 'GREATOR NOIDA'),
(806, 'Brahmanand  Institute of Research Technology & Management,Bulandshahar', 'BULANDSHAHAR'),
(807, 'NCR Technical Campus ,Aligarh', 'ALIGARH'),
(808, 'Dulari Devi Institute of Pharmacy,  Aligarh', 'ALIGARH'),
(809, 'P.K. Institute of Technology & Management, Mathura', 'MATHURA'),
(810, 'Greater. Noida College of Technology Gr. Noida', 'GREATOR NOIDA'),
(811, 'Forth Dimention College of Architecture, Saharanpur', 'SAHARANPUR'),
(812, 'CBS College of Management,Agra', 'AGRA'),
(813, 'Krishna College of Management Ghaziabad', 'GHAZIABAD'),
(814, 'Janhit Group of Institutions, Saharanpur.', 'SAHARANPUR'),
(815, 'Amani', 'BIJNOR'),
(817, 'AR Institute of Management & Technology', 'LUCKNOW'),
(818, 'IILM College of Management Studies, Greater Noida', 'GREATOR NOIDA'),
(819, 'Shri Sai College of Education', 'Meerut'),
(820, 'Ajay Kumar Garg Institute of Management,Ghaziabad', 'GHAZIABAD'),
(821, 'Mahaveer College of Pharmacy', 'MEERUT'),
(822, 'Eshan College of Management', 'MATHURA'),
(823, 'Ishan Institute Of Architecture & Planning', '823'),
(824, 'Ishan Institute Of Management& Technology', '824'),
(825, 'IMS,J.P Nagar', '825'),
(826, 'SGITIMT College Of Architecture', '826'),
(827, 'Mascot Institute Of Management', '827'),
(828, 'Dayal Group Of Institutions', '828'),
(829, 'IILM Academy Of Higher Learning', '829'),
(830, 'Devi Memorial Institute', 'Kanpur'),
(831, 'Vivekanand College Of Architecture,Ghaziabad', '831'),
(832, 'Kamal Inatitute Of Technilogy', '832'),
(833, 'Shiva Institute of Management Studies,Ghaziabad', 'Ghaziabad'),
(834, 'Integrated Academy of Management & Technology,Ghaziabad', '834'),
(835, 'L.T.R Institute of Management', 'Meerut'),
(836, 'Bhagwant Institute of Technology, Ghaziabad', 'Ghaziabad'),
(837, 'Sanskriti Engineering College', '837'),
(838, 'Pharmacy College Saifai, District- Etawah', 'ETAWAH'),
(839, 'Govt. Engg. College Kannauj District- Kannauj', 'KANNAUJ'),
(840, 'Govt. Engg. College Mainpuri, District- Mainpuri', 'MAINPURI'),
(841, 'Govt. Engg. College Sonbhadra, District- Sonbhadra', 'SONBHADRA');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_31_153656_create_colleges_table', 1),
('2016_03_31_153720_create_branchs_table', 1),
('2016_03_31_153811_create_books_table', 1),
('2016_04_01_043849_create_foreign_key_in_users_table', 1),
('2016_04_05_171429_change_branchs_name_to_branches', 2),
('2016_04_05_172032_create_table_book_pics', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `college_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `college_id`, `branch_id`, `start_year`, `end_year`, `address`, `contact`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Satvik', '', '', '', 27, 10, 0, 0, '', 0, 'sSmb0dqooIWYhm0DzfrwcnIdfNt6b6pCpQ54OMNkGC5utsMje8dEQFaqy0Mj', '2016-04-06 03:57:31', '2016-04-08 15:24:59'),
(4, 'Satvik', 'Daga', 'dagasatvik10@gmail.com', '$2y$10$3H8p5ExTXi9PeyXY5fbiSugMVXT5zZHOYNJHjgBuwg7SglbgJNwcO', 27, 10, 2014, 2016, 'MIG 126, Avas Vikas, Bijnor', 2147483647, 'AzRrktkN0VFH3gzvxSMqRXWv5Yyrgv7QYMg6KHmIPETLamUUCtClhBA8t29k', '2016-04-06 12:53:12', '2016-04-09 01:54:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_foreign` (`user_id`),
  ADD KEY `books_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `book_pics`
--
ALTER TABLE `book_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_pics_book_id_foreign` (`book_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_college_id_foreign` (`college_id`),
  ADD KEY `users_branch_id_foreign` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book_pics`
--
ALTER TABLE `book_pics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_pics`
--
ALTER TABLE `book_pics`
  ADD CONSTRAINT `book_pics_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
