<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HotelSystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$getDate = "SELECT  DATE(NOW()) AS Date;";
$currentDate = $conn->query($getDate);
$currentDate = mysqli_fetch_assoc($currentDate);

$userID = 0;
// if (!isset($_SESSION)) {
//     session_start();
//     $userID = $_SESSION['UserID'];
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"yessssssssssssssssss";

    foreach ($_POST as $key => $value) {
        echo $key;
        echo ">>>>";
        echo $value;
        echo "<br/>";
    }

    $location =$_POST["location"];

    $sql = "CALL UpdateAvailableRoo ms();";
    $result = $conn->query($sql);

    $sql = "CALL Search(
	0,
	0,
 	0,
    0,
    0,
    0,
    Gizeh,
    1
);";

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

}

//                        <div class="card ">
//                         <div class="card-header">
//                             <img src="Assets/florence1.jpg" class="card-img-top">
//                         </div>
//                         <div class="card-block ">
//                             <div>
//                                 <span class="glyphicon glyphicon-star"></span>
//                                 <span class="glyphicon glyphicon-star"></span>
//                                 <span class="glyphicon glyphicon-star"></span>
//                                 <span class="glyphicon glyphicon-star-empty"></span>
//                                 <span class="glyphicon glyphicon-star-empty"></span>
//                             </div>

//                             <span>
//                                 <h4 class="card-title">Hotel Name</h4>
//                             </span>
//                             <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
//                             <p class="card-text choose_btn">price</p>

//                             <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">view</a>
//                             <a href="#" class="btn btn-primary ">Choose</a>
//                         </div>
//                     </div>
