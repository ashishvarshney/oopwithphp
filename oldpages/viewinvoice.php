<?php
include_once 'classes/class.home.php';
include_once 'classes/class.products.php';
$home = new Home();
$shoppingCart = new Products();




    // you can your integerate authentication module here to get logged in member


    if (! empty($_GET["action"])) {
        


        $product_details_id = $_POST["product_details_id"];
        $product_name = $_POST["product_name"];
        $chk_category_book = $_POST["chk_category_book"];
        $chk_category_app = $_POST["chk_category_app"];
        $product_price = $_POST["product_price"];

        $payment_choose = $_POST["paymentmode"];
        //echo "<pre>";
       //print_r($product_details_id);
      $countArray = count($product_details_id);
    }

  
    ?>
    <?php

$member_id = isset($_SESSION["id"])?$_SESSION["id"]:0;
$query = "select * FROM registered_users WHERE id=$member_id";
$invoice_id = isset($_GET['id'])?$_GET['id']:'';
$getUserDetails = $shoppingCart->getAllProduct($query);
//echo $member_id;

$getInvoiceDetails = $shoppingCart->getInvoiceDetails($invoice_id);


$invoice_view_id = $getInvoiceDetails[0]['invoice_id'];
$invoice_date = $getInvoiceDetails[0]['invoice_date'];
$payment_choose = $getInvoiceDetails[0]['payment_mode'];
$item_cart_price = (int)$getInvoiceDetails[0]['cartamount'];


$jsonProductDetails = $getInvoiceDetails[0]['order_json'];

$getProductListArray  = json_decode($jsonProductDetails,true);



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
  <form method="post" action="submitinvoice.php?action=bill">
  <div id="printable">
        <div class="txt-heading">

       <center> <h1>
            Invoice Detail #<?php echo $invoice_view_id;?>
        </h1></center>
            
            <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
          <img src="top.png">
          </div> 
          <div class="col-sm-3" style="">
              <div>
                <img class="rounded" src="images/business_logo/<?php echo isset($getUserDetails[0]['business_logo'])?$getUserDetails[0]['business_logo']:'business_logo.png';?>" width="50%" >
              </div>
              </div>
              <div class="col-sm-3 pull-right" style="text-decoration: underline;">
              <div>
                <label>Business Name : </label> <?php echo isset($getUserDetails[0]['business_name'])?$getUserDetails[0]['business_name']:'-';?>
              </div>
              <div>
                <label>Business Website : </label> <?php echo isset($getUserDetails[0]['business_website'])?$getUserDetails[0]['business_website']:'-';?>
              </div>
              <div>
                <label>Business Address : </label> <?php echo isset($getUserDetails[0]['business_address'])?$getUserDetails[0]['business_address']:'-';?>
              </div>
              <div>
                <label>Business Number : </label> <?php echo isset($getUserDetails[0]['business_number'])?$getUserDetails[0]['business_number']:'-';?>
              </div>
              <div>
                <label>Invoice Number : </label> <?php echo $invoice_view_id;?>
              </div>
              <div>
                <label>Invoice Date : </label> <?php echo $invoice_date;?>
              </div>
              
          </div> 
        </div>
       
            
            </div>
<form method="post" action="bill.php?action=bill">
           

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
foreach($getProductListArray As $key=>$value) {?>
				<tr>
      
        
        <td><?php echo ++$key;?></td>
					<td><?php echo $value['product_name'];?></td>
          <td><?php echo $value['chk_category_book'];?></td>
          <td><?php echo $value['chk_category_app'];?></td>
          <td><?php echo $value['regular_product_price'];?></td>
          <td><?php echo $value['product_price'];?></td>
				<td>| <a href="info.php?ad_type=<?php echo $value['product_name'];?>&book_category=<?php echo $value['chk_category_book'];?>&app_category=<?php echo $value['chk_category_app'];?>&product_id=<?php echo isset($value['product_id'])?$value['product_id']:'';?>&invoice_id=<?php echo isset($_GET['id'])?$_GET['id']:'';?>">Add Ads Files</a> |  
        <a href="viewinfo.php?ad_type=<?php echo $value['product_name'];?>&book_category=<?php echo $value['chk_category_book'];?>&app_category=<?php echo $value['chk_category_app'];?>&product_id=<?php echo isset($value['product_id'])?$value['product_id']:'';?>&invoice_id=<?php echo isset($_GET['id'])?$_GET['id']:'';?>">View Ads Files</a> |  
       </td>
						</tr>
				
                    
         
				<?php
        
    }
    ?>
	</tbody>
</table>
  <?php

?>
</div>
<?php 
  $setVariableTable = $shoppingCart->getVariableTable();
