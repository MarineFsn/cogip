<?php

function connect()
{
    $host_dbname = 'mysql:host=localhost;dbname=cogip;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($host_dbname, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
}