<?php

namespace Api\Routes;

use Api\Controllers\UsersController;

$userController = new UsersController();

$routes = [
    '/api/users' =>[
        'GET' => [$userController::class, 'get']
    ]
];

return $routes;

?>
