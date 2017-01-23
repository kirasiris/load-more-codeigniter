-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2017 at 04:47 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Fika Ridaul Maulayya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `thumbnail` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `slug`, `thumbnail`, `isi_berita`) VALUES
(1, 'Cara membuat Pagination dan Upload Gambar di CodeIgniter ', 'cara-membuat-pagination-dan-upload-gambar-di-codeigniter', '399d7706644cbfea4e53e30206d803d5.jpg', '<p>Test Berita pertama</p>\r\n'),
(2, 'Cara Membuat Hello World di CodeIgniter ', 'cara-membuat-hello-world-di-codeigniter', '4f26ff52f5f546c78214bef5557d719c.jpg', '<p>Test Berita Kedua</p>\r\n'),
(3, 'Berkenalan Dengan Pyton Programming', 'berkenalan-dengan-pyton-programming', '6a77974de4f48c9cd72aaf9f73c30d16.png', '<p>Berkenalan Dengan Pyton Programming</p>\r\n'),
(4, 'Install Laravel Via Composer - SMK TI Annajiyah', 'install-laravel-via-composer-smk-ti-annajiyah', 'f1dc577d5ced626d610fe4b638fe32ec.jpg', '<p>Install Laravel Via Composer - SMK TI Annajiyah</p>\r\n'),
(5, 'Hal Pertama yang Perlu di Perhatikan Ketika Belajar Ruby on rails', 'hal-pertama-yang-perlu-di-perhatikan-ketika-belajar-ruby-on-rails', '8fc178f306e45404e6d928e260662e47.jpg', '<p>Hal Pertama yang Perlu di Perhatikan Ketika Belajar Ruby on rails</p>\r\n'),
(6, 'Install CodeIgniter Via Composer Ubuntu', 'install-codeigniter-via-composer-ubuntu', '441435393e4d20fd81d728293ad73875.jpg', '<p>Install CodeIgniter Via Composer Ubuntu</p>\r\n'),
(7, 'Penerapan Micro Pada Shot Potograpy', 'penerapan-micro-pada-shot-potograpy', '0587665e9bef84b23c0d2241ffdb660e.jpg', '<p>Penerapan Micro Pada Shot Potograpy</p>\r\n'),
(8, 'Ending Film naruto Mengecewakan Para Netizen', 'ending-film-naruto-mengecewakan-para-netizen', '19c79a35797f5c9347bd2e75bf977744.jpg', '<p>I&#39;m unable to retrieve similar post data from db with&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter_(framework)\">codeigniter</a>. In my&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blog\">blog</a>, I have a tags field which is keeping data like &#39;php,mysql,mongo,java,jquery&#39;<br />\r\nI just try to get similar post which is related with current posts tags. But im not getting expected result. and the problem is in my query. Its show only three post and that is 1st, last, and number 3rd one.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&#39;m unable to retrieve similar post data from db with&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter_(framework)\">codeigniter</a>. In my&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blog\">blog</a>, I have a tags field which is keeping data like &#39;php,mysql,mongo,java,jquery&#39;<br />\r\nI just try to get similar post which is related with current posts tags. But im not getting expected result. and the problem is in my query. Its show only three post and that is 1st, last, and number 3rd one.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&#39;m unable to retrieve similar post data from db with&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter_(framework)\">codeigniter</a>. In my&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blog\">blog</a>, I have a tags field which is keeping data like &#39;php,mysql,mongo,java,jquery&#39;<br />\r\nI just try to get similar post which is related with current posts tags. But im not getting expected result. and the problem is in my query. Its show only three post and that is 1st, last, and number 3rd one.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&#39;m unable to retrieve similar post data from db with&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter_(framework)\">codeigniter</a>. In my&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blog\">blog</a>, I have a tags field which is keeping data like &#39;php,mysql,mongo,java,jquery&#39;<br />\r\nI just try to get similar post which is related with current posts tags. But im not getting expected result. and the problem is in my query. Its show only three post and that is 1st, last, and number 3rd one.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&#39;m unable to retrieve similar post data from db with&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter_(framework)\">codeigniter</a>. In my&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blog\">blog</a>, I have a tags field which is keeping data like &#39;php,mysql,mongo,java,jquery&#39;<br />\r\nI just try to get similar post which is related with current posts tags. But im not getting expected result. and the problem is in my query. Its show only three post and that is 1st, last, and number 3rd one.</p>\r\n'),
(9, 'Anime Jepang Baru Telah Resmi Dirilis Agustus Mendatang', 'anime-jepang-baru-telah-resmi-dirilis-agustus-mendatang', '083eb5c406932bedede56c6285d4e72f.jpg', '<p>Anime Jepang Baru Telah Resmi Dirilis Agustus Mendatang</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2g3183in9qorfaoog8gm541cr69biumt', '::1', 1484716708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343731363639383b),
('2nlakp97odo7efeqq479lo3kr9ciddrc', '::1', 1484746433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343734363230313b69645f61646d696e7c733a313a2231223b757365726e616d657c733a353a2261646d696e223b70617373776f72647c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6e616d617c733a32303a2246696b612052696461756c204d61756c61797961223b),
('6mltobb2ehqapkp29uu6lclasblj1esu', '::1', 1484788534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343738383533343b),
('7vrg1ckiaeuua799ekavp6qtohfvakb0', '::1', 1484662174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343636323137333b69645f61646d696e7c733a313a2231223b757365726e616d657c733a353a2261646d696e223b70617373776f72647c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6e616d617c733a32303a2246696b612052696461756c204d61756c61797961223b),
('9s8tsj1gst2gd645dgeje1t8ag911qp2', '::1', 1484803010, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343830333031303b),
('dibqfq4j51msk0d872rbt4ee32cl8ebh', '::1', 1484706149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343730363039383b69645f61646d696e7c733a313a2231223b757365726e616d657c733a353a2261646d696e223b70617373776f72647c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6e616d617c733a32303a2246696b612052696461756c204d61756c61797961223b),
('e9ofj56ajrmts8egiajf0m6bhcjjp92a', '::1', 1484802928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343830323932383b),
('ej1of7uc2cm612r5vi0is13do9unfgt4', '::1', 1484802857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343830323835373b),
('qlofbc9qdirn56pj6ve8c3gbdej17ai0', '::1', 1484797594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343739373538323b69645f61646d696e7c733a313a2231223b757365726e616d657c733a353a2261646d696e223b70617373776f72647c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6e616d617c733a32303a2246696b612052696461756c204d61756c61797961223b),
('r541e3mfh4lf39dldi4o7stn7q6l4vl6', '::1', 1484802921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438343830323932313b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
