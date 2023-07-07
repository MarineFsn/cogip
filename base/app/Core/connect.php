<?php

$host = 'localhost';
$dbname = 'cogip';
$username = 'root';
$password = '';


class Database
{
    private $db;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->connect($host, $dbname, $username, $password);
    }

    private function connect($host, $dbname, $username, $password)
    {
        try {
            $host_dbname = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $this->db = new PDO($host_dbname, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}

$database = new Database($host, $dbname, $username, $password);
$db = $database->getDb();