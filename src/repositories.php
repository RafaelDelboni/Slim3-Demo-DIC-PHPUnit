<?php
// DIC configuration

$container = $app->getContainer();

// Repositories
$container['UserRepository'] = function ($c) {
    return new \App\Repositories\MysqlUserRepository($c);
};

