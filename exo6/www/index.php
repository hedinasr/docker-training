<?php
// The database hostname correspond to the service name
// in the docker-compose.yml file.
$database = "db";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

// Connecting to MariaDB.
$mysqli = new mysqli($database, $username, $password);

// Check connection.
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully";
?>
