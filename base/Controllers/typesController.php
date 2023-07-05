<?php

require 'connect.php';
require '../models/type.php';

class typeController
{

    private $db;

    public function __construct()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "cogip";

        $this->db = new Database($host, $username, $password, $database);
    }

    public function getTypes()
    {
        $this->db->connect();
        $connection = $this->db->getConnection();


        $query = "SELECT * FROM types";
        $result = $connection->query($query);

        $types = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $type = new type(
                    $row['id'],
                    $row['name'],
                    $row['created_at'],
                    $row['updated_at']
                );
                $types[] = $type;
            }
        }
        return $types;
    }
}