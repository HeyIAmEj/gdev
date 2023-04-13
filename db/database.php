<?php

class Database
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("sqlite:" . __DIR__ . "/gdev.sqlite");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo json_encode(["error" => $e->getMessage()]);
        }
    }

    public function getConnection()
    {
        return $this->db;
    }
}
