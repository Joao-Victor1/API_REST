<?php

namespace Api\Models;

use Api\Config\Database;

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function getAllUsers(){
        $query = "SELECT * FROM tb_usuarios";
        
        try{
            $stmt = $this->db->query($query);
            if($stmt === false){
                $errorInfo = $this->db->errorInfo();
                $errorMessage = $errorInfo[2];

                throw new \PDOException("Erro na consulta SQL: " . $errorMessage);
            }
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        catch(\PDOException $e){
            error_log("Erro na consulta SQL: " . $e->getMessage());
            return false;
        }
    }
}

?>
