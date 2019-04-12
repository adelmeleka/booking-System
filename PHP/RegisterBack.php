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
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $urname = $_POST["firstname"] . $_POST["lastname"];
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
    $selectUsers = "CALL SearchUsers( '$urname', '$email');";
    $usersFoundResult = mysqli_query($GLOBALS['conn'], $selectUsers);

    $selectHotelOwner = "CALL SearchHotelOwner( '$urname', '$email');";
    $hotelOwnersFoundResult  =mysqli_query($GLOBALS['conn'], $selectHotelOwner);

    if (mysqli_num_rows($usersFoundResult) > 0) {
        $error = "you are registered";
    } else if(mysqli_num_rows($selectHotelOwner) > 0){
        $error = "you are registered";
    }
    else {

        $sql = "CALL SignUp ($hotelOwner,$booker,'$urname','$email','$passwd');";
        if (mysqli_query($GLOBALS['conn'], $sql)) {
            if($hotelOwner){
                header("location:HotelOwner.php");
            }else{
                header("location:Search.php");
            }
        } else {
            $error = "somesing went wrong please try again";
        }
    }
}