<?php
include_once "PHP/Global.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HotelSystem";
$error = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $hotelOwner = 0;
        $booker = 0;
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];

        if ($_POST["boker_or_owner"] == "hotel_owner") {
            $hotelOwner = 1;
            $booker = 0;
        } else {
            $hotelOwner = 0;
            $booker = 1;
        }
        // echo "$hotelOwner,$booker,'$email','$passwd'";
        $result = 0;
        $sql = "CALL SignIn ($hotelOwner,$booker,'$email','$passwd');";
        $result = mysqli_query($conn, $sql);

        if ((mysqli_num_rows($result) == 1)) {
            $row = mysqli_fetch_assoc($result);
            // echo "" . $row["User_ID"] . "";
            if($hotelOwner){
                session_start();
            $id = $row["User_ID"];
            $_SESSION['HotelOwnerID'] = $id;
            header("location:HotelOwner.php");
            }else{  
            session_start();
            $id = $row["User_ID"];
            $_SESSION['UserID'] = $id;
            // echo  $_SESSION['id'];
                header("location:User.php");
            }
        } else {
            $error = "Email or Password is Wrong";
        }
    }
}
