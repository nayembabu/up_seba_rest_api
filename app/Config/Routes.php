<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('getdistlist/(:any)', 'Setting::getDistByDivId/$1');

$routes->group('api', function($routes)
{	
	$routes->group('certificate_default', function($routes)
	{
		$routes->get('all', 'Api_send::cer_default_findAll');
		$routes->get('single/(:any)', 'Api_send::cer_default_find/$1');
		$routes->post('save', 'Api_send::cer_default_insert');
		$routes->put('update', 'Api_send::cer_default_update');
		$routes->delete('delete/(:any)', 'Api_send::cer_default_delete/$1');
	});

	$routes->group('certificate_entry', function($routes)
	{
		$routes->get('all_data', 'Api_send::cer_entry_findAll');
		$routes->get('datewise_data/(:any)', 'Api_send::cer_entry_findAll_byDate/$1');
		$routes->get('search_name/(:any)', 'Api_send::cer_entry_search_by_name/$1');
		$routes->get('search_father/(:any)', 'Api_send::cer_entry_search_by_Fname/$1');
		$routes->get('search_mother/(:any)', 'Api_send::cer_entry_search_by_Mname/$1');
		$routes->get('lastid_thisdate/(:any)', 'Api_send::cer_entry_findLast_byDate/$1');
		$routes->get('single/(:any)', 'Api_send::cer_entry_find/$1');
		$routes->get('search_id/(:any)', 'Api_send::cer_entry_find_byDateWiseId/$1');
		$routes->post('entry', 'Api_send::cer_entry_insert');
		$routes->put('edit', 'Api_send::cer_entry_update');
		$routes->delete('delete/(:any)', 'Api_send::cer_entry_delete/$1');
	});
});




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
