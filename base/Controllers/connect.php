<?php

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        try {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->connection->connect_error) {
                throw new Exception("Erreur de connexion à la base de données : " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }


    public function getConnection()
    {
        return $this->connection;
    }
}

?>