function numberOfRoomsVerify() {
    console.log(event.charCode);

    if (event.charCode == 0) {
        console.log(event.charCode);
        return false;
    }
    return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57;
}


function addRoomsType(id, checkboxid) {
    var checkbox = document.getElementById(checkboxid);
    if (checkbox.checked == true) {
        document.getElementById(id).classList.remove('hide');
        switch (id) {
            case 'single_rooms':
                document.getElementById('single_hide').classList.remove('hide');
                document.getElementById('single_show').classList.add('hide');
                break;
            case 'double_rooms':
                document.getElementById('double_hide').classList.remove('hide');
                document.getElementById('double_show').classList.add('hide');
                break;
            case 'triple_rooms':
                document.getElementById('triple_hide').classList.remove('hide');
                document.getElementById('triple_show').classList.add('hide');
                break;
            case 'suites_rooms':
                document.getElementById('suites_hide').classList.remove('hide');
                document.getElementById('suites_show').classList.add('hide');
                break;
        }
    } else {
        document.getElementById(id).classList.add('hide');
        switch (id) {
            case 'single_rooms':
                document.getElementById('single_hide').classList.add('hide');
                document.getElementById('single_show').classList.add('hide');
                break;
            case 'double_rooms':
                document.getElementById('double_hide').classList.add('hide');
                document.getElementById('double_show').classList.add('hide');
                break;
            case 'triple_rooms':
                document.getElementById('triple_hide').classList.add('hide');
                document.getElementById('triple_show').classList.add('hide');
                break;
            case 'suites_rooms':
                document.getElementById('suites_hide').classList.add('hide');
                document.getElementById('suites_show').classList.add('hide');
                break;

        }
    }
}

function hideDiv(id) {
    document.getElementById(id).classList.toggle('hide');
    switch (id) {
        case 'single_rooms':
            document.getElementById('single_hide').classList.toggle('hide');
            document.getElementById('single_show').classList.toggle('hide');
            break;
        case 'double_rooms':
            document.getElementById('double_hide').classList.toggle('hide');
            document.getElementById('double_show').classList.toggle('hide');
            break;
        case 'triple_rooms':
            document.getElementById('triple_hide').classList.toggle('hide');
            document.getElementById('triple_show').classList.toggle('hide');
            break;
        case 'suites_rooms':
            document.getElementById('suites_hide').classList.toggle('hide');
            document.getElementById('suites_show').classList.toggle('hide');
            break;

    }
}



$(document).ready(function () {
    $('.ui.dropdown').dropdown();
});


