<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/dashboard'] = 'Backend/Dashboard/index';
$route['daily-words/list'] = 'Backend/Words/list';

/* Routes for Frontend */
$route['home'] = 'Home/index';
$route['about-us'] = 'Home/aboutUs';
$route['daily-use-words'] = 'Home/dailyUseWords';
$route['daily-use-sentences'] = 'Home/dailyUseSentences';
$route['sentences-by-places'] = 'Home/sentencesByPlaces';
$route['contact-us'] = 'Home/contactUs';

?>
