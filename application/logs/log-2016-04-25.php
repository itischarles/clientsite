<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-04-25 10:33:51 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 10:34:00 --> 404 Page Not Found: Investment/index
ERROR - 2016-04-25 10:34:11 --> 404 Page Not Found: Investment_option/index
ERROR - 2016-04-25 10:34:45 --> 404 Page Not Found: Investment/index
ERROR - 2016-04-25 10:35:45 --> 404 Page Not Found: Investment_options/index
ERROR - 2016-04-25 10:35:52 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 10:35:55 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 10:38:21 --> 404 Page Not Found: Investment/index
ERROR - 2016-04-25 10:38:53 --> 404 Page Not Found: Investments/index
ERROR - 2016-04-25 10:39:22 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 10:39:25 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 10:40:38 --> 404 Page Not Found: Users/application
ERROR - 2016-04-25 10:40:41 --> 404 Page Not Found: Users/application
ERROR - 2016-04-25 10:41:02 --> 404 Page Not Found: Users/application
ERROR - 2016-04-25 10:42:34 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:01:28 --> 404 Page Not Found: Invesments/index
ERROR - 2016-04-25 11:01:31 --> 404 Page Not Found: Invesmen/index
ERROR - 2016-04-25 11:01:34 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:03:41 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:03:44 --> 404 Page Not Found: Invesments/index
ERROR - 2016-04-25 11:06:25 --> 404 Page Not Found: Invesments/index
ERROR - 2016-04-25 11:06:29 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:06:31 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:06:32 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:06:58 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:06:59 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 11:07:13 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 11:07:36 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 11:07:37 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 11:08:39 --> 404 Page Not Found: Users/investment_options
ERROR - 2016-04-25 07:15:17 --> Query error: Unknown column 'role_roleID' in 'field list' - Invalid query: INSERT INTO `users` (`userFirstName`, `userLastName`, `userUsername`, `userIsActive`, `userDateCreated`, `role_roleID`, `userReference`, `userBaseUrl`, `userPwordHash`) VALUES ('admin', 'admin', 'charles@example.co.uk', 1, '2016-04-25', 1, 'abc', 'b38e5ff5f816ac6e4169bce9314b2996', '$2y$10$qgqLsUdAMV5aVjFnOBhH6uXpj9r1JCmUW1sYsx5PaojEGv7w1WGju')
ERROR - 2016-04-25 07:17:27 --> Query error: Unknown column 'userReference' in 'field list' - Invalid query: INSERT INTO `users` (`userFirstName`, `userLastName`, `userUsername`, `userIsActive`, `userDateCreated`, `userReference`, `userBaseUrl`, `userPwordHash`) VALUES ('admin', 'admin', 'charles@example.co.uk', 1, '2016-04-25', 'abc', 'd3aeec875c479e55d1cdeea161842ec6', '$2y$10$lhjhyd.yi7ZjnG2TcTqQw.GlT2eNyq1a9.WX6BJm5rjHPHvkKOd5m')
ERROR - 2016-04-25 07:17:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`users`, CONSTRAINT `fk_users_userGroup1` FOREIGN KEY (`groupID`) REFERENCES `user_group` (`groupID`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `users` (`userFirstName`, `userLastName`, `userUsername`, `userIsActive`, `userDateCreated`, `userBaseUrl`, `userPwordHash`) VALUES ('admin', 'admin', 'charles@example.co.uk', 1, '2016-04-25', 'df4fe8a8bcd5c95cdb640aa9793bb32b', '$2y$10$SBWJ/eDXcCXQ4IzhzvBBqOrTdiPv4SVPEpSrsw3.BLSrUdDM1BJiy')
ERROR - 2016-04-25 07:27:31 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/controllers/Auth.php 35
ERROR - 2016-04-25 07:27:31 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/models/User_model.php 170
ERROR - 2016-04-25 07:27:31 --> Query error: Unknown column 'document.users_userID' in 'on clause' - Invalid query: SELECT *
FROM `document`
LEFT JOIN `users` ON `users`.`userID` = `document`.`users_userID`
WHERE `users`.`userBaseUrl` = 'asdf'
ORDER BY `document`.`docDateAdded` DESC
ERROR - 2016-04-25 07:28:47 --> Query error: Unknown column 'document.users_userID' in 'on clause' - Invalid query: SELECT *
FROM `document`
LEFT JOIN `users` ON `users`.`userID` = `document`.`users_userID`
WHERE `users`.`userBaseUrl` = 'asdf'
ORDER BY `document`.`docDateAdded` DESC
ERROR - 2016-04-25 07:33:10 --> Query error: Unknown column 'document.users_userID' in 'on clause' - Invalid query: SELECT *
FROM `document`
LEFT JOIN `users` ON `users`.`userID` = `document`.`users_userID`
WHERE `users`.`userBaseUrl` = 'asdf'
ORDER BY `document`.`docDateAdded` DESC
ERROR - 2016-04-25 07:33:12 --> Query error: Unknown column 'document.users_userID' in 'on clause' - Invalid query: SELECT *
FROM `document`
LEFT JOIN `users` ON `users`.`userID` = `document`.`users_userID`
WHERE `users`.`userBaseUrl` = 'asdf'
ORDER BY `document`.`docDateAdded` DESC
ERROR - 2016-04-25 07:34:42 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 27
ERROR - 2016-04-25 07:34:42 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 42
ERROR - 2016-04-25 07:34:42 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 42
ERROR - 2016-04-25 07:40:26 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 28
ERROR - 2016-04-25 07:40:26 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 43
ERROR - 2016-04-25 07:40:26 --> Severity: Notice --> Undefined property: stdClass::$role_roleID /var/www/html/clientsite/application/views/includes/main_nav.php 43
ERROR - 2016-04-25 12:22:42 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 12:22:53 --> 404 Page Not Found: Invesment/index
ERROR - 2016-04-25 13:52:33 --> 404 Page Not Found: Js/bootstrap.min.js
ERROR - 2016-04-25 13:52:33 --> 404 Page Not Found: Js/bootstrap.min.js
ERROR - 2016-04-25 13:53:01 --> 404 Page Not Found: Css/bootstrap.min.css
ERROR - 2016-04-25 13:53:01 --> 404 Page Not Found: Js/bootstrap.min.js
ERROR - 2016-04-25 13:53:01 --> 404 Page Not Found: Js/bootstrap.min.js
ERROR - 2016-04-25 13:53:01 --> 404 Page Not Found: Css/bootstrap.min.css
ERROR - 2016-04-25 14:06:46 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:06:46 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:06:59 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:06:59 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:07:19 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:07:19 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:08:14 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:08:15 --> 404 Page Not Found: Third_party/jquery-ui-1.11.4.custom
ERROR - 2016-04-25 14:20:18 --> 404 Page Not Found: Third_party/bootstrap-datetimepicker.min.js
ERROR - 2016-04-25 14:20:19 --> 404 Page Not Found: Third_party/bootstrap-datetimepicker.min.js
ERROR - 2016-04-25 16:33:38 --> 404 Page Not Found: Contributions/index
ERROR - 2016-04-25 16:33:42 --> 404 Page Not Found: Contribution/index
ERROR - 2016-04-25 16:34:37 --> 404 Page Not Found: Contribution/index
ERROR - 2016-04-25 16:34:38 --> 404 Page Not Found: Contribution/index
ERROR - 2016-04-25 18:28:37 --> 404 Page Not Found: Images/debit_icons.gif
ERROR - 2016-04-25 18:29:31 --> 404 Page Not Found: Images/debit_icons.gif
ERROR - 2016-04-25 18:29:33 --> 404 Page Not Found: Images/debit_icons.gif
