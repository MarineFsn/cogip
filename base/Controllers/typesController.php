<?php

require './connect.php';
require '../Models/type.php';

class typeController
{
    private $db;

    public function getTypes()
    {
        $this->db->connect();

        $query = "SELECT * FROM types";
        $result = $this->db->query($query);

        $types = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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