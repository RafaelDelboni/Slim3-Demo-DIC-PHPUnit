<?php 

class UsersTest extends Local_TestCase
{
    public function testListOneUsers()
    {
        $request = $this->requestFactory('users/123');

        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('GET');

        $response = $this->app->process($request, new \Slim\Http\Response());
        $response->getBody()->rewind();

        $this->assertSame((string)$response->getBody(), '{"id":"123","name":"Mock User","email":"mock@email.com"}');
    }

    public function testListAllUsers()
    {
        $request = $this->requestFactory('users/');

        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('GET');

        $response = $this->app->process($request, new \Slim\Http\Response());
        $response->getBody()->rewind();
		
		$users = json_decode((string)$response->getBody());

        $this->assertEquals($users[2], json_decode('{"id":3,"name":"Mock User 3","email":"mock3@email.com"}'));
    }
}