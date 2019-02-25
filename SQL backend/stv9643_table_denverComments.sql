
-- --------------------------------------------------------

--
-- Table structure for table `denverComments`
--

CREATE TABLE `denverComments` (
  `id` int(100) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `denverComments`
--

INSERT INTO `denverComments` (`id`, `name`, `comment`, `date`) VALUES
(1, 'Sem', 'Denver was an awesome experience.', '2018-11-23 01:37:20'),
(9, 'Jim Habermas', 'Lets go Michigan', '2018-11-23 13:08:44'),
(10, 'James Habermas', 'Denver Loves Football', '2018-11-24 18:37:54'),
(32, 'Karen Salley', 'Denver is a short flight to go skiing!', '2018-11-25 08:39:41');
