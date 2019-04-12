<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Cs/AddHotel.css">
    <link rel="stylesheet" href="dist/semantic.min.css">
    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="Js/jQuery3.3.1.js"></script>
    <script type="text/javascript" src="Js/AddHotel.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>
    <script type="text/javascript" src="dist/semantic.js"></script>

    <style type="text/css">
        body{
        margin:5%;
        }

        .error{
        color: red;
        }
    </style>

</head>

<body class="body">

<?php
    include_once "PHP/AddHotelBack.php";
  ?>

    <div class="container">

        <!-- <form> -->
        <!-- onsubmit="return validateNewHotel(document.AddHotelForm);" -->
        <form id="AddHotel" name="AddHotelForm" class="" enctype="multipart/form-data" method="POST" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

            <div class="form-group">
                <label for="hotel_name">Hotel Name</label>
                <input type="text" name="hotelname" class="form-control" id="hotel_name" placeholder="Hotel Name">
                <small id="hotel_name_error" class="error hide"></small>

            </div>

            <div class="form-group">
                <label for="star_number">Stars Number</label>
                <select class="ui fluid selection dropdown " name="starsnumber" id="star_number">
                    <option value="">Star Number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <small id="stars_number_select_error" class="error hide"></small>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <select name="location" id="location" class="ui fluid search selection dropdown" data-live-search="true">
                    <option value="">Select Place</option>
                    <option class="item" data-value="Cairo">Cairo</option>
                    <option class="item" data-value="Alexandria">Alexandria</option>
                    <option class="item" data-value="Gizeh">Gizeh</option>
                    <option class="item" data-value="Shubra El-Kheima">Shubra El-Kheima</option>
                    <option class="item" data-value="Port Said">Port Said</option>
                    <option class="item" data-value="Suez">Suez</option>
                    <option class="item" data-value="Luxor">Luxor</option>
                    <option class="item" data-value="al-Mansura">al-Mansura</option>
                    <option class="item" data-value="El-Mahalla El-Kubra">El-Mahalla El-Kubra</option>
                    <option class="item" data-value="Tanta">Tanta</option>
                    <option class="item" data-value="Asyut">Asyut</option>
                    <option class="item" data-value="Ismailia">Ismailia</option>
                    <option class="item" data-value="Fayyum">Fayyum</option>
                    <option class="item" data-value="Zagazig">Zagazig</option>
                    <option class="item" data-value="Aswan">Aswan</option>
                    <option class="item" data-value="Damietta">Damietta</option>
                    <option class="item" data-value="Damanhur">Damanhur</option>
                    <option class="item" data-value="al-Minya">al-Minya</option>
                    <option class="item" data-value="Beni Suef">Beni Suef</option>
                    <option class="item" data-value="Qena">Qena</option>
                    <option class="item" data-value="Sohag">Sohag</option>
                    <option class="item" data-value="Hurghada">Hurghada</option>
                    <option class="item" data-value="6th of October City">6th of October City</option>
                    <option class="item" data-value="Shibin El Kom">Shibin El Kom</option>
                </select>
                <small id="location_select_error" class="error hide"></small>
            </div>

            <div class="form-group">
                <label for="hotel_image">Hotel Image</label>
                <input type="file" name="hotelimage" class="form-control-file" id="hotel_image">
                <small id="upload_image_error" class="error hide"></small>
            </div>


            <div class="form-group" data-toggle="tooltip" data-placement="top" title="this makes your hotel appears first in the search result and you have to pay 100$ pear mounth ">
                <label class=" tooltip_pointer" for="is_primary">Premium Hotel</label>
                <input type="checkbox" name="premium" id="is_primary" class="btn btn-secondary">
            </div>


            <hr />
            <span style="float:right" class="glyphicon glyphicon-chevron-up hide" id="single_hide" onclick="hideDiv('single_rooms')"></span>
            <span style="float:right" class="glyphicon glyphicon-chevron-down hide" id="single_show" onclick="hideDiv('single_rooms')"></span>

            <div>
                <div class="form-group">
                    <input type="checkbox" name="singlerooms" class="custom-control-input" id="singe_room" onclick="addRoomsType('single_rooms','singe_room')">
                    <label class="custom-control-label" for="singe_room">Single Room</label>
                </div>

                <div id="single_rooms" class="hide">
                    <div class="form-group">
                        <label for="single_rooms_number">Number Of Rooms </label>
                        <input type="number" name="singleroomsnumber" class="form-control" id="single_rooms_number" placeholder="Number Of Rooms"
                            min="1" onkeypress="return numberOfRoomsVerify()">
                            <small id="single_rooms_number_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="single_rooms_price">Price <p style="color:rgba(0, 0, 0, 0.6)">(price per night)</p></label>
                        <input type="number" name="singleroomsprice" class="form-control" id="single_rooms_price" placeholder="Price" min="1"
                            onkeypress="return numberOfRoomsVerify()">
                            <small id="single_rooms_price_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="single_rooms_images">Rooms Images</label>
                        <input type="file" name="singleroomsimages" class="form-control-file" id="single_rooms_images" multiple>
                        <small id="single_rooms_images_error" class="error hide"></small>
                    </div>

                    <div class="ui form-group">
                        <label for="single_rooms_facilities">Facilities</label>
                        <select name="singleroomsfacilities[]" id="single_rooms_facilities" class="ui fluid multiple selection dropdown " multiple="multiple">
                            <option data-value="Free Wi-Fi">Free Wi-Fi</option>
                            <option data-value="Aircondition">Aircondition</option>
                            <option data-value="TV">TV</option>
                            <option data-value="Blackout curtains">Blackout curtains</option>
                            <option data-value="Coffee and tea">Coffee and tea</option>
                            <option data-value="Hairdryer">Hairdryer</option>
                            <option data-value="Safe box">Safe box</option>
                            <option data-value="Desk and chair">Desk and chair</option>
                            <option data-value="Bathtub or shower">Bathtub or shower</option>
                            <option data-value="Telephone">Telephone</option>
                            <option data-value="Radio">Radio</option>
                            <option data-value="Iron with ironing board">Iron with ironing board</option>
                        </select>
                        <small id="single_rooms_facilities_error" class="error hide"></small>
                    </div>
                </div>

            </div>

            <hr />
            <span style="float:right" class="glyphicon glyphicon-chevron-up hide" id="double_hide" onclick="hideDiv('double_rooms')"></span>
            <span style="float:right" class="glyphicon glyphicon-chevron-down hide" id="double_show" onclick="hideDiv('double_rooms')"></span>

            <div>
                <div class="form-group">
                    <input type="checkbox" name="doubleroom" class="custom-control-input" id="double_room" onclick="addRoomsType('double_rooms','double_room')">
                    <label class="custom-control-label" for="double_room">Double Room</label>
                </div>
                <div id="double_rooms" class="hide">

                    <div class="form-group">
                        <label for="double_rooms_number">Number Of Rooms </label>
                        <input type="number" name="doubleroomsnumber" class="form-control" id="double_rooms_number" placeholder="Number Of Rooms"
                            min="1" onkeypress="return numberOfRoomsVerify()">
                            <small id="double_rooms_number_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="double_rooms_price">Price <p style="color:rgba(0, 0, 0, 0.6)">(price per night)</p></label>
                        <input type="number" name="doubleroomsprice" class="form-control" id="double_rooms_price" placeholder="Price" min="1"
                            onkeypress="return numberOfRoomsVerify()">
                            <small id="double_rooms_price_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="double_rooms_images">Rooms Images</label>
                        <input type="file" name="doubleroomsimages" class="form-control-file" id="double_rooms_images" multiple>
                        <small id="double_rooms_images_error" class="error hide"></small>
                    </div>

                    <div class="ui form-group">
                        <label for="double_rooms_facilities">Facilities</label>
                        <select name="facilities" name="doubleroomsfacilities[]" id="double_rooms_facilities" class="ui fluid multiple selection dropdown "
                            multiple>
                            <option data-value="Free Wi-Fi">Free Wi-Fi</option>
                            <option data-value="Aircondition">Aircondition</option>
                            <option data-value="TV">TV</option>
                            <option data-value="Blackout curtains">Blackout curtains</option>
                            <option data-value="Coffee and tea facilities">Coffee and tea facilities</option>
                            <option data-value="Hairdryer">Hairdryer</option>
                            <option data-value="Safe box">Safe box</option>
                            <option data-value="Desk and chair">Desk and chair</option>
                            <option data-value="Bathtub or shower">Bathtub or shower</option>
                            <option data-value="Telephone">Telephone</option>
                            <option data-value="Radio">Radio</option>
                            <option data-value="Iron with ironing board">Iron with ironing board</option>
                        </select>
                        <small id="double_rooms_facilities_error" class="error hide"></small>
                    </div>
                </div>
            </div>


            <hr />
            <span style="float:right" class="glyphicon glyphicon-chevron-up hide" id="triple_hide" onclick="hideDiv('triple_rooms')"></span>
            <span style="float:right" class="glyphicon glyphicon-chevron-down hide" id="triple_show" onclick="hideDiv('triple_rooms')"></span>

            <div>
                <div class="form-group">
                    <input type="checkbox" name="tripleroom" class="custom-control-input" id="triple_room" onclick="addRoomsType('triple_rooms','triple_room')">
                    <label class="custom-control-label" for="triple_room">triple Room</label>
                </div>
                <div id="triple_rooms" class="hide">

                    <div class="form-group">
                        <label for="triple_rooms_number">Number Of Rooms </label>
                        <input type="number" name="tripleroomsnumber" class="form-control" id="triple_rooms_number" placeholder="Number Of Rooms"
                            min="1" onkeypress="return numberOfRoomsVerify()">
                            <small id="triple_rooms_number_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="triple_rooms_price">Price <p style="color:rgba(0, 0, 0, 0.6)">(price per night)</p></label>
                        <input type="number" name="tripleroomsprice" class="form-control" id="triple_rooms_price" placeholder="Price" min="1"
                            onkeypress="return numberOfRoomsVerify()">
                            <small id="triple_rooms_price_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="triple_rooms_images">Rooms Images</label>
                        <input type="file" name="tripleroomsimages" class="form-control-file" id="triple_rooms_images" multiple>
                        <small id="triple_rooms_images_error" class="error hide"></small>
                    </div>

                    <div class="ui form-group">
                        <label for="triple_rooms_facilities">Facilities</label>
                        <select name="facilities" name="tripleroomsfacilities[]" id="triple_rooms_facilities" class="ui fluid multiple selection dropdown "
                            multiple>
                            <option data-value="Free Wi-Fi">Free Wi-Fi</option>
                            <option data-value="Aircondition">Aircondition</option>
                            <option data-value="TV">TV</option>
                            <option data-value="Blackout curtains">Blackout curtains</option>
                            <option data-value="Coffee and tea facilities">Coffee and tea facilities</option>
                            <option data-value="Hairdryer">Hairdryer</option>
                            <option data-value="Safe box">Safe box</option>
                            <option data-value="Desk and chair">Desk and chair</option>
                            <option data-value="Bathtub or shower">Bathtub or shower</option>
                            <option data-value="Telephone">Telephone</option>
                            <option data-value="Radio">Radio</option>
                            <option data-value="Iron with ironing board">Iron with ironing board</option>
                        </select>
                        <small id="triple_rooms_facilities_error" class="error hide"></small>
                    </div>
                </div>
            </div>


            <hr />
            <span style="float:right" class="glyphicon glyphicon-chevron-up hide" id="suites_hide" onclick="hideDiv('suites_rooms')"></span>
            <span style="float:right" class="glyphicon glyphicon-chevron-down hide" id="suites_show" onclick="hideDiv('suites_rooms')"></span>

            <div>
                <div class="form-group">
                    <input type="checkbox" name="suite" class="custom-control-input" id="suite" onclick="addRoomsType('suites_rooms','suite')">
                    <label class="custom-control-label" for="suite">Suites</label>
                </div>
                <div id="suites_rooms" class="hide">

                    <div class="form-group">
                        <label for="suites_rooms_number">Number Of Rooms </label>
                        <input type="number" class="form-control" name="suitesroomsnumber" id="suites_rooms_number" placeholder="Number Of Rooms"
                            min="1" onkeypress="return numberOfRoomsVerify()">
                            <small id="suites_rooms_number_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="suites_rooms_price">Price <p style="color:rgba(0, 0, 0, 0.6)">(price per night)</p></label>
                        <input type="number" name="suitesroomsprice" class="form-control" id="suites_rooms_price" placeholder="Price" min="1"
                            onkeypress="return numberOfRoomsVerify()">
                            <small id="suites_rooms_price_error" class="error hide"></small>
                    </div>

                    <div class="form-group">
                        <label for="suites_rooms_images">Rooms Images</label>
                        <input type="file" name="suitesroomsimages" class="form-control-file" id="suites_rooms_images" multiple>
                        <small id="suites_rooms_images_error" class="error hide"></small>
                    </div>

                    <div class="ui form-group">
                        <label for="suites_rooms_facilities">Facilities</label>

                        <select name="facilities" name="suitesroomsfacilities[]" id="suites_rooms_facilities" class="ui fluid multiple selection dropdown "
                            multiple>
                            <option data-value="Free Wi-Fi">Free Wi-Fi</option>
                            <option data-value="Aircondition">Aircondition</option>
                            <option data-value="TV">TV</option>
                            <option data-value="Blackout curtains">Blackout curtains</option>
                            <option data-value="Coffee and tea facilities">Coffee and tea facilities</option>
                            <option data-value="Hairdryer">Hairdryer</option>
                            <option data-value="Safe box">Safe box</option>
                            <option data-value="Desk and chair">Desk and chair</option>
                            <option data-value="Bathtub or shower">Bathtub or shower</option>
                            <option data-value="Telephone">Telephone</option>
                            <option data-value="Radio">Radio</option>
                            <option data-value="Iron with ironing board">Iron with ironing board</option>
                        </select>
                        <small id="suites_rooms_facilities_error" class="error hide"></small>
                    </div>
                </div>
            </div>
            <hr />

            
            <div class="btn-block col-md-10">
            <a href="AddHotle.php" class="btn btn-primary">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                <p id="no_selected_room_error" class="error hide"></p>
            </div>
        </form>

    </div>

</body>

</html>


<!-- onclick="validateNewHotel()" -->
