

<div class="container">

  <div class="row">
  <div class="col-sm-12">
    <form method="post" action="main.php?action=add">	
	<div class="col-sm-6">
	<img src="top.png">      
		<h3>Book Size Ads</h3>
	  <table class="table">
    <thead>
      <tr>
        <th>Book Ad Sizes Available</th>
        <th>Monthly</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM tbl_product WHERE ad_type = 'Book' AND ad_format='Regular'";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
		?>
        
           
        	<?php
        foreach ($product_array as $key => $value) {
            ?>
        
      <tr>
        <td><?php echo $product_array[$key]["name"]; ?></td>
		  <td>$<?php echo $product_array[$key]["price"]; ?></td>
		<td> <input type="checkbox" class="checkstatus" name="chk_product[]" data-id="<?php echo $product_array[$key]["id"]; ?>" data-code="<?php echo $product_array[$key]["code"]; ?>"></td>
      </tr>
               
			
			
			
			<input type="hidden" name="selected_product[]" id="product-<?php echo $product_array[$key]["id"]?>" value="" />
			
       
   
    <?php
        }}else{
			echo "0 Result";
		}
		?>
         </tbody>
  </table>
		<center><h3>Premium Ads</h3></center>
	  <table class="table">
    <thead>
      <tr>
        <th>Book Ad Sizes Available</th>
        <th>Monthly</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
   
        <?php
    $query = "SELECT * FROM tbl_product WHERE ad_type = 'Book' AND ad_format='Premium'";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
		?>
        
           
        	<?php
        foreach ($product_array as $key => $value) {
            ?>
        
      <tr>
        <td><?php echo $product_array[$key]["name"]; ?></td>
		  <td>$<?php echo $product_array[$key]["price"]; ?></td>
		<td> <input type="checkbox" class="checkstatus" name="chk_product[]" data-id="<?php echo $product_array[$key]["id"]; ?>" data-code="<?php echo $product_array[$key]["code"]; ?>"></td>
      </tr>
               
			
			
			
			<input type="hidden" name="selected_product[]" id="product-<?php echo $product_array[$key]["id"]?>" value="" />
			
       
   
    <?php
        }}else{
			echo "0 Result";
		}
		?>
 </tbody>
  </table>
    </div>
		
		 <div class="col-sm-6">
	<img src="app.png" width="250px;">  
      <h3>App Size Ads</h3>
	  <table class="table">
    <thead>
      <tr>
        <th>Book Ad Sizes Available</th>
        <th>Monthly</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
     <?php
    $query = "SELECT * FROM tbl_product WHERE ad_type = 'App'";
    $product_array = $shoppingCart->getAllProduct($query);
    if (! empty($product_array)) {
		?>
        
           
        	<?php
        foreach ($product_array as $key => $value) {
            ?>
        
      <tr>
        <td><?php echo $product_array[$key]["name"]; ?></td>
		  <td>$<?php echo $product_array[$key]["price"]; ?></td>
		<td> <input type="checkbox" class="checkstatus" name="chk_product[]" data-id="<?php echo $product_array[$key]["id"]; ?>" data-code="<?php echo $product_array[$key]["code"]; ?>"></td>
      </tr>
               
			
			
			
			<input type="hidden" name="selected_product[]" id="product-<?php echo $product_array[$key]["id"]?>" value="" />
			
       
   
    <?php
        }}else{
			echo "0 Result";
		}
		?>
 </tbody>
  </table>
    </div>
    <div class="clearfix"></div>
       <center> <input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-dark" />
		<a href="checkout.php" class="btn btn-dark">Checkout</a></center>
         </form>
		
</div>
	  </div>
</div>
<script src="jquery-3.2.1.min.js"></script>

<script>
	$("input[type=checkbox]").on("click", function() {
		var product_id = $(this).data("id");
		var product_code = $(this).data("code");


        	if($(this).is(":checked")){
            	$("#product-item-"+product_id).css("border","#d96557 3px solid");
            	$("#product-"+product_id).val(product_code);
        	}
        	else if($(this).is(":not(:checked)")){
            	$("#product-item-"+product_id).css("border","none");
            	$("#product-"+product_id).val("	");
        	}
	});
</script>