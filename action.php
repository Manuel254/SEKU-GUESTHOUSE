<?php 
	require 'admin/includes/db.php';

	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pcode = $_POST['pcode'];
		$pqty = 1;

		$stmt = $connect->prepare("SELECT product_code FROM cart WHERE product_code=?");
		$stmt->bind_param("s",$pcode);
		$stmt->execute();
		$res = $stmt->get_result();
		$r = $res->fetch_assoc();
		$code = $r['product_code'];

		if(!$code){
			$query = $connect->prepare("INSERT INTO cart(product_name,product_price,qty,total_price,product_code) VALUES (?,?,?,?,?)");
			$query->bind_param("ssiss",$pname,$pprice,$pqty,$pprice,$pcode);
			$query->execute();
			echo '<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Item added to your cart!</strong>
					</div>';
		}else{
			echo '<div class="alert alert-danger alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Item already added to your cart!</strong>
					</div>';
		}
	}

	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
		$stmt  = $connect->prepare("SELECT * FROM cart");
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;

		echo $rows;
	}
?>