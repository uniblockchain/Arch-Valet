<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "front";



$route['404_override'] = '';


$route['en/admin/(:any)'] = "admin/$1";
$route['en/admin'] = "admin/admin_home";


$route['en']='front/index';
$route['es']='front/index';


$route['en/register'] = "front/register";
$route['es/register'] = "front/register";

$route['en/do_register'] = "front/do_register";
$route['es/do_register'] = "front/do_register";

$route['en/login'] = "front/login";
$route['es/login'] = "front/login";

$route['en/login_process'] = "front/login_process";
$route['es/login_process'] = "front/login_process";


$route['en/user/profile'] = "front/profile";
$route['es/user/profile'] = "front/profile";


$route['en/faq'] = "front/faq";
$route['es/faq'] = "front/faq";

$route['en/pricing'] = "front/pricing";
$route['es/pricing'] = "front/pricing";

$route['en/reservation'] = "front/reservation";
$route['es/reservation'] = "front/reservation";

$route['en/reservation_process'] = "front/reservation_process";
$route['es/reservation_process'] = "front/reservation_process";

$route['en/homework'] = "front/homework";
$route['es/homework'] = "front/homework";


$route['en/stripe'] = "front/stripe";
$route['es/stripe'] = "front/stripe";


$route['en/checkout'] = "front/checkout";
$route['es/checkout'] = "front/checkout";


$route['en/logout'] = "front/logout";
$route['es/logout'] = "front/logout";

$route['en/edit_profile'] = "front/edit_profile";
$route['es/edit_profile'] = "front/edit_profile";

$route['en/reset_password'] = "front/reset_password";
$route['es/reset_password'] = "front/reset_password";

$route['en/update_password/(:any)'] = "front/update_password/$1";
$route['es/update_password/(:any)'] = "front/update_password/$1";

$route['en/reset_password_process'] = "front/reset_password_process";
$route['es/reset_password_process'] = "front/reset_password_process";

$route['en/change_confirm_password/(:any)'] = "front/change_confirm_password/$1";
$route['es/change_confirm_password/(:any)'] = "front/change_confirm_password/$1";

$route['en/update_profile/(:any)'] = "front/update_profile/$1";
$route['es/update_profile/(:any)'] = "front/update_profile/$1";



require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$query = $db->get('tbl_route');
$result = $query->result();
foreach( $result as $row )
{
    $route['en/'. $row->slug ]                 = $row->route;
    $route['en/'. $row->slug.'/:any' ]         = $row->route;

    $route[ $row->route ]           = 'error404';
    $route[ $row->route.'/:any' ]   = 'error404';

}


foreach( $result as $row )
{
    $route['es/'. $row->slug ]                 = $row->route;
    $route['es/'. $row->slug.'/:any' ]         = $row->route;

    $route[ $row->route ]           = 'error404';
    $route[ $row->route.'/:any' ]   = 'error404';

}




$route['logout']="logout/logout_me";

/* End of file routes.php */
/* Location: ./application/config/routes.php */