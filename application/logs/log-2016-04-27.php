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
