<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="100" />
    <!-- Refresh every 15 minutes -->
    <link rel="stylesheet" href="Cs/Broker.css" />
    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />

    <script type="text/javascript" src="Js/jQuery3.3.1.js"></script>
    <script type="text/javascript" src="Js/Broker.js"></script>
    <script type="text/javascript" src="Js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>

</head>

<body>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#" onclick="hide('users','hotels');">Hotels</a></li>
        <li><a href="#" onclick="hide('hotels','users');">Users</a></li>
    </ul>

    <div class="margin">
        <!-- hotels div start -->
        <div id="hotels">

            <table class="table <?=$r?>">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hotel Owner</th>
                        <th scope="col">Hotel Name</th>
                        <th scope="col">Depts</th>
                        <th scope="col">Suspend</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="add here">
                        
                   <?php
                        include_once "PHP/BrokerGetHotels.php";
                    ?>
                    </div>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- hotels div end-->

        <!-- users div start -->
        <div id="users" class="hide">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Hotel Name</th>
                        <th scope="col">Room ID</th>
                        <th scope="col">Check in date</th>
                        <th scope="col">Check out date</th>
                        <th scope="col">Checked in</th>
                        <th scope="col">Suspend</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="add here">
                    <?php
include_once "PHP/BrokerGetUsers.php";
?>
                    </div>
                    <tr>
                    <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>