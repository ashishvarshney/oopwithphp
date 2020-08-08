    <?php
	
	
    include_once 'classes/class.home.php';
    include_once 'classes/class.products.php';
	if($_SESSION['login']){
	}else{
		header("location:logout.php");
	}
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
    <!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Webukul Admin :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Webukul"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<?php
	include_once("includes/rightsidemenu.php");
?>
<!-- left Sidebar -->
<?php
	include_once("includes/leftside.php");
?>
<!-- Right Sidebar -->
<?php
	include_once("includes/rightside.php");
?>

<!-- Main Content -->

<?php
	include("pages/main.php");
?>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>


</html>