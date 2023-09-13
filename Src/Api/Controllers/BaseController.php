<?php

namespace Api\Controllers;

class BaseController
{
    protected function jsonResponse($data, $statusCode = 200){
        
        header("HTTP/1.1 " . $statusCode);
        return json_encode($data);
    }
}

?>
