<?php

require 'connect.php';
require '../models/contact.php';

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
                $contact = new contact(
                    $row['id'],
                    $row['name'],
                    $row['company'],
                    $row['email'],
                    $row['phone'],
                    $row['created_at'],
                    $row['update_at']
                );
                $contacts[] = $contact;
            }
        }
        return $contacts;
    }
}
?>