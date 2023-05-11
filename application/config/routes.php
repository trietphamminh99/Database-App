<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['KPI'] = 'KPI/KPI';


$route['element/exportElement'] = 'element/exportElement';
$route['element/create'] = 'element/createElement';
$route['element/(:any)'] = 'element/elementPage/$1';

$route['slam/exportExcel'] = 'slam/exportExcel';
$route['slam/update'] = 'slam/updateAsset';

$route['slam/create'] = 'slam/create';
$route['slam/(:any)'] = 'slam/assetsPage/$1';
$route['slam'] = 'slam/assets';
$route['element'] = 'element/element';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['posts'] = 'posts/index';
