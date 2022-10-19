<?php
    
    $routes->group('cuba', ['namespace' => '\App\Modules\Demo\Controllers'], function ($routes) {
        $routes->get('/', 'Home::index');
    });
