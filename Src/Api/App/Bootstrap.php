<?php

namespace Api\App;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../Src/Api/Config/Database.php';


//CORS (Cross-Origin Resource Sharing):
header("Access-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: GET, POST, PUT");
header("Content-Type: application/json; charset=UTF-8");

?>