<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'school';

  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  if ($conn->connect_error) {
    die('db connection failed: ' . $conn->connect_error);
  }