<?php

namespace Api\Controllers;

use Api\Controllers\BaseController;
use Api\Models\UserModel;

class UsersController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function get(){

        $users = $this->userModel->getAllUsers();
        if($users){
            echo $this->jsonResponse($users);
        }
        else{
            http_response_code(404);
            echo $this->jsonResponse(['error' => 'Nenhum usuário encontrado']);
        }
    }
}

?>
