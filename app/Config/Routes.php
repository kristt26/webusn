<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/page', 'Home::page');

$routes->group('admin', function($routes){
    $routes->get('/', 'Admin\Home::index');
    $routes->group('slide', function($item){
        $item->get('/', 'Admin\Slide::index');
        $item->get('read', 'Admin\Slide::read');
        $item->post('post', 'Admin\Slide::post');
        $item->put('put', 'Admin\Slide::put');
        $item->delete('delete/(:num)', 'Admin\Slide::delete/$1');
    });
    $routes->group('galeri', function($item){
        $item->get('/', 'Admin\Galery::index');
        $item->get('read', 'Admin\Galery::read');
        $item->post('post', 'Admin\Galery::post');
        $item->put('put', 'Admin\Galery::put');
        $item->delete('delete/(:num)', 'Admin\Galery::delete/$1');
    });
    $routes->group('berita', function($item){
        $item->get('/', 'Admin\Berita::index');
        $item->get('read', 'Admin\Berita::read');
        $item->post('post', 'Admin\Berita::post');
        $item->put('put', 'Admin\Berita::put');
        $item->delete('delete/(:num)', 'Admin\Berita::delete/$1');
    });
    $routes->group('kerjasama', function($item){
        $item->get('/', 'Admin\Kerjasama::index');
        $item->get('read', 'Admin\Kerjasama::read');
        $item->post('post', 'Admin\Kerjasama::post');
        $item->put('put', 'Admin\Kerjasama::put');
        $item->delete('delete/(:num)', 'Admin\Kerjasama::delete/$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
