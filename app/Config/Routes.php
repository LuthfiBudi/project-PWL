<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/template', 'Company::template');

//SECTION - Log Session
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/dashboard', 'Company::index');
$routes->post('/logout', 'Home::logout');
//!SECTION

//SECTION - Perusahaan
$routes->get('/comp', 'Company::perusahaan');
$routes->get('/comp/input', 'Company::inputperusahaan');
$routes->post('/comp/save', 'Company::simpanperusahaan');
$routes->get('/comp/edit/(:any)', 'Company::editperusahaan/$1');
$routes->post('/comp/update', 'Company::updateperusahaan');
$routes->get('/comp/hapus/(:any)', 'Company::hapusperusahaan/$1');
$routes->post('/comp/delete', 'Company::deleteperusahaan');
//!SECTION

//SECTION - Departemen
$routes->get('/dept', 'Company::departemen');
$routes->get('/dept/input', 'Company::inputdepartemen');
$routes->post('/dept/save', 'Company::simpandepartemen');
$routes->get('/dept/edit/(:any)', 'Company::editdepartemen/$1');
$routes->post('/dept/update', 'Company::updatedepartemen');
$routes->get('/dept/hapus/(:any)', 'Company::hapusdepartemen/$1');
$routes->post('/dept/delete', 'Company::deletedepartemen');
//!SECTION

//SECTION - Karyawan
$routes->get('/employee', 'Company::karyawan');
$routes->get('/employee/input', 'Company::inputkaryawan');
$routes->post('/employee/save', 'Company::simpankaryawan');
$routes->get('/employee/edit/(:any)', 'Company::editkaryawan/$1');
$routes->post('/employee/update', 'Company::updatekaryawan');
$routes->get('/employee/hapus/(:any)', 'Company::hapuskaryawan/$1');
$routes->post('/employee/delete', 'Company::deletekaryawan');
//!SECTION