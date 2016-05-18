<?php 

// Settings to make all errors more obvious during testing
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('UTC');

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Http\Environment;
use Slim\Http\Headers;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\RequestBody;
use Slim\Http\Stream;
use Slim\Http\UploadedFile;
use Slim\Http\Uri;
use Slim\Http\Body;

class Local_TestCase extends \PHPUnit_Framework_TestCase
{
    protected $app;

    public function setup()
    {
        // Instantiate the app
        $settings = require __DIR__ . '/../src/settings.php';

        $app = new \Slim\App($settings);

        // Set up dependencies
        require __DIR__ . '/../src/dependencies.php';
        require __DIR__ . '/repositories_mock.php';
        require __DIR__ . '/../src/controllers.php';

        // Register middleware
        require __DIR__ . '/../src/middleware.php';

        // Register routes
        require __DIR__ . '/../src/routes.php';

        $this->app = $app;
    }

    public function requestFactory($requestUrl)
    {
        $uri = Uri::createFromString($requestUrl);
        $headers = new Headers();
        $cookies = array(
            'user' => 'john',
            'id' => '123',
        );
        $env = Slim\Http\Environment::mock();
        $serverParams = $env->all();
        $body = new Body(fopen('php://temp', 'r+'));
        $request = new Request('GET', $uri, $headers, $cookies, $serverParams, $body);

        return $request;
    }

}