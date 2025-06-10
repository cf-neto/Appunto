<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: /public/index.html");
  exit;
}
?>