<?php

define('DSN', 'sqlite:../lib/db/posts.db');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/autoload.php');
require_once(__DIR__ . '/../lib/functions.php');

session_start();
