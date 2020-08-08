<?php
include_once 'classes/class.home.php';
include_once 'classes/class.products.php';
$home = new Home();
$shoppingCart = new Products();
?>

<?php


$member_id = isset($_SESSION["id"])?$_SESSION["id"]:0; // you can your integerate authentication module here to get logged in member


if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["selected_product"])) {


                //print_r($_POST["selected_product"]);
				foreach($_POST["selected_product"] as $product_code) {
                

                   
                    $productResult = $shoppingCart->getProductByCode($product_code);
                    

					$cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                    foreach($productResult As $value){
                        $shoppingCart->addToCart($value["id"], 1, $member_id);
                    }
					
					
                }
                die;
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 50px 50px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
    <body>

        <!-- HEADER  -->

        <?php
        include('includes/header.php');
        ?>
  

  <div id="shopping-cart">

        <div class="txt-heading">
            <div class="txt-heading-label"><h2>Checkout</h2></div>
<form method="post" action="bill.php?action=bill">
            <a id="btnEmpty" href="main.php?action=empty"><img
                src="empty-cart.png" alt="empty-cart" title="Empty Cart"
                class="float-right" /></a>
            <div class="cart-status">
				<div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price: $<?php echo $item_price; ?></div>
            </div>
        </div>
<?php
if (! empty($cartItem)) {
    ?>
<table class="table">
            <thead>
            <th>Id</th>
                <th>Title</th>
				<th>Book Category</th>
				<th>App Category</th>
				<th>Regular Price</th>
				<th>Price</th>
				<th>Action</th>
            </thead>
			<tbody>
<?php
    foreach ($cartItem as $key=>$item) {
        ?>
        
				<tr>
        <td><?php echo ++$key;?><td>
        <input type="hidden" name="product_details_id[]" value="<?php echo $item["id"];?>">
        <input type="hidden" name="product_name[]" value="<?php echo $item["name"];?>"><?php echo $item["name"]; ?></td>
					<td>  <select name="chk_category_book[]">
			<option value="">-</option>
			  <?php 
			      $query = "SELECT * FROM kc_categories";
    $getCategoryFinalArray = $shoppingCart->getAllProduct($query);
     foreach($getCategoryFinalArray As $value) {?>
			<option value="<?php echo $value["categoryName"];?>"><?php echo $value["categoryName"];?></option>
	 <?php }	
	
  ?>
			</select></td>
				<td>  <select name="chk_category_app[]">
			<option value="">-</option>
			  <?php 
			      $query = "SELECT * FROM kc_categories";
    $getCategoryFinalArray = $shoppingCart->getAllProduct($query);
     foreach($getCategoryFinalArray As $value) {?>
			<option value="<?php echo $value["categoryName"];?>"><?php echo $value["categoryName"];?></option>
	 <?php }	
	
  ?>
			</select></td>
				<td><input type="hidden" name="product_price[]" value="<?php echo $item["price"]; ?>"><?php echo $item["price"]; ?></td>
        <td>$<span class="getAllTotal"><?php echo $item["price"];?></span></td>
				<td> <a
                        href="main.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                        class="btnRemoveAction"><img
                        src="icon-delete.png" alt="icon-delete"
                        title="Remove Item" /></a></td>
						</tr>
				
                    
         
				<?php
    }
    ?>
	</tbody>
</table>
  <?php
}
?>
</div>
<?php 
  $setVariableTable = $shoppingCart->getVariableTable();
?>
<center><h1>Payment Option</h1></center>
<div class="row">
     <div class="col-sm-12">
    
	<div class="col-sm-3">
	    <input type="radio"  name="paymentmode" value="paidinfull"> Paid In Full <br>
	    
	    <div>
      <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_price; ?></span><br>
          
          <span><b>Total</b> : <span class="pull-right">$<?php echo $item_price * 12; ?></span><br>
          <span style="color:red;font-weight:600;">(Variable Discount)</span> <span class="pull-right"><?php echo $setVariableTable[0]['variable_discount'];?>% </span><br>
          <span>Paid in Full Discount<span class=""></span> <span class="pull-right"><?php echo $item_price * 2; ?> </span><br>
	        <span><b>Total</b> :</span> <span class="pull-right">$<?php echo $item_price * 10; ?></span>
	    </div>
	    
	    </div>
	    	<div class="col-sm-3">
	    <input type="radio" name="paymentmode" value="third"> Third / Third / Third <br>
	     <div>
       <span><b>Advertising Total</b> : <span class="pull-right">$<?php echo $item_price; ?></span><br>
         
          <span>Third Down : <span class="pull-right">$<?php echo round(($item_price/3),2); ?></span><br>
          <span>Third With Proof  : <span class="pull-right">$<?php echo round(($item_price/3),2); ?></span><br>
          <span>Third on Publication  : <span class="pull-right">$<?php echo round(($item_price/3),2); ?></span><br>
          <span><b>Total</b> : <span class="pull-right">$<?php echo $item_price * 12; ?></span><br>
      </div>
	    </div>
	    	<div class="col-sm-3">
	    <input type="radio"  name="paymentmode" value="monthly"> Monthly Billing <br>
	     <div>
       <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_price; ?></span><br>
          <span style="color:red;font-weight:600;">Handling Charge (variable)</span> <span class="pull-right"><?php echo $setVariableTable[0]['handling_charge'];?></span><br>  
          <span>Down : </span><span class="pull-right">$<?php echo $item_price + $setVariableTable[0]['handling_charge']; ?></span><br>
          <span>Monthly Total for 11 Months : </span><span class="pull-right">$<?php echo $item_price + $setVariableTable[0]['handling_charge']; ?></span><br>
          <span><b>Total</b> : </span><span class="pull-right">$<?php echo ($item_price + $setVariableTable[0]['handling_charge']) * 12; ?></span><br>
      
      </div>
	    </div>
	    	<div class="col-sm-3">
	    <input type="radio"  name="paymentmode" value="nomoney"> No Money Down Bill on Publication <br>
	     <div>
       <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_price; ?></span><br>
          <span style="color:red;font-weight:600;">Handling Charge (variable)</span><span class="pull-right"> <?php echo $setVariableTable[0]['no_money_handling_charge'];?></span><br>  
          <span>No Money Down :</span> <span class="pull-right">-0-</span><br>
          <span>Monthly Payment of : </span><span class="pull-right">$<?php echo $item_price + $setVariableTable[0]['no_money_handling_charge']; ?></span><br>
          <span><b>Total</b> :</span><span class="pull-right">$<?php echo ($item_price + $setVariableTable[0]['no_money_handling_charge']) * 12; ?></span><br>
         
	    </div>
	    </div>
	    </div>
	    <br><br><hr>
	    
	    <center>
		<input type="submit" value="Buy Now" class="btn btn-success">
    </form>
		<a href="main.php" class="btn btn-dark">Continue</a>
		</center>
	 
     <br><br>

        <!-- FOOTER START -->

        <?php
        include('includes/footer.php');
        ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
var sum = 0;
$('.getAllTotal	').each(function(){
    sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});

$(".getTotal").text(sum);

$("#getTotalpaidinfull").text(sum*12);
$("#getTotalThird").text(sum*12);

});
</script>

</body>
</html>