<?php

class Database
{
    private $db;

    public function getConnection()
    {
        try {
            if ($this->db == null) {
                $this->db = new PDO("sqlite:" . __DIR__. "/gdev.sqlite");
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->db->setAttribute(PDO::ATTR_PERSISTENT, true);
            }
            return $this->db;
        } catch (PDOException $e) {
            echo json_encode(["message" => $e->getMessage()]);
        }
    }

    public function createSettingsDB()
    {
        try {
            $db = new SQLite3(__DIR__ . "/gdev.sqlite", SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

            $db->enableExceptions(true);

            $db->query('CREATE TABLE IF NOT EXISTS "settings" (
                        "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                        "hosts_path" VARCHAR,
                        "glpi_local_url" VARCHAR,
                        "glpis_path" VARCHAR,
                        "current_glpi_version" VARCHAR,
                        "gh_user" VARCHAR,
                        "gh_token" VARCHAR
            )');
            $db->close();
            return true;
        } catch (Exception $e) {
            echo json_encode(["message" => $e->getMessage()]);
            return false;
        }
    }
}
