<?php

$host = "localhost"; /* Host name */
$user = "test"; /* User */
$password = "mysql"; /* Password */
$dbname = "db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}