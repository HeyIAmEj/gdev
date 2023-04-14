<?php

require_once(__DIR__ . "/../settingsManager/settingsManager.php");
require_once(__DIR__ . "/../db/database.php");

if (!file_exists("../db/gdev.sqlite")) {
    (new Database())->createSettingsDB();
}

$sm = new SettingsManager();
$settings = json_decode(file_get_contents('php://input'), true) ?? [];
if ($sm->addSettings($settings)) {
    echo json_encode(["message" => "Configurações salvas!"]);
}
