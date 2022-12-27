<?php

use App\Controller\HomeController;
use App\Core\Route;

$route = new Route;
$route::get('/', [HomeController::class, 'index']);
//blog
$route::get('/blog/{id}/{title}', [HomeController::class, 'blog']);
$route::get('/blog/{id}/{title}/{slug}/{amount}', [HomeController::class, 'blog']);
$route::get('/about', [HomeController::class, 'about']);
$route::get('/contact-us', [HomeController::class, 'contact']);
//run
$route::run();
