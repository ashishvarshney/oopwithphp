<?php
include_once 'classes/class.home.php';
include_once 'classes/class.products.php';
$home = new Home();
$shoppingCart = new Products();
$member_id = isset($_SESSION["id"])?$_SESSION["id"]:0;
    // you can your integerate authentication module here to get logged in member
$getOrderListArray = $shoppingCart->getMyorderlist($member_id);

    if (! empty($_GET["action"])) {
        


        $product_details_id = $_POST["product_details_id"];
        $product_name = $_POST["product_name"];
        $chk_category_book = $_POST["chk_category_book"];
        $chk_category_app = $_POST["chk_category_app"];
        $product_price = $_POST["product_price"];

        $payment_choose = $_POST["paymentmode"];
        $cartamount = $_POST["cartamount"];
        $payamount = $_POST["payamount"];
        
        $product_array = array();
        $product_final_array = array();


        for($i = 0 ; $i < count($product_details_id);$i++){
          $product_array['product_id'] =  $product_details_id[$i];
          $product_array['product_name'] =  $product_name[$i];
          $product_array['chk_category_book'] =  $chk_category_book[$i];
          $product_array['chk_category_app'] =  $chk_category_app[$i];
          $product_array['regular_product_price'] =  $product_price[$i];
          $product_array['product_price'] =  $product_price[$i];

          $product_final_array[] = $product_array;

        }

        //echo "<pre>";
       //print_r($product_final_array);

        $product_json = json_encode($product_final_array);


        $saveInvoiceDetails = $shoppingCart->saveInvoice($member_id,$product_json,$payment_choose,$cartamount,$payamount);
        if($saveInvoiceDetails){
          header("Location: myorder.php?success=1");
        }
      
    }

  
    ?>
    