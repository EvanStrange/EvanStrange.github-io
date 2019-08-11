<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

print_r($_POST);
include "connect.php";
try {   
    $dsn = 'mysql:host=localhost;dbname=contactme;charset=utf8';
    $db = new PDO($dsn, 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
file_get_contents('php://input');

if (isset($_POST["name"]))
{
  $name = $_POST["name"];
  echo $name;
} 
else 
{
  $name = null;
  echo "no name supplied";
}
if (isset($_POST["email"]))
{
  $email = $_POST["email"];
  echo $email;
} 
else 
{
  $email = null;
  echo "no email supplied";
}
if (isset($_POST["body"]))
{
  $body = $_POST["body"];
  echo $body;
} 
else 
{
  $body = null;
  echo "no body supplied";
}

mysqli_select_db($mysqli,"contactme");
$sql = "INSERT INTO contact (SenderName, Email, Body) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[body]')";
$result = $mysqli->query($sql);

$mysqli->close();
?>