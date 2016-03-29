-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 02:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `im_client_site`
--
CREATE DATABASE IF NOT EXISTS `im_client_site` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `im_client_site`;

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

DROP TABLE IF EXISTS `active_users`;
CREATE TABLE IF NOT EXISTS `active_users` (
`active_users_id` int(11) NOT NULL,
  `last_active` datetime DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `ip_address` varchar(16) DEFAULT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3199 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `active_users`
--

TRUNCATE TABLE `active_users`;
-- --------------------------------------------------------

--
-- Table structure for table `advisers`
--

DROP TABLE IF EXISTS `advisers`;
CREATE TABLE IF NOT EXISTS `advisers` (
  `adviserID` int(11) NOT NULL,
  `users_userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `advisers`
--

TRUNCATE TABLE `advisers`;
-- --------------------------------------------------------

--
-- Table structure for table `audit_logins`
--

DROP TABLE IF EXISTS `audit_logins`;
CREATE TABLE IF NOT EXISTS `audit_logins` (
`auditLoginID` int(11) NOT NULL,
  `sourceIP` varchar(16) NOT NULL,
  `loginSuccessful` int(11) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `users_userID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `audit_logins`
--

TRUNCATE TABLE `audit_logins`;
--
-- Dumping data for table `audit_logins`
--

INSERT IGNORE INTO `audit_logins` (`auditLoginID`, `sourceIP`, `loginSuccessful`, `timestamp`, `users_userID`) VALUES
(6, '127.0.0.1', 1, '2016-03-29 13:01:11', 6854),
(7, '127.0.0.1', 1, '2016-03-29 13:13:19', 6855),
(8, '127.0.0.1', 1, '2016-03-29 13:13:40', 6854);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
`clientID` int(11) NOT NULL,
  `users_userID` int(10) NOT NULL,
  `advisers_adviserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `clients`
--

TRUNCATE TABLE `clients`;
-- --------------------------------------------------------

--
-- Table structure for table `docs_view_history`
--

DROP TABLE IF EXISTS `docs_view_history`;
CREATE TABLE IF NOT EXISTS `docs_view_history` (
`docsViewHistoryID` int(11) NOT NULL,
  `docViewHistoryDate` datetime DEFAULT NULL,
  `sourceIP` varchar(45) DEFAULT NULL,
  `userAgent` varchar(255) DEFAULT NULL,
  `document_documentID` int(11) NOT NULL,
  `viewedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `docs_view_history`
--

TRUNCATE TABLE `docs_view_history`;
-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
`documentID` int(11) NOT NULL,
  `docName` varchar(155) NOT NULL,
  `docPath` varchar(255) NOT NULL,
  `docType` varchar(45) NOT NULL,
  `docSize` decimal(10,2) NOT NULL DEFAULT '0.00',
  `docDateAdded` datetime DEFAULT NULL,
  `docIsViewed` datetime DEFAULT NULL,
  `users_userID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78449 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `document`
--

TRUNCATE TABLE `document`;
--
-- Dumping data for table `document`
--

INSERT IGNORE INTO `document` (`documentID`, `docName`, `docPath`, `docType`, `docSize`, `docDateAdded`, `docIsViewed`, `users_userID`) VALUES
(78448, 'Blank Inc', 'client_docs/6855/0d51e45f7c601deb0f4c9875f89018c1.pdf', '', '6.29', '2016-03-31 00:00:00', NULL, 6855);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
`emailMessageID` int(10) NOT NULL,
  `emailMessageFrom` varchar(50) DEFAULT NULL,
  `emailMessageDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `emailMessageSubject` varchar(20) DEFAULT NULL,
  `emailMessageBody` mediumtext,
  `emailMessageCC` tinytext,
  `emailMessageTo` tinytext,
  `emailMessageViewed` datetime DEFAULT NULL,
  `users_userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `email`
--

TRUNCATE TABLE `email`;
-- --------------------------------------------------------

--
-- Table structure for table `glossary`
--

DROP TABLE IF EXISTS `glossary`;
CREATE TABLE IF NOT EXISTS `glossary` (
`idglossary` int(11) NOT NULL,
  `term` varchar(45) NOT NULL,
  `definition` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `glossary`
--

TRUNCATE TABLE `glossary`;
-- --------------------------------------------------------

--
-- Table structure for table `login_blacklist`
--

DROP TABLE IF EXISTS `login_blacklist`;
CREATE TABLE IF NOT EXISTS `login_blacklist` (
`loginBlacklistID` int(11) NOT NULL,
  `ipaddress` varchar(16) NOT NULL,
  `lastAttempt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blackIsArchive` int(11) NOT NULL DEFAULT '0' COMMENT 'achive the black for record purpose\nset to 1 if achive ',
  `users_userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `login_blacklist`
--

TRUNCATE TABLE `login_blacklist`;
-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
`messageID` int(10) NOT NULL,
  `messageDate` datetime DEFAULT NULL,
  `messageBody` mediumtext,
  `messageViewedDate` datetime DEFAULT NULL,
  `users_userID` int(10) NOT NULL,
  `messageSentOrReceived` enum('sent','received') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
`roleID` int(11) NOT NULL,
  `roleName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `role`
--

TRUNCATE TABLE `role`;
-- --------------------------------------------------------

--
-- Table structure for table `terms_definitions`
--

DROP TABLE IF EXISTS `terms_definitions`;
CREATE TABLE IF NOT EXISTS `terms_definitions` (
`terms_definitionID` int(11) NOT NULL,
  `terms` varchar(155) NOT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `terms_definitions`
--

TRUNCATE TABLE `terms_definitions`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`userID` int(10) NOT NULL,
  `role_roleID` int(11) NOT NULL DEFAULT '3',
  `userReference` varchar(45) DEFAULT NULL,
  `userIsActive` int(1) NOT NULL DEFAULT '0',
  `userTtitle` varchar(45) DEFAULT NULL,
  `userFirstName` varchar(45) DEFAULT NULL,
  `userLastName` varchar(45) DEFAULT NULL,
  `userDOB` date DEFAULT NULL,
  `userAddressLine1` varchar(120) DEFAULT NULL,
  `userAddressLine2` varchar(120) DEFAULT NULL,
  `userPostcode` varchar(10) DEFAULT NULL,
  `userCounty` varchar(120) DEFAULT NULL,
  `userTown` varchar(120) DEFAULT NULL,
  `userTel` varchar(120) DEFAULT NULL,
  `userMobile` varchar(120) DEFAULT NULL,
  `userEmail` varchar(50) DEFAULT NULL,
  `userNinum` varchar(45) DEFAULT NULL,
  `userUsername` varchar(45) DEFAULT NULL,
  `userPwordHash` varchar(65) DEFAULT NULL,
  `userPasswordChanged` int(1) NOT NULL DEFAULT '0',
  `userRetirementAge` varchar(10) DEFAULT NULL,
  `userBaseUrl` varchar(85) NOT NULL COMMENT 'unique code to identify client',
  `userDateCreated` date DEFAULT NULL,
  `API_KEY` varchar(65) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6856 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT IGNORE INTO `users` (`userID`, `role_roleID`, `userReference`, `userIsActive`, `userTtitle`, `userFirstName`, `userLastName`, `userDOB`, `userAddressLine1`, `userAddressLine2`, `userPostcode`, `userCounty`, `userTown`, `userTel`, `userMobile`, `userEmail`, `userNinum`, `userUsername`, `userPwordHash`, `userPasswordChanged`, `userRetirementAge`, `userBaseUrl`, `userDateCreated`, `API_KEY`) VALUES
(6854, 1, 'abc', 1, NULL, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'charles@example.co.uk', '$2y$10$p5LRSltzdWhzrDWI6A1cuu33WjEP2pzirVrxETc5VAjgwKru4lpLi', 0, NULL, '186fb23a33995d91ce3c2212189178c8', '2016-03-29', NULL),
(6855, 3, '123', 1, NULL, 'James', 'John', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'client@example.co.uk', '$2y$10$thDmKp0.nNg7DvLkKXmvQuxoYi39fZ8g94xZYKz8QvLVgDCb96GZa', 0, NULL, '0415740eaa4d9decbc8da001d3fd805f', '2016-03-29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
 ADD PRIMARY KEY (`active_users_id`), ADD KEY `index2` (`active_users_id`,`last_active`,`full_name`,`ip_address`), ADD KEY `fk_active_users_users1_idx` (`user_id`);

--
-- Indexes for table `advisers`
--
ALTER TABLE `advisers`
 ADD PRIMARY KEY (`adviserID`), ADD KEY `fk_advisers_users1_idx` (`users_userID`);

--
-- Indexes for table `audit_logins`
--
ALTER TABLE `audit_logins`
 ADD PRIMARY KEY (`auditLoginID`), ADD KEY `fk_audit_logins_users1_idx` (`users_userID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`clientID`), ADD KEY `fk_client_users1_idx` (`users_userID`), ADD KEY `fk_clients_advisers1_idx` (`advisers_adviserID`);

--
-- Indexes for table `docs_view_history`
--
ALTER TABLE `docs_view_history`
 ADD PRIMARY KEY (`docsViewHistoryID`), ADD KEY `fk_docs_view_history_document1_idx` (`document_documentID`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
 ADD PRIMARY KEY (`documentID`), ADD KEY `fk_document_users1_idx` (`users_userID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`emailMessageID`), ADD KEY `fk_email_users1_idx` (`users_userID`);

--
-- Indexes for table `glossary`
--
ALTER TABLE `glossary`
 ADD PRIMARY KEY (`idglossary`);

--
-- Indexes for table `login_blacklist`
--
ALTER TABLE `login_blacklist`
 ADD PRIMARY KEY (`loginBlacklistID`), ADD KEY `fk_login_blacklist_users1_idx` (`users_userID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`messageID`), ADD KEY `fk_email_users1_idx` (`users_userID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `terms_definitions`
--
ALTER TABLE `terms_definitions`
 ADD PRIMARY KEY (`terms_definitionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userID`), ADD KEY `fk_users_role1_idx` (`role_roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_users`
--
ALTER TABLE `active_users`
MODIFY `active_users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3199;
--
-- AUTO_INCREMENT for table `audit_logins`
--
ALTER TABLE `audit_logins`
MODIFY `auditLoginID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `docs_view_history`
--
ALTER TABLE `docs_view_history`
MODIFY `docsViewHistoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
MODIFY `documentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78449;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `emailMessageID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `glossary`
--
ALTER TABLE `glossary`
MODIFY `idglossary` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_blacklist`
--
ALTER TABLE `login_blacklist`
MODIFY `loginBlacklistID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `messageID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terms_definitions`
--
ALTER TABLE `terms_definitions`
MODIFY `terms_definitionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6856;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
