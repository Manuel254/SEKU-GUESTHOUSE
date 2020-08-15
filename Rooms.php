<?php
    include_once 'admin/includes/class.user.php'; 
    $user=new User();
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
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
     <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
            margin-bottom: 20px;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    <body>
        <div class="container bg-white">
            <header>
                <div class="text-center " mr-5>        
                    <img src="images\Sekulogo.png" height=100px/>
                    <div class="text-success py-3">
                        <h2 class="h1 heading-4">SEKU GUEST HOUSE</h2>
                    </div>
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
                    <div class="collapse navbar-collapse justify-content-end"  id="mynav">
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

                <div class="showcase">
                    <h1>BOOK YOUR STAY TODAY</h1>
                    <p><strong>Seku Guest House</strong> offer quality rooms that are clean,well furnished as well as comfortable.<br>Security operates on a 24hr basis.Our ample parking will safely house your vehicle.<br>
                    Book any of our executive,daily,rental and also boardroom and have your reservation made</p>
                </div>   
                <div class="wrap">
                    <div class="introduction">
                        <a href="reservation.php"><button class=" btn bg-success text-white  more-btn">Check Room Availability</button></a>
                        <div class="heading-2">
                            <h2>MAKE YOUR RESERVATION</h2>
                        </div>
                        <p>Seku Guest House provides rooms for various guests be it a seku member or non-seku member but the prices differ.
                        Below are some rental rooms, daily rooms and executive rooms that one can book from. Our guest house has the best facilities. So what are you waiting for.<br><strong>BOOK TODAY!!</strong></p>
                    </div>      
                      
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4><hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                <h6>Available Rooms: " . $row['available'] . "</h6>
                                <h6>Facilities: ".$row['facility']."</h6>
                                <h6>Price: ".$row['price']." tk/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=".$row['roomname']."'><button class='btn btn-success button'>Book Now</button> </a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         "; //echo end
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO ROOMS AVAILABLE";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
             
            <footer>
                <div class="content justify-content-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
        
                            <h5>CONTACTS</h5>
                            <p><i class="fas fa-home"></i>Kwa Vonza,kitui,P.O. Box 170-90200</p>
                            <p><i class="fas fa-phone-square-alt"></i>Tel:+254702598123</p>
                            <p><i class="fas fa-envelope"></i>info@sekuguesthouse</p>
                        </div>
                        <div class=" inner col-lg-6 col-md-6">
                            <h5>STAY IN TOUCH</h5>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-snapchat"></i><br>
                            <input type="email" placeholder="Subscribe for updates"><button class="btn btn-success btn-footer">subscribe</button>
                        </div>
                    </div>
                </div>
                <h2>SEKU GUEST HOUSE,COPYRIGHT &copy;2020</h2>
            </footer>
        </div>
         </div>
         </div>
        <script src="https://kit.fontawesome.com/bf257a5746.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>         

</html>
