<?php
// Load the config file
require_once 'config.php';

// Get the opis parameter
$opis = $_POST['opis'];

// Update the global $opis variable in config.php
$cfg_file = fopen('config.php', 'r');
$cfg_content = fread($cfg_file, filesize('config.php'));
fclose($cfg_file);
$cfg_content = preg_replace('/\$opis = \'.*\'/', "\$opis = '$opis'", $cfg_content);
$cfg_file = fopen('config.php', 'w');
fwrite($cfg_file, $cfg_content);
fclose($cfg_file);
?>
