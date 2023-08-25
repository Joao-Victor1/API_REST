<?php

namespace Api\Config;

class Database
{
    private $host;
    private $database;
    private $username;
    private $password;

    public function __construct()
    {
        $this->loadEnv();
    }

    private function loadEnv(){
        $envFile = '.env';

        if(file_exists($envFile)){
            $env = parse_ini_file($envFile);
            $this->host = $env['DB_HOST'];
            $this->database = $env['DB_DATABASE'];
            $this->username = $env['DB_USERNAME'];
            $this->password = $env['DB_PASSWORD'];

        }
        else{
            throw new \Exception("O arquivo .env não foi encontrado!!");
        }
    }

    public function getConnection(){
        $dsn = "mysql:host={$this->host};dbname={$this->database}";
        return new \PDO($dsn, $this->username, $this->password);
    }
}

?>