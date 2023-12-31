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
$routes->get('detail_berita/(:num)', 'Home::detail_berita/$1');
$routes->get('detail_pengumuman/(:num)', 'Home::detail_pengumuman/$1');
$routes->get('contact', 'Home::contact');
$routes->get('auth', 'Auth::index');
$routes->add('auth/login', 'Auth::login');
$routes->add('auth/logout', 'Auth::logout');
$routes->get('/page', 'Home::page');

$routes->group('admin', ['filter' => 'auth'], function($routes){
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
    $routes->group('prodi', function($item){
        $item->get('/', 'Admin\Prodi::index');
        $item->get('read', 'Admin\Prodi::read');
        $item->post('post', 'Admin\Prodi::post');
        $item->put('put', 'Admin\Prodi::put');
        $item->delete('delete/(:num)', 'Admin\Prodi::delete/$1');
    });
    $routes->group('video', function($item){
        $item->get('/', 'Admin\Video::index');
        $item->get('read', 'Admin\Video::read');
        $item->post('post', 'Admin\Video::post');
        $item->put('put', 'Admin\Video::put');
        $item->delete('delete/(:num)', 'Admin\Video::delete/$1');
    });
    $routes->group('pengumuman', function($item){
        $item->get('/', 'Admin\Pengumuman::index');
        $item->get('read', 'Admin\Pengumuman::read');
        $item->post('post', 'Admin\Pengumuman::post');
        $item->put('put', 'Admin\Pengumuman::put');
        $item->delete('delete/(:num)', 'Admin\Pengumuman::delete/$1');
    });
    $routes->group('pengajar', function($item){
        $item->get('/', 'Admin\Pengajar::index');
        $item->get('read', 'Admin\Pengajar::read');
        $item->post('post', 'Admin\Pengajar::post');
        $item->put('put', 'Admin\Pengajar::put');
        $item->delete('delete/(:num)', 'Admin\Pengajar::delete/$1');
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
