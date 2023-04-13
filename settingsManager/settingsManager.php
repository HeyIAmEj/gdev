<?php

require_once(__DIR__ . "/../db/database.php");

class SettingsManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function addSettings($settings)
    {
        if (!empty($this->getSettings())) {
            return false;
        }
        try {
            $statement = $this->db->prepare(
                'INSERT INTO "settings" ("hosts_path", "glpi_local_url", "glpis_path", "current_glpi_version", "gh_user", "gh_token")
             VALUES (:sudo_password, :hosts_path, :glpi_local_url, :glpis_path, :current_glpi_version, :gh_user, :gh_token)'
            );

            $statement->execute([
                'hosts_path' => $settings['hosts_path'] ?? null,
                'glpi_local_url' => $settings['glpi_local_url'] ?? null,
                'glpis_path' => $settings['glpis_path'] ?? null,
                'current_glpi_version' => $settings['current_glpi_version'] ?? null,
                'gh_user' => $settings['gh_user'] ?? null,
                'gh_token' => $settings['gh_token'] ?? null,
            ]);

            return true;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        return false;
    }

    public function updateSettings($settings)
    {
        $current_settings = $this->getSettings();
        if (empty($current_settings)) {
            return false;
        }
        $query = "UPDATE settings
        SET
            hosts_path = :hosts_path
            glpi_local_url = :glpi_local_url
            glpis_path = :glpis_path
            current_glpi_version = :current_glpi_version
            gh_user = :gh_user
            gh_token  = :gh_token
        WHERE id = :id;
        ";

        try {
            $statement = $this->db->prepare($query);
            $statement->execute([
                'id' => (int) $current_settings['id'],
                'hosts_path' => $settings['hosts_path'] ?? null,
                'glpi_local_url' => $settings['glpi_local_url'] ?? null,
                'glpis_path' => $settings['glpis_path'] ?? null,
                'current_glpi_version' => $settings['current_glpi_version'] ?? null,
                'gh_user' => $settings['gh_user'] ?? null,
                'gh_token' => $settings['gh_token'] ?? null,
            ]);
            $statement->rowCount();
            return true;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        return false;
    }

    public function getSettings()
    {
        $query = 'SELECT * FROM "settings" ORDER BY "id" DESC LIMIT 1';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $settings = $statement->fetch();
        return $settings;
    }
}
