<?php
$db = new SQLite3('gdev.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$db->enableExceptions(true);

$db->query('CREATE TABLE IF NOT EXISTS "settings" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "hosts_path" VARCHAR,
    "glpi_local_url" VARCHAR,
    "glpis_path" VARCHAR,
    "current_glpi_version" VARCHAR,
    "gh_user" VARCHAR,
    "gh_token" VARCHAR,
)');

return true;
