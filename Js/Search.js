$(document).ready(function () {
    var checkInDate = new Date();
    checkInDate.setDate(checkInDate.getDate());
    var checkOutDate = new Date();
    checkOutDate.setDate(checkInDate.getDate() + 1);

    $("#endDate").datepicker({
        startDate: checkInDate,
        clearBtn: true,
        autoclose: true
    });

    $("#startDate").datepicker({
        startDate: checkInDate,
        clearBtn: true,
        autoclose: true,
    }).on('changeDate', function (selected) {
        if (selected.date) {
            var minDate = new Date(selected.date.valueOf());
            $('#endDate').datepicker('setStartDate', minDate);
        }

    });

    $("#endDate").datepicker().on('changeDate', function (selected) {
        if (selected.date) {
            var minDate = new Date(selected.date.valueOf());
            $('#startDate').datepicker('setEndDate', minDate);
        }
    });

    $(".nav li").on("click", function () {
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });

    $('.selectpicker').selectpicker();

    $('input:radio[name="inlineRadioOptions"]').change(function () {
        if ($(this).val() == 'Stars') {
            $('div[class="select"]').each(function () {
                console.log($(this).addClass("hide"));
            });
            document.getElementById("SelectByStars").classList.remove("hide");
        } else if ($(this).val() == 'Raitings') {
            $('div[class="select"]').each(function () {
                console.log($(this).addClass("hide"));
            });
            document.getElementById("SelectByRatings").classList.remove("hide");
        }
    });

});

function ValidateSearch(form){
    var destination = document.getElementById("location");
    var checkInDate = document.getElementById("startDate");
    var checkOutDate = document.getElementById("endDate");
    var RoomType = document.getElementById("select_room");
    var filterByStars = document.getElementById("Stars");
    var filterByRatings = document.getElementById("Ratings");
    var filterByMoney = document.getElementById("Money");
    var StarsSlected = document.getElementById("star_select");
    var RatingsSelected = document.getElementById("ratings_select");
    var MoneySelected = document.getElementById("price_select");

    var good = true;
    if(destination.value ==""){
        good=false;
    }else{

    }
    if(checkInDate.value ==""){
        good=false;
    }else{

    }
    if(checkOutDate.value ==""){
        good=false;
    }else{

    }
    if(RoomType.value ==""){
        good=false;
    }else{

    }

    
    if(filterByStars.value == 1 && StarsSlected.value == "None"){
        good=false;
        console.log(filterByStars.value);
        console.log(StarsSlected.value);

    }
    else if(filterByRatings.value ==1 && RatingsSelected.value == "None"){
        good=false;
        console.log(filterByRatings.value);
        console.log(RatingsSelected.value);
    }
    else if(filterByMoney.value ==1 && MoneySelected.value == "None"){
        good=false;
        console.log(filterByMoney.value);
        console.log(MoneySelected.value);
    }
    // console.log(destination.value);
    // console.log(filterByStars.value);
    // console.log(RatingsSelected.value);
    console.log(MoneySelected.value);

    if(good){
        return true;
    }
    return false;
}

// function test() {
//     var test = document.getElementById("select");
//     test = $('#select').val();
//     console.log(test);

//     test = $('#star_select').val();
//     console.log(test);

// }