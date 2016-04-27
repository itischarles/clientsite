<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-04-27 07:44:32 --> Severity: Warning --> Missing argument 1 for Users::investmentOptions() /var/www/html/clientsite/application/controllers/Users.php 122
ERROR - 2016-04-27 07:44:32 --> Severity: Notice --> Undefined variable: app_id /var/www/html/clientsite/application/controllers/Users.php 127
ERROR - 2016-04-27 07:45:51 --> Severity: Warning --> Missing argument 1 for Users::investmentOptions() /var/www/html/clientsite/application/controllers/Users.php 122
ERROR - 2016-04-27 07:45:51 --> Severity: Notice --> Undefined variable: app_id /var/www/html/clientsite/application/controllers/Users.php 127
ERROR - 2016-04-27 07:46:05 --> Severity: Warning --> Missing argument 1 for Users::investmentOptions() /var/www/html/clientsite/application/controllers/Users.php 122
ERROR - 2016-04-27 07:46:05 --> Severity: Notice --> Undefined variable: app_id /var/www/html/clientsite/application/controllers/Users.php 127
ERROR - 2016-04-27 07:46:53 --> Severity: Warning --> Missing argument 1 for Users::investmentOptions() /var/www/html/clientsite/application/controllers/Users.php 122
ERROR - 2016-04-27 07:46:53 --> Severity: Notice --> Undefined variable: app_id /var/www/html/clientsite/application/controllers/Users.php 127
ERROR - 2016-04-27 12:19:42 --> 404 Page Not Found: Users/investmentOptionsSace
ERROR - 2016-04-27 07:50:45 --> Query error: Column 'percentage_of_investment' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', NULL, NULL, 90188)
ERROR - 2016-04-27 07:52:09 --> Query error: Column 'percentage_of_investment' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', NULL, NULL, 93026)
ERROR - 2016-04-27 07:53:49 --> Query error: Column 'percentage_of_investment' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', NULL, NULL, 17072)
ERROR - 2016-04-27 07:54:06 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', '3', NULL, 74356)
ERROR - 2016-04-27 08:31:23 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', '3', NULL, 25406)
ERROR - 2016-04-27 08:34:50 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', '4', NULL, 64962)
ERROR - 2016-04-27 08:39:02 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('1', 'IM Optimum Growth', '3', NULL, 87742)
ERROR - 2016-04-27 08:57:25 --> Severity: Warning --> Missing argument 1 for Users::contribution() /var/www/html/clientsite/application/controllers/Users.php 147
ERROR - 2016-04-27 08:57:25 --> Severity: Notice --> Undefined variable: app_id /var/www/html/clientsite/application/controllers/Users.php 152
ERROR - 2016-04-27 13:27:26 --> 404 Page Not Found: Users/images
ERROR - 2016-04-27 09:08:54 --> Query error: Unknown column 'fund_type' in 'field list' - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', '12', '12', 'Monthly', 'raj', '123123', '123123', '123123', 29310)
ERROR - 2016-04-27 09:10:04 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`contributions`, CONSTRAINT `fk_contributions_applications1` FOREIGN KEY (`applicationID`) REFERENCES `applications` (`applicationID`) ON DELETE NO ACTION ON UPDATE NO ACTIO) - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', '12', '12', 'Monthly', 'raj', '123123', '123123', '123123', 71512)
ERROR - 2016-04-27 09:11:47 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`contributions`, CONSTRAINT `fk_contributions_applications1` FOREIGN KEY (`applicationID`) REFERENCES `applications` (`applicationID`) ON DELETE NO ACTION ON UPDATE NO ACTIO) - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', '12', '12', 'Quarterly', 'raj', '123123123', '123123', '123123123', 64812)
ERROR - 2016-04-27 09:13:55 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`contributions`, CONSTRAINT `fk_contributions_applications1` FOREIGN KEY (`applicationID`) REFERENCES `applications` (`applicationID`) ON DELETE NO ACTION ON UPDATE NO ACTIO) - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', '12', '12', 'Monthly', '12121212', '123123123', '123123', 'shhgdiklk,', 63361)
ERROR - 2016-04-27 09:15:56 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`contributions`, CONSTRAINT `fk_contributions_applications1` FOREIGN KEY (`applicationID`) REFERENCES `applications` (`applicationID`) ON DELETE NO ACTION ON UPDATE NO ACTIO) - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', '12', '12', 'Monthly', 'qwe', '123123123', '123123', 'qweqweqwe', 60272)
ERROR - 2016-04-27 11:18:51 --> Severity: Notice --> Undefined variable: applicationReference /var/www/html/clientsite/application/views/user/application.php 8
ERROR - 2016-04-27 12:37:25 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 59
ERROR - 2016-04-27 12:38:19 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 60
ERROR - 2016-04-27 12:38:20 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 60
ERROR - 2016-04-27 12:38:40 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 60
ERROR - 2016-04-27 12:38:41 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 60
ERROR - 2016-04-27 12:39:22 --> Severity: Error --> Call to undefined method User_model::getApplicationDataById() /var/www/html/clientsite/application/controllers/Users.php 60
ERROR - 2016-04-27 14:09:59 --> Severity: Notice --> Undefined variable: id /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:09:59 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `applications`
WHERE `id` IS NULL
ERROR - 2016-04-27 14:11:27 --> Severity: Notice --> Undefined variable: id /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:11:27 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `applications`
WHERE `id` IS NULL
ERROR - 2016-04-27 14:11:28 --> Severity: Notice --> Undefined variable: id /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:11:28 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `applications`
WHERE `id` IS NULL
ERROR - 2016-04-27 14:11:37 --> Severity: Notice --> Undefined variable: id /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:11:37 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `applications`
WHERE `id` IS NULL
ERROR - 2016-04-27 14:13:46 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:15:08 --> Severity: Warning --> Missing argument 1 for User_model::getApplicationDataById(), called in /var/www/html/clientsite/application/controllers/Users.php on line 61 and defined /var/www/html/clientsite/application/models/User_model.php 403
ERROR - 2016-04-27 14:15:08 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:19:53 --> Severity: Warning --> Missing argument 1 for User_model::getApplicationDataById(), called in /var/www/html/clientsite/application/controllers/Users.php on line 61 and defined /var/www/html/clientsite/application/models/User_model.php 403
ERROR - 2016-04-27 14:19:53 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/models/User_model.php 404
ERROR - 2016-04-27 14:21:46 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:22:13 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:22:14 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:22:57 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:22:58 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:24:44 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:24:46 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 18:55:09 --> 404 Page Not Found: D/index
ERROR - 2016-04-27 14:25:15 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:25:23 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:25:25 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:25:40 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:25:40 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:27:21 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:30:53 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:30:53 --> Severity: Notice --> Undefined variable: applicationID /var/www/html/clientsite/application/controllers/Users.php 61
ERROR - 2016-04-27 14:37:00 --> Severity: Notice --> Undefined variable: app /var/www/html/clientsite/application/views/user/dashboard.php 35
ERROR - 2016-04-27 14:37:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/clientsite/application/views/user/dashboard.php 35
ERROR - 2016-04-27 14:39:08 --> Severity: Parsing Error --> syntax error, unexpected 'strtotime' (T_STRING) /var/www/html/clientsite/application/views/user/dashboard.php 35
ERROR - 2016-04-27 14:42:15 --> Severity: Notice --> Undefined variable: applicationReference /var/www/html/clientsite/application/views/user/application.php 8
ERROR - 2016-04-27 14:42:31 --> Severity: Notice --> Undefined variable: applicationReference /var/www/html/clientsite/application/views/user/application.php 8
ERROR - 2016-04-27 14:46:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/clientsite/application/controllers/Users.php 81
ERROR - 2016-04-27 14:54:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/clientsite/application/views/user/application.php 7
ERROR - 2016-04-27 14:54:45 --> Severity: Notice --> Trying to get property of non-object /var/www/html/clientsite/application/views/user/application.php 7
ERROR - 2016-04-27 14:55:01 --> Severity: Notice --> Trying to get property of non-object /var/www/html/clientsite/application/views/user/application.php 7
ERROR - 2016-04-27 15:02:55 --> Severity: Notice --> Undefined property: stdClass::$transferReference /var/www/html/clientsite/application/views/user/application.php 21
ERROR - 2016-04-27 15:05:42 --> Severity: Error --> Call to undefined method User_model::getContributionDataById() /var/www/html/clientsite/application/controllers/Users.php 105
ERROR - 2016-04-27 15:11:38 --> Severity: Notice --> Undefined property: stdClass::$transferReferrence /var/www/html/clientsite/application/views/user/application.php 45
ERROR - 2016-04-27 15:51:09 --> Severity: Error --> Call to undefined method User_model::getTransferDataById() /var/www/html/clientsite/application/controllers/Users.php 103
ERROR - 2016-04-27 15:54:06 --> Severity: Error --> Class 'Transfer_model' not found /var/www/html/clientsite/application/controllers/Users.php 24
ERROR - 2016-04-27 15:54:50 --> Severity: Error --> Class 'Transfer_model' not found /var/www/html/clientsite/application/controllers/Users.php 25
ERROR - 2016-04-27 15:54:51 --> Severity: Error --> Class 'Transfer_model' not found /var/www/html/clientsite/application/controllers/Users.php 25
ERROR - 2016-04-27 20:25:58 --> 404 Page Not Found: Users/pensionTransfer
ERROR - 2016-04-27 20:27:14 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:28:25 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:28:50 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:28:51 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:28:52 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:28:54 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:30:04 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:31:02 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:31:44 --> 404 Page Not Found: Transfers/pensionTransfer
ERROR - 2016-04-27 20:50:15 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 20:51:55 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 20:51:55 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 16:21:57 --> Severity: Error --> Call to undefined method User_model::getContributionsDataById() /var/www/html/clientsite/application/controllers/Users.php 108
ERROR - 2016-04-27 16:22:04 --> Severity: Error --> Call to undefined method User_model::getContributionsDataById() /var/www/html/clientsite/application/controllers/Users.php 108
ERROR - 2016-04-27 16:22:45 --> Severity: Error --> Class 'Contribution_model' not found /var/www/html/clientsite/application/controllers/Users.php 27
ERROR - 2016-04-27 16:23:39 --> Severity: Error --> Call to undefined method User_model::getContributionsDataById() /var/www/html/clientsite/application/controllers/Users.php 110
ERROR - 2016-04-27 20:55:51 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 20:57:14 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 20:57:15 --> 404 Page Not Found: Users/contribution
ERROR - 2016-04-27 21:07:41 --> 404 Page Not Found: Users/investmentOptions
ERROR - 2016-04-27 21:08:54 --> 404 Page Not Found: Users/investmentOptions
ERROR - 2016-04-27 21:08:55 --> 404 Page Not Found: Users/investmentOptions
ERROR - 2016-04-27 21:09:33 --> 404 Page Not Found: Users/investmentOptions
ERROR - 2016-04-27 21:09:34 --> 404 Page Not Found: Users/investmentOptions
