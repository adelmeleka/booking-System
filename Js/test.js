
$(document).ready(function () {

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
console.log(slider)
if(slider){
  output.innerHTML = slider.value; // Display the default slider value

}

// Update the current slider value (each time you drag the slider handle)

if(output){
slider.oninput = function() {
      output.innerHTML = this.value;
} 
}
});




// function validateNewHotel() {
//     var hotelName = document.getElementById("hotel_name");
//     hotelName = hotelName.value;
//     if (hotelName === "") {
//         console.log("Hotel Name is Required");
//     }

//     var hotelStars = document.getElementById("star_number");
//     hotelStars = hotelStars.value;
//     if (hotelStars == 0) {
//         console.log("Hotel Stars is Required");
//     }

//     var hotelLocation = document.getElementById("location");
//     hotelLocation = hotelLocation.value;
//     if (hotelLocation == "") {
//         console.log("Hotel location is Required");
//     }

//     var hotelLocation = document.getElementById("location");
//     hotelLocation = hotelLocation.value;
//     if (hotelLocation == "") {
//         console.log("Hotel location is Required");
//     }


//     var singleRooms = $('#singe_room').is(':checked');

//     var doubleRooms = $('#double_room').is(':checked');

//     var tripleRooms = $('#triple_room').is(':checked');

//     var suiteRooms = $('#suite').is(':checked');

//     var atLestOneChecked = false;

//     if (singleRooms === true) {
//         console.log(singleRooms);
//         atLestOneChecked = true;

//         var singleRoomsNumber = document.getElementById("single_rooms_number");
//         singleRoomsNumber = singleRoomsNumber.value;
//         console.log(singleRoomsNumber);
//         if (singleRoomsNumber == 0) {
//             console.log("singleRoomsNumber is Required");
//         }
//         var singlePrice = document.getElementById("single_rooms_price");
//         singlePrice = singlePrice.value;
//         console.log(singlePrice);
//         if (singlePrice == 0) {
//             console.log("singlePrice is Required");
//         }
//         var singleRoomsImages = document.getElementById("single_rooms_images");
//         singleRoomsImages = singleRoomsImages.value;
//         console.log(singleRoomsImages);
//         if (singleRoomsImages == 0) {
//             console.log("singleRoomsImages is Required");
//         }
//         var singleRoomsFacilities = document.getElementById("single_rooms_facilities");
//         singleRoomsFacilities = singleRoomsFacilities.value;
//         console.log(singleRoomsFacilities);
//         if (singleRoomsFacilities == 0) {
//             console.log("singleRoomsFacilities is Required");
//         }
//     }
//     if (doubleRooms === true) {
//         console.log(doubleRooms);
//         atLestOneChecked = true;

//         var doubleRoomsNumber = document.getElementById("double_rooms_number");
//         doubleRoomsNumber = doubleRoomsNumber.value;
//         console.log(doubleRoomsNumber);
//         if (doubleRoomsNumber == 0) {
//             console.log("doubleRoomsNumber is Required");
//         }
//         var doublePrice = document.getElementById("double_rooms_price");
//         doublePrice = doublePrice.value;
//         console.log(doublePrice);
//         if (doublePrice == 0) {
//             console.log("doublePrice is Required");
//         }
//         var doubleRoomsImages = document.getElementById("double_rooms_images");
//         doubleRoomsImages = doubleRoomsImages.value;
//         console.log(doubleRoomsImages);
//         if (doubleRoomsImages == 0) {
//             console.log("singleRoomsImages is Required");
//         }
//         var doubleRoomsFacilities = document.getElementById("double_rooms_facilities");
//         doubleRoomsFacilities = doubleRoomsFacilities.value;
//         console.log(doubleRoomsFacilities);
//         if (doubleRoomsFacilities == 0) {
//             console.log("singleRoomsFacilities is Required");
//         }

//     }
//     if (tripleRooms === true) {
//         console.log(tripleRooms);
//         atLestOneChecked = true;

//         var tripleRoomsNumber = document.getElementById("triple_rooms_number");
//         tripleRoomsNumber = tripleRoomsNumber.value;
//         console.log(tripleRoomsNumber);
//         if (tripleRoomsNumber == 0) {
//             console.log("tripleRoomsNumber is Required");
//         }
//         var triplePrice = document.getElementById("triple_rooms_price");
//         triplePrice = triplePrice.value;
//         console.log(triplePrice);
//         if (triplePrice == 0) {
//             console.log("triplePrice is Required");
//         }
//         var tripleRoomsImages = document.getElementById("triple_rooms_images");
//         tripleRoomsImages = tripleRoomsImages.value;
//         console.log(tripleRoomsImages);
//         if (tripleRoomsImages == 0) {
//             console.log("tripleRoomsImages is Required");
//         }
//         var tripleRoomsFacilities = document.getElementById("triple_rooms_facilities");
//         tripleRoomsFacilities = tripleRoomsFacilities.value;
//         console.log(tripleRoomsFacilities);
//         if (tripleRoomsFacilities == 0) {
//             console.log("tripleRoomsFacilities is Required");
//         }

//     }
//     if (suiteRooms === true) {
//         console.log(suiteRooms);
//         atLestOneChecked = true;

//         var suitesRoomsNumber = document.getElementById("suites_rooms_number");
//         suitesRoomsNumber = suitesRoomsNumber.value;
//         console.log(suitesRoomsNumber);
//         if (suitesRoomsNumber == 0) {
//             console.log("suitesRoomsNumber is Required");
//         }
//         var suitesPrice = document.getElementById("suites_rooms_price");
//         suitesPrice = suitesPrice.value;
//         console.log(suitesPrice);
//         if (suitesPrice == 0) {
//             console.log("suitesPrice is Required");
//         }
//         var suitesRoomsImages = document.getElementById("suites_rooms_images");
//         suitesRoomsImages = suitesRoomsImages.value;
//         console.log(suitesRoomsImages);
//         if (suitesRoomsImages == 0) {
//             console.log("suitesRoomsImages is Required");
//         }
//         var suitesRoomsFacilities = document.getElementById("suites_rooms_facilities");
//         suitesRoomsFacilities = suitesRoomsFacilities.value;
//         console.log(suitesRoomsFacilities);
//         if (suitesRoomsFacilities == 0) {
//             console.log("suitesRoomsFacilities is Required");
//         }

//     }

//     if (!atLestOneChecked) {
//         console.log("at lest one room need ");
//     }
// }
