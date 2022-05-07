-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2022 at 03:36 PM
-- Server version: 5.7.36-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `braintec_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbcourse`
--

CREATE TABLE `dbcourse` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(100) NOT NULL,
  `COURSE_PRICE` varchar(100) NOT NULL,
  `LECTURES` varchar(100) NOT NULL,
  `DURATION` varchar(50) NOT NULL,
  `SKILL_LEVEL` varchar(50) NOT NULL,
  `LANGUAGE` varchar(100) NOT NULL,
  `EXAMS` varchar(50) NOT NULL,
  `ASSESSMENT` varchar(50) NOT NULL,
  `HEADER_IMG` varchar(255) NOT NULL,
  `DESCRIPTION_1` varchar(255) NOT NULL,
  `DESCRIPTION_2` varchar(255) NOT NULL,
  `TEACHER_NAME` varchar(100) NOT NULL,
  `CATEGORIES` varchar(50) NOT NULL,
  `TEACHER_IMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbcourse`
--

INSERT INTO `dbcourse` (`COURSE_ID`, `COURSE_NAME`, `COURSE_PRICE`, `LECTURES`, `DURATION`, `SKILL_LEVEL`, `LANGUAGE`, `EXAMS`, `ASSESSMENT`, `HEADER_IMG`, `DESCRIPTION_1`, `DESCRIPTION_2`, `TEACHER_NAME`, `CATEGORIES`, `TEACHER_IMG`) VALUES
(6, 'CERTIFICATE IN WEB DESIGNING', '2500 /per month', '25', '6 Months', 'All Skill', 'Sinahala/English', 'Yes', 'Yes', 'course01.jpg', 'This course will cover a broad range of client-side web technologies and the server side of web applications to become a professional web designer and guide towards acquiring the necessary skills for web designing using: HTML5, CSS, and JavaScript and SQL', '', 'Mr. Charith Obeysekara', 'ICT', '11.jpg'),
(7, 'ICT FOR KIDS', '2500 /per month', '25', '4 Months', 'All Skill', 'Sinahala/English', 'Yes', 'Yes', 'course02.jpg', 'This program is designed to build a foundation of IT knowledge base, among children of age 10 and below, which will enable them to proceed on the pathway to enter in to success path in information and communication technology.', 'This course has been designed and organized considering the gradual development of a child and help them to gain valuable IT knowledge', 'Mr. Bandula Pathmasiri', 'ICT', '12.jpg'),
(8, 'ICT FOR YOUNG LEARNERS', '2500 /per month', '25', '6 Months', 'All Skill', 'Sinahala/English', 'Yes', 'Yes', 'course02.jpg', 'This course is particularly designed to cover the school ICT curriculum from grade 6 to 9. It covers 25 theory hours + 25 practical hours during 6 months. ', 'Students are encouraged to learn ICT with practical activities and competitions throughout the course.', 'Mr. Bandula Pathmasiri', 'ICT', '12.jpg'),
(9, 'G.C.E (ORDINARY LEVEL) ICT', '2500 /per month', '100', '2 Years', 'All Skill', 'Sinahala/English', 'Yes', 'Yes', 'course04.jpg', 'This course covers the entire syllabus of Ordinary Level ICT government school curriculum for 24 months. This course is designed with theory + 30 practical hours. Students will also attend for seminar and webinar throughout the course. ', 'And students are well prepared for the examination with 15 complete model papers.', 'Mr. Charith Obeysekara', 'ICT', '11.jpg'),
(10, 'G.C.E (ADVANCED LEVEL) ICT', '2500 /per month', '100', '2 Years', 'All Skill', 'Sinahala/English', 'Yes', 'Yes', 'course05.jpg', 'This course covers the entire syllabus of Advanced Level ICT government school curriculum for 28 months. This course is designed with theory + 60 practical hours. Furthermore students will attend for seminar and webinar throughout the course. ', 'Assessments will be done weekly with model papers and students can improve their knowledge with 30 complete model papers.', 'Mr. Charith Obeysekara', 'ICT', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dbevent`
--

CREATE TABLE `dbevent` (
  `EVENT_ID` int(11) NOT NULL,
  `EVENT_NAME` varchar(100) NOT NULL,
  `EVENT_IMG` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `DESCRIPTION02` varchar(600) NOT NULL,
  `DESCRIPTION03` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbevent`
--

INSERT INTO `dbevent` (`EVENT_ID`, `EVENT_NAME`, `EVENT_IMG`, `DESCRIPTION`, `LOCATION`, `DATE`, `IMAGE`, `DESCRIPTION02`, `DESCRIPTION03`) VALUES
(1, 'BrainTech Cricket Tournament ', '1.jpg', 'There are endless opportunities for students to build their personality outside of the classroom. Th', 'BrainTech Kegalle', '2018-06-23', '1c.jpg', 'There are endless opportunities for students to build their personality outside of the classroom. This provides a productive break from study. The student who participate in team based activities improve public relationships and team work.', ''),
(2, 'BrainTech Awarding Ceremony for Kids and Young Learns program.', '2.jpg', 'Every December we arrange an awarding ceremony for ...', 'BrainTech Kegalle', '2018-11-21', '2c.jpg', 'Every December we arrange an awarding ceremony for students who have completed their course successfully. At the awarding ceremony contestant are awarded medals for <br>Best Academic Performance <br>Best Graphic Designer  <br>Best Overall Performance ', ''),
(3, 'BrainTech Hardware Workshop', '3.jpg', 'Every year we conduct a computer hardware workshop. Students gain...', 'BrainTech Kegalle', '2018-12-09', '3c.jpg', 'Every year we conduct a computer hardware workshop. Students gain fundamental knowledge about computer hardware, Operating System installation, fault diagnosis and networking. At the end of workshop students will able to identify different computer hardware, assemble computer hardware, troubleshoot hardware problems, and install open source operating system ', ''),
(4, 'BrainTech Programming Competition', '4.jpg', 'We conduct programming competitions for students to improve their ...', 'BrainTech Kegalle', '2019-01-09', '4c.jpg', 'We conduct programming competitions for students to improve their knowledge in programming. It enhances theoretical knowledge of the students to apply it accurately. Apart from the knowledge in programming helps for the examination, it improves their analytical and problem-solving skills. ', 'We always value our young programmers. The best programmer is awarded the “Best programmer” trophy and valuable gifs every year.');

-- --------------------------------------------------------

--
-- Table structure for table `dbmessage`
--

CREATE TABLE `dbmessage` (
  `M_ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbmessage`
--

INSERT INTO `dbmessage` (`M_ID`, `NAME`, `EMAIL`, `PHONE`, `MESSAGE`) VALUES
(1, 'P.R.M.MSenarathne', 'mudithamewan12@gmail.com', '+94781528147', 'hellow'),
(3, ' ', '', '', ''),
(4, ' ', '', '', ''),
(5, 'Nethmini Senanayaka', 'vimukthisenanayaka40@gmail.com', '0711950870', ''),
(6, 'lasith  weerakoon', 'lasithweerakoon254@gmail.com', '0715262285', 'mata system ekata log wenna bene ...\r\nmage username password walata weda ne\r\n'),
(7, 'Sithika Sandiw', 'sandiwsithika@gmail.com', '0714224079', ''),
(8, ' ', '', '', ''),
(9, 'Noobie Noobie', 'd5whk9@spambox.me', '07136249277381', '<script> alert(\"Hi Admins\") </script>'),
(10, 'sanduni senavirathna', 'sandunisenavirathna63@gmail.com', '0762907887', ''),
(11, 'imalsha liyanage', 'liyanagemaxx38@gmail.com', '0713807951', 'my account which has registered in the web site has blocked. today i have to face an online class of sir.charith obeysekara when 2.30 p.m. so please  be kind to settle this matter as soon as posible.'),
(12, 'Dileesha Bandara', 'dileeshabandara51@gmail.com', '0702823528', ''),
(13, 'Kavindu Maleesha', 'kavindu20060905@gmail.com', '0740256925', ''),
(14, 'Manoj Kumara', 'kumaramanojkat@gmail.com', '0718038540', 'Sir mata ..username. ekai password ekai denna puluwanda ðŸ˜¶'),
(15, 'Kaveesha Kulathungha', 'poddionline@gmail.com', '0770227689', 'Grade 10 - System à¶‘à¶šà¶§ à¶½à·œà¶œà·Š à·€à·™à¶± Password à¶‘à¶š à¶…à¶¸à¶­à¶šà·Š à·€à·™à¶½à· à¶¯à·à¶±à·Š à¶”à¶±à·Šà¶½à¶ºà·’à¶±à·Š à¶´à¶±à·Šà¶­à·’ à·ƒà·„à¶·à·à¶œà·’ à·€à·™à¶±à·Šà¶± à¶¶à·‘. à¶¸à·œà¶šà¶šà·Šà¶¯ à¶šà¶»à¶±à·Šà¶±à·š?'),
(16, 'Harith Chandupa', 'harithchandu94@gmail.com', '0763837900', ''),
(17, 'Kavindu Kaushalya', 'kkaushalya872@gmail.com', '0764344948', 'submit me');

-- --------------------------------------------------------

--
-- Table structure for table `dbregister`
--

CREATE TABLE `dbregister` (
  `R_ID` int(11) NOT NULL,
  `F_NAME` varchar(100) NOT NULL,
  `L_NAME` varchar(100) NOT NULL,
  `SCHOOL` varchar(255) NOT NULL,
  `NIC_NO` varchar(50) NOT NULL,
  `AGE` varchar(10) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `COURSE_ID` int(255) NOT NULL,
  `GRADE` varchar(255) NOT NULL,
  `TEARMS_CONDITION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbregister`
--

INSERT INTO `dbregister` (`R_ID`, `F_NAME`, `L_NAME`, `SCHOOL`, `NIC_NO`, `AGE`, `EMAIL`, `PHONE`, `ADDRESS`, `COURSE_ID`, `GRADE`, `TEARMS_CONDITION`) VALUES
(1, 'Muditha', 'Mewan', 'Swarnajayanthi M.V.', '992800925V', '21', 'mudithamewan12@gmail.com', '+94781528147', 'Hapuvita,Udagama\r\nMoronthota', 3, 'Grade 02', 'AGREE'),
(2, 'Hirusha ', '6', 'Kg/ Bandaranayaka. M.V.', '', '15', 'kumaragehirusha@gamil.com', '0714688850', 'K.D.K.Saman  Kumarage \r\nA/54 \r\nKabagamuwa ', 6, 'Grade 11', 'AGREE'),
(3, 'kelum', 'priyanath ', 'pinnawala central collage ', '200232201441', '18', 'kelumpriyanath97@gmail.com', '0772317855', '1st mile post,deliwala,rambukkana', 6, 'PRE - SCHOOL', 'AGREE'),
(4, 'kelum', 'priyanath ', 'pinnawala central collage ', '200232201441', '18', 'kelumpriyanath97@gmail.com', '0772317855', '1st mile post,deliwala,rambukkana', 10, 'Grade 13', 'AGREE'),
(5, 'kelum', 'priyanath ', 'pinnawala central collage ', '200232201441', '18', 'kelumpriyanath97@gmail.com', '0772317855', '1st mile post,deliwala,rambukkana', 10, 'Grade 13', 'AGREE'),
(6, 'Mihisara', 'Madushan ', 'Pinnawala central college ', '200216004092', '18', 'mihisaramadushan68@gmail.com', '0769386432', 'Thunthatawaththa ,halpitiya ,hiriwadunna ', 10, 'Grade 13', 'AGREE'),
(7, 'Akila', 'Dananjaya ', 'Kegalu vidyalaya ', '', '16', 'akila.66.sampath@gmail.com', '0762720505', 'Helaudakade,Thulhiriya ', 9, 'Grade 11', 'AGREE'),
(8, 'Mihisara', 'Madushan ', 'Pinnawala central college ', '200216004092', '18', 'mihisaramadushan68@gmail.com', '0769386432', 'TThunthatawaththa ,halpitiya ,hiriwadunna ', 10, 'Grade 13', 'AGREE'),
(9, 'Vihanga', 'Premathilaka', 'Kg/Galigamuwa centrel college ', '40', '16', 'vihangapremathilaka004@gmail.com', '764186184', 'Ballapana\r\nGaligamuwa', 9, 'Grade 11', 'AGREE'),
(10, 'Vihanga', 'Premathilaka', 'Kg/Galigamuwa centrel college ', '40', '16', 'vihangapremathilaka004@gmail.com', '764186184', 'Ballapana\r\nGaligamuwa', 9, 'Grade 11', 'AGREE'),
(11, 'Thimira', 'Pathirana', 'KG/Swarnajayanthi M.V', '200230901599', '18 ', 'Pathiranathimea@gmail.com', '0701222753', 'Ahasliyadda,Deewela,Pallagama', 10, 'Grade 13', 'AGREE'),
(12, 'Samoda', 'Wijesooriya', 'Rivisanda central collage', '200229603037', '18', 'samodawijesooriya@gmail.com', '0703804216', 'Parapitiya,debathgama\r\nDebathgama', 10, 'Grade 13', 'AGREE'),
(13, 'Piumi', 'Premathilake', 'Kg/Swarna Jayanthi M.V.', '200454011705', '16years', 'pudeshika73@gmail.com', '0776616870', 'A182/2 Ganemulla road,Edurapotha,Kegalle', 9, 'Grade 11', 'AGREE'),
(14, 'Mihiraj', 'Gattapola', 'St.mary\'s college kegalle', '', '15', 'thilakgattapola1968@gmail.com', '0718214497', 'dissawasa,\r\nMoragammana,\r\nAranayaka', 9, 'Grade 10', 'AGREE'),
(15, 'Mihiraj', 'Gattapola', 'St.mary\'s college kegalle', '', '15', 'thilakgattapola1968@gmail.com', '0718214497', 'Dissawasa,\r\nMoragammana,\r\nAranayaka', 9, 'Grade 11', 'AGREE'),
(16, 'Poveesha', 'Wijerathna', 'K/Pinnawala central college', '', '18', 'sarathwijerathna230@gmail.com', '0766587026', 'E/59, Alawaththa, Kiriwallapitiya, Rambukkana', 10, 'Grade 13', 'AGREE'),
(17, 'Poveesha', 'Wijerathna', 'K/Pinnawala central college', '', '18', 'sarathwijerathna230@gmail.com', '0766587026', 'E/59, Alawaththa, Kiriwallapitiya, Rambukkana', 10, 'Grade 13', 'AGREE'),
(18, 'Rehan', 'Rajasekara', 'K/Kegalu Vidyalaya', '', '15', 'rajasekararehan@gmail.com', '0776860969', 'H214,\r\nparagammana,\r\nkegalle.', 9, 'Grade 10', 'AGREE'),
(19, 'Dulan', 'Pinnawala ', 'Pinnawala central college ', '200229101452', '18', 'Pinnawaladulan83@gmail.com', '0779243938', 'A/37 Deniyawaththa, Pinnawala, Rambukkana', 10, 'Grade 13', 'AGREE'),
(20, 'Dilshan', 'Eranda', 'Kg/swarnajayanthi.m.v', '200210101873', '18', 'dilshaneranda0987@gmail.com', '0776287626', 'D-36 chandrikapura, undugoda.', 10, 'Grade 13', 'AGREE'),
(21, 'Dilru', 'Rathnasooriya', 'Pinnawala central college', '200212801846', '18', 'dilrurathnasooriya11@gmail.com', '0760938050', 'Buwalikad,Dunukewala,Hiriwadunna\r\nDunukewala', 6, 'PRE - SCHOOL', 'AGREE'),
(22, 'Mihisara', 'Madushan', 'Pinnawala central college ', '200216004092', '18', 'mihisaramadushan68@gmail.com', '0769386432', 'Thunthatawaththa,halpitiya,hiriwadunna', 10, 'Grade 13', 'AGREE'),
(23, 'Dulan', 'Themiya ', 'Pinnawala central college ', '200229101452', '18', 'Pinnawaladulan83@gmail.com', '0779243938', 'A/37 Deniyawaththa, Pinnawala, Rambukkana', 10, 'Grade 13', 'AGREE'),
(24, 'Darahana', 'Nuwan', 'Kg/pindeniya central college', '200303002856', '17', 'darshana2king@gmail.com', '0711505368', 'G 122/2, Ganegoda, Arandara,Atala', 10, 'Grade 13', 'AGREE'),
(25, 'Chanchala ', 'Kasthuri Arachchi', 'Swarna Jayanthi M.V', '200475401625', '16', '', '0774351983', 'Hungampola , Moronthota', 6, 'PRE - SCHOOL', 'AGREE'),
(26, 'Vidura', 'Dewantha', 'Kg/Pindeniya National School', '200208103259', '18', 'viduradewantha@gmail.com', '0711461118', 'C 2/3, Rillakanda, Atala', 10, 'Grade 13', 'AGREE'),
(27, 'Dineth', 'Pehesara', 'Pinnawala Central College', '', '16', 'silenceinvisiblehacker@gmail.com', '0719638853', 'C/35,Awasa road,Hettimulla.', 9, 'Grade 11', 'AGREE'),
(28, 'Vihanga', 'Premathilaka', 'Kg/Galigamuwa centrel college ', '40', '16', 'vihangapremathilaka004@gmail.com', '764186184', 'Ballapana\r\nGaligamuwa', 9, 'Grade 11', 'AGREE'),
(29, 'Ridmi', 'Weerasinghe', 'Kg/ kegalu balika vidyalaya', '', '16', 'Sunilweerasinge13@gmail.com', '0776795830', 'Diyaramadiththa,moradana,undugoda', 6, 'PRE - SCHOOL', 'AGREE'),
(30, 'Sandeepani', 'Vandana', 'Kegalu Balika Vidyalaya', '', '16', 'sandeepanimakewita@gmail.com', '0770532283', 'NO 90, North Circle Road, Kegalle', 6, 'Grade 11', 'AGREE'),
(31, 'Sandeepani', 'Vandana', 'Kegalu Balika Vidyalaya', '', '16', 'sandeepanimakewita@gmail.com', '0770532283', 'No 90 , North Circuler Road , Kegalle .', 6, 'Grade 11', 'AGREE'),
(32, 'Rohana thushara', 'Karunarathna', 'Kg/ bandaranayaka m. v', 'Rochana', '16', 'bruddhika@email.com', '0776795878', 'Suwamadhura, pandeniya, naranpitiya, hettimulla', 9, 'Grade 11', 'AGREE'),
(33, 'Iresha', 'Maduwanthi', 'St. Joseph\'s Balika Maha Vidyalaya', '', '16', 'ireshairesha862@gmail.com', '0775962825', 'Pahalawaththa, Bodawala, Beligala', 9, 'Grade 11', 'AGREE'),
(34, 'Iresha', 'Maduwanthi', 'St. Joseph\'s Balika Maha Vidyalaya', '', '16', 'ireshairesha862@gmail.com', '0775962825', 'Pahalawaththa, Bodawala, Beligala', 9, 'Grade 11', 'AGREE'),
(35, 'Nisal ', 'Sanjana', 'Kegalu vidyalaya', '200115302778', '19', 'danisalsanjana@gmail.com', '0767850606', 'Thumbaliyadda , warakapola ', 10, 'Grade 13', 'AGREE'),
(36, 'Dineth', 'Weerasingha', 'Kegalu vidyalaya', '', '15', 'upulpriyantha782@gmail.com', '0703272527', '\"Priyantha\",Bossella,Kegalle.', 8, 'Grade 10', 'AGREE'),
(37, 'Dineth', 'Weerasingha', 'Kegalu vidyalaya', '', '15', 'upulpriyantha782@gmail.com', '0703272527', '\"Priyantha\",Bossella,Kegalle', 9, 'Grade 10', 'AGREE'),
(38, 'Dineth', 'Weerasingha', 'Kegalu vidyalaya', '', '15', 'upulpriyantha782@gmail.com', '0703272527', '\"Priyantha\",Bossella,Kegalle', 9, 'Grade 10', 'AGREE'),
(39, 'Sithmi', 'Ruhunage', 'Kg/ St. Joseph\'s Balika Maha Vidyalaya', '', '14', 'sanathruhunage147@gmail.com', '0771757800', 'A/22, Kegalle Road, Kotiyakumbura', 9, 'Grade 10', 'AGREE'),
(40, 'H.L.Senuri', 'Sawbhagya ', 'St/ Joseph\'s Balika M.V', '-', '11', 'Senurilunuwila@gmail.com', '070 - 2824343', 'No,42 Raththambalawatta,kegalle', 7, 'Grade 07', 'AGREE'),
(41, 'Behansa', 'Jayathissa', '', '', '10', '', '0776718351', 'Mihindu mawathta eriyawa, rambukkna ', 6, 'Grade 06', 'AGREE'),
(42, 'Lithuli', 'De silva', 'Sujatha viddyalaya ', '', '10', 'lalanadesilva@googlemail.com', '0715310402', 'D48/3\r\nKansalagamuwa', 7, 'Grade 06', 'AGREE'),
(43, 'Lasitha', 'perera', 'k/g bandaranayaka m.v', '', '15', 'lasithsulochana@gmail.com', '0763423517', '166 /2 Dikkella,Hettimulla', 6, 'Grade 11', 'AGREE'),
(44, 'Rahal', 'Rideewita', 'St.mary\'s college', '', '16', 'drsalonlk@gmail.com', '0769796444', 'J66/13 Kahagollawatta,Diyagama,Hiriwadunna', 9, 'Grade 11', 'AGREE'),
(45, 'Sukitha', 'Somarathna', 'Kegalu vidyalaya', '', '15', 'sukithabuwaneka@gmail.com', '076 6312404', 'mangalagama, mologoda', 6, 'Grade 11', 'AGREE'),
(46, 'Piumi', 'Premathilake', 'Kg/Swarna Jayanthi M.V.', '200454011705', '16 years', 'pudeshika73@gmail.com', '0776616870', 'A 182/2 Ganemulla Road,Edurapotha ,Kegalle \r\n', 6, 'PRE - SCHOOL', 'AGREE'),
(47, 'Piumi', 'Premathilake', 'Kg/Swarna Jayanthi M.V.', '200454011705', '16 years', 'pudeshika73@gmail.com', '0776616870', 'A 182/2 Ganemulla Road,Edurapotha ,kegalle ', 6, 'PRE - SCHOOL', 'AGREE'),
(48, 'Yunara', 'Sooriyaarachchi ', 'St.Joseph\'s Balika Maha Vidyalaya Kegalle ', '', '10 yrs', 'unara.samindi@gmail.com', '077 5867495', 'No.202 ,kandy Rd ,Kegalle', 6, 'Grade 06', 'AGREE'),
(49, 'Rahal', 'RIDIWITA', 'St.mary\'s college', '', '16', 'drsalonlk@gmail.com', '0769796444', 'J66/13Kahagolla watta,Diyagama,Hiriwadunna', 9, 'Grade 11', 'AGREE'),
(50, 'Nipuni ', 'Punnuwansha ', 'Ke/Swarana  jayanthi Maha Vidiyala ', '', '16', 'nawodyanipuni01@mail.com', '0778727229', '32/12Heenwarella road,  anwarama Mawanella ', 6, 'PRE - SCHOOL', 'AGREE'),
(51, 'Ruvindee', 'Samarathunga', 'St.Joseph\'s balika M.V.', '', '10 years', 'rangasamarathunga1981@gmail.com', '0772569793', 'Panakawa road,Ranwala,Kegalle', 7, 'Grade 06', 'AGREE'),
(52, 'Ruvindee', 'Samarathunga', 'St.Joseph\'s balika M.V.', '', '10 years', 'rangasamarathunga1981@gmail.com', '0772569793', 'Panakawa road,Ranwala,Kegalle', 7, 'Grade 06', 'AGREE'),
(53, 'Nuhan', 'Pathirana', 'M/maahanaga m/v', '', '16', 'wickramasinghea972@gmail.com', '0774990830', '123/12 bandaranayaka mawatha', 6, 'PRE - SCHOOL', 'AGREE'),
(54, 'Nuhan pathirana', 'Pathirana', 'Mahanaga maha vidyalaya', '', '16', 'aruniwickramasinghe972@gmail.com', '0774990830', '123/12 Kristin Park, bandaranayaka mawatha, kegall. ', 9, 'Grade 10', 'AGREE'),
(55, 'Pasindu', 'Pathirana', 'St.Mary\'s College Kegalle ', '', '14', 'pasindupathirana301@gmail.com', '0781731409', 'H 2/11 wlegedara Siyambalapitiya Kegalle', 9, 'Grade 10', 'AGREE'),
(56, 'SANULI NETHPAHANI ', 'Senanayake', 'St.  Joseph\'s Balika Maha Viddyalaya', '', '10 years', 'wathsalajm1@gmail.com', '+44711190613', 'Makoora,  Hettimulla,', 6, 'Grade 06', 'AGREE'),
(57, 'Gagani', 'Kuruppu', 'DSCC', 'OLE220046', '15', 'wasnthakumare1979@gmail.com', '0719739134', 'Niwatuwa, Warakapola', 8, 'Grade 10', 'AGREE'),
(58, 'Oshani Sanjana', 'Aluthgama', 'Ke/Kegallu Balika Vidyalaya', '', '16', 'oshanisanjana123@gmail.com', '0766634533', 'NO36,Madeyiyawa Road,Kegalle', 9, 'Grade 11', 'AGREE'),
(59, 'Sandeepani', 'Vandana', 'Kegalu Balika Vidyalya', '511', '16', 'sandeepanimakewita@gmail.com', '0770532283', 'NO 90, North Circular Road, Kegalle', 6, 'PRE - SCHOOL', 'AGREE'),
(60, 'Sandeepani', 'Vandana', 'Kegalu Balika Vidyalya', 'OLS200511', '16', 'sandeepanimakewita@gmail.com', '0770532283', 'NO 90, North Circular Road, Kegalle', 6, 'Grade 11', 'AGREE'),
(61, 'SADEEPA ', 'Manjula ', 'Kg/Swarnajayanthi m.v', '', '16', '', '0771153538', 'MAnjuvila atugoda damunupola kegalle \r\n\r\n', 6, 'PRE - SCHOOL', 'AGREE'),
(62, 'SADEEPA ', 'MANJULA ', 'Kg/Swarnajayanthi m.v', '', '16', '', '0771153538', 'MAnjuvila atugoda damunupola kegalle \r\n', 8, 'Grade 11', 'AGREE'),
(63, 'Sadeepa', 'Manjula', 'KG/swarnajayanthi mha vidyalaya', '200431301562', '16years', 'srirathnamanjula@gmail.com', '0771153538', 'Manjuvila,atugoda,damunupola,kegalle', 9, 'Grade 11', 'AGREE'),
(64, 'Sadeepa', 'Manjula', 'KG/swarnajayanthi mha vidyalaya', '200431301562', '16years', 'srirathnamanjula@gmail.com', '0771153538', 'Manjuvila,atugoda,damunupola,kegalle', 9, 'Grade 11', 'AGREE'),
(65, 'SAdeepa', 'MAnjula', 'KG/swarnajayanthi maha vidyalaya', '200431301562', '16', 'sriRathnamanjula@gmail.com', '0771153538', 'MNnjuvila,atugoda ,damunupola ,kegalle ', 9, 'Grade 11', 'AGREE'),
(66, 'Ishani', 'Alahakoon', 'Mahanaga', '', '15', 'ovindapiumal833@gmail.com', '0770786620', 'B.36 yattogoda', 6, 'PRE - SCHOOL', 'AGREE'),
(67, 'Amidu', 'Dulanjana', 'Pinnawala Central College', '', '15', '', '0769068679', '350/1, Upper Knewsmiyar, Undugoda', 9, 'Grade 11', 'AGREE'),
(68, 'Amidu', 'Dulanjana', 'Pinnawala Central College', '', '15', 'amidu22397@gmail.com', '0769068679', '350/1, Upper Knewsmiyar, Undugoda', 9, 'Grade 11', 'AGREE'),
(69, 'Oshanka ', 'Liyanage ', 'Pinnawala central college ', '', '14', '', '0771323163', 'No.27/180 kegalle road polgahawela ', 9, 'Grade 10', 'AGREE'),
(70, 'Sadeepa ', 'Manjula ', 'Kg/Swarnajayanthi m.v', '', '16', 'sriratnamanjula@gimail.com', 'Huawei y5', 'Manjuvila atugoda damunupola kegalle ', 6, 'Grade 11', 'AGREE'),
(71, 'Lihini', 'Jayawardana ', 'Kegalle balika vidyalaya', 'Lihini', '15', 'shriyawijesingha@gmail.com', '0767949990', 'No 04 aekiriyagala road pitihuma kegalle ', 6, 'Grade 10', 'AGREE'),
(72, 'Harsana ', 'Pramod ', 'Kg/galigamuwa central college ', '200235801073', '18', 'harshanapramod631@gmail.com', '0776578053', 'Kekalapana \r\nDedugala ', 8, 'Grade 13', 'AGREE'),
(73, 'Harsana ', 'Pramod ', 'Kg/galigamuwa central college ', '200235801073', '18', 'harshanapramod631@gmail.com', '0776578053', 'Kekalapana \r\nDedugala ', 6, 'Grade 13', 'AGREE'),
(74, 'Sandun', 'Bandara', 'Pinnawala Central Collage', '20030901111', '18', 'sandunhhhh90@gmail.com', '0715801076', 'Godagandeniya,Rambukkana', 10, 'Grade 13', 'AGREE'),
(75, 'Sithika ', 'Sandiw', 'Swarnajayanthi M. V', '200314011052', '17', 'sandiwsithika@gmail.com', '0714224079', 'E/8, poonahela, Bulathkohupitiya', 10, 'Grade 12', 'AGREE'),
(76, 'Sithika ', 'Sandiw', 'Swarnajayanthi M. V', '200314011052', '17', 'sandiwsithika@gmail.com', '0714224079', 'E/8, poonahela, Bulathkohupitiya', 10, 'Grade 12', 'AGREE'),
(77, 'Sachinthani', 'Weerasekara', 'KG/MW Nagaragiri M.V', '200158202568', '19', 'kaushiweera1234@gmail.com', '0787027284', 'D/86 Ginihappitiya,Hemmathagama.', 10, 'Grade 13', 'AGREE'),
(78, 'Sithika ', 'Sandiw', 'Swarnajayanthi M. V', '200314011052', '17', 'sandiwsithika@gmail.com', '0714224079', 'E/8, poonahela, Bulathkohupitiya', 10, 'Grade 12', 'AGREE'),
(79, 'Ovindi', 'Mallawa', 'Ke/ Kegalu  balika  vidyalaya', '-', '13   ', 'dhammikapriyanthi77@gmail.com', '0712773797', '76/19, Akiriyagala  Road, Pitihuma, Kegalle', 8, 'Grade 09', 'AGREE'),
(80, 'ImashaNethmini', 'Imasha Nethmini Karunarathna ', 'Kg/swarna Jayanthi M.V', '', '13years', '', '0776344097', 'Mangalagama,Molagoda,Kagalla', 6, 'PRE - SCHOOL', 'AGREE'),
(81, 'Sanduni ', 'Senavirathna', 'Pinnawala Central College', '200259901996', '18', 'sandunisenavirathna63@gmail.com', '0762907887', 'Padhavigampala, Yatagama, Rambukkana', 10, 'Grade 13', 'AGREE'),
(82, 'Chamika', 'Arunoda', 'St.mary\' college', '-', '16', 'arunodachamika36@gmail.com', '0778367233', 'D 1/49 Atalahena, Minuwangamuwa', 9, 'Grade 11', 'AGREE'),
(83, 'DILSHAN ', 'MADUSANKA', 'G.M.V.', '', '19', 'dilshanb622@gmail.com', '0703311493', 'Yatapana Road Getiyamulla Alawathura ', 10, 'Grade 13', 'AGREE'),
(84, 'Sathsara ', 'Ranasingha ', 'Kg/Hettimulla nawa maha viduhala', 'LOS220188', '15', 'Sathsararanasingha77@gmail.com', '0776337579', 'Higgoda,undugoda', 8, 'Grade 10', 'AGREE'),
(85, 'Sathsara ', 'Ranasingha ', 'Kg/Hettimulla nawa maha viduhala', 'LOS220188', '15', 'Sathsararanasingha77@gmail.com', '0776337579', 'Higgoda,undugoda', 6, 'Grade 10', 'AGREE'),
(86, 'Sathsara ', 'Ranasingha ', 'Kg/Hettimulla nawa maha viduhala', 'OLS220188', '15', 'Sathsararanasingha77@gmail.com', '0776337579', 'Udaha walawwa,Higgoda ,Undugoda', 8, 'Grade 10', 'AGREE'),
(87, 'Sathsara ', 'Ranasingha ', 'Kg/Hettimulla nawa maha viduhala', 'OLS220188', '15', 'Sathsararanasingha77@gmail.com', '0776337579', 'Higgoda,undugoda', 8, 'Grade 10', 'AGREE'),
(88, 'Pawani ', 'Pramodya ', 'Kg/Swarnajayanthi Maha Vidyalaya', '200379713520', '17', 'Pawanipramodya2020@gmail.com', '0703438879', 'Getiyamulla , Alawathura', 10, 'Grade 12', 'AGREE'),
(89, 'Gihan', 'Weerasekara', 'Pinnawala Central College', '200208301257', '19', 'gihannandika2002@gmail.com', '0762889708', 'E/99/1,Hathgapola,Aranayaka.', 10, 'Grade 13', 'AGREE'),
(90, 'Tharindu ', 'Rukshan ', 'Kg/Mw/pinnawala c.c', '200219803107', '18', 'Neemikakumarasingha@gmail.com', '0766476531', 'A75/2B,welikanda,kiriwandeniya,rambuukana ', 10, 'Grade 13', 'AGREE'),
(91, 'piyumi', 'edirisinghe', 'st.joshep\'s balika vidyalaya', 'ALS 220052', '18', 'piyumihedirisinghe@gmail.com', '0702599866', '168/9 gadumangewaththa technical road ginihappitiya, hemmathagama', 10, 'Grade 12', 'AGREE'),
(92, 'kalhara', 'thabrew', 'pinnawala central college', 'no', '16', 'thabrewsahan@gmail.com', '0771206265', 'no,11\r\nolagankanda,kegalle', 9, 'Grade 11', 'AGREE'),
(93, 'Arosh', 'Akarsha', 'Pinnawala Central Collage', '', '12', 'sanjananimsi@gmail.com', '0740519311', 'D192/3, Atalahena, Hettimulla', 6, 'Grade 07', 'AGREE'),
(94, 'banuka', 'bathisa', 'kegalu vidyalaya', '200692', '14', 'kuruppubanuka@gmail.com', '0718305863', 'A50A molamure lain 1 regale ', 9, 'Grade 10', 'AGREE'),
(95, 'Manjula ', 'Kaluarachchi', 'Rajasinghe M.M.V.', '198056403560', '40', 'himansu.udayana@gmail.com', '+94770866599', 'Wendala, Rueanwella', 9, 'Grade 10', 'AGREE'),
(96, 'Chamika', 'Arunoda', 'St.Mary\'s College Kegalle', '', '16', 'arunodachamika36@gmail.com', '0778367233', 'D49\\1 Atalahena, Minuwangamuwa,Hettimulla', 9, 'Grade 11', 'AGREE'),
(97, 'Sandakini ', 'Willaraarachchi ', 'SJB', '', '18', '', '0775633200', '\'Lion Fort\', temple rd, mahena, warakapola ', 10, 'Grade 13', 'AGREE'),
(98, 'Chamodi', 'Rasanjalee', 'Ke /dedi/kiwuldeniya mahanage mata vidyalaya', '200375810951', '17', 'chamodirasanjalee8@gmail.com', '0701064143', 'No,28 akemuthugama,kiwuldeniya,galapitamade', 6, 'PRE - SCHOOL', 'AGREE'),
(99, 'Chamodi', 'Rasanjalee', 'Ke /dedi/kiwuldeniya mahanage mata vidyalaya', '200375810951', '17', 'chamodirasanjalee8@gmail.com', '0701064143', 'No,28 akemuthugama,kiwuldeniya,galapitamade', 6, 'PRE - SCHOOL', 'AGREE'),
(100, 'Chamika', 'Arunoda', 'St.mary\' college', '', '16', 'arunodachamika36@gmail.com', '0778367233', 'D1/49 atalahena ,Minuwangamuwa ', 9, 'Grade 11', 'AGREE'),
(101, 'Thiviru ', 'Thulnith', 'Pinnawala Central College ', 'OLS220186', '15', '', '0711038064', 'Punsith,Kandapitiya,Molagoda ', 9, 'Grade 10', 'AGREE'),
(102, 'Thiviru ', 'Ranathunga', 'Pinnawala center college ', '', '15', 'Punsithdaniru@gmail.com', '0711038064', 'Punsith,kanadapitiya,watta,molagoda,kegalle', 9, 'Grade 10', 'AGREE'),
(103, 'Vihangi', 'Jayasinghe', 'St/Joseph\'s Balika Maha Vidyalaya', '200278204116', '18', 'piushanijayasinghe@gmail.com', '0714099863', '1/161,Dikkella,Hettimulla', 10, 'Grade 13', 'AGREE'),
(104, 'Sachelle', 'Ranasinghe ', 'St\' josheps balika maha vidyalaya', '200276303540', '18', 'sachellekavya19@gmail.com', '0768467317', 'D.M.R.D Ranasinghe \r\nRanathunga villa,\r\nMakura,\r\nHettimulla', 10, 'Grade 13', 'AGREE'),
(105, 'Sachelle', 'Ranasinghe ', 'St\' josheps balika maha vidyalaya', '200276303540', '18', 'sachellekavya19@gmail.com', '0768467317', 'D.M.R.D Ranasinghe \r\nRanathunga villa\r\nMakura \r\nHettimulla ', 10, 'Grade 13', 'AGREE'),
(106, 'Sachelle ', 'Ranasinghe ', 'St\' josheps balika maha vidyalaya ', '2002766303540', '18', 'sachellekavya19@gmail.com', '0768467317', 'D.M.R.D Ranasinghe \r\nRanathunga villa \r\nMakura hettimulla ', 10, 'Grade 13', 'AGREE'),
(107, 'à¶´à·à¶­à·”à¶¸à·Š', 'à¶‹à¶¯à¶ºà¶‚à¶œ', 'Rivisanda central college ', '200212401836', '19', 'pathumudayanga2019@gmail.com', '761865006', 'Habalakkawa \r\nThalgaspitiya \r\nAranayaka ', 10, 'Grade 13', 'AGREE'),
(108, 'Sulakshana ', 'Prabath', 'Dharmaraja college kandy ', '200334413232', '17', 'sulakshanaprabath654@gmail.com', '0703154527', 'D57/2 pansalawatta,paranagama,dewanagala ', 10, 'Grade 12', 'AGREE'),
(109, 'Isuru', 'Nimesh', 'Kg/Swarnajayanthi Maha Vidyalaya', '200202000583', '20', 'isurunimesh9876@gmail.com', '0767259732', 'G/109/2 duldeniya,aranayaka', 10, 'Grade 13', 'AGREE'),
(110, 'enosh', 'liyanage', 'Swarna jayanthi Maha vidyalaya', '-', '16', 'enoshliyanage973@gmail.com', '0782396829', '49/A  sanimate estate yatathawala imbulgasdeniya', 9, 'Grade 11', 'AGREE'),
(111, 'liyanage', 'enosh', 'swarna jayanthi Maha vidyalaya', '-', '16', 'vidushajayawardana290@gmail.com', '0716057823', '49/A sanimate estate yatathawala imbulgasdeniya kegalla', 9, 'Grade 11', 'AGREE'),
(112, 'Enosh', 'Liyanage', 'Swarnajayanthi Maha vidyalaya', '', '16', 'enoshliyanage973@gmail.com', '0782396829', 'No:49/A Sanimate estate\r\n yataththawala\r\n imbulgasdeniya', 6, 'PRE - SCHOOL', 'AGREE'),
(113, 'Dulaksha', 'Kaveeshana', 'St\'Mary\'s College, Kegalle', '', '16', 'dulakshakaveeshana248@gmail.com', '+94723498457', 'L2/2, Kankeeriya, Hettimulla, Kegalle.', 10, 'Grade 12', 'AGREE'),
(114, 'Kavindu', 'Maleesha', 'St/Mary\'s college', '', '14', 'kavindu20060905@gmail.com', '0740256925', 'G245,à¶šà¶«à·”à·„à·à¶­à·Šà¶­à·‘à·€,à·„à·™à¶§à·Šà¶§à·’à¶¸à·”à¶½à·Šà¶½.', 8, 'Grade 10', 'AGREE'),
(115, 'Hansaja', 'Dilshan', 'K/M/Rivisanda Central College', '', '16', 'Mghasinieranga@gmail', '0703458932', 'C/37 Daswaththa Mawanella', 6, 'PRE - SCHOOL', 'AGREE'),
(116, 'darshana', 'prageeth', 'kegalu vidyalaya', 'Po210430318', '13', 'dprageeth39@gmail.com', '0764711384', '96/7 beligas road /pitihuma/kegalle', 6, 'Grade 09', 'AGREE'),
(117, 'Navoda', 'Senanayake', 'St. Joseph\'s convent.', '200282604564', '18', 'navosenanayake@gmail.com', '0719155569', 'Narangoda', 10, 'Grade 13', 'AGREE'),
(118, 'Kavindu', 'Maleesha', 'St/Mary\'s college', 'OLS220226', '15', 'kavindu20060905@gmail.com', '0740256925', 'G245,Kanuhathawa,Hettimulla.', 9, 'Grade 10', 'AGREE'),
(119, 'Imalsha', 'Liyanage', 'Kegalu Vidyalaya', '200127902242', '19', 'liyanagemaxx38@gmail.com', '0701684163', '328/10,\r\nmaoya garden,\r\nmawanella', 10, 'Grade 13', 'AGREE'),
(120, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda.Undugada', 7, 'Grade 07', 'AGREE'),
(121, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda.Undugada', 7, 'Grade 07', 'AGREE'),
(122, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda  undugoda', 7, 'Grade 07', 'AGREE'),
(123, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda Undugoda', 7, 'Grade 07', 'AGREE'),
(124, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda Undugoda', 7, 'Grade 07', 'AGREE'),
(125, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7 Higgoda.Undugada', 7, 'Grade 07', 'AGREE'),
(126, 'anjana', 'jaysundara', 'sujatha vidyalaya', '', '14', '', '074083780', 'randeniya hiriwadunna', 6, 'Grade 09', 'AGREE'),
(127, 'Anjana', 'Jayasundara', 'Sujatha vidyalaya', '', '14', 'npjayasundara93@gmail.com', '0740834780', 'Randeniya,\r\nHiriwadunna', 6, 'Grade 09', 'AGREE'),
(128, 'enuri umayangana', 'sumanasiri', 'kg/st.josephs balika m.v', '', '11', 'jayaminibasnayaka22@gmail.com', '0717873364', 'F6/A dippitiya mahapallegama kegalle', 8, 'Grade 06', 'AGREE'),
(129, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '0718038540', 'B8/7,Kandupita,Higgoda,Undugoda.', 8, 'Grade 07', 'AGREE'),
(130, 'Pasan', 'Matheesha', 'Kg/Bandaranayaka Jathika Pasala', '663170589v', '12', 'kumaramanojkat@gmail.com', '718038540', 'B8/7 kadupita higgoda udugoda', 8, 'Grade 07', 'AGREE'),
(131, 'Chanuga', 'pasan', 'R/Prince College. Rathnapura.', '', '12', 'amithsanjaya1977@gmail.com', '0714402007', 'No: 15, Emarald Garden, Hidellana.', 7, 'Grade 07', 'AGREE'),
(132, 'Gayan', 'Isuru', 'Ke mw sujatha viduhala', '', '17', 'iisurukariyawasam303@gmail.com', '0719514849', 'Puwakmote,Yatagama,Rambukkana', 10, 'Grade 12', 'AGREE'),
(133, 'Seniru', 'Nawarathna', 'Kegalu Vidyalaya', '', '16', 'sunethrajayasooriya0001@gmail.com', '0776041699', 'A 1/21 Hiriwadunna.', 9, 'Grade 11', 'AGREE'),
(134, 'Chamalka', 'Ishan', 'K/Swarna Jayanthi m.v.', 'OLS220247', '15', 'bchaminda769@gmail.com', '0762375853', 'Mahalanda watta,hiriwadunna', 9, 'Grade 10', 'AGREE'),
(135, 'Ashan', 'Imalka', 'Royal college', '1', '13', 'ashan13@gmail.com', '0718275341', 'Anuradapura', 7, 'Grade 05', 'AGREE'),
(136, 'Matheesha', 'Rasanjana kumarasingha', 'St/mary\'s collage, kegalle', '200433400528', '17', 'matheesharasanjana12@gmail.com', '0766187640', 'Kettalawala Kegalle', 10, 'Grade 12', 'AGREE'),
(137, 'Oshada', 'Deepthi', 'K / nawa maha viduhala hettimulla', '', '15', 'www.oshadadissanayaka3@gmail.com', '0774524575', 'A33/ 2 DAMPELGODA bossella', 9, 'Grade 10', 'AGREE'),
(138, 'Janith', 'Shanuka', 'B/Koslanda National College', 'Empty', '12', 'karunarathnabandara835@gmail.com', '0701637905', 'Wellawaya Road, Nikapotha', 6, 'PRE - SCHOOL', 'AGREE'),
(139, 'Janith', 'Shanuka', 'B/Koslanda National College', '', '16', 'karunarathnabandara835@gmail.com', '0701637905', 'Wellawaya Road Nikapotha', 10, 'Grade 12', 'AGREE'),
(140, 'Dahami', 'Nethmini', 'Rivisanda C.C', '', '17', 'vidulasenesh@gmail.com', '0761695712', 'E/15,medagoda,dewanagala', 10, 'Grade 12', 'AGREE'),
(141, 'Maleesha', 'Dewmini', 'Kegallu Balika Vidyalaya', '', '16', 'cmalkanthi92@gmali.com', '0702495530', 'C 139 \r\nDehimaduw \r\nMawanell', 6, 'PRE - SCHOOL', 'AGREE'),
(142, 'Dineshika', 'Bandara', 'Ke/balika vidyalaya', '200460701145', '17', '', '0778008926', 'G123/19,\r\nArama para,\r\nGaligamuwa town,\r\nGaligamuwa', 10, 'Grade 12', 'AGREE');

-- --------------------------------------------------------

--
-- Table structure for table `dbteacher`
--

CREATE TABLE `dbteacher` (
  `TEACHER_ID` int(11) NOT NULL,
  `TEACHER_NAME` varchar(100) NOT NULL,
  `SUBJECT` varchar(100) NOT NULL,
  `TEACHER_IMG` varchar(255) NOT NULL,
  `FACEBOOK_LINK` varchar(255) NOT NULL,
  `TWITTER_LINK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbteacher`
--

INSERT INTO `dbteacher` (`TEACHER_ID`, `TEACHER_NAME`, `SUBJECT`, `TEACHER_IMG`, `FACEBOOK_LINK`, `TWITTER_LINK`) VALUES
(1, 'Charith Obeysekara', 'ICT', 'teacher1.jpg', 'https://www.facebook.com/charith.obeysekara.3', ''),
(2, 'Bandula Pathmasiri', 'ICT', '2.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dbuser`
--

CREATE TABLE `dbuser` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(255) NOT NULL,
  `USER_USERNAME` varchar(255) NOT NULL,
  `USER_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbuser`
--

INSERT INTO `dbuser` (`USER_ID`, `USER_NAME`, `USER_USERNAME`, `USER_PASSWORD`) VALUES
(4, 'Muditha Mewan Senarathne', 'mudithabraintec', '9b5e6040a00c7858017ccc697dd4482bd6d3ee26'),
(5, 'Muditha Mewan', 'muditha', 'fb38c8c608161dcfaf22145a47302016a05efd13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbcourse`
--
ALTER TABLE `dbcourse`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `dbevent`
--
ALTER TABLE `dbevent`
  ADD PRIMARY KEY (`EVENT_ID`);

--
-- Indexes for table `dbmessage`
--
ALTER TABLE `dbmessage`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `dbregister`
--
ALTER TABLE `dbregister`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `dbteacher`
--
ALTER TABLE `dbteacher`
  ADD PRIMARY KEY (`TEACHER_ID`);

--
-- Indexes for table `dbuser`
--
ALTER TABLE `dbuser`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbcourse`
--
ALTER TABLE `dbcourse`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dbevent`
--
ALTER TABLE `dbevent`
  MODIFY `EVENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dbmessage`
--
ALTER TABLE `dbmessage`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dbregister`
--
ALTER TABLE `dbregister`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `dbteacher`
--
ALTER TABLE `dbteacher`
  MODIFY `TEACHER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dbuser`
--
ALTER TABLE `dbuser`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
