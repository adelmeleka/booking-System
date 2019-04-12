<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HotelSystem";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$getDate = "SELECT  DATE(NOW()) AS Date;";
$currentDate = $conn->query($getDate);
$currentDate = mysqli_fetch_assoc($currentDate);

$sql = "CALL BrokerUsers();";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i = $i + 1;
        $r = "'" . $row["User_ID"] . "'";
        if ($row["Checked_in"] == null && $currentDate["Date"] == $row["Check_in_date"]) {
            echo " <tr>
            <th scope='row'>" . $i . "</th>
            <td>" . $row["User_name"] . "</td>
            <td>" . $row['Hotel_name'] . "</td>
            <td>" . $row["Room_ID"] . "</td>
            <td>" . $row["Check_in_date"] . "</td>
            <td>" . $row["Check_out_date"] . "</td>
            <td> No </td>
            <td> <button   onclick = 'userSuspend(&#34;" . $row["User_ID"] . "&#34;)' type='button' class='btn btn-danger'>suspend</button> </td>
        </tr>";
        } else if ($row["Checked_in"] == null) {
            echo " <tr>
            <th scope='row'>" . $i . "</th>
            <td>" . $row["User_name"] . "</td>
            <td>" . $row['Hotel_name'] . "</td>
            <td>" . $row["Room_ID"] . "</td>
            <td>" . $row["Check_in_date"] . "</td>
            <td>" . $row["Check_out_date"] . "</td>
            <td>Waiting</td>
            <td></td>
        </tr>";
        } else {
            echo " <tr>
            <th scope='row'>" . $i . "</th>
            <td>" . $row["User_name"] . "</td>
            <td>" . $row['Hotel_name'] . "</td>
            <td>" . $row["Room_ID"] . "</td>
            <td>" . $row["Check_in_date"] . "</td>
            <td>" . $row["Check_out_date"] . "</td>
            <td>Checked In</td>
            <td></td>
        </tr>";
        }

        // echo "Owner_name: " . $row['Owner_name']. " - Hotel_name: " . $row['Hotel_name']. " Amout_to_pay:" . $row["Amout_to_pay"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
