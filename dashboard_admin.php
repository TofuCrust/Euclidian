<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
  header("Location: login_admin.php");
  exit;
}
$page = $_GET['page'] ?? 'home';
include "admin_{$page}.php";
