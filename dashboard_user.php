<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
  header("Location: register_user.php");
  exit;
}
$page = $_GET['page'] ?? 'home';
include "user_{$page}.php";