function validateNewHotel(form) {
    var thereIsError = false;
    var hotelNameError = document.getElementById("hotel_name_error");
    var starNumberError = document.getElementById("stars_number_select_error");
    var LocationSelectError = document.getElementById("location_select_error");
    var uploadImageError = document.getElementById("upload_image_error");

    var hotelName = document.getElementById("hotel_name");
    hotelName = hotelName.value;
    if (hotelName === "") {
        hotelNameError.classList.remove("hide");
        hotelNameError.innerHTML = "Hotel Name is Required";
        thereIsError = true;
    } else {
        hotelNameError.classList.add("hide");
    }

    var hotelStars = document.getElementById("star_number");
    hotelStars = hotelStars.value;
    if (hotelStars == 0) {
        starNumberError.classList.remove("hide");
        starNumberError.innerHTML = "Hotel Stars is Required";
        thereIsError = true;
    } else {
        starNumberError.classList.add("hide");

    }

    var hotelLocation = document.getElementById("location");
    hotelLocation = hotelLocation.value;
    if (hotelLocation == "") {
        LocationSelectError.classList.remove("hide");
        LocationSelectError.innerHTML = "Hotel location is Required";
        thereIsError = true;
    } else {
        LocationSelectError.classList.add("hide");

    }

    // var hotelImage = document.getElementById("hotel_image");
    // hotelImage = hotelImage.value;
    // console.log(hotelImage);
    // if (hotelImage == 0) {
    //     uploadImageError.classList.remove("hide");
    //     uploadImageError.innerHTML = "Hotel image is needed";
    //     thereIsError = true;
    // } else {
    //     uploadImageError.classList.add("hide");
    // }


    var singleRooms = $('#singe_room').is(':checked');

    var doubleRooms = $('#double_room').is(':checked');

    var tripleRooms = $('#triple_room').is(':checked');

    var suiteRooms = $('#suite').is(':checked');

    var atLestOneChecked = false;

    if (singleRooms === true) {
        var singleRoomsNumberError = document.getElementById("single_rooms_number_error");
        var singleRoomsRriceError = document.getElementById("single_rooms_price_error");
        var singleRoomsImagesError = document.getElementById("single_rooms_images_error");
        var singleRoomsFacilitiesError = document.getElementById("single_rooms_facilities_error");

        console.log(singleRooms);
        atLestOneChecked = true;

        var singleRoomsNumber = document.getElementById("single_rooms_number");
        singleRoomsNumber = singleRoomsNumber.value;
        console.log(singleRoomsNumber);
        if (singleRoomsNumber == 0) {
            singleRoomsNumberError.classList.remove("hide");
            singleRoomsNumberError.innerHTML = "singleRoomsNumber is Required";
            thereIsError = true;
            console.log("singleRoomsNumber is Required");
        } else {
            singleRoomsNumberError.classList.add("hide");
        }

        var singlePrice = document.getElementById("single_rooms_price");
        singlePrice = singlePrice.value;
        console.log(singlePrice);
        if (singlePrice == 0) {
            singleRoomsRriceError.classList.remove("hide");
            singleRoomsRriceError.innerHTML = "singlePrice is Required";
            thereIsError = true;
            console.log("singlePrice is Required");
        } else {
            singleRoomsRriceError.classList.add("hide");
        }

        // var singleRoomsImages = document.getElementById("single_rooms_images");
        // singleRoomsImages = singleRoomsImages.value;
        // console.log(singleRoomsImages);
        // if (singleRoomsImages == 0) {
        //     singleRoomsImagesError.classList.remove("hide");
        //     singleRoomsImagesError.innerHTML = "singleRoomsImages is Required";
        //     thereIsError = true;
        //     console.log("singleRoomsImages is Required");
        // } else {
        //     singleRoomsImagesError.classList.add("hide");
        // }

        var singleRoomsFacilities = document.getElementById("single_rooms_facilities");
        singleRoomsFacilities = singleRoomsFacilities.value;
        console.log(singleRoomsFacilities);
        if (singleRoomsFacilities == 0) {
            singleRoomsFacilitiesError.classList.remove("hide");
            singleRoomsFacilitiesError.innerHTML = "singleRoomsFacilities is Required";
            thereIsError = true;
            console.log("singleRoomsFacilities is Required");
        } else {
            singleRoomsFacilitiesError.classList.add("hide");
        }
    }


    if (doubleRooms === true) {
        var doubleRoomsNumberError = document.getElementById("double_rooms_number_error");
        var doubleRoomsRriceError = document.getElementById("double_rooms_price_error");
        var doubleRoomsImagesError = document.getElementById("double_rooms_images_error");
        var doubleRoomsFacilitiesError = document.getElementById("double_rooms_facilities_error");

        console.log(doubleRooms);
        atLestOneChecked = true;

        var doubleRoomsNumber = document.getElementById("double_rooms_number");
        doubleRoomsNumber = doubleRoomsNumber.value;
        console.log(doubleRoomsNumber);
        if (doubleRoomsNumber == 0) {
            doubleRoomsNumberError.classList.remove("hide");
            doubleRoomsNumberError.innerHTML = "doubleRoomsNumber is Required";
            thereIsError = true;
        } else {
            doubleRoomsNumberError.classList.add("hide");
        }

        var doublePrice = document.getElementById("double_rooms_price");
        doublePrice = doublePrice.value;
        console.log(doublePrice);
        if (doublePrice == 0) {
            doubleRoomsRriceError.classList.remove("hide");
            doubleRoomsRriceError.innerHTML = "double  Rooms Price is Required";
            thereIsError = true;
        } else {
            doubleRoomsRriceError.classList.add("hide");
        }

        var doubleRoomsImages = document.getElementById("double_rooms_images");
        doubleRoomsImages = doubleRoomsImages.value;
        console.log(doubleRoomsImages);
        if (doubleRoomsImages == 0) {
            doubleRoomsImagesError.classList.remove("hide");
            doubleRoomsImagesError.innerHTML = "Double Rooms Images is Required";
            thereIsError = true;
        } else {
            doubleRoomsImagesError.classList.add("hide");
        }

        var doubleRoomsFacilities = document.getElementById("double_rooms_facilities");
        doubleRoomsFacilities = doubleRoomsFacilities.value;
        console.log(doubleRoomsFacilities);
        if (doubleRoomsFacilities == 0) {
            doubleRoomsFacilitiesError.classList.remove("hide");
            doubleRoomsFacilitiesError.innerHTML = "Double Rooms Facilities is Required";
            thereIsError = true;
        } else {
            doubleRoomsFacilitiesError.classList.add("hide");
        }

    }
    if (tripleRooms === true) {
        var tripleRoomsNumberError = document.getElementById("triple_rooms_number_error");
        var tripleRoomsRriceError = document.getElementById("triple_rooms_price_error");
        var tripleRoomsImagesError = document.getElementById("triple_rooms_images_error");
        var tripleRoomsFacilitiesError = document.getElementById("triple_rooms_facilities_error");
        atLestOneChecked = true;

        var tripleRoomsNumber = document.getElementById("triple_rooms_number");
        tripleRoomsNumber = tripleRoomsNumber.value;
        console.log(tripleRoomsNumber);
        if (tripleRoomsNumber == 0) {
            tripleRoomsNumberError.classList.remove("hide");
            tripleRoomsNumberError.innerHTML = "triple Rooms Number is Required";
            thereIsError = true;
        } else {
            tripleRoomsNumberError.classList.add("hide");
        }

        var triplePrice = document.getElementById("triple_rooms_price");
        triplePrice = triplePrice.value;
        console.log(triplePrice);
        if (triplePrice == 0) {
            tripleRoomsRriceError.classList.remove("hide");
            tripleRoomsRriceError.innerHTML = "triple rooms Price is Required";
            thereIsError = true;
        } else {
            tripleRoomsRriceError.classList.add("hide");
        }

        var tripleRoomsImages = document.getElementById("triple_rooms_images");
        tripleRoomsImages = tripleRoomsImages.value;
        console.log(tripleRoomsImages);
        if (tripleRoomsImages == 0) {
            tripleRoomsImagesError.classList.remove("hide");
            tripleRoomsImagesError.innerHTML = "triple Rooms Images is Required";
            thereIsError = true;
        } else {
            tripleRoomsImagesError.classList.remove("hide");
        }

        var tripleRoomsFacilities = document.getElementById("triple_rooms_facilities");
        tripleRoomsFacilities = tripleRoomsFacilities.value;
        console.log(tripleRoomsFacilities);
        if (tripleRoomsFacilities == 0) {
            tripleRoomsFacilitiesError.classList.remove("hide");
            tripleRoomsFacilitiesError.innerHTML = "triple Rooms Facilities are Required";
            thereIsError = true;
        } else {
            tripleRoomsFacilitiesError.classList.remove("hide");
        }

    }
    if (suiteRooms === true) {
        var suiteRoomsNumberError = document.getElementById("suites_rooms_number_error");
        var suiteRoomsRriceError = document.getElementById("suites_rooms_price_error");
        var suiteRoomsImagesError = document.getElementById("suites_rooms_images_error");
        var suiteRoomsFacilitiesError = document.getElementById("suites_rooms_facilities_error");
            console.log(suiteRooms);
            atLestOneChecked = true;

            var suitesRoomsNumber = document.getElementById("suites_rooms_number");
            suitesRoomsNumber = suitesRoomsNumber.value;
            console.log(suitesRoomsNumber);
            if (suitesRoomsNumber == 0) {
                suiteRoomsNumberError.classList.remove("hide");
                suiteRoomsNumberError.innerHTML = "Suites Number is Required";
                thereIsError = true;
            }else{
                suiteRoomsNumberError.classList.add("hide");
            }

            var suitesPrice = document.getElementById("suites_rooms_price");
            suitesPrice = suitesPrice.value;
            console.log(suitesPrice);
            if (suitesPrice == 0) {
                suiteRoomsRriceError.classList.remove("hide");
                suiteRoomsRriceError.innerHTML = "Suites Price is Required";
                thereIsError = true;
            }else{
                suiteRoomsRriceError.classList.add("hide");
            }

            var suitesRoomsImages = document.getElementById("suites_rooms_images");
            suitesRoomsImages = suitesRoomsImages.value;
            console.log(suitesRoomsImages);
            if (suitesRoomsImages == 0) {
                suiteRoomsImagesError.classList.remove("hide");
                suiteRoomsImagesError.innerHTML = "Suites Images is Required";
                thereIsError = true;
            }else{
                suiteRoomsImagesError.classList.add("hide");
            }

            var suitesRoomsFacilities = document.getElementById("suites_rooms_facilities");
            suitesRoomsFacilities = suitesRoomsFacilities.value;
            console.log(suitesRoomsFacilities);
            if (suitesRoomsFacilities == 0) {
                suiteRoomsFacilitiesError.classList.remove("hide");
                suiteRoomsFacilitiesError.innerHTML = "Suites Facilities are Required";
                thereIsError = true;
            }else{
                suiteRoomsFacilitiesError.classList.add("hide");
            }

        }

        var noSelectedRoomError = document.getElementById("no_selected_room_error");
        if (!atLestOneChecked) {
            noSelectedRoomError.classList.remove("hide");
            noSelectedRoomError.innerHTML = "Hotel should contain one room min!";
            thereIsError = true;
        }else{
            noSelectedRoomError.classList.add("hide");
        }

        if (thereIsError) {
            return false;
        }
        return true ;
    }