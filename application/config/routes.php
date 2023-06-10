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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['backstage/login']['get'] = 'Backstage/login';
$route['backstage/login']['post'] = 'Api/Manufacturers/Login/login';
$route['backstage/logout']['get'] = 'Backstage/logout';

$route['api/news/(:num)']['get'] = 'Api/News/show/$1';
$route['api/news']['post'] = 'Api/News/add';
$route['api/news/(:num)/(:num)']['put'] = 'Api/News/update/$1/$2';
$route['api/news/(:num)/(:num)']['delete'] = 'Api/News/delete/$1/$2';

$route['backstage'] = 'Backstage/news';
$route['backstage/news/addition'] = 'Backstage/addition';

if ($_SERVER['HTTP_HOST'] == 'www.spaspringresort.com.tw' || $_SERVER['HTTP_HOST'] == 'spaspringresort.com.tw') {
    $route['default_controller'] = 'SpaSpringResort/index';
    $route['hotel'] = 'SpaSpringResort/hotel';
    $route['facility'] = 'SpaSpringResort/facility';
    $route['news'] = 'SpaSpringResort/news';
    $route['news/(:num)'] = 'SpaSpringResort/newsdetail/$1';
} elseif ($_SERVER['HTTP_HOST'] == 'www.burgaryhotel.com' || $_SERVER['HTTP_HOST'] == 'burgaryhotel.com' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $route['default_controller'] = 'BurGaryHotel/index';
    $route['hotel'] = 'BurGaryHotel/hotel';
    $route['news'] = 'BurGaryHotel/news';
    $route['news/(:num)'] = 'BurGaryHotel/newsdetail/$1';
}else{
    $route['default_controller'] = 'Home';
}