$(document).ready(function () {
    $(".nav li").on("click",function(){
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });
});

function hide(id1,id2){
    var div1 = document.getElementById(id1);
    var div2 = document.getElementById(id2);

    if(id1==='users'){

    }
    div1.classList.add('hide');
    div2.classList.remove('hide');
    
}

function userSuspend(userID){
    console.log(userID);
}


function hotelSuspend(userID){
    console.log(userID);
}