<?php


function getIp() {
    return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
}


$servername = "localhost";
$username = "dear_cv_tracer";
$password = "NDPilavm7050@!";
$dbname = "dear_cv_tracer";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $ip = getIp();
  $uag = $_SERVER['HTTP_USER_AGENT'];
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO visitors (ip, uag)
  VALUES ($ip, $uag,)";
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>