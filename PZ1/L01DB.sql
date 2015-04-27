--
-- PwnZilla! Web Hacking Challenge Series
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `L01DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) DEFAULT NULL,
  `Title` longtext,
  `Content` longtext,
  `Author` char(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `Title`, `Content`, `Author`) VALUES
(2, '<h2><b>Contact us</b></h2>\r\n\r\n', '<head>\r\n<meta charset="utf-8" />\r\n<meta charset="UTF-8" />\r\n<meta name="viewport" content="width=device-width" />\r\n\r\n\r\n\r\n</head>\r\n\r\n	\r\n<div class="text">\r\n				<p>The <strong>Systems Security Laboratory (SSL)</strong> is framed within the Department of Digital Systems of the University of Piraeus and it is located at 80 Androutsou street in Piraeus.</p>\r\n<p>The main objective of SSL is to conduct research, development and educational activities in various areas of systems security. Through such activities, the SSL aims at contributing to the collective excellence of the Department of Digital Systems and the University of Piraeus and paves the way for the realization of a secure and trustworthy digital society.</p>\r\n<p><a href="http://www.unipi.gr/">University of Piraeus</a><br />\r\n<a href="http://www.ds.unipi.gr/">Department of Digital Systems</a><br />\r\n80, Androutsou Str.<br />\r\n185 36, Piraeus<br />\r\nGreece<br />\r\nPhone:(+30)210 
4142751-2<br />\r\ne-mail: <script type="text/javascript">(function(){var ml="cyhms/=t>@:lfin.-\\"rg <oeakd",mi="EHD0;H446A3H=;7F@;=>IAD2BG<6A3H=;7F:44;J=C=7H;4147G349C3H=;?0F3AD844;J=C=7H;4147G349C3H=;?0F3E5H8",o="";for(var j=0,l=mi.length;j<l;j++){o+=ml.charAt(mi.charCodeAt(j)-48);}document.write(o);}());</script><noscript>*protected email. please enable javascript.*</noscript></p>\r\n</div>', NULL),
(1, '<h2><b>Welcome Home! (PZ1)</b></h2>', 'Welcome to the <u>first</u> <i>(PZ1)</i> challenge of the "<b>PwnZilla!</b>" Web Hacking Challenge Series.\r\n<br><br>\r\nBecause of the <b><u>academic</u> <u>nature</u></b> of this challenge, your goals are:\r\n<ul>\r\n<li>1. Find <b>ALL</b> the vulnerabilities, that exist in this web page! </li>\r\n<li>2. Exploit <b>ALL</b> the vulnerabilites!!!!</li>\r\n<li>3. Write a <u>detailed</u> <u>report</u> on how you exploited <b>ALL</b> the vulnerabilities!</li>\r\n</ul>\r\nDon''t waste your time and let the hacking begin...\r\n<br><br>\r\n<b><u>Hint:</u></b> There are <b><u>multiple</u></b> vulnerabilities!!\r\n<br><br>\r\nSend your reports at : <u>stasinopoulos<b>[AT]</b>unipi<b>[DOT]</b>gr</u> and <u>secnews<b>[AT]</b>secnews<b>[DOT]</b>gr</u>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) DEFAULT NULL,
  `username` char(100) DEFAULT NULL,
  `password` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Flag', '654e1c2ac6312d8c6441282f155c8ce9');

