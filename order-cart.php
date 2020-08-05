<?php session_start();

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION['shopping_cart'] as $keys => $values) {
      if($values["item_id"] == $_GET["id"]){
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="order-cart.php"</script>';
      }
    }
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <meta http-equiv="X-UA compatible" content="i.e=edge">
        <title>SEKU GUEST HOUSE | CART</title>
        <link rel="stylesheet" href="css/cart.css">
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

<section>
  <h3 class="text-center">ORDER DETAILS</h3>
	<div class="table-responsive" id="order_table">
        <table class="table table-bordered">
          <tr>
            <th width="40%">NAME OF FOOD</th>
            <th width="10%">QUANTITY</th>
            <th width="20%">PRICE</th>
            <th width="15%">TOTAL</th>
            <th width="5%">ACTION</th>
          </tr>
<?php
  if(!empty($_SESSION["shopping_cart"]))
   {
    $total = 0;
   	foreach ($_SESSION["shopping_cart"] as $keys => $values) {
      ?>
   		<tr>
  	 		<td><?php echo $values["item_name"]; ?></td>
  	 		<td><?php echo $values["item_quantity"]; ?></td>
  	 		<td>Ksh. <?php echo $values["item_price"]; ?></td>
  	 		<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
  	 		<td><button class=" btn btn-danger"><a href="order-cart.php?action=delete&id=<?php echo $values['item_id']; ?>" style="text-decoration: none;color:#fff;">Remove</a></button></td>
  	 	</tr>

      <?php 
   		   $total = $total + ($values["item_quantity"] * $values["item_price"]);
   	}
    ?>
   		<tr>
              <td colspan="3" align="right">Total</td>
              <td align="right">Ksh. <?php echo number_format($total, 2); ?> </td>
               <td></td>
          </tr>
      <?php
   }else{
   	?>
   		<tr>
              <td colspan="5" align="center">Your Cart is Empty!</td>
          </tr>
    <?php 
   }
?>
   </table>
 </div>

<span><a href="meals.php" class="btn btn-success">Back</a></span>
<span><a href="checkout.php" class="btn btn-success" style="position:absolute;right:11em;">Checkout</a></span>

</section>
 <script src="https://kit.fontawesome.com/bf257a5746.js" crossorigin="anonymous"></script>

