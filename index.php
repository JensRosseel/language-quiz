<?php

declare(strict_types = 1);
session_start();

$_SESSION['win'];
$_SESSION['loss'];

require_once 'classes/Data.php';
require_once 'classes/LanguageGame.php';

require 'view.php';
$game = new LanguageGame();
$game->run();

