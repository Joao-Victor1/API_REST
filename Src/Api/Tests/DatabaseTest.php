<?php
// src/MyRestApi/Tests/DatabaseTest.php

namespace Api\Tests;

use PHPUnit\Framework\TestCase;
use Api\Config\Database;

class DatabaseTest extends TestCase {
    public function testDatabaseConnection() {
        try {
            $database = new Database();
            $connection = $database->getConnection();
            $this->assertInstanceOf(\PDO::class, $connection);
            echo("Conexão efetuada com sucesso!");
        } catch (\Exception $e) {
            $this->fail("Database connection failed: " . $e->getMessage());
        }
    }
}
?>
