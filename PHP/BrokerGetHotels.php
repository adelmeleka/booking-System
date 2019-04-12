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

$sql = "CALL BrokerHotels();";
$result = $conn->query($sql);
// echo $result;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $i =$i+1;
        if($row["Amout_to_pay"] == 0){
            echo " <tr>
            <th scope='row'>" .$i. "</th>
            <td>" . $row["Owner_name"]. "</td>
            <td>". $row['Hotel_name']. "</td>
            <td>". $row["Amout_to_pay"]. "</td>
            <td>
            </td>
        </tr>";
            }else{
            echo " <tr>
            <th scope='row'>" .$i. "</th>
            <td>" . $row["Owner_name"]. "</td>
            <td>". $row['Hotel_name']. "</td>
            <td>". $row["Amout_to_pay"]. "</td>
            <td> <button   onclick = 'hotelSuspend(&#34;".$row["Hotel_ID"]."&#34;)' type='button' class='btn btn-danger'>suspend</button> </td>
            </td>
        </tr>";
            }
    }
} else {
    $r="hide";
    echo "noo";
}
mysqli_close($conn);
?>
