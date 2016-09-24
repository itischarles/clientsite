<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-03-01 10:56:46 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/im-client-site/v2/application/core/MY_Controller.php 66
ERROR - 2016-03-01 10:56:46 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/im-client-site/v2/application/core/MY_Controller.php 66
ERROR - 2016-03-01 10:58:42 --> Severity: Error --> Call to private method MY_Controller::getCurrentUserID() from context 'Auth' /opt/lampp/htdocs/im-client-site/v2/application/controllers/Auth.php 32
ERROR - 2016-03-01 10:59:42 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 10:59:42 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/views/includes/main_nav.php 16
ERROR - 2016-03-01 10:59:42 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/main_nav.php 30
ERROR - 2016-03-01 11:00:29 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/views/includes/main_nav.php 16
ERROR - 2016-03-01 11:00:29 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/main_nav.php 30
ERROR - 2016-03-01 11:02:52 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:03:10 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:03:11 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:05:30 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:05:34 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:10:21 --> Query error: Unknown column 'userUsernameR' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userUsernameR` = 'charles2@egbltd.co.uk'
AND `userIsActive` = 1
 LIMIT 1
ERROR - 2016-03-01 11:11:35 --> Query error: Unknown column 'userUsernameR' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userUsernameR` = 'charles2@egbltd.co.uk'
AND `userIsActive` = 1
 LIMIT 1
