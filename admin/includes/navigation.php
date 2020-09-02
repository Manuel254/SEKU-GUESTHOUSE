
 <link href="css/nav.css" rel="stylesheet">
<?php include 'includes/header.php';?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SEKU GUEST HOUSE</a>
            </div>

            <!-- Top Menu Items -->

            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usname']?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                            <img src="../admin/images/admin.jpg" height=60>
                               <span>Adminstrator</span>
                        <a href="./index.php"><i class="fa fa-home "></i>Home</a>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#rooms"><span class="glyphicon glyphicon-bed" area-hidden="true"></span>Rooms</a>
                        <ul id="rooms" class="collapse">
                            <li>
                                <a href="./addroom.php">Add Room</a>
                            </li>
                            <li>
                                <a href="./show_room_cat.php">Show All Rooms</a>
                            </li>
                            <li>
                                <a href="./show_all_room.php">Show All Booked Rooms</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#meals"><i class="fa fa-cutlery"></i>Meals
                        <ul id="meals" class="collapse">
                            <li>
                                <a href="./meals_menu.php">Meals menu</a>
                            </li>
                            <li>
                                <a href="./orders.php">Orders</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="./admincontacts.php"><i class="fa fa-phone"></i>Contacts</a>
                    </li>
                     <!-- <li>
                    <a href="./adminaccounts.php"><i class="fa fa-file-text"></i>Account</a>
                    </li> -->
                     <li>
                    <a href="./profile.php"><i class="fa fa-user"></i>  Profile</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>