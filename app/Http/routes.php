<?php

Route::get('/', [
    'uses' => 'HomeController@getIndex'
]);

Route::get('/about-service', [
    'uses' => 'HomeController@getAboutService'
]);

Route::get('/guide', [
    'uses' => 'HomeController@getGuide'
]);

Route::get('/fee', [
    'uses' => 'HomeController@getFee'
]);

Route::get('/prohibit', [
    'uses' => 'HomeController@getProhibit'
]);

Route::get('/contact', [
    'uses' => 'ContactController@getContact'
]);


