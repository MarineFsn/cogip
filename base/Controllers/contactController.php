<?php

require 'connect.php';

class ContactController
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

    public function getContact()
    {
        $this->db->connect();
        $connection = $this->db->getConnection();

        $query = "SELECT * FROM contacts";
        $result = $connection->query($query);

        $contacts = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $contacts[] = $row;
            }
        }

        return $contacts;
    }
}
?>