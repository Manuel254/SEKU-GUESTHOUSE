<?php 
session_start();
  include_once 'admin/includes/db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <meta http-equiv="X-UA compatible" content="i.e=edge">
        <title>SEKU GUEST HOUSE | MEALS</title>
        <link rel="stylesheet" href="css/meals.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	
    </head>
        <!-- header content -->
	<div class="container bg-white">
            <div class="text-center " mr-5>
                
        <img src="images\Sekulogo.png" height=100px/>
                <div class="text-success py-3">
         <h2 class="h1 heading-4">SEKU GUEST HOUSE</h2>
                    </div class="bg-primary">
                </div>


    
        <!-- - navigation-standard menu -- -->
        <nav class="navbar navbar-expand-lg navbar-dark badge-success">
            <a class="navbar-brand" href="#">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-google-plus-g"></i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" title="menu" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end"  id="nav">
              <div class="navbar-nav pr-lg" >
                <a class="nav-item nav-link" href="index.php">HOME</a>
                <a class="nav-item nav-link" href="about.php">ABOUT US</a>
                <a class="nav-item nav-link active" href="meals.php"><span class="sr-only">(current)</span>MEALS</a>
                <a class="nav-item nav-link" href="Rooms.php">ROOMS</a>
                <a class="nav-item nav-link" href="contacts.php">CONTACTS</a>
                <a class="nav-item nav-link" href="admin/adminlog.php">ADMIN</a>
              </div>
            </div>
          </nav>

    <section class="container bg-light">
      <!-- Welcome section -->
      <div class="carrier text-white">
        <h1>WELCOME TO SEKU GUEST HOUSE</h1>
        <p>Here we offer finger-licking foods... So grab a plate!!</p>
      </div>

      <div>
        <p class="text-center p-5">We offer different kinds of food that are cooked by professionals.
          Breakfast, lunch and dinner... we do offer at affordable prices. 
          What are you waiting for. Order today!! 
        </p>
      </div>
      <!-- Meals available -->
      <h2 class="text-center pb-3">FOOD CATEGORIES</h2> 
      <a href = "pdf/menu.php" class="bg-success text-white Menu-btn" target="_blank">Menu</a><br><br>

      <div>

      <!-- Search bar -->
      <form action="search.php" method="POST" class="form-inline" style="display: inline;">
        <input class="form-control mr-sm-2 ml-sm-3" type="text" name="q" placeholder="Search for food..." aria-label="Search">
        <button class="btn btn-success my-sm-0" type="submit" name="search">Search</button>
      </form>

    <a href="order-cart.php" style="text-decoration: none;color:#000;">
      <h5 align="right" class="mx-5"><i class="fas fa-shopping-cart text-success"></i>  Cart <span id="cart-item" class="rounded-circle bg-success px-2 text-white"></span></h5></a>
    </div>
      <!-- Food Categories -->
      <section class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/teacup-with-tea.jpg" class="card-img-top" alt="Beverages" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Hot Beverages</h5>
                <p class="card-text">Tea, coffee and many more beverages available...</p>
                <a href="sub-meal1.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/maandazi.jpg" class="card-img-top" alt="snack" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Snacks</h5>
                <p class="card-text">All sorts of snacks are on offer. What are you waiting for...order now</p>
                <a href="sub-meal2.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/fruit-platter.jpg" class="card-img-top" alt="Dessert" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Dessert</h5>
                <p class="card-text">What a wonderful way to finish your meal with a dessert...</p>
                <a href="sub-meal3.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/juice.jpg" class="card-img-top" alt="Soft drinks" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Soft Drinks</h5>
                <p class="card-text">Want to quench your thirst with a cold drink. Order now..</p>
                <a href="sub-meal4.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/chapati.jpg" class="card-img-top" alt="starches" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Starches</h5>
                <p class="card-text">After a day of hard work, why not replenish your energy.</p>
                <a href="sub-meal5.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/sukuma.jpg" class="card-img-top" alt="vegetables" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Vegetables</h5>
                <p class="card-text">A more healthier route to take...</p>
                <a href="sub-meal6.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-4 col-sm-12 my-1">
            <div class="card shadow">
                <img src="images/Ugali_nyama.jpg" class="card-img-top" alt="Main Dishes" width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title text-center">Main dishes</h5>
                <p class="card-text">We offer a variety of dishes. Click <strong>see more</strong> to take a look at the dishes and order today!</p>
                <a href="sub-meal7.php" class="btn btn-success">See More</a>
              </div>
          </div>
        </div>
      </section>
  <a name="Menu"></a>
    </section>
    <footer>
        <div class="content justify-content-center">
	<div class="row">
	<div class="col-lg-6 col-md-6">
	
	<h5>CONTACTS</h5>
	<p><i class="fas fa-home"></i>Kwa Vonza,kitui,P.O. Box 170-90200</p>
	<p><i class="fas fa-phone-square-alt"></i>Tel:+254702598123</p>
	<p><i class="fas fa-envelope"></i>info@sekuguesthouse</p>
	</div>
<div class="col-lg-6 col-md-6">
	<h5>STAY IN TOUCH</h5>
	<i class="fab fa-facebook"></i>
	<i class="fab fa-twitter"></i>
	<i class="fab fa-snapchat"></i><br>
	<input type="email" placeholder="Subscribe for updates"><button class="btn btn-success">subscribe</button>
	</div>
	</div>
	<h2>SEKU GUEST HOUSE,COPYRIGHT &copy;2020</h2>
	</div>
	
      </div>
    </footer>
     <script src="https://kit.fontawesome.com/bf257a5746.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script type="text/javascript" src="js/ajax_cart.js"></script>
  </body>
</html>
