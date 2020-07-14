-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 09:31 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pciu`
--

-- --------------------------------------------------------

--
-- Table structure for table `principal_message`
--

CREATE TABLE IF NOT EXISTS `principal_message` (
  `message_id` int(11) NOT NULL,
  `message_title` text NOT NULL,
  `message_details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal_message`
--

INSERT INTO `principal_message` (`message_id`, `message_title`, `message_details`) VALUES
(1, 'Port City International University located at Chittagong is a new generation private university committed to excellence in higher education and research. The vision of this university is to make it a global standard center of excellence through education, research and service. The society the way it is changing will have a profound impact on the university education. Transformative education to change the society as it demands is our mission.\r\n', '<p>Port City International University located at Chittagong is a new generation private university committed to excellence in higher education and research. The vision of this university is to make it a global standard center of excellence through education, research and service. The society the way it is changing will have a profound impact on the university education. Transformative education to change the society as it demands is our mission.\r\nIn a world where change is the “norm”, there is one thing for certain-knowledge however, will be a key resource and will be highly sought within our region and around the globe. Knowledge has no boundary and the university is meant to create knowledge and develop skilled human resources those who will contribute to the advancement of knowledge and betterment of the society.  This is, however, a daunting task to achieve all the attributes to perform such sacred duties to the society and the nation as a whole. The most challenging part of all the universities is to help to generate intellectual property which will create new jobs and to educate and train people to work in the fields where they will be valued both for their specialized knowledge and their ability to research, communicate and solve problems.</p>\r\n\r\n\r\n<p>Considering all these challenges of the fast changing world, Port City International University has chalked out distinctive plans delineating the responsibilities of the students, faculty and the staffs to meet the required benchmark of quality education. Our courses are tailor made and designed in the context of global need. We follow a vibrant and innovative course curriculum for our students and provide all state of the art facilities to ensure quality education.  We welcome your interest and invite your further query and hope that you might join us later as one of the elite students of Port City International University.</p>\r\n\r\n\r\n<br><br>\r\n\r\n<p>Dr. Md. Nural Anwar</p>\r\n\r\n<p>Vice Chancellor</p>\r\n\r\n<p>Professor, Department of Microbiology\r\n\r\nUniversity of Chittagong</p>\r\n\r\n<p>B.Sc.(Hons.), M.Sc,(DU), Ph.D. (Mysore University, India),\r\n\r\nPost-doc. (Hokkaido University, Japan</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `special_events`
--

CREATE TABLE IF NOT EXISTS `special_events` (
  `special_id` int(50) NOT NULL,
  `special_title` text NOT NULL,
  `special_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_events`
--

INSERT INTO `special_events` (`special_id`, `special_title`, `special_details`) VALUES
(1, 'Welcome to Special Events1', '<p>1111111</p>\r\n'),
(2, '2', '<p>2</p>\r\n'),
(3, '3', '<p>3</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tech_news`
--

CREATE TABLE IF NOT EXISTS `tech_news` (
  `tech_id` int(60) NOT NULL,
  `tech_title` mediumtext NOT NULL,
  `tech_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_news`
--

INSERT INTO `tech_news` (`tech_id`, `tech_title`, `tech_details`) VALUES
(2, '2', '2'),
(3, '3', '3'),
(4, '4', '4'),
(1, 'Welcome ', 'kjsdhshdishfhyehgfuifkjs\r\nsuisfjsfnuihfxfnjdnvd\r\njcsjhsefoikl\r\njfishfjxncijsndc\r\nfjdnjdnvj');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE IF NOT EXISTS `welcome` (
  `welcome_id` int(11) NOT NULL,
  `welcome_title` text NOT NULL,
  `welcome_details` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`welcome_id`, `welcome_title`, `welcome_details`) VALUES
(1, 'Since the establishment, Port City International University has been focusing on assisting the students in facing the challenges of the ever advancing world. PCIU is a platform where students can rise to the highest level of their capability. It provides an outstanding and supportive environment for both undergraduate and postgraduate students. A talented and dedicated group of academics provide guidance and tutelage the students need to pursue their research and academic goals. The dynamic teaching and learning environment of PCIU brims with talent, creativity and international connections. PCIU has been doing excellent community services by engaging the students and the distinguished academics in public lectures where the students get the opportunity to exchange and share their classroom experiences with the invited guest speakers.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p>Since the establishment, <strong>Port City International University</strong> has been focusing on assisting the students in facing the challenges of the ever advancing world. PCIU is a platform where students can rise to the highest level of their capability. It provides an outstanding and supportive environment for both undergraduate and postgraduate students. A talented and dedicated group of academics provide guidance and tutelage the students need to pursue their research and academic goals. The dynamic teaching and learning environment of PCIU brims with talent, creativity and international connections. PCIU has been doing excellent community services by engaging the students and the distinguished academics in public lectures where the students get the opportunity to exchange and share their classroom experiences with the invited guest speakers</p>\r\n<br>\r\n<br>\r\n<p>In <strong>PCIU</strong>, we maintain a standard quality education and provide the students with proper resources to reach their goals. The university management has been relentlessly trying to mobilize all the possible resources and logistics needed to ensure quality education and better educational environment. Recruitment of brilliant teachers and executives, their training and exposure to global standard education are our prime concerns in maintaining quality of education. We have already been able to organize an international conference on “Quality for Sustainable Development”. Our teachers have had the honor of attending an international conference in Malaysia and the Vice Chancellor attended a conference on Leadership in India. All these initiatives have been aimed at achieving a global standard education and improving our academic curricula, teaching and learning methodologies and in the long run research capability.\r\n\r\n<br><br>\r\n<p><strong>PCIU</strong> takes utmost care of its students. Considering the socio-economic condition, promoting and encouraging the students of low and middle income groups, we have kept our tuition fees at minimum level. We are committed to providing quality education at an affordable cost for all folks of people. We have already created a congenial study friendly campus with all modern facilities including e-library and sate of the art classrooms and laboratories. PCIU has not only focused on the academic strength of its students but also on the cultural and sporting activities of the students. We have different indoor and outdoor games facilities, debating club, cultural forum and robotics club and some departmental clubs also exist in this university. PCIU campus is also a non-political and non-smoking campus. This is an equal opportunity university and no one is discriminated or maltreated because of his/her color, race, religion or nationality. PCIU is pledge-bound to ensure a student friendly academic environment in the campus and strictly adheres to academic discipline.\r\n</p>\r\n<br><br>\r\n<p>\r\n\r\n\r\nPCIU has been maintaining a steady growth over the last few years. Our student enrollment is increasing in every trimester. To ensure the intake of students with good academic standings, we have already introduced Admission test. PCIU has created a homely environment for the foreign students as well and opened up language center for them so that they can easily communicate and understand local language and culture.</p>\r\n\r\n<br><br>\r\n<p>\r\n\r\nPCIU is moving forward and fast in the right direction to catch up excellence with the co-operations of our students, guardians, academics, professionals, officials, staffs and well wishers.</p>\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`welcome_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `welcome_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
