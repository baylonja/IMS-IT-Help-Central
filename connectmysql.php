<?php

    $servername = "9.127.37.189";
    $username = "root";
    $password = "IMS1bmsg";
    $dbname = "imsithelpcentral";

  // Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>