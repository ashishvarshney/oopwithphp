	
	<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
    $item_quantity = 0;
    $item_price = 0;
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }

?>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Cushing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="order.php">My Orders</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li><a href="help.php">Help</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
          <span class="caret"></span></a>
          <ul class="dropdown-menu"  style="width:300px !important">
            <li><span style="color:#f40d0d"><b><?php echo $displayName; ?></b></span></li>
			<li><a href="account.php">Account</a></li>
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">sad
          <span class="caret"></span></a>
          <ul class="dropdown-menu"  style="width:300px !important">
            <li><span style="color:#f40d0d"><b><?php echo $displayName; ?></b></span></li>
			<li><a href="account.php">Account</a></li>
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </li>
		  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cart(<?php echo $item_quantity; ?>)
          <span class="caret"></span></a>
          <ul class="dropdown-menu" style="width:500px !important">
            <div id="shopping-cart">
        <div class="txt-heading">

            <a id="btnEmpty" href="index.php?action=empty"><img
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
<div class="shopping-cart-table">
            <div class="cart-item-container header">
                <div class="cart-info title">Title</div>
                <div class="cart-info price">Price</div>
            </div>
<?php
	$k = 0;
    foreach ($cartItem as $item) {
        ?>
				<div class="cart-item-container">
					
                <div class="cart-info title">
                    <?php echo ++$k;?>) <?php echo $item["name"]; ?>
                </div>

             

                <div class="cart-info price">
                        <?php echo "$".$item["price"]; ?>
                    </div>


                <div class="cart-info action">
                    <a
                        href="index.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                        class="btnRemoveAction"><img
                        src="icon-delete.png" alt="icon-delete"
                        title="Remove Item" /></a>
                </div>
            </div>
				<?php
    }
    ?>
</div>
  <?php
}
?>
</div>
            
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
	  
	  
  </div>
</nav>