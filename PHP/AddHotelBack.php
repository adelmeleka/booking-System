<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HotelSystem";

$singleRoomsChecked = 0;
$doubleRoomsChecked = 0;
$tripleRoomsChecked = 0;
$suiteRoomsChecked = 0;

$singlRroomsNumber = 0;
$doubleRoomsNumber = 0;
$tripleRoomsNumber = 0;
$suiteRoomsNumber = 0;

$singlRroomsPrices = 0;
$doubleRoomsPrices = 0;
$tripleRoomsPrices = 0;
$suiteRoomsPrices = 0;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "yesssssssssss";

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $hotelName = $_POST["hotelname"];
    $hotelStarsNumber = $_POST["starsnumber"];
    $hotelLocation = $_POST["location"];
    $isPremium = 0;

    if (!empty($_POST['premium'])) {
        $isPremium = $_POST["premium"];
    }

    // foreach ($_POST as $key => $value) {
    //     echo $key;
    //     echo ">>>>";
    //     echo $value;
    //     echo "<br/>";
    // }

    if (!empty($_POST['singlerooms'])) {
        $singleRoomsChecked = 1;
        $singlRroomsNumber = $_POST["singleroomsnumber"];
        $singlRroomsPrices = $_POST["singleroomsprice"];
    }
    if (!empty($_POST['doubleroom'])) {
        $doubleRoomsChecked = 1;
        $doubleRoomsNumber = $_POST["doubleroomsnumber"];
        $doubleRoomsPrices = $_POST["doubleroomsprice"];
    }
    if (!empty($_POST['tripleroom'])) {
        $tripleRoomsChecked = 1;
        $tripleRoomsNumber = $_POST["tripleroomsnumber"];
        $tripleRoomsPrices = $_POST["tripleroomsprice"];
    }
    if (!empty($_POST['suite'])) {
        $suiteRoomsChecked = 1;
        $suiteRoomsNumber = $_POST["suitesroomsnumber"];
        $suiteRoomsPrices = $_POST["suitesroomsprice"];
    }

    $addNewHotelSQL = "CALL AddNewHotel
    (
        1,
        '$hotelName',
        $hotelStarsNumber,
        '$hotelLocation',
        $isPremium,
        $singleRoomsChecked,
        $singlRroomsNumber,
        $singlRroomsPrices,
        $doubleRoomsChecked,
        $doubleRoomsNumber,
        $doubleRoomsPrices,
        $tripleRoomsChecked,
        $tripleRoomsNumber,
        $tripleRoomsPrices,
        $suiteRoomsChecked,
        $suiteRoomsNumber,
        $suiteRoomsPrices
    );";

    if (mysqli_query($GLOBALS['conn'], $addNewHotelSQL)) {
        $sql = "SELECT Hotel_ID FROM Hotel WHERE Hotel_name = '$hotelName'";
        $results = $conn->query($sql);
        $row = mysqli_fetch_assoc($results);
        $HotelID = $row["Hotel_ID"];
        echo $HotelID;
        if ($singleRoomsChecked) {
            foreach ($_POST['singleroomsfacilities'] as $selectedOption) {
                $sql = "INSERT INTO Room_Facilities (Hotel_room_type_ID, Hotel_ID, Room_facility) VALUES ('1', '$HotelID', '$selectedOption')";
                mysqli_query($GLOBALS['conn'], $sql);
            }
        }if ($doubleRoomsChecked) {
            foreach ($_POST['doubleroomsfacilities'] as $selectedOption) {
                $sql = "INSERT INTO Room_Facilities (Hotel_room_type_ID, Hotel_ID, Room_facility) VALUES ('2', '$HotelID', '$selectedOption')";
                mysqli_query($GLOBALS['conn'], $sql);
            }
        }if ($tripleRoomsChecked) {
            foreach ($_POST['tripleroomsfacilities'] as $selectedOption) {
                $sql = "INSERT INTO Room_Facilities (Hotel_room_type_ID, Hotel_ID, Room_facility) VALUES ('3', '$HotelID', '$selectedOption')";
                mysqli_query($GLOBALS['conn'], $sql);
            }
        }if ($suiteRoomsChecked) {
            foreach ($_POST['suitesroomsfacilities'] as $selectedOption) {
                $sql = "INSERT INTO Room_Facilities (Hotel_room_type_ID, Hotel_ID, Room_facility) VALUES ('4', '$HotelID', '$selectedOption')";
                mysqli_query($GLOBALS['conn'], $sql);
            }
        }
        insetHotelImage($hotelName);
        echo "el7777";
    } else {
        echo "CALL AddNewHotel
        (
            1,
            '$hotelName',
            $hotelStarsNumber,
            '$hotelLocation',
            $isPremium,
            $singleRoomsChecked,
            $singlRroomsNumber,
            $singlRroomsPrices,
            $doubleRoomsChecked,
            $doubleRoomsNumber,
            $doubleRoomsPrices,
            $tripleRoomsChecked,
            $tripleRoomsNumber,
            $tripleRoomsPrices,
            $suiteRoomsChecked,
            $suiteRoomsNumber,
            $suiteRoomsPrices
        );";
    }

}

function insetHotelImage($hotelName)
{

    $target_dir = "uploads/";
    $uploadOk = 1;
    $target_file = $target_dir . basename($_FILES["hotelimage"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["hotelimage"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["hotelimage"]["size"] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        $temp = explode(".", $_FILES["hotelimage"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        if (!file_exists('uploads/' . $hotelName)) {
            echo $hotelName;
            mkdir('uploads/' . $hotelName, 777, true);
            $wantedDir = 'uploads/' . $hotelName . "/";
            if (move_uploaded_file($_FILES["hotelimage"]["tmp_name"], $wantedDir . "Hotel" . "." . $imageFileType)) {
                echo "The file " . basename($_FILES["hotelimage"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
