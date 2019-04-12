<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="Cs/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Cs/parallexeffect.css">
    <link rel="stylesheet" href="Cs/Search.css">
    <link rel="stylesheet" href="dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.4.2/css/bootstrap-slider.min.css">


    <script type="text/javascript" src="Js/jQuery3.3.1.js"></script>
    <script type="text/javascript" src="Js/moment.js"></script>
    <script type="text/javascript" src="Js/Search.js"></script>
    <script type="text/javascript" src="Js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.4.2/bootstrap-slider.min.js"></script>
    <script type="text/javascript" src="Js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="dist/semantic.js"></script>
</head>

<body>


    <div id="nav" style=" background-image: linear-gradient(rgba(150, 150, 150, 0.1), rgba(150, 150, 150, 0.1)),
        url(Assets/louvre.jpg);"
        class=" parallax  ">
        <!-- <div> -->
        <div class="empty">
        </div>

        <div class="container choice_container ">
            <div class="row col-sm-13">
                <form class="form-inline" name="search_form" class="" enctype="multipart/form-data" method="POST" onsubmit="return ValidateSearch(document.search_form);">

                    <div class="form-group">
                        <h4>Destination</h4>
                        <select name="selectlocation" id="location" class="ui fluid search selection dropdown" data-live-search="true">
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
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <h4>Check-in date </h4>
                            <div class='input-group date' id='datepicker1'>
                                <input  autocomplete="off" name="checkindate" id="startDate" type='text' class="form-control" placeholder="Check-in date" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" style="margin-left: 10px; background-color: blue; color:#ffffff;"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Check-out date </h4>
                            <div class='input-group date' id='datepicker2'>
                                <input  autocomplete="off" name="checkoutdate" id="endDate" type='text' class="form-control" placeholder="Check-out date" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" style="margin-left: 10px; background-color: blue; color:#ffffff;"></span>
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="form-group dropdown">
                        <h4>Room Type</h4>
                        <div class="has-feedback">
                            <i style=" color:rgba(150, 150, 150, 0.7);" class="glyphicon glyphicon-chevron-down form-control-feedback"></i>
                            <select name="roomtype" id="select_room" class="selectpicker form-control" data-style="room_type_selector"
                                data-actions-box="true">
                                <option selected value="1">Single</option>
                                <option  value="2">Double</option>
                                <option  value="3">Triple</option>
                                <option  value="4">Suite</option>
                            </select>
                        </div>
                    </div>

                    <div  class="form-group">
                        <label style="margin-right:5px;" for="Stars">Filter By Stars </label>
                        <input type='radio' name="Filter" value="1" id="Stars" checked/>
                        <div class="select" id="SelectByStars">
                                <select name="starsnumber" id="star_select" class="selectpicker form-control" data-style="room_type_selector"
                                    data-actions-box="true">
                                    <option value="None" selected="selected">
                                        <p class='font_in_star_select'>Stars</p>
                                    </option>
                                    <option class="test" value="5" data-content="<span class='font_in_star_select'>5 stars </span><span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    "></option>
                                    <option value="4" data-content="<span class='font_in_star_select'>4 stars </span><span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    "></option>
                                    <option value="3" data-content="<span class='font_in_star_select'>3 stars </span><span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                     "></option>
                                    <option value="2" data-content="<span class='font_in_star_select'>2 stars </span><span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                    "></option>
                                    <option value="1" data-content="<span class='font_in_star_select'>1 stars </span><span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star-empty'></span>
                                        <span class='glyphicon glyphicon-star-empty'></span>
                                        <span class='glyphicon glyphicon-star-empty'></span>
                                        <span class='glyphicon glyphicon-star-empty'></span>
                                        "></option>
                                </select>
                            </div>
                    </div>




                    <div  class="form-group">
                            <label style="margin-right:5px;" for="Ratings">Filter By Ratings </label>
                            <input type='radio' name="Filter" value="2" id="Ratings" />
                            <div class="select" id="SelectByStars">
                                    <select  name="ratingnumber" id="ratings_select" class="selectpicker form-control" data-style="room_type_selector">
                                            <option value="None" selected="selected">
                                                <p class='font_in_star_select'>Ratings</p>
                                            </option>
                                            <option value="5" data-content="<span class='font_in_star_select'> With honors &nbsp;</span> <span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span> 
                                                <span class='glyphicon glyphicon-heart red'></span></span>"></option>
                                                <option value="4" data-content="<span class='font_in_star_select'> Excellent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span> 
                                                <span class='glyphicon glyphicon-heart red'></span></span>"></option>
                                                <option value="3" data-content="<span class='font_in_star_select'> Very good &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span> 
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart red'></span>
                                                <span class='glyphicon glyphicon-heart red'></span> 
                                                <span class='glyphicon glyphicon-heart red'></span></span>"></option>
                                                 <option value="2" data-content="<span class='font_in_star_select'> Good &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>                                                     <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart red'></span> 
                                                <span class='glyphicon glyphicon-heart red'></span></span>"></option>
                                              <option value="1" data-content="<span class='font_in_star_select'> Satisfactory &nbsp;&nbsp;&nbsp; </span> <span <span class='glyphicon glyphicon-hear red'></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span>
                                                <span class='glyphicon glyphicon-heart '></span> 
                                                <span class='glyphicon glyphicon-heart red'></span></span>"></option>                                        </select>
                                </div>
                        </div>

                        <div  class="form-group">
                                <label style="margin-right:5px;" for="Money">Filter By Money </label>
                                <input type='radio' name="Filter" value="3" id="Money" />
                                <div class="select" id="SelectByStars">
                                        <select name="pricenumber" id="price_select" class="selectpicker form-control" data-style="room_type_selector">
                                                <option value="None" selected="selected">
                                                    <p class='font_in_star_select'>Price / Night</p>
                                                </option>
                                                <option value="5000" data-content="<span class='font_in_star_select'> 5000</span> <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>"></option>
                                                <option value="4000" data-content="<span class='font_in_star_select'> 4000</span> <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>"></option>
                                                <option value="3000" data-content="<span class='font_in_star_select'> 3000</span> <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow '></span>"></option>
                                                <option value="2000" data-content="<span class='font_in_star_select'> 2000</span> <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>"></option>
                                                <option value="1000" data-content="<span class='font_in_star_select'> 1000</span> <span class='glyphicon glyphicon-usd '></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd'></span>
                                                <span class='glyphicon glyphicon-usd yellow'></span>"></option>
                                            </select>
                                    </div>
                            </div>


                    <div>
                        <p style="color:transparent">p</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">search</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="empty"></div>
        <div class="search_results">

        <!-- start of cards -->



            <div class="container ">

                <div class="card-group">

                <?php
include_once "PHP/SearchBack.php";
?>
                    <div class="card ">
                        <div class="card-header">
                            <img src="Assets/florence1.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <div>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>


                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">view</a>
                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/florence2.jpg" class="card-img-top">
                        </div>
                        <div class="card-block">
                            <div>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>


                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" id="view" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                view</a>
                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/florence5.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <div>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphic`on glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>

                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">view</a>
                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/florence6.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <div>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>

                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">view</a>
                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div> 



                <!-- </div> -->

            <!-- </div>


        </div>


        <!-- end of cards -->

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- image slides  start -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="Assets/florence1.jpg" class="card-img-top image_slide">
                            </div>

                            <div class="item">
                                <img src="Assets/florence2.jpg" class="card-img-top image_slide">
                            </div>

                            <div class="item">
                                <img src="Assets/florence3.jpg" class="card-img-top image_slide">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- image slides end -->
                    <div class="container">
                        <span>
                            <h4 class="card-title">Hotel Name</h4>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                        </span>
                        <div>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </div>

                        <div class="facilities">
                            <ul class="pager" style="float:left;">
                                <li><a href="#">f1</a></li>
                                <li><a href="#">f2</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>



</body>

</html>