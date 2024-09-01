<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// dashboard
$routes->get('/', 'Dashboard');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('/dashboard', 'ShelterController::shelterDashboard', ['as' => 'shelter.dashboard']);

$routes->get('profile', 'Admin::profile');
$routes->get('profile/profileedit/(:any)', 'Admin::profileedit/$1');
$routes->add('profile/profileedit/(:any)', 'Admin::profileedit/$1');

// pengguna
$routes->get('user', 'User::index');
$routes->get('user/userdetail/(:any)', 'User::userdetail/$1');

$routes->get('admin', 'Admin::index', ['filter' => 'role:superAdmin']);
$routes->get('admin/index', 'Admin::index', ['filter' => 'role:superAdmin']);
$routes->get('admin/create', 'Admin::create', ['filter' => 'role:superAdmin']);

$routes->get('feedback', 'Feedback::index');

// sepeda
$routes->get('bikes', 'Bike::index');
$routes->get('bike/bikedetail/(:any)', 'Bike::bikedetail/$1');
$routes->add('bike/create', 'Bike::create');
$routes->add('bike/edit/(:any)', 'Bike::edit/$1');
$routes->get('bike/delete/(:any)', 'Bike::delete/$1');

$routes->get('shelters', 'Shelter::index');
$routes->get('shelter/shelterdetail/(:any)', 'Shelter::shelterdetail/$1');

// peminjaman
$routes->get('rents', 'Rents::index');
$routes->get('rent/rentdetail/(:any)', 'Rents::rentdetail/$1');