?>
<center><h1>Payment Details</h1></center>
<div class="row">
     <div class="col-sm-12">
    
	
  <?php if($payment_choose == "paidinfull"){  
    $checked = 'checked';
    ?>

  
  
  <div class="col-sm-12">
	    <h1> Paid In Full </h1>
	    
	    <div>
      <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_cart_price; ?></span><br>
          
          <span><b>Total</b> : <span class="pull-right">$<?php echo $item_cart_price * 12; ?></span><br>
          <span style="color:red;font-weight:600;">(Variable Discount)</span> <span class="pull-right"><?php echo $setVariableTable[0]['variable_discount'];?>% </span><br>
          <span>Paid in Full Discount<span class=""></span> <span class="pull-right"><?php echo $item_cart_price * 2; ?> </span><br>
	        <span><b>Total</b> :</span> <span class="pull-right"><input type="hidden" name="payamount" value="<?php echo $item_cart_price * 10; ?>">$<?php echo $item_cart_price * 10; ?></span>
	    </div>
	    
	    </div>


  <?php } elseif($payment_choose == "third"){ 
    $checked = 'checked';
    ?>

  

	    	<div class="col-sm-12 ">
        <h1>   Third / Third / Third </h1>
	     <div>
       <span><b>Advertising Total</b> : <span class="pull-right">$<?php echo $item_cart_price; ?></span><br>
          <span>Third Down : <span class="pull-right">$<?php echo round(($item_cart_price/3),2); ?></span><br>
          <span>Third With Proof  : <span class="pull-right">$<?php echo round(($item_cart_price/3),2); ?></span><br>
          <span>Third on Publication  : <span class="pull-right">$<?php echo round(($item_cart_price/3),2); ?></span><br>
          <span><b>Total</b> : <span class="pull-right"><input type="hidden" name="payamount" value="<?php echo $item_cart_price * 12; ?>">$<?php echo $item_cart_price * 12; ?></span><br>
         
      </div>
	    </div>

      <?php } elseif($payment_choose == "monthly"){
        $checked = 'checked';
        ?>
	    	<div class="col-sm-12">
        <h1>  Monthly Billing </h1>
	     <div>
       <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_cart_price; ?></span><br>
          <span style="color:red;font-weight:600;">Handling Charge (variable)</span> <span class="pull-right"><?php echo $setVariableTable[0]['handling_charge'];?></span><br>  
          <span>Down : </span><span class="pull-right">$<?php echo $item_cart_price + $setVariableTable[0]['handling_charge']; ?></span><br>
          <span>Monthly Total for 11 Months : </span><span class="pull-right">$<?php echo $item_cart_price + $setVariableTable[0]['handling_charge']; ?></span><br>
          <span><b>Total</b> : </span><span class="pull-right"><input type="hidden" name="payamount" value="<?php echo ($item_cart_price + $setVariableTable[0]['handling_charge']) * 12; ?>">$<?php echo ($item_cart_price + $setVariableTable[0]['handling_charge']) * 12; ?></span><br>
      
      </div>
	    </div>

      <?php } elseif($payment_choose == "nomoney"){ 
        $checked = 'checked';?>
	    	<div class="col-sm-12">
        <h1> No Money Down Bill on Publication
        </h1>
	     <div>
       <span><b>Advertising Total</b> : </span><span class="pull-right">$<?php echo $item_cart_price; ?></span><br>
          <span style="color:red;font-weight:600;">Handling Charge (variable)</span><span class="pull-right"> <?php echo $setVariableTable[0]['no_money_handling_charge'];?></span><br>  
          <span>No Money Down :</span> <span class="pull-right">-0-</span><br>
          <span>Monthly Payment of : </span><span class="pull-right">$<?php echo $item_cart_price + $setVariableTable[0]['no_money_handling_charge']; ?></span><br>
          <span><b>Total</b> :</span><span class="pull-right"><input type="hidden" name="payamount" value="<?php echo ($item_cart_price + $setVariableTable[0]['no_money_handling_charge']) * 12; ?>">$<?php echo ($item_cart_price + $setVariableTable[0]['no_money_handling_charge']) * 12; ?></span><br>
         
	    </div>
	    </div>
      <?php }  ?>


	    </div>
	    <br><br><hr>
	    

</div>

	    <center>
      <input type="button" value="Print" class="btn btn-success">

    </form>
		</center>
	 
     <br><br>

        <!-- FOOTER START -->

      

    </div>

    
</div>
<?php
        include('includes/footer.php');
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assests/js/print.js"></script>
    <script type='text/javascript'>
$(function() {
$("#printable").find('.print').on('click', function() {
$.print("#printable");
});
});
</script> 

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