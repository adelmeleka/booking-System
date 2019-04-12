<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="100"> <!-- Refresh every 15 minutes -->
    <script type="text/javascript" src="Js/jQuery3.3.1.js"></script>
    <script type="text/javascript" src="Js/moment.js"></script>
    <script type="text/javascript" src="Js/script.js"></script>
    <link rel="stylesheet" href="Cs/parallexeffect.css">
    <link rel="stylesheet" href="Cs/Styles.css">




    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="Js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>



    <link rel="stylesheet" href="Cs/bootstrap-datepicker.css">
    <script type="text/javascript" src="Js/bootstrap-datepicker.js"></script>
    <scrip type="text/javascript" src="Js/script.js">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

</head>

<body>
    <div id="nav" style=" background-image: linear-gradient(rgba(150, 150, 150, 0.1), rgba(150, 150, 150, 0.1)),
        url(Assets/louvre.jpg);"
        class=" parallax  ">
        <div class="empty">
        </div>
        <div class="container choice_container ">
            <div class="row col-sm-13">
                <form class="form-inline">


                    <div class="form-group">
                        <h4>Destination</h4>
                        <input type='text' class="form-control" id="destination" placeholder="city" />
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <h4>Check-in date </h4>
                            <div class='input-group date' id='datepicker1'>
                                <input id="startDate" type='text' class="form-control" placeholder="Check-in date" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" style="margin-left: 10px; background-color: blue; color:#ffffff;"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Check-out date </h4>
                            <div class='input-group date' id='datepicker2'>
                                <input id="endDate" type='text' class="form-control" placeholder="Check-out date" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" style="margin-left: 10px; background-color: blue; color:#ffffff;"></span>
                                </span>
                            </div>
                        </div>

                    </div>


                    <div class="form-group dropdown">
                        <h4>Rooms</h4>
                        <div class="has-feedback">

                            <i style="background-color: blue; color:#ffffff;" class="glyphicon glyphicon-chevron-down form-control-feedback"></i>
                            <input style="text-align: left; color:#000000;" type="text" class="btn btn-secondary dropdown-toggle"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" value=" Rooms: 1, guests: 1 ">

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="padDropDown">
                                    <h5 style="color:#000000;">Room1</h5>
                                    <hr />

                                    <div>
                                        <span class="adults_number">
                                            <h5 style="color:#000000;">Adults</h5>
                                            <h6 style="color:rgba(0, 0, 0, 0.5);">Over 18 years old</h6>
                                        </span>

                                        <span>
                                            <a class="margin_plus_minus" href="#">
                                                <span class="glyphicon glyphicon-plus" style=" font-size: 9px; border-top-left-radius: 5px; border-bottom-left-radius: 5px; padding-top: 3px; padding: 5px; padding-right: 3px; ; background-color: blue; color:#ffffff;"></span>
                                            </a>
                                            <label class="margin_plus_minus" for="Childrennumber" style="color:#000000;"
                                                value=0>0</label>
                                            <a class="margin_plus_minus" href="#">
                                                <span class="glyphicon glyphicon-minus" style=" font-size: 9px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; padding-top: 3px; padding: 5px; padding-right: 3px;  background-color: blue; color:#ffffff;"></span>
                                            </a>
                                        </span>
                                    </div>

                                    <hr />
                                    <div>
                                        <span class="Children_number">
                                            <h5 style="color:#000000;">Children</h5>
                                            <h6 style="color:rgba(0, 0, 0, 0.5);"> Up to 18 years old</h6>
                                        </span>
                                        <span>
                                            <a class="margin_plus_minus" href="#">
                                                <span class="glyphicon glyphicon-plus" style=" font-size: 9px; border-top-left-radius: 5px; border-bottom-left-radius: 5px; padding-top: 3px; padding: 5px; padding-right: 3px; ; background-color: blue; color:#ffffff;"></span>
                                            </a>
                                            <label class="margin_plus_minus" for="Childrennumber" style="color:#000000;"
                                                value=0>0</label>
                                            <a class="margin_plus_minus" href="#">
                                                <span class="glyphicon glyphicon-minus" style=" font-size: 9px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; padding-top: 3px; padding: 5px; padding-right: 3px;  background-color: blue; color:#ffffff;"></span>
                                            </a>
                                        </span>

                                    </div>

                                    <hr />
                                    <a href="#">Add room</a>
                                    <br />


                                    <button type="button" class="btn btn-primary btn-sm btn-block">Ready</button>

                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="btn-block">
                        <h4 style=" color:transparent;"> f</h4>
                        <button type="button" class="btn btn-primary btn-lg btn-block">search</button>
                    </div>

                </form>
            </div>

        </div>


        <div class="empty"></div>

        <!-- start of cards -->


        <div class="search_results">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <p class="navbar-text" style="padding-top:15px; ">Sort by</p>

                        <ul class="nav navbar-nav">
                            <li class="nav-item active"><a href="#">Popularity</a></li>
                            <li class="nav-item"><a href="#">Price</a></li>
                            <li class="nav-item"><a href="#">Stars</a></li>
                            <li class="nav-item"><a href="#">Distance</a></li>
                            <li class="nav-item"><a href="#">Guests rating</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">

                <div class="card-group">


                    <div class="card ">
                        <div class="card-header">
                            <img src="Assets/1.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>

                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/florence1.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>

                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/venice.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>

                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <img src="Assets/resort1.jpg" class="card-img-top">
                        </div>
                        <div class="card-block ">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span>
                                <h4 class="card-title">Hotel Name</h4>
                            </span>
                            <p class="card-text">15,Emad Eldin Street,Downtown, Cairo</p>
                            <p class="card-text choose_btn">price</p>

                            <a href="#" class="btn btn-primary ">Choose</a>
                        </div>
                    </div>



                </div>

            </div>


        </div>


        <!-- end of cards -->
</body>

</html>