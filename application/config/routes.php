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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['addADonation']['POST'] = 'library/donor_detail/create';
$route['donation'] = 'welcome/donation';

$route['requestAbook']['POST'] = 'library/request_book/create';
$route['request_book'] = 'welcome/request_book';

$route['volunteerForm']['POST'] = 'library/volunteer/create';
$route['volunteer'] = 'welcome/volunteer';

$route['contact'] = 'welcome/contact';

// admin dashboard
$route['admin'] = 'admin/index';
$route['admin/logout'] = 'admin/logout';
$route['admin/index'] = 'admin/index';
$route['admin/create'] = 'admin/create';
$route['admin/register/index'] = 'admin/register/index';
$route['admin/register/create'] = 'admin/register/create';
$route['admin/login/index'] = 'admin/login/index';
$route['admin/login/create'] = 'admin/login/create';

$route['library/login/index'] = 'library/login/index';
$route['library/login/create'] = 'library/login/create';

$route['library/register/index'] = 'library/register/index';
$route['library/register/create'] = 'library/register/create';

$route['library/donor_detail/index'] = 'library/donor_detail/index';
$route['library/donor_detail/create'] = 'library/donor_detail/create';
$route['library/donor_detail/edit/(:any)'] = 'library/donor_detail/edit/$1';
$route['library/donor_detail/delete/(:any)'] = 'library/donor_detail/delete/$1';

$route['library/request_book/index'] = 'library/request_book/index';
$route['library/request_book/create_request'] = 'library/request_book/create';
$route['library/request_book/edit_request/(:any)'] = 'library/request_book/edit/$1'; 
$route['library/request_book/delete_request/(:any)'] = 'library/request_book/delete/$1';  

$route['library/volunteer/index'] = 'library/volunteer/index';
$route['library/volunteer/create_volunteer'] = 'library/volunteer/create';
$route['library/volunteer/edit_volunteer/(:any)'] = 'library/volunteer/edit/$1';
$route['library/volunteer/delete_volunteer/(:any)'] = 'library/volunteer/delete/$1';

$route['admin/team/add'] = 'admin/team/add';
$route['admin/edit/(:any)'] = 'admin/edit/$1';
$route['admin/delete/(:any)'] = 'admin/delete/$1';

