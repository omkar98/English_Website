<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/dashboard'] = 'Backend/Dashboard/index';
$route['daily-words/list'] = 'Backend/Words/list';

$route['places/list'] = 'Backend/SentencesPlaces/list';
$route['title/lists'] = 'Backend/SentencesPlaces/titleLists';
$route['title/add'] = 'Backend/SentencesPlaces/titleAdd';


?>
