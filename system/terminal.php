<?php

require_once(__DIR__ . "/../settingsManager/settingsManager.php");

class Terminal
{

    public function runCommand($cmd)
    {
        if ($cmd) {
            $output = shell_exec($cmd . " 2>&1");
            return $output;
            die();
        }
    }

    public function getSettings()
    {

    }
}