ERROR - 2016-03-01 11:13:09 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 33
ERROR - 2016-03-01 11:23:00 --> 404 Page Not Found: Reviews/search
ERROR - 2016-03-01 11:23:18 --> Query error: Unknown column 'user_id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userIsActive` = 1
AND (`user_id` =0 OR `fname` like '%' OR `lname` like '%' OR `client_id` =0)
GROUP BY `userID`
ERROR - 2016-03-01 11:53:49 --> Query error: Unknown column 'user_id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `userIsActive` = 1
AND (`user_id` =0 OR `fname` like '%' OR `lname` like '%' OR `client_id` =0)
GROUP BY `userID`
ERROR - 2016-03-01 12:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'users.userReference like 'charles%' )' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `users`
WHERE (`users`.`userFirstName` like 'charles%' OR `users`.`userLastName` like 'charles%' users.userReference like 'charles%' )
ERROR - 2016-03-01 12:15:55 --> Query error: Unknown column 'users.userReference' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `users`
WHERE (`users`.`userFirstName` like 'charles%' OR `users`.`userLastName` like 'charles%' OR `users`.`userReference` like 'charles%' )
ERROR - 2016-03-01 12:16:40 --> Query error: Unknown column 'users.userReference' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `users`
WHERE (`users`.`userFirstName` like 'charles%' OR `users`.`userLastName` like 'charles%' OR `users`.`userReference` like 'charles%' )
ERROR - 2016-03-01 12:18:31 --> Query error: Unknown column 'users.userReferenceR' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `users`
WHERE (`users`.`userFirstName` like 'charles%' OR `users`.`userLastName` like 'charles%' OR `users`.`userReferenceR` like 'charles%' )
ERROR - 2016-03-01 12:21:06 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/admin/search_users.php 65
ERROR - 2016-03-01 12:21:06 --> Severity: Notice --> Undefined property: stdClass::$fname /opt/lampp/htdocs/im-client-site/v2/application/views/admin/search_users.php 65
ERROR - 2016-03-01 12:21:06 --> Severity: Notice --> Undefined property: stdClass::$lname /opt/lampp/htdocs/im-client-site/v2/application/views/admin/search_users.php 65
ERROR - 2016-03-01 12:21:06 --> Severity: Notice --> Undefined property: stdClass::$client_id /opt/lampp/htdocs/im-client-site/v2/application/views/admin/search_users.php 68
ERROR - 2016-03-01 12:21:06 --> Severity: Notice --> Undefined property: stdClass::$deleted /opt/lampp/htdocs/im-client-site/v2/application/views/admin/search_users.php 69
ERROR - 2016-03-01 12:24:49 --> Severity: Notice --> Undefined variable: ReviewDetails /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 20
ERROR - 2016-03-01 12:24:49 --> Severity: Notice --> Trying to get property of non-object /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 20
ERROR - 2016-03-01 12:24:49 --> Severity: Error --> Call to undefined function getReviewFinishedDateAndStatus() /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 22
ERROR - 2016-03-01 12:27:12 --> Severity: Notice --> Undefined property: stdClass::$title_name /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 15
ERROR - 2016-03-01 12:27:12 --> Severity: Notice --> Undefined property: stdClass::$fname /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 15
ERROR - 2016-03-01 12:27:12 --> Severity: Notice --> Undefined property: stdClass::$lname /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 15
ERROR - 2016-03-01 12:27:12 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/client-sidebar.php 8
ERROR - 2016-03-01 12:27:45 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/client-sidebar.php 8
ERROR - 2016-03-01 12:28:50 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/client-sidebar.php 8
ERROR - 2016-03-01 12:30:17 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/includes/client-sidebar.php 8
ERROR - 2016-03-01 12:43:16 --> 404 Page Not Found: User/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 12:53:46 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 12:53:47 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 12:53:48 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 12:53:53 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 12:54:00 --> 404 Page Not Found: /index
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$title_name /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 18
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$fname /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 18
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$lname /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 18
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$tel /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 29
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$mob /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 31
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$email /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 32
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$add1 /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 41
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$add2 /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 42
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$postcode /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 43
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$town /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 44
ERROR - 2016-03-01 12:55:19 --> Severity: Notice --> Undefined property: stdClass::$county /opt/lampp/htdocs/im-client-site/v2/application/views/user/view.php 45
ERROR - 2016-03-01 13:00:05 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 13:02:04 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 13:02:05 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 13:03:02 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 13:03:08 --> 404 Page Not Found: Document/list_documents
ERROR - 2016-03-01 13:06:44 --> 404 Page Not Found: Reviews/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 13:07:38 --> 404 Page Not Found: Users/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 13:07:47 --> 404 Page Not Found: Users/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 14:25:58 --> Severity: Notice --> Undefined variable: POST /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 127
ERROR - 2016-03-01 14:48:44 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, boolean given /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_date_helper.php 23
ERROR - 2016-03-01 14:48:44 --> Severity: Warning --> mkdir(): No such file or directory /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_file_helper.php 15
ERROR - 2016-03-01 14:48:44 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 14:55:31 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, boolean given /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_date_helper.php 23
ERROR - 2016-03-01 14:55:31 --> Severity: Warning --> mkdir(): No such file or directory /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_file_helper.php 15
ERROR - 2016-03-01 14:55:31 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 14:59:29 --> Severity: Warning --> mkdir(): No such file or directory /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_file_helper.php 15
ERROR - 2016-03-01 14:59:29 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 16:14:42 --> Severity: Warning --> mkdir(): No such file or directory /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_file_helper.php 15
ERROR - 2016-03-01 16:14:42 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 16:15:02 --> Severity: Warning --> mkdir(): No such file or directory /opt/lampp/htdocs/im-client-site/v2/application/helpers/my_file_helper.php 15
ERROR - 2016-03-01 16:15:02 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 16:15:51 --> The upload path does not appear to be valid.
ERROR - 2016-03-01 16:47:22 --> Severity: Notice --> Undefined index: file_name.png /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 164
ERROR - 2016-03-01 16:49:44 --> Severity: Notice --> Undefined index: file_name.png /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 164
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$project_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$attached_docs_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$doc_name /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 43
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$size /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 46
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$date_added /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 47
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$viewed /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 48
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$project_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$attached_docs_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$doc_name /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 43
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$size /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 46
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$date_added /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 47
ERROR - 2016-03-01 16:54:34 --> Severity: Notice --> Undefined property: stdClass::$viewed /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 48
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$project_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$attached_docs_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$doc_name /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 43
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$size /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 46
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$date_added /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 47
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$viewed /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 48
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$code /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$project_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$attached_docs_id /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 42
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$doc_name /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 43
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$size /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 46
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$date_added /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 47
ERROR - 2016-03-01 16:55:23 --> Severity: Notice --> Undefined property: stdClass::$viewed /opt/lampp/htdocs/im-client-site/v2/application/views/document/document_list.php 48
ERROR - 2016-03-01 17:00:22 --> 404 Page Not Found: User/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 17:13:46 --> 404 Page Not Found: User/9e1001d4ce340abf79119e6647f90e74
ERROR - 2016-03-01 17:14:49 --> Severity: Notice --> Undefined property: stdClass::$roleID /opt/lampp/htdocs/im-client-site/v2/application/controllers/Document.php 111
ERROR - 2016-03-01 17:14:49 --> Query error: Unknown column 'viewedBy' in 'field list' - Invalid query: INSERT INTO `docs_view_history` (`viewedBy`, `document_documentID`, `docViewHistoryDate`, `sourceIP`, `userAgent`) VALUES ('6850', '78446', '2016-03-01 17:14:49', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:42.0) Gecko/20100101 Firefox/42.0')
ERROR - 2016-03-01 17:15:44 --> 404 Page Not Found: Png/index
ERROR - 2016-03-01 17:15:55 --> 404 Page Not Found: Png/index
ERROR - 2016-03-01 17:17:11 --> Severity: Notice --> Undefined index: file_name.png /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 164
ERROR - 2016-03-01 17:18:25 --> Severity: Notice --> Undefined index: file_name.png /opt/lampp/htdocs/im-client-site/v2/application/controllers/Admin.php 162
ERROR - 2016-03-01 17:20:18 --> 404 Page Not Found: Png/index
ERROR - 2016-03-01 17:20:37 --> 404 Page Not Found: Png/index
ERROR - 2016-03-01 17:23:44 --> Severity: Notice --> Use of undefined constant abc - assumed 'abc' /opt/lampp/htdocs/im-client-site/v2/application/controllers/Setup.php 68
ERROR - 2016-03-01 18:32:51 --> 404 Page Not Found: api/Api_test/index
ERROR - 2016-03-01 18:36:31 --> Severity: Compile Error --> Cannot redeclare API_web::$code /opt/lampp/htdocs/im-client-site/v2/application/controllers/api/API_web.php 43
ERROR - 2016-03-01 18:37:05 --> Severity: Compile Error --> Cannot redeclare API_web::$code /opt/lampp/htdocs/im-client-site/v2/application/controllers/api/API_web.php 43
ERROR - 2016-03-01 18:37:14 --> 404 Page Not Found: api/API_web/_addNewClient_Post
ERROR - 2016-03-01 18:38:04 --> 404 Page Not Found: api/API_web/_addNewClient_Post
ERROR - 2016-03-01 18:38:19 --> 404 Page Not Found: api/API_web/_addNewClient_Post
