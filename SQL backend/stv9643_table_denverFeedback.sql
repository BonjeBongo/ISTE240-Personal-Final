
-- --------------------------------------------------------

--
-- Table structure for table `denverFeedback`
--

CREATE TABLE `denverFeedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `fName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `numPeople` int(11) NOT NULL,
  `dateOfVisit` date NOT NULL,
  `favouriteLocation` text COLLATE utf8_unicode_ci NOT NULL,
  `rVisit` tinyint(4) NOT NULL,
  `rWebsite` tinyint(4) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `denverFeedback`
--

INSERT INTO `denverFeedback` (`id`, `fName`, `lName`, `numPeople`, `dateOfVisit`, `favouriteLocation`, `rVisit`, `rWebsite`, `comments`) VALUES
(3, 'Andrii', 'Vladyka', 2, '0013-02-22', 'Red Rocks Amphitheatre', 8, 10, 'I loved visiting it with my family'),
(6, 'Jane', 'Percy', 5, '2017-03-21', 'Botanic Gardens', 10, 10, 'Denver was an amazing experience.'),
(7, 'James', 'Habermas', 5, '2018-11-01', 'Botanic Gardens', 9, 10, 'Denver fans love football!!');
