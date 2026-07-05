<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/about', 'About::index');

$routes->get('/trainer', 'Trainer::index');

$routes->get('/policy', 'Policy::index');

$routes->get('/login', 'LoginController::index');

$routes->post('/login', 'LoginController::authenticate');

$routes->get('/logout', 'LoginController::logout');

$routes->get('/register', 'MemberController::register');

$routes->post('register/save', 'MemberController::save');

$routes->get('/member/dashboard', 'MemberController::dashboard');

$routes->get('/member/profile', 'MemberController::profile');

$routes->get('/member/update', 'MemberController::updateProfile');

$routes->post('/member/update/save', 'MemberController::saveUpdateProfile');

$routes->get('/member/subscription', 'MemberController::subscriptionPlans');

$routes->post('/member/select-plan', 'MemberController::selectPlan');

$routes->get('/member/payment', 'MemberController::payment');

$routes->post('/member/payment/save', 'MemberController::savePayment');

$routes->get('/admin/dashboard', 'AdminController::dashboard');

$routes->get('/admin/members', 'AdminController::manageMembers');

$routes->get('/admin/member/view/(:any)', 'AdminController::viewMember/$1');

$routes->get('/admin/member/edit/(:any)', 'AdminController::editMember/$1');

$routes->post('/admin/member/update/(:any)', 'AdminController::updateMember/$1');

$routes->get('/admin/revenue', 'AdminController::revenue');