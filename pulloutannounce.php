<?php

$mysqli = new mysqli("9.127.37.189", "root", "IMS1bmsg", "imsithelpcentral");

    if($mysqli === false)
        {
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM itannouncement";
        $result = $mysqli->query($sql);


            echo "<table border='0' width='530rem' align='center' cellspacing='0'>

            <tr>
            <th></th>
            </tr>";

            while($row = mysqli_fetch_array($result))
                    {
                        
                        echo "<tr>";
                        echo "<td align='right'><font color='black' size='2' font face='Verdana'>" . $row['Date'] . "</font></td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<td><font color='blue' size='4.5' font face='Verdana' align text='right'>" . $row['Subject'] . "</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<td align='justify'><font color='black' size='3' font face='Verdana' align text='right'>" . $row['Content'] . "</td>";
                        echo "</tr>";

                    }
            echo "</table>";
        
        $mysqli->close();
?>
