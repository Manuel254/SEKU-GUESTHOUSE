<?php include 'admin/includes/db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEKU GUEST HOUSE | HOME</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.css"/>
    <link rel="stylesheet" type="text/javascript" href="js\bootstrap.js"/>
    <link rel="stylesheet" href="css/signup.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<body>
    <!-- header content -->
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
        
              <!-- - navigation-standard menu -- -->
        <nav class="navbar navbar-expand-lg navbar-dark badge-success">
            <a class="navbar-brand" href="#">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-google-plus-g"></i>
            </a>
             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end"  id="nav">
              <div class="navbar-nav pr-lg" >
                <a class="nav-item nav-link" href="index.php">HOME</a>
                <a class="nav-item nav-link" href="about.php">ABOUT US</a>
                <a class="nav-item nav-link active" href="meals.php">MEALS</a>
                <a class="nav-item nav-link" href="Rooms.php">ROOMS</a>
                <a class="nav-item nav-link" href="contacts.php">CONTACTS</a>
                <a class="nav-item nav-link" href="admin/adminlog.php">ADMIN</a>
              </div>
            </div>
          </nav>

    <div class="form-style bg-light my-4">
        <div class="header"><h2>SIGN UP FORM</h2></div>
            <form action="#" method="POST" name="checkoutForm">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col py-4">
                            <label for="firstname"><sup class="text-danger">*</sup>First name</label>
                            <input type="text" class="form-control" name="firstname" required>
                        </div>

                        <div class="col py-4">
                            <label for="lastname"><sup class="text-danger">*</sup>Last name</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                    </div>
                        <label for="Email"><sup class="text-danger">*</sup>Email</label>
                        <input type="email" class="form-control my-4" name="email" required>
                        <label for="Phoneno">Phone number</label>
                        <input type="tel" class="form-control my-4" name="phone">
                        <input class="btn btn-success signup-btn" type="submit" name="submit" value="Sign up">
                </div>
            </form>
    </div>

        <?php
            if (!$connect){
                die('Database Connection failed!');
        }else{
            if(isset($_POST['submit'])){
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $email = $_POST['email'];
                $phoneno = $_POST['phone'];

            $sql = "INSERT INTO checkout_details(firstname,lastname,email,contact) VALUES('$fname', '$lname', '$email', $phoneno)";
            $result = mysqli_query($connect, $sql);

            if ($result){
                echo '<script>alert("Details Added Successfully!!");</script>';
        }else{
            echo '<script>alert("Details Not Added Successfully! Retry");</script>';
        }
        }
    }
        ?>

    <script src="https://kit.fontawesome.com/bf257a5746.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin=anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
