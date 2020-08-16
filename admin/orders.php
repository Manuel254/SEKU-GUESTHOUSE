<body>
	<?php include 'includes/navigation.php';
		include 'includes/db.php';
	?>

	<div id="page-wrapper">
            <div class="container-fluid">
            	<!-- Page heading -->
            	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                   	    MEALS
                            </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-Home"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> ORDERS
                            </li>
                        </ol>
                    </div>
                </div>


                <!-- Retrieve user details  from database-->
                <?php
                    $sql = 'SELECT * FROM orders';
                    $result = mysqli_query($connect, $sql);
                    
                    echo '<table class="table table-bordered table-hover table-sm table-responsive-sm table-responsive-md table-responsive-lg">';
                        echo'<thead class="thead-light">';
                            echo '<tr>';
                                echo '<th>Order ID</th>';
                                echo '<th>First Name</th>';
                                echo '<th>Last Name</th>';
                                echo '<th>Email</th>';
                                echo '<th>Contact</th>';
                                echo '<th>Items</th>';
                                echo '<th>Paid Amount</th>';
                                echo '<th>Status</th>';
                            echo '</tr>';
                        echo'</thead>';
                        echo '<tbody>';
                    while ($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $first = $row['firstname'];
                        $last = $row['lastname'];
                        $email = $row['email'];
                        $contact = $row['contact'];
                        $items = $row['products'];
                        $amount = $row['amount_paid'];
                        $status = $row['status'];

                            echo '<tr>';
                                echo "<td>{$id}</td>";
                                echo "<td>{$first}</td>";
                                echo "<td>{$last}</td>";
                                echo "<td>{$email}</td>";
                                echo "<td>{$contact}</td>";
                                echo "<td>{$items}</td>";
                                echo "<td>Ksh. {$amount}</td>";
                                echo "<td>{$status}</td>";
                                echo "<td><a href='orders.php?confirm={$id}' <button class='btn btn-primary confirm'> <i class='fa fa-edit'></i>Confirm</button></td>";
                                echo "<td><button type='button' class='btn btn-danger text-white delete'><a href='orders.php?delete={$id}' style='color:#fff;text-decoration:none;'>Delete</a></button></td>";
                            echo '</tr>';
                    }
                        echo '</tbody>';
                    echo '</table>';

                    // Delete data from database
                        if(!$connect){
                            die("Database connection failed!!");
                        }else{
                            if (isset($_GET['delete'])) {
                                $id = $_GET['delete'];

                                $query = "DELETE FROM orders WHERE id = {$id}";
                                $delete_query = mysqli_query($connect,$query);
                        }

                        }

                        if (isset($_GET['confirm'])) {
                            $id = $_GET['confirm'];

                            $query = "UPDATE orders SET status='Confirmed'WHERE id=$id";
                            $update_contact_query = mysqli_query($connect,$query);
                        }
                ?>
               

	</div>
</div>
		<!-- Footer -->
    <?php include 'includes/footer.php';?>
</body>
</html>