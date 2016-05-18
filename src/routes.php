<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->group('/users/', function () {
	$this->get('{id:[0-9]+}', 'UserController:get');
	$this->get('', 'UserController:getAll');
});