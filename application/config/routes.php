<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



/**AUTHENTICATE*****/
$route['login'] = "auth/login";
$route['logout'] = "auth/logout";




/**DOCUMENTS***
 * 
 */

$route['user/(:any)/documents'] = "Document/list_documents/$1";
$route['user/(:any)/document/(:num)'] = "Document/view_documents/$1/$2";


/**
 * users
 */
$route['user/(:any)'] = "Users/index/$1";
$route['dashboard'] = "users/dashboard";

$route['applications/(:any)'] = "users/application/$1";


/**
 * Investments
 */
$route['investment'] = "investments/investmentOptions";
$route['investmentsave'] = "investments/investmentOptionsSave";




/**
 * transfers
 */
$route['pension'] = "transfers/pensionTransfer";
$route['pensionsave'] = "transfers/pensionTransferSave";


/**
 * contributions
 */
$route['contribution'] = "contributions/contribution";
$route['contributionsave'] = "contributions/contributionSave";






/**
 * admin
 */
$route['admin/search'] = "Admin/searchUsers";
$route['admin/manual-uploads'] = "Admin/manualUploadDocument";


/**
 * MESSAGES
 */

$route['messages/(:any)'] = "Messages/index/$1";


/** API**/

$route['api/client/new'] = "api/API_web/addNewClient_Post";
$route['api/client/update'] = "api/API_web/_updateClient_Post";
$route['api/client/upload'] = "api/API_web/_uploadDocument_Post";

$route['default_controller'] = 'Users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
