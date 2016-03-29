<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-02-26 12:16:45 --> 404 Page Not Found: Document/index
ERROR - 2016-02-26 12:18:55 --> 404 Page Not Found: Document/index
ERROR - 2016-02-26 12:34:15 --> 404 Page Not Found: Document/index
ERROR - 2016-02-26 12:34:28 --> Query error: No database selected - Invalid query: SELECT *
FROM `users`
WHERE `client_id` >0
AND `user_id` =0
AND `deleted` =0
ERROR - 2016-02-26 12:41:03 --> Query error: No database selected - Invalid query: SELECT *
FROM `users`
WHERE `userID` =0
AND `userIsActive` = 1
ERROR - 2016-02-26 12:41:58 --> 404 Page Not Found: Login/index
ERROR - 2016-02-26 12:43:03 --> 404 Page Not Found: Login/index
ERROR - 2016-02-26 12:46:47 --> Query error: Unknown column 'uname' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `uname` = 'charles@egbltd.co.uk'
AND `pword_hash` = '896697040a57e46677f83bd15b0f79e7'
AND `deleted` =0
 LIMIT 1
ERROR - 2016-02-26 12:49:00 --> Query error: Unknown column 'user_username' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `user_username` = 'charles@egbltd.co.uk'
AND `userIsActive` = 1
 LIMIT 1
ERROR - 2016-02-26 12:49:32 --> Query error: Unknown column 'userUsername' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userUsername` = 'charles@egbltd.co.uk'
AND `userIsActive` = 1
 LIMIT 1
ERROR - 2016-02-26 13:53:29 --> Query error: Unknown column 'roles_roleID' in 'field list' - Invalid query: INSERT INTO `users` (`userFirstName`, `userLastName`, `userUsername`, `userIsActive`, `userDateCreated`, `roles_roleID`, `userBaseUrl`, `userPwordHash`) VALUES ('admin', 'admin', 'charles@egbltd.co.uk', 1, '2016-02-26', 1, 'c5f7aedc2ba38ce747ff8fe03a274f78', '$2y$10$V.nzvNhDn0at3xz6xuQqoeGHa40BWPy8pdCmCr/MlghX5YfKi/bsG')
ERROR - 2016-02-26 13:54:06 --> Severity: Error --> Call to undefined method User_Model::authorize() /opt/lampp/htdocs/im-client-site/v2/application/core/MY_Controller.php 22
ERROR - 2016-02-26 13:56:11 --> Query error: Unknown column 'user_isActive' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userID` =0
AND `user_isActive` = 1
ERROR - 2016-02-26 14:05:51 --> Query error: Unknown column 'userUname' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userUname` = 'charles@egbltd.co.uk'
AND `userIsActive` = 1
 LIMIT 1
ERROR - 2016-02-26 14:06:23 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::inser() /opt/lampp/htdocs/im-client-site/v2/application/models/User_model.php 268
ERROR - 2016-02-26 14:06:47 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::inser() /opt/lampp/htdocs/im-client-site/v2/application/models/User_model.php 298
ERROR - 2016-02-26 14:07:00 --> Query error: Unknown column 'users_userID' in 'where clause' - Invalid query: UPDATE `users` SET `userIsActive` = 0
WHERE `users_userID` = '6850'
ERROR - 2016-02-26 14:13:43 --> Query error: Unknown column 'loginSuccessfulI' in 'where clause' - Invalid query: SELECT *
FROM `audit_logins`
WHERE `users_userID` = '6852'
AND `timestamp` between '\'2016-02-26 14:13:43\' and \'2016-02-26 14:23:43\''
AND `loginSuccessfulI` =0
ERROR - 2016-02-26 14:17:32 --> Severity: Error --> Call to undefined method User_Model::authorize() /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 31
ERROR - 2016-02-26 14:18:47 --> Severity: Notice --> Undefined variable: userDetails /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 35
ERROR - 2016-02-26 14:18:47 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 35
ERROR - 2016-02-26 14:18:47 --> Severity: Notice --> Undefined variable: userDetails /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 39
ERROR - 2016-02-26 14:18:47 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 39
ERROR - 2016-02-26 14:18:47 --> 404 Page Not Found: Reviews/index
