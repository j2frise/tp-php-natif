<?php

use App\Router;

/**
 * Web routes
 */
Router::get('/', 'HomeController@index');
Router::get('/home', 'HomeController@index');
Router::get('/blog', 'BlogController@index');
Router::get('/blog/(:any)', 'BlogController@detail');
Router::get('/about', 'AboutController@index');
Router::get('/admin', 'LoginController@index');
Router::post('/login', 'LoginController@formLogin');
Router::get('/logout', 'LoginController@logout');
Router::get('/dashboard', 'DashboardController@index');
Router::get('/setting', 'SiteController@index');
Router::get('/users', 'UsersController@index');
Router::get('/posts', 'ArticleController@index');
Router::get('/posts/(:any)', 'ArticleController@edit');
Router::get('/categories', 'CategorieController@index');
Router::get('/slider', 'SlideController@index');
Router::get('/profile', 'ProfileController@index');
Router::put('/profile', 'ProfileController@edit');
Router::get('/contact', 'ContactController@index');


/**
 * API routes
 */
Router::get('/api/users', 'API\UsersController@index');


Router::error(function () {
    die('404 Page not found');
});

Router::dispatch();
