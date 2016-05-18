<?php
// DIC configuration

$container = $app->getContainer();

// Controllers
$container['UserController'] = function ($c) {
    return new \App\Controllers\UserController($c->get('UserRepository'));
};
