<?php
require_once(__DIR__ . '/../config/config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $app = new BBS\Main\Post();
  $title = $_POST['title'];
  $username = $_POST['username'];
  $body = $_POST['body'];
  $app->post($title, $username, $body);
} else {
  echo "Access Denied";
  exit;
}
