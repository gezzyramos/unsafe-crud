<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$hostname = 'db-crud';

// Database use name
$username = 'gezzy';

//database user password
$password = 'gezzy';

$database = 'unsafe-crud';

// check the MySQL connection status
$db = new mysqli($hostname, $username, $password, $database);
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
