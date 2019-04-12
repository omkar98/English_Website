<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/dashboard'] = 'Backend/Dashboard/index';
$route['daily-words/list'] = 'Backend/Words/list';

/* Routes for Frontend */
$route['home'] = 'Frontend/Home/index';
$route['AboutUs'] = 'Frontend/Home/aboutUs';
$route['daily-use-words'] = 'Frontend/Home/dailyUseWords';
$route['daily-use-sentences'] = 'Frontend/Home/dailyUseSentences';
$route['sentences-by-places'] = 'Home/sentencesByPlaces';
$route['contact-us'] = 'Home/contactUs';
?>
