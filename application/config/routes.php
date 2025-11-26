<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';


$route['demo_page'] = 'Basic_controller';
$route['registration'] = 'Basic_controller/registration';
$route['registration_sub'] = 'Basic_controller/registration_sub';
$route['third_page'] = 'Basic_controller/sample_string';


$route['login_form'] = 'Basic_controller/login_form';
$route['login_form_sub'] = 'Basic_controller/login_form_sub';

$route['signup_form'] = 'Basic_controller/signup_form';
$route['signup_form_sub'] = 'Basic_controller/signup_form_sub';

$route['admin_login'] = 'Basic_controller/admin_login';
$route['clg_info'] = 'Basic_controller/clg_info';

$route['stud_info'] = 'Basic_controller/stud_info';
$route['stud_info_sub'] = 'Basic_controller/stud_info_sub';

$route['logout'] = 'Basic_controller/logout';







$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
