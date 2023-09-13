<?php

namespace Api\Routes;

use Api\Controllers\UsersController;

$userController = new UsersController();

$routes = [
    '/api/users' =>[
        'GET' => [$userController, 'get']
    ]
];

return $routes;

?>
