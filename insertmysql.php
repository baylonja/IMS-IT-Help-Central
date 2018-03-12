<?php

$mysqli = new mysqli("9.127.37.189", "root", "IMS1bmsg", "imsithelpcentral");

    if($mysqli === false)
        {
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }

        $Date = $mysqli->real_escape_string($_REQUEST['Date']);
        $Subject = $mysqli->real_escape_string($_REQUEST['Subject']);
        $Content = $mysqli->real_escape_string($_REQUEST['Content']);

        $sql = "INSERT INTO itannouncement (Date, Subject, Content) VALUES ('$Date', '$Subject', '$Content')";

        if($mysqli->query($sql) === true){
        
            echo "Records inserted successfully.";
        
        } else{
        
            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
        
        }

        $mysqli->close();

?>

<!-- $servername = "9.127.37.189";
$username = "root";
$password = "IMS1bmsg";
$dbname = "imsithelpcentral";

$conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } -->


<!-- $sql = "INSERT INTO itannouncement (Date, Subject, Content) VALUES
        ('{$mysqli->real_escape_string($_POST['Date'])}',
        '{$mysqli->real_escape_string($_POST['Subject'])}',
        '{$mysqli->real_escape_string($_POST['Content'])}')"; -->