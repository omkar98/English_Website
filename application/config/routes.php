<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Routes for Backend*/
$route['admin/dashboard'] = 'Backend/Dashboard/index';
$route['daily-words/list'] = 'Backend/Words/list';

$route['daily-use-sentences/list'] = 'Backend/Sentences/list';

$route['places/list'] = 'Backend/SentencesPlaces/place_list';

$route['titles/list'] = 'Backend/SentencesPlaces/title_list';
$route['titles/add'] = 'Backend/SentencesPlaces/title_add';


/* Routes for Frontend */
$route['home'] = 'Home/index';
$route['about-us'] = 'Home/aboutUs';
$route['daily-use-words'] = 'Home/dailyUseWords';
$route['daily-use-sentences'] = 'Home/dailyUseSentences';
$route['conversations-based-situations'] = 'Home/sentencesByPlaces';
$route['contact-us'] = 'Home/contactUs';
$route['daily-use-words/(:num)'] = 'Home/dailyUseWords';
$route['bike/detail/(:any)'] = 'Frontend/Bike/bike_detail';
$route['conversations-based-situations/(:any)/(:num)'] = 'Home/place_title';






?>
