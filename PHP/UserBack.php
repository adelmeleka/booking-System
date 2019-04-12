<?php
include_once "PHP/Global.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HotelSystem";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userID = 0;
if (!isset($_SESSION)) {
    session_start();
    $userID =  $_SESSION['UserID'];
}

$sql = "CALL GetUserReservation(". $userID.");";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i = $i + 1;
        echo " <tr>
            <th scope='row'>" . $i . "</th>
            <td>" . $row["Hotel_name"] . "</td>
            <td>" . $row['Check_in_date'] . "</td>
            <td>" . $row["Check_out_date"] . "</td>
            <td>" . $row["Checked_in"] . "</td>
            <td>" . $row["Amout_to_pay"] . "</td>
        </tr>";
       
        // echo getCurrentID();
        // echo "Owner_name: " . $row['Owner_name']. " - Hotel_name: " . $row['Hotel_name']. " Amout_to_pay:" . $row["Amout_to_pay"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
