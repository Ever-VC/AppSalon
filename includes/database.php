<?php

require_once 'config/config.php';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
   exit;

}