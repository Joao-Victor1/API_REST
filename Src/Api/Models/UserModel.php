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
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>
