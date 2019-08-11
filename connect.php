<?php
$dbuser = 'root';
$dbpass = '';
$db = 'contactme';
$mysqli = new Mysqli('localhost', $dbuser, $dbpass, $db);

if (!$mysqli) {
    die('Could not connect: ' . mysqli_error($mysqli));
}

?>