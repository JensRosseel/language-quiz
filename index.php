<?php

declare(strict_types = 1);
session_start();

$_SESSION['win'];
$_SESSION['loss'];

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'classes/Data.php';
require_once 'classes/LanguageGame.php';

require 'view.php';
$game = new LanguageGame();
$game->run();

