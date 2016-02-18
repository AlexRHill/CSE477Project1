<?php
require __DIR__ . "/../vendor/autoload.php";

// Start the PHP session system
session_start();

define("STEAMPUNKED_SESSION", 'steampunked');

// If there is a Guessing session, use that. Otherwise, create one
if(!isset($_SESSION[STEAMPUNKED_SESSION])) {
    $_SESSION[STEAMPUNKED_SESSION] = new Steampunked\Steampunked();
}

if(isset($_GET['seed'])) {
    $_SESSION[STEAMPUNKED_SESSION] = new Steampunked\Steampunked(strip_tags($_GET['seed']));
}

$steampunked = $_SESSION[STEAMPUNKED_SESSION];