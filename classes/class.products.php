<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Products {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }
    function addInfoDetails($adyourlogo,$adpictures,$adgif,$adnationallogo,$advideos,$adsampleads,$adyourlogotemp,$adpicturestemp,$adgiftemp,$adnationallogotemp,$advideostemp,$adsampleadstemp,$ad_title,$adslogan1,$adslogan2,$adslogan3,$adslogan4,$adnotes,$ad_type,$book_category,$app_category,$authorized_line,$ad_address,$ads_number1,$ads_number2,$ads_number3,$ads_number4,$member_id,$invoice_id,$product_id)
    {





      
        $created_at = date('Y-m-d');

        



        $query = "INSERT INTO `tbl_info_details` (`id`,`product_id`,`invoice_id`,`member_id`,`ad_title`,`adslogan1`,`adslogan2`,`adslogan3`,`adslogan4`,`adnotes`,`ad_type`,`book_category`,`app_category`,`authorized_line`,`ad_address`,`ads_number1`,`ads_number2`,`ads_number3`,`ads_number4`,`status`,`created_at`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,$member_id,'$ad_title','$adslogan1','$adslogan2','$adslogan3','$adslogan4','$adnotes','$ad_type','$book_category','$app_category','$authorized_line','$ad_address','$ads_number1','$ads_number2','$ads_number3','$ads_number4','A','$created_at',CURRENT_TIMESTAMP)";
        
        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {

                    //upload image

          //start yourlogo

// Count # of uploaded files in array
$totalyourlogo = count($adyourlogo);
// Loop through each file
for( $i=0 ; $i < $totalyourlogo ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $adyourlogotemp[$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/yourlogo/" . $adyourlogo[$i];

      
        $file_name = $adyourlogo[$i];
  

  
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  

        //Handle other code here insert code
        $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','yourlogo','A',CURRENT_TIMESTAMP)";
        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
        
      }
    }
  }
  
$totaladpictures = count($adpictures);
// Loop through each file
for( $i=0 ; $i < $totaladpictures ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $adpicturestemp[$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/adpictures/" . $adpictures[$i];
      $file_name = $adpictures[$i];
  
  //print_r($_FILES['adyourlogo']['name'][$i]);
  
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  
        //Handle other code here insert code
        $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','adpictures','A',CURRENT_TIMESTAMP)";
        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
     
      }
    }
  }
$totaladgif = count($adgif);
// Loop through each file
for( $i=0 ; $i < $totaladgif ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $adgiftemp[$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/adgif/" . $adgif[$i];
      $file_name = $adgif[$i];
  
  //print_r($_FILES['adyourlogo']['name'][$i]);
  
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  
        //Handle other code here insert code
        $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','adgif','A',CURRENT_TIMESTAMP)";
        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
     
      }
    }
  }
$totaladnationallogo = count($adnationallogo);
// Loop through each file
for( $i=0 ; $i < $totaladnationallogo ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $adnationallogotemp[$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/adnationallogo/" . $adnationallogo[$i];
      $file_name = $adnationallogo[$i];
  
  //print_r($_FILES['adyourlogo']['name'][$i]);
  
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  
        //Handle other code here insert code
        $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','adnationallogo','A',CURRENT_TIMESTAMP)";
        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
     
      }
    }
  }
$totaladvideos = count($advideos);
// Loop through each file
for( $i=0 ; $i < $totaladvideos ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $advideostemp[$i];
  
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "images/advideos/" . $advideos[$i];
      $file_name = $advideos[$i];
  
  //print_r($_FILES['adyourlogo']['name'][$i]);
  
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
  
        //Handle other code here insert code
        $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','advideos','A',CURRENT_TIMESTAMP)";
        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
     
      }
    }
  }
$totaladsampleads = count($adsampleads);



// Loop through each file
for( $i=0 ; $i < $totaladsampleads ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $adsampleadstemp[$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "images/adsampleads/" . $adsampleads[$i];
    $file_name = $adsampleads[$i];

//print_r($_FILES['adyourlogo']['name'][$i]);

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here insert code
      $sql1 = "INSERT INTO `tbl_info_files` (`id`,`product_id`,`invoice_id`,`file_name`,`file_path`,`add_file`,`status`,`updated_at`) VALUES (NULL,$product_id, $invoice_id,'$file_name','$newFilePath','adsampleads','A',CURRENT_TIMESTAMP)";
      $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
    
    }
  }
}



                    //upload end image



                header("Location: main.php?success=1");
            }
        
            return TRUE;
    }

    function getAllProduct($query)
    {
       // $query = "SELECT * FROM tbl_product";
        
        $sql = $query;
        

        $result = mysqli_query($this->db, $sql);

        $productResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $productResult[] = $row;
            }
        }
        return $productResult;

    }


    

    function getVariableTable()
    {
        $query = "SELECT * FROM variable_table";
        
        $sql = $query;
        

        $result = mysqli_query($this->db, $sql);

        $productResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $productResult[] = $row;
            }
        }
        return $productResult;

    }

    function getProductByCode($product_code)
    {
        $query = "SELECT * FROM tbl_product WHERE code='$product_code'";
        $result = mysqli_query($this->db, $query);

        $productResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $productResult[] = $row;
            }
        }
        return $productResult;
    }

    function getCartItemByProduct($product_id, $member_id)
    {
        $query = "SELECT * FROM tbl_cart WHERE product_id = $product_id AND member_id = $member_id";
        
        $result = mysqli_query($this->db, $query);

        $cartResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $cartResult[] = $row;
            }
        }
        return $cartResult;
    }


    function getMyorderlist($member_id)
    {
        $query = "SELECT * FROM ads_order_list WHERE user_id=$member_id";
        $result = mysqli_query($this->db, $query);

        $productResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $productResult[] = $row;
            }
        }
        return $productResult;
    }

    function getInvoiceDetails($invoice_id)
    {
        $query = "SELECT * FROM ads_order_list WHERE id=$invoice_id";
        $result = mysqli_query($this->db, $query);

        $productResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $productResult[] = $row;
            }
        }
        return $productResult;
    }

    function addToCart($product_id, $quantity, $member_id)
    {
        $query = "INSERT INTO tbl_cart (product_id,quantity,member_id) VALUES ($product_id, $quantity, $member_id)";
        
        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: main.php?success=1");
            }
        
            return TRUE;
    }


    function saveInvoice($member_id,$product_json,$payment_choose,$cartamount,$payamount){



        $invoice_id = "INV".time();
        $invoice_date = date('Y-m-d');



        $query = "INSERT INTO `ads_order_list` (`id`, `invoice_id`, `user_id`, `order_json`, `payment_mode`, `cartamount`, `payment_amount`, `invoice_date`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$invoice_id', '$member_id', '$product_json', '$payment_choose','$cartamount', '$payamount', '$invoice_date','A', '$invoice_date', CURRENT_TIMESTAMP)";
       
        
        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {

                
                    $query2 = "DELETE FROM tbl_cart WHERE member_id = $member_id";
        
                        mysqli_query($this->db, $query2) or die(mysqli_connect_errno() . "Data cannot inserted");
                return TRUE;
            }
        
            
    }


    

    function updateCartQuantity($quantity, $cart_id)
    {
        $query = "UPDATE tbl_cart SET  quantity = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM tbl_cart WHERE id = $cart_id";
        
        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: checkout.php?success=1");
            }
        
            return TRUE;
        
        return true;
    }

    function emptyCart($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }


}
?>
