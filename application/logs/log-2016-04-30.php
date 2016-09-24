<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-04-30 05:55:06 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`) VALUES ('2', 'IM Optimum Growth', '5', NULL)
ERROR - 2016-04-30 05:56:25 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '3', NULL, 274208022)
ERROR - 2016-04-30 05:57:48 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '3', NULL, 409687070)
ERROR - 2016-04-30 05:58:17 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '3', NULL, 315605201)
ERROR - 2016-04-30 06:47:00 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '2', NULL, 130347252)
ERROR - 2016-04-30 06:56:45 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '3', NULL, 315976450)
ERROR - 2016-04-30 06:57:05 --> Query error: Column 'investmentReference' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '3', NULL)
ERROR - 2016-04-30 06:58:41 --> Query error: Column 'investmentReference' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '4', NULL)
ERROR - 2016-04-30 06:59:52 --> Query error: Column 'target_date' cannot be null - Invalid query: INSERT INTO `investment_intructions` (`applicationID`, `investment_options`, `percentage_of_investment`, `target_date`, `investmentReference`) VALUES ('2', 'IM Optimum Growth', '1', NULL, 824375597)
ERROR - 2016-04-30 07:05:02 --> Query error: Unknown column 'application_date' in 'field list' - Invalid query: INSERT INTO `applications` (`applicationType`, `clientID`, `applicationReference`, `application_date`) VALUES ('sipp', '1', 52932, '2016-04-30')
ERROR - 2016-04-30 07:23:41 --> Severity: Notice --> Undefined variable: w_data /var/www/html/clientsite/application/controllers/Investments.php 60
ERROR - 2016-04-30 07:23:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `investment_intructions`
WHERE  IS NULL
ERROR - 2016-04-30 07:56:37 --> Severity: Parsing Error --> syntax error, unexpected 'IMOptimumGrowthexists' (T_STRING), expecting function (T_FUNCTION) /var/www/html/clientsite/application/models/Investment_model.php 54
ERROR - 2016-04-30 12:28:31 --> 404 Page Not Found: Investment/index
ERROR - 2016-04-30 08:16:14 --> Query error: Unknown column 'fund_type' in 'where clause' - Invalid query: SELECT *
FROM `contributions`
WHERE `applicationID` = '1'
AND `fund_type` = 'Lamp sum investment'
ERROR - 2016-04-30 08:44:23 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`client_site_v1_2`.`contributions`, CONSTRAINT `fk_contributions_applications1` FOREIGN KEY (`applicationID`) REFERENCES `applications` (`applicationID`) ON DELETE NO ACTION ON UPDATE NO ACTIO) - Invalid query: INSERT INTO `contributions` (`applicationID`, `fund_type`, `lump_sum_amount`, `regular_amount`, `frequency_regular`, `account_holder`, `society_account_holder`, `sorrt_code`, `postal_address`, `contributionsReference`) VALUES ('1', 'Lamp sum investment', 'tyu', 'tyu', 'Quarterly', 'tyu', 'tyu', 'tyu', 'tyutyu', 590002980)
ERROR - 2016-04-30 13:15:45 --> 404 Page Not Found: Contribution/images
ERROR - 2016-04-30 13:28:17 --> 404 Page Not Found: Contribution/images
