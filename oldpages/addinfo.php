<?php
include_once 'classes/class.login.php';
include_once 'classes/class.products.php';







if ($_SERVER["REQUEST_METHOD"] == "POST") {

	

  





  $adyourlogo = isset($_FILES['adyourlogo']['name'])?$_FILES['adyourlogo']['name']:'';
  $adpictures = isset($_FILES['adpictures']['name'])?$_FILES['adpictures']['name']:'';
  $adgif = isset($_FILES['adgif']['name'])?$_FILES['adgif']['name']:'';
  $adnationallogo = isset($_FILES['adnationallogo']['name'])?$_FILES['adnationallogo']['name']:'';
  $advideos = isset($_FILES['advideos']['name'])?$_FILES['advideos']['name']:'';
  $adsampleads = isset($_FILES['adsampleads']['name'])?$_FILES['adsampleads']['name']:'';

  $adyourlogotemp = isset($_FILES['adyourlogo']['tmp_name'])?$_FILES['adyourlogo']['tmp_name']:'';
  $adpicturestemp = isset($_FILES['adpictures']['tmp_name'])?$_FILES['adpictures']['tmp_name']:'';
  $adgiftemp = isset($_FILES['adgif']['tmp_name'])?$_FILES['adgif']['tmp_name']:'';
  $adnationallogotemp = isset($_FILES['adnationallogo']['tmp_name'])?$_FILES['adnationallogo']['tmp_name']:'';
  $advideostemp = isset($_FILES['advideos']['tmp_name'])?$_FILES['advideos']['tmp_name']:'';
  $adsampleadstemp = isset($_FILES['adsampleads']['tmp_name'])?$_FILES['adsampleads']['tmp_name']:'';
    //endyourlogo


    $ad_title = filter_var($_POST["ad_title"], FILTER_SANITIZE_STRING);
    $adslogan1 = isset($_POST["adslogan1"])?$_POST["adslogan1"]:'';
    $adslogan2 = isset($_POST["adslogan2"])?$_POST["adslogan2"]:'';
    $adslogan3 = isset($_POST["adslogan3"])?$_POST["adslogan3"]:'';
    $adslogan4 = isset($_POST["adslogan4"])?$_POST["adslogan4"]:'';


    $adnotes = isset($_POST["adnotes"])?$_POST["adnotes"]:'';

   
    $ad_type = isset($_POST["ad_type"])?$_POST["ad_type"]:'';

   
    $book_category = isset($_POST["book_category"])?$_POST["book_category"]:'';
    $app_category = isset($_POST["app_category"])?$_POST["app_category"]:'';
    $authorized_line = isset($_POST["authorized_line"])?$_POST["authorized_line"]:'';
    $ad_address = isset($_POST["ad_address"])?$_POST["ad_address"]:'';
    $ads_number1 = isset($_POST["ads_number1"])?$_POST["ads_number1"]:'';
    $ads_number2 = isset($_POST["ads_number2"])?$_POST["ads_number2"]:'';
    $ads_number3 = isset($_POST["ads_number3"])?$_POST["ads_number3"]:'';
    $ads_number4 = isset($_POST["ads_number4"])?$_POST["ads_number4"]:'';



  $member_id = isset($_SESSION["id"])?$_SESSION["id"]:0;

  $invoice_id = isset($_POST["invoice_id"])?$_POST["invoice_id"]:0;
  $product_id = isset($_POST["product_id"])?$_POST["product_id"]:0;


	
  $addInfo = new Products();
    $isInsert = $addInfo->addInfoDetails($adyourlogo,$adpictures,$adgif,$adnationallogo,$advideos,$adsampleads,$adyourlogotemp,$adpicturestemp,$adgiftemp,$adnationallogotemp,$advideostemp,$adsampleadstemp,$ad_title,$adslogan1,$adslogan2,$adslogan3,$adslogan4,$adnotes,$ad_type,$book_category,$app_category,$authorized_line,$ad_address,$ads_number1,$ads_number2,$ads_number3,$ads_number4,$member_id,$invoice_id,$product_id);
    if ($isInsert) {
		  header("Location: viewinvoice.php?id=".$invoice_id);
		
    }
    
}
?>