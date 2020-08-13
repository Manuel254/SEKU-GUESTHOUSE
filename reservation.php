<?php
include_once 'admin/includes/class.user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->check_available($checkin, $checkout);
    if (!($result)) {
        echo $result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEKU GUEST HOUSE | ROOMS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/rooms style.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
</head>
<style>
    .well {
        background: rgba(0, 0, 0, 0.7);
        border: none;
        height: 200px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    h4 {
        color: #ffbb2b;
    }

    h6 {
        color: navajowhite;
        font-family: monospace;
    }
</style>

<body>
    <div class="container bg-white">
        <header>
            <div class="text-center " mr-5>
                <img src="images\Sekulogo.png" height=100px />
                <div class="text-success py-3">
                    <h2 class="h1 heading-4">SEKU GUEST HOUSE</h2>
                </div class="bg-primary">
            </div>
        </header>
        <!-- navigation-standard menu -->
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark badge-success">
                <a class="navbar-brand" href="#">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="mynav">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php">HOME</a>
                        <a class="nav-item nav-link" href="about.php">ABOUT US</a>
                        <a class="nav-item nav-link" href="meals.php">MEALS</a>
                        <a class="nav-item nav-link active" href="Rooms.php">ROOMS <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="contacts.php">CONTACTS</a>
                        <a class="nav-item nav-link" href="admin/adminlog.php">ADMIN</a>
                    </div>
                </div>
            </nav>

            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-5 well'>
                    <form action="" method="post" name="room_category">


                        <div class="form-group"><br />
                            <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                            <input type="date" class="datepicker" name="checkin">

                        </div>

                        <div class="form-group">
                            <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                            <input type="date" class="datepicker" name="checkout">
                        </div>

                        <button type="submit" class="btn btn-primary button" name="submit">Check Availability</button>

                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
            <?php

            if (isset($_REQUEST['submit'])) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {

                        $room_cat = $row['room_cat'];
                        $sql = "SELECT * FROM room_category WHERE roomname='$room_cat'";
                        $query = mysqli_query($user->db, $sql);
                        $row2 = mysqli_fetch_array($query);

                        echo "
                            <div class='row'>
                            <div class='col-md-4'></div>
                            <div class='col-md-5 well'>
                                <h4>" . $row2['roomname'] . "</h4><hr>
                                <h6>No of Beds: " . $row2['no_bed'] . " " . $row2['bedtype'] . " bed.</h6>
                                <h6>Available Rooms: " . $row2['available'] . "</h6>
                                <h6>Facilities: " . $row2['facility'] . "</h6>
                                <h6>Price: " . $row2['price'] . " tk/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='booknow.php?roomname=" . $row2['roomname'] . "'><button class='btn btn-primary button'>Book Now</button></a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         ";
                    }
                }
            }


            ?>


        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>