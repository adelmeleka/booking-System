<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="100" />
    <!-- Refresh every 15 minutes -->
    <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Cs/User.css" />
    <script type="text/javascript" src="Js/jQuery3.3.1.js"></script>
    <script type="text/javascript" src="Js/bootstrap.min.js"></script>
</head>

<body>

    <div class="margin">
        <!-- hotel div start -->
        <div class="hotel">
            <h4>Hotel Name</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">USER NAME</th>
                        <th scope="col">Check In Date</th>
                        <th scope="col">Check out date</th>
                        <th scope="col">Checked in</th>
                        <th scope="col">Amout to pay</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="add here">
                    <?php
                        include_once "PHP/UserBack.php";
                    ?>
                    </div>

                    <tr>
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
        <!-- hotel div end-->
    </div>

    <div style="float:right; margin-right: 10%; margin-bottom: 20px;">
        <a href="AddHotle.html" class="btn btn-primary">Add Hotel</a>
    </div>
</body>

</html>